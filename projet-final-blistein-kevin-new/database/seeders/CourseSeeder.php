<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'professor' => 'Ernest Byrd',
            'image' => 'teacher-1.jpg',
            'price' => '$19.99',
            'course_name' => 'How to become a Powerful Speaker',
            'course_description' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.',            
        ]);

        DB::table('courses')->insert([
            'professor' => 'Bob Dylan',
            'image' => 'teacher-2.jpg',
            'price' => '$15.69',
            'course_name' => 'The times they are changing',
            'course_description' => 'How to realise that the times are diffrent from a certain past. Lol idk',
        ]);

        DB::table('courses')->insert([
            'professor' => 'Hannibal Barca',
            'image' => 'teacher-12.jpg',
            'price' => '$19.99',
            'course_name' => 'The times they are changing',
            'course_description' => 'How to realise that the times are diffrent from a certain past. Lol idk',
        ]);

        DB::table('courses')->insert([
            'professor' => 'Seikou D.',
            'image' => 'teacher-4.jpg',
            'price' => '$19.99',
            'course_name' => 'The times they are changing',
            'course_description' => 'How to realise that the times are diffrent from a certain past. Lol idk',
        ]);

        DB::table('courses')->insert([
            'professor' => 'Goku San',
            'image' => 'teacher-5.jpg',
            'price' => '$19.99',
            'course_name' => 'The times they are changing',
            'course_description' => 'How to realise that the times are diffrent from a certain past. Lol idk',
        ]);

        DB::table('courses')->insert([
            'professor' => 'Kakashi',
            'image' => 'teacher-9.jpg',
            'price' => '$19.99',
            'course_name' => 'The times they are changing',
            'course_description' => 'How to realise that the times are diffrent from a certain past. Lol idk',
        ]);

        DB::table('courses')->insert([
            'professor' => 'Friedrich Nietzsche',
            'image' => 'teacher-7.jpg',
            'price' => '$19.99',
            'course_name' => 'The times they are changing',
            'course_description' => 'How to realise that the times are diffrent from a certain past. Lol idk',
        ]);

        DB::table('courses')->insert([
            'professor' => 'Salomon W.',
            'image' => 'teacher-8.jpg',
            'price' => '$19.99',
            'course_name' => 'The times they are changing',
            'course_description' => 'How to realise that the times are diffrent from a certain past. Lol idk',
        ]);

        DB::table('courses')->insert([
            'professor' => 'Salto S.',
            'image' => 'teacher-9.jpg',
            'price' => '$19.99',
            'course_name' => 'The times they are changing',
            'course_description' => 'How to realise that the times are diffrent from a certain past. Lol idk',
        ]);

        DB::table('courses')->insert([
            'professor' => 'Hans Flamewherfer',
            'image' => 'teacher-10.jpg',
            'price' => '$19.99',
            'course_name' => 'Fiye fiye fiye',
            'course_description' => 'How to make it bun dem',
        ]);
    }
}