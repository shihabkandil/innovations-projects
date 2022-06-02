<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\ContentCreator;
use App\Providers\RouteServiceProvider;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ContentCreatorAuthTest extends TestCase
{
    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login/contentCreator');
        $response->assertStatus(200);
    }

    public function test_register_screen_can_be_rendered()
    {
        $response = $this->get('/register/contentCreator');

        $this->assertGuest();
        $response->assertStatus(200);
    }

    public function test_student_can_authenticate_using_the_login_screen()
    {
        $contentCreator = ContentCreator::factory()->create();

        $response = $this->post('/login/contentCreator', [
            'email' => $contentCreator->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated('contentCreator');
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_students_can_authenticate_using_register_screen()
    {
        Storage::fake('local');
        $file = UploadedFile::fake()->create('cv_default.pdf');   

        $response = $this->post('/register/contentCreator',[
            'name' => 'Test Name',
            'email' => 'TestEmail@test.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'cv'=> $file,
        ]);

        $this->assertAuthenticated('contentCreator');
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    
    public function test_student_can_logout_using_navbar(){
        $user = ContentCreator::factory()->create();
        $this->ActingAs($user,'contentCreator');

        $response = $this->get('/logout');

        $this->assertGuest();

        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_students_can_not_authenticate_with_invalid_password()
    {
        $student = ContentCreator::factory()->create();

        $this->post('/login', [
            'email' => $student->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
