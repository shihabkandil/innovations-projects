<?php

namespace Tests\Feature;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Providers\RouteServiceProvider;
use Tests\TestCase;

class StudentAuthTest extends TestCase
{

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_register_screen_can_be_rendered()
    {
        $response = $this->get('/register/student');

        $this->assertGuest();
        $response->assertStatus(200);
    }

    public function test_student_can_authenticate_using_the_login_screen()
    {
        $student = Student::factory()->create();

        $response = $this->post('/login', [
            'email' => $student->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated('student');
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_students_can_authenticate_using_register_screen()
    {
        $response = $this->post('/register/student',[
            'name' => 'Test Name',
            'email' => 'TestEmail@test.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated('student');
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    
    public function test_student_can_logout_using_navbar(){
        $user = Student::factory()->create();
        $this->ActingAs($user,'student');

        $response = $this->get('/logout');

        $this->assertGuest();

        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_students_can_not_authenticate_with_invalid_password()
    {
        $student = Student::factory()->create();

        $this->post('/login', [
            'email' => $student->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
