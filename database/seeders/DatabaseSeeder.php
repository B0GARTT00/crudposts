<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Truncate the users table
        DB::table('users')->truncate();

        // Create a test user with a unique email
        User::create([
            'name' => 'Test User',
            'email' => 'test' . uniqid() . '@example.com',
            'password' => bcrypt('password'), // Ensure you set a password
        ]);

        // Create 10 sample students
        $students = Student::factory(10)->create();

        // Create another 10 sample students
        $moreStudents = Student::factory(10)->create();

        // Optionally, you can dump the created students to see them
        dd($students, $moreStudents); // This will dump the created students and stop execution
    }
}
