<?php

namespace Database\Seeders;

use App\Models\Forum;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminID = User::query()->select('id')->where('is_admin', '=', true)->first()->id;
        $memberID = User::query()->select('id')->where('is_admin', '=', false)->first()->id;

        $css = Topic::query()->select('id')->where('name', '=', 'CSS')->first()->id;
        $php = Topic::query()->select('id')->where('name', '=', 'PHP')->first()->id;
        $auth = Topic::query()->select('id')->where('name', '=', 'Authentication')->first()->id;
        $eloquent = Topic::query()->select('id')->where('name', '=', 'Eloquent')->first()->id;
        $blade = Topic::query()->select('id')->where('name', '=', 'Blade')->first()->id;
        $mysql = Topic::query()->select('id')->where('name', '=', 'MySQL')->first()->id;


        Forum::query()->insert([
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $css,
                'title' => 'How To Center A Div ?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $css,
                'title' => 'How To Use Display Grid in CSS?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $css,
                'title' => 'How To Style Input type file?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $css,
                'title' => 'How To Make a Dropdown without JS?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $php,
                'title' => 'How To make a variable in PHP?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $php,
                'title' => 'How To make an associative array in PHP?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $php,
                'title' => 'How To convert integer to string in PHP?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $php,
                'title' => 'How To check the length of an array?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $auth,
                'title' => 'How To Implement Remember Me Feature?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $auth,
                'title' => 'How To Set Remember Me Duration in Laravel?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $auth,
                'title' => 'How To check whether an user has logged in or not?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $auth,
                'title' => 'What is inside the Laravel Auth Facade?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $eloquent,
                'title' => 'How To define Eloquent Relationship?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $eloquent,
                'title' => 'What is pivot table in Eloquent?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $eloquent,
                'title' => 'How to Query using Eloquent and Query Builder?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $blade,
                'title' => 'How to create Blade Components?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $blade,
                'title' => 'How to loop HTML element using blade?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $blade,
                'title' => 'How to change HTML title using blade?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $mysql,
                'title' => 'What is the naming convention of MySQL?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $mysql,
                'title' => 'What is the equivalent of boolean in MySQL?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $mysql,
                'title' => 'Can we store image in MySQL?',
                'content' => 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum',
                'created_at' => now()
            ],
        ]);
    }
}
