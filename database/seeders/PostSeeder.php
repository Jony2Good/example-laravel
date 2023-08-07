<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         PostFactory::factory()->create([
             'title' => 'War and Peace',
             'content' => 'Military drama with big love story',
         ]);
    }
}