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

     /*<-----------UPDATE---------->*/
    /* @test */
    
    public function test_a_student_can_be_updated()
    {
        $this ->withExceptionHandling();

        $student = Student::factory()->create();
        $this->assertCount(1, Student::all());
        $this->patch(route('update', $student->id),['studentName' => 'New Name']);
        $this->assertEquals(Student::first()->studentName, 'New Name');
        $this->assertCount(1, Student::all());
    }

    public function test_you_can_see_edit_view()
    {
        $this ->withExceptionHandling();
        Student::factory()->create();
        $response = $this->get('/edit/1');
        $response->assertStatus(200)
            ->assertViewIs('edit');

    }

    /*<-----------CREATE---------->*/
    public function test_you_can_create_a_student()
    {
        $this ->withExceptionHandling();
        $this->assertCount(0, Student::all());
        Student::factory()->create();
        $this->assertCount(1, Student::all());
    }

    public function test_you_can_see_create_view()
    {
        $this ->withExceptionHandling();
        $response = $this->get('/create');
        $response->assertStatus(200)
            ->assertViewIs('create');
    }



}
