<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([SchoolSeeder::class]);
         $this->call([TypeSeeder::class]);
         $this->call([CourseSeeder::class]);
         \App\Models\School::factory(1)->create();
        \App\Models\Course::factory(3);
         \App\Models\User::factory(30)->create();
         
         
         \App\Models\User::factory()->create([
             'name' => 'Test',
             'email' => 'test@example.com',
         ]);

         \App\Models\CourseUserTable::factory(3)->create();
         
    }
}
