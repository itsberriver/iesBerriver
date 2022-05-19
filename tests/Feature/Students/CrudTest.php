<?php

namespace Tests\Feature;

use Tests\Feature\user;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Student;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /*<-----------READ---------->*/
    /* @test */
use RefreshDatabase;
    public function test_route_in_home()
    {
        $this ->withExceptionHandling();

        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home');
    }

    /*<-----------DELETE---------->*/
    /* @test */
    
    public function test_a_student_can_be_deleted()
    {
        $this ->withExceptionHandling();

        $student = Student::factory()->create();
        $this->assertCount(1, Student::all());
        $response = $this->delete(route('delete', $student->id));
        $this->assertCount(0, Student::all());
    }
    
}
