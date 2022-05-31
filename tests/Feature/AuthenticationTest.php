<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Mockery;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_facebook_callback()
    {
        $user = Mockery::mock('Laravel\Socialite\Two\User');        
        $user->shouldReceive('getId') 
            ->andReturn(1234567890)
            ->shouldReceive('getEmail')
            ->andReturn(Str::random(10).'@test.com')
            ->shouldReceive('getName')
            ->andReturn('testname');

        $provider = Mockery::mock('Laravel\Socialite\Contracts\Provider');
        $provider->shouldReceive('user')->andReturn($user);

        Socialite::shouldReceive('driver')->with('facebook')->andReturn($provider);
    }
}
