<?php

namespace Tests\Unit;

use Tests\TestCase;

class ConfigurationSecurityTest extends TestCase
{
    public function test_app_debug_is_disabled_by_default()
    {
        // In .env.example, APP_DEBUG should be false
        $envExample = file_get_contents(base_path('.env.example'));
        $this->assertStringContains('APP_DEBUG=false', $envExample);
    }

    public function test_cors_configuration_is_secure()
    {
        $corsConfig = config('cors');
        
        // Should not allow all origins
        $this->assertNotEquals(['*'], $corsConfig['allowed_origins']);
        
        // Should not allow all headers
        $this->assertNotEquals(['*'], $corsConfig['allowed_headers']);
        
        // Should specify allowed methods explicitly
        $this->assertNotEquals(['*'], $corsConfig['allowed_methods']);
    }

    public function test_session_security_configuration()
    {
        $this->assertTrue(config('session.encrypt'), 'Session encryption should be enabled');
        $this->assertTrue(config('session.http_only'), 'Sessions should be HTTP only');
        $this->assertEquals('strict', config('session.same_site'), 'SameSite should be strict');
        $this->assertTrue(config('session.secure'), 'Session cookies should be secure by default');
    }

    public function test_fortify_features_are_properly_configured()
    {
        $features = config('fortify.features');
        
        // Email verification should be enabled
        $this->assertContains('email-verification', $features);
        
        // Two-factor authentication should be enabled
        $this->assertArrayHasKey('two-factor-authentication', $features);
    }

    public function test_rate_limiting_is_configured()
    {
        $limiters = config('fortify.limiters');
        
        $this->assertArrayHasKey('login', $limiters);
        $this->assertArrayHasKey('two-factor', $limiters);
    }

    public function test_api_middleware_includes_throttling()
    {
        $apiMiddleware = config('app.api.middleware', []);
        
        // Verify API routes have throttling
        $this->assertContains('throttle:api', $apiMiddleware);
    }
}