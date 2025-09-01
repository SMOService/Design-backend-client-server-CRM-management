<?php

namespace App\Services\Server;

use App\Models\User;
use App\Services\Server\Dto\Requests\BalanceOrderRequestDto;
use App\Services\Server\Dto\Requests\CreateOrderRequestDto;
use App\Services\Server\Dto\Requests\ListOrdersRequestDto;
use App\Services\Server\Dto\Requests\RegisterUserRequestDto;
use App\Services\Server\Dto\Responses\BalanceOrderResponseDto;
use App\Services\Server\Dto\Responses\CreateOrderResponseDto;
use App\Services\Server\Dto\Responses\RegisterUserResponseDto;
use App\Services\Server\Dto\Responses\UserInfoResponseDto;
use App\Services\Server\Exceptions\ErrorResponseException;
use App\Services\Server\Exceptions\UnauthenticatedResponseException;
use App\Services\Server\Exceptions\UnexpectedResponseException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class BaseApiService
{

    protected Client $client;
    protected array  $headers = [];
    private ?User    $user    = null;

    public function __construct()
    {
        $baseUri = config('app.server_api_url');
        
        // Validate API URL is configured
        if (empty($baseUri)) {
            throw new \InvalidArgumentException('SERVER_API_URL must be configured');
        }
        
        // Ensure HTTPS in production
        if (app()->environment('production') && !str_starts_with($baseUri, 'https://')) {
            throw new \InvalidArgumentException('SERVER_API_URL must use HTTPS in production');
        }
        
        $this->client = new Client([
            'base_uri' => $baseUri,
            'timeout' => 30,
            'verify' => config('app.server_api_verify_ssl', true),
            'headers' => [
                'User-Agent' => 'CRM-Client/1.0',
            ],
        ]);
    }

    /**
     * Get pages with caching for better performance.
     */
    public function pages($pageSlug = null)
    {
        $cacheKey = 'api_pages_' . ($pageSlug ?: 'all');
        
        return Cache::remember($cacheKey, 300, function () use ($pageSlug) { // 5 minutes cache
            $url = 'pages';
            if ($pageSlug ?? null) {
                $url = 'pages/'.$pageSlug;
            }

            $response = $this->request(url: $url, method: 'GET');

            $pages = new Collection();
            foreach ($response['data'] as $page) {
                $pages->add($page);
            }

            return $pages;
        });
    }

    /**
     * Get categories with caching for better performance.
     *
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     */
    public function categories($categoryId = null): Collection
    {
        $cacheKey = 'api_categories_' . ($categoryId ?: 'all');
        
        return Cache::remember($cacheKey, 600, function () use ($categoryId) { // 10 minutes cache
            $url = 'categories';

            if ($categoryId ?? null) {
                $url = 'categories/'.$categoryId;
            }

            $response = $this->request(url: $url, method: 'GET');

            $categories = new Collection();
            foreach ($response['data'] as $category) {
                $categories->add($category);
            }

            return $categories;
        });
    }

    /**
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     */
    public function products($categoryId = null, $productId = null): Collection
    {

        $url = 'products';
        if ($productId ?? null) {
            $url = 'products/'.$productId;
        }
        $response = $this->request(url: $url, data:['category_id'=>$categoryId], method: 'GET');

        $products = new Collection();
        foreach ($response['data'] as $product) {
            $products->add($product);
        }

        return $products;
    }

    public function paymentSystems($paymentSystem = null): Collection
    {
        $url = 'payment_systems';
        if ($paymentSystem ?? null) {
            $url = 'payment_systems/'.$paymentSystem;
        }
        $response = $this->request(url: $url, method: 'GET');

        $paymentSystems = new Collection();
        foreach ($response['data'] as $paymentSystem) {
            $paymentSystems->add($paymentSystem);
        }

        return $paymentSystems;
    }

    public function orders(ListOrdersRequestDto $dto)
    {
        $this->setUser($dto->user);

        if ($this->user === null) {
            throw new UnauthenticatedResponseException();
        }

        $url = 'orders';

        $response = $this->request(url: $url, data: $dto->toArray());

        $orders = new Collection();
        foreach ($response['data'] as $order) {
            $orders->add($order);
        }

        return $orders;
    }

    /**
     * @throws UnknownProperties
     * @throws UnexpectedResponseException
     * @throws ErrorResponseException
     */
    public function createOrder(CreateOrderRequestDto $dto): CreateOrderResponseDto
    {
        $this->setUser($dto->user);

        if ($this->user === null) {
            throw new UnauthenticatedResponseException();
        }

        $response = $this->request('orders/create', $dto->toArray());

        return (new CreateOrderResponseDto($response['data']));
    }

    /**
     * @throws UnknownProperties
     * @throws UnexpectedResponseException
     * @throws ErrorResponseException
     */
    public function createBalanceOrder(BalanceOrderRequestDto $dto): BalanceOrderResponseDto
    {
        $this->setUser($dto->user);

        if ($this->user === null) {
            throw new UnauthenticatedResponseException();
        }

        $response = $this->request('orders/create/balance', $dto->toArray());

        return (new BalanceOrderResponseDto($response['data']));
    }

    /**
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function registerUser(RegisterUserRequestDto $dto): RegisterUserResponseDto
    {
        $response = $this->request('register', $dto->toArray());

        return (new RegisterUserResponseDto($response));
    }

    /**
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     * @throws \App\Services\Server\Exceptions\UnexpectedResponseException
     * @throws \App\Services\Server\Exceptions\ErrorResponseException
     * @throws \App\Services\Server\Exceptions\UnauthenticatedResponseException
     */
    public function me(): UserInfoResponseDto
    {

        if ($this->user === null) {
            throw new UnauthenticatedResponseException();
        }

        $response = $this->request(url: 'me', method: 'GET');

        return (new UserInfoResponseDto($response['data']));
    }


    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): BaseApiService
    {
        $this->user = $user;

        return $this;
    }


    private function request($url, $data = [], $method = 'POST')
    {
        // Validate API key is configured
        $apiKey = config('app.server_api_key');
        if (empty($apiKey)) {
            throw new \InvalidArgumentException('SERVER_API_KEY must be configured');
        }

        $headers = array_merge([
            'X-Client-Token' => $apiKey,
            'Content-Type'   => 'application/json',
            'Accept'         => 'application/json',
        ], $this->headers);

        if ($this->user ?? null) {
            $headers['Authorization'] = 'Bearer ' . $this->user->server_user_token;
        }

        $options = [
            'headers' => $headers,
        ];

        if (!empty($data)) {
            switch ($method) {
                case 'GET':
                    $options['query'] = $data;
                    break;
                default:
                    $options['json'] = $data;
            }
        }

        try {
            $response = $this->client->request($method, $url, $options);
        } catch (ClientException $e) {
            $statusCode = $e->getCode();
            $responseBody = $e->getResponse()->getBody()->getContents();
            
            // Log security-relevant errors
            if (in_array($statusCode, [401, 403])) {
                \Log::warning('API authentication/authorization error', [
                    'url' => $url,
                    'status' => $statusCode,
                    'user_id' => $this->user?->id,
                ]);
            }
            
            if ($statusCode === 404) {
                abort(404);
            }
            
            $jsonBody = json_decode($responseBody, true);
            $message = $jsonBody['message'] ?? 'API request failed';
            
            // Don't expose sensitive information in production
            if (app()->environment('production')) {
                $message = 'An error occurred while processing your request';
            }
            
            throw new ErrorResponseException($message, $e);
        } catch (GuzzleException $e) {
            \Log::error('API call error', [
                'url' => $url,
                'error' => $e->getMessage(),
                'user_id' => $this->user?->id,
            ]);
            
            if ($e->getCode() === 500) {
                abort(500, 'Server call error');
            }
            
            $message = app()->environment('production') 
                ? 'Service temporarily unavailable' 
                : 'Error API_CALL ' . $e->getMessage();
                
            throw new ErrorResponseException($message, $e);
        }

        $jsonBody = json_decode($response->getBody()->getContents(), true);

        if (!is_array($jsonBody)) {
            throw new UnexpectedResponseException('Invalid response format');
        }

        return $jsonBody;
    }
}
