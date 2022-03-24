<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');

        $this->assertGuest();
        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }


    public function test_register_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $this->assertGuest();
        $response->assertStatus(200);
    }


    public function test_users_can_authenticate_using_register_screen()
    {
        $response = $this->post('/register',[
            'name' => 'Test Name',
            'email' => 'TestEmail@test.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_can_logout_using_navbar(){
        $user = User::factory()->create();
        $this->ActingAs($user);

        $response = $this->post('/logout');

        $this->assertGuest();

        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
