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
        $auth = Topic::query()->select('id')->where('name', '=', 'Laravel Authentication')->first()->id;
        $eloquent = Topic::query()->select('id')->where('name', '=', 'Eloquent')->first()->id;
        $blade = Topic::query()->select('id')->where('name', '=', 'Blade')->first()->id;
        $mysql = Topic::query()->select('id')->where('name', '=', 'MySQL')->first()->id;


        Forum::query()->insert([
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $css,
                'content' => 'How To Center A Div ?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $css,
                'content' => 'How To Use Display Grid in CSS?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $css,
                'content' => 'How To Style Input type file?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $css,
                'content' => 'How To Make a Dropdown without JS?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $php,
                'content' => 'How To make a variable in PHP?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $php,
                'content' => 'How To make an associative array in PHP?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $php,
                'content' => 'How To convert integer to string in PHP?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $php,
                'content' => 'How To check the length of an array?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $auth,
                'content' => 'How To Implement Remember Me Feature?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $auth,
                'content' => 'How To Set Remember Me Duration in Laravel?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $auth,
                'content' => 'How To check whether an user has logged in or not?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $auth,
                'content' => 'What is inside the Laravel Auth Facade?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $eloquent,
                'content' => 'How To define Eloquent Relationship?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $eloquent,
                'content' => 'What is pivot table in Eloquent?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $eloquent,
                'content' => 'How to Query using Eloquent and Query Builder?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $blade,
                'content' => 'How to create Blade Components?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $blade,
                'content' => 'How to loop HTML element using blade?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $blade,
                'content' => 'How to change HTML title using blade?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $mysql,
                'content' => 'What is the naming convention of MySQL?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $mysql,
                'content' => 'What is the equivalent of boolean in MySQL?',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $memberID,
                'topic_id' => $mysql,
                'content' => 'Can we store image in MySQL?',
                'created_at' => now()
            ],
        ]);
    }
}
