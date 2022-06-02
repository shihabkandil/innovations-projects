<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Providers\RouteServiceProvider;
use Tests\TestCase;

class PagesViewTest extends TestCase
{
    
    public function test_home_page_rendered()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function test_news_page_rendered()
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }

    public function test_articles_page_rendered()
    {
        $response = $this->get('/articles');

        $response->assertStatus(200);
    }

    public function test_about_page_rendered()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function test_contact_us_page_rendered()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
