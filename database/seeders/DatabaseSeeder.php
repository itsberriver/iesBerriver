<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;
use App\Models\Subject;
use App\Models\Teacher;






class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Student::factory(10)->create();
        User::factory()->create(['name'=>'jess','email'=>'jess@gmail.com']);
        Subject::factory(4)->create();
        Teacher::factory(10)->create();

        Teacher::factory(3)->has(Student::factory()->count(3))->create();
        Student::factory(3)->has(Subject::factory()->count(3))->create();
    }
}
