<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;

class ApiSecurityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Log API requests for security monitoring
        Log::info('API request', [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'url' => $request->url(),
            'method' => $request->method(),
            'user_id' => auth()->id(),
        ]);

        // Additional rate limiting for sensitive endpoints
        if ($this->isSensitiveEndpoint($request)) {
            $key = 'sensitive_api:' . $request->ip();
            
            if (RateLimiter::tooManyAttempts($key, 10)) { // 10 requests per minute
                Log::warning('Rate limit exceeded for sensitive endpoint', [
                    'ip' => $request->ip(),
                    'url' => $request->url(),
                ]);
                
                return response()->json([
                    'message' => 'Too many requests. Please try again later.'
                ], 429);
            }
            
            RateLimiter::hit($key, 60); // 1 minute window
        }

        return $next($request);
    }

    /**
     * Check if the endpoint is sensitive and requires additional protection.
     */
    private function isSensitiveEndpoint(Request $request): bool
    {
        $sensitiveRoutes = [
            'addToBasket',
            'personal.*',
            'user/*',
        ];

        foreach ($sensitiveRoutes as $pattern) {
            if ($request->routeIs($pattern)) {
                return true;
            }
        }

        return false;
    }
}