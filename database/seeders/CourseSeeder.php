<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'PHP basics',
            'level'=>'beginner',
            'c_route'=>'php.basics',
            'type_id'=> 1
        ]);
        Course::create([
            'name' => 'PHP authentication',
            'level'=>'intermediete',
            'c_route'=>'php.auth',
            'type_id'=> 2
        ]);
        Course::create([
            'name' => 'PHP security',
            'level'=>'professional',
            'c_route'=>'php.security',
            'type_id'=> 3
        ]);
    }
}
