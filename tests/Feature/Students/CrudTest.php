<?php

namespace Tests\Feature;
// use App\Models\Students;
use Tests\Feature\user;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /*<-----------READ---------->*/
use RefreshDatabase;
    public function test_route_in_home()
    {
        $this ->withExceptionHandling();

        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home');
    }
}
