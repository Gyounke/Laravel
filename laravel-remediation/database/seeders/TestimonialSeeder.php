<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'description' => '“just think about TemplateMo if you need free CSS templates for your website”', 
            'name' => 'Catherine Walk',
            'role' => 'CEO & Founder', 
        ]);

        DB::table('testimonials')->insert([
            'description' => '“think about our website first when you need free HTML templates for your website”', 
            'name' => 'David Martin',
            'role' => 'CTO of Tech Company', 
        ]);

        DB::table('testimonials')->insert([
            'description' => '“just think about our website wherever you need free templates for your website”', 
            'name' => 'Sophia Whity',
            'role' => 'CEO and Co-Founder', 
        ]);

        DB::table('testimonials')->insert([
            'description' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”', 
            'name' => 'Helen Shiny',
            'role' => 'Tech Officer', 
        ]);

        DB::table('testimonials')->insert([
            'description' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”', 
            'name' => 'George Soft',
            'role' => 'Gadget Reviewer', 
        ]);

        DB::table('testimonials')->insert([
            'description' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”', 
            'name' => 'Andrew Hall',
            'role' => 'Marketing Manager', 
        ]);

        DB::table('testimonials')->insert([
            'description' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”', 
            'name' => 'Maxi Power',
            'role' => 'Fashion Designer', 
        ]);

        DB::table('testimonials')->insert([
            'description' => '“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”', 
            'name' => 'Olivia Too',
            'role' => 'Creative Designer', 
        ]);
    }
}
