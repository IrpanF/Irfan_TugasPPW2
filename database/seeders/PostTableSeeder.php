<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    private $_posts = [
        ["title" => "Lorem Ipsum", "description" => "Lorem Ipsum dolor sit amet1"],
        ["title" => "Lorem Ipsum2", "description" => "Lorem Ipsum dolor sit amet2"],
        ["title" => "Lorem Ipsum3", "description" => "Lorem Ipsum dolor sit amet3"],
        ["title" => "Lorem Ipsum4", "description" => "Lorem Ipsum dolor sit amet4"],
        ["title" => "Lorem Ipsum5", "description" => "Lorem Ipsum dolor sit amet5"],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        foreach ($this->_posts as $post) {
            $data[] = [
                'title' => $post['title'],
                'description' => $post['description']
            ];
        }
        DB::table('posts')->insert($data); 
    }
}
