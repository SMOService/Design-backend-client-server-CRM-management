<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class SecurityTest extends TestCase
{
    use RefreshDatabase;

    public function test_cors_headers_are_properly_configured()
    {
        $response = $this->options('/');
        
        // Verify CORS headers are not wildcard
        $this->assertNotEquals('*', $response->headers->get('Access-Control-Allow-Origin'));
    }

    public function test_cart_requires_proper_validation()
    {
        $response = $this->post('/addToBasket', [
            'product_id' => 'invalid',
            'count' => -1,
        ]);

        $response->assertSessionHasErrors(['product_id', 'count']);
    }

    public function test_cart_accepts_valid_data()
    {
        $response = $this->post('/addToBasket', [
            'product_id' => 1,
            'count' => 2,
        ]);

        $response->assertRedirect('/cart');
        $response->assertSessionHas('success');
    }

    public function test_authenticated_routes_require_authentication()
    {
        $response = $this->get('/personal');
        
        $response->assertRedirect('/login');
    }

    public function test_api_user_endpoint_returns_limited_data()
    {
        $user = User::factory()->create([
            'server_user_token' => 'secret-token',
        ]);

        $response = $this->actingAs($user, 'sanctum')->get('/api/user');

        $response->assertSuccessful();
        $response->assertJsonMissing(['server_user_token']);
        $response->assertJsonStructure([
            'id',
            'name', 
            'email',
            'email_verified_at'
        ]);
    }

    public function test_sensitive_user_data_is_hidden()
    {
        $user = User::factory()->create([
            'server_user_token' => 'secret-token',
        ]);

        $userArray = $user->toArray();
        
        $this->assertArrayNotHasKey('server_user_token', $userArray);
        $this->assertArrayNotHasKey('password', $userArray);
        $this->assertArrayNotHasKey('remember_token', $userArray);
    }

    public function test_session_encryption_is_enabled()
    {
        $this->assertTrue(config('session.encrypt'));
    }

    public function test_session_cookies_are_secure()
    {
        $this->assertTrue(config('session.secure'));
        $this->assertEquals('strict', config('session.same_site'));
        $this->assertTrue(config('session.http_only'));
    }
}