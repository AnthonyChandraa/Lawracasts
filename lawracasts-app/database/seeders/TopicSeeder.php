<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::query()->insert([
            [
                'id' => Str::uuid(),
                'name' => 'CSS',
                'image_url' => 'topics/css-logo.svg',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Authentication',
                'image_url' => 'topics/authentication.svg',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Eloquent',
                'image_url' => 'topics/eloquent.svg',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Blade',
                'image_url' => 'topics/blade-logo.svg',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'MySQL',
                'image_url' => 'topics/mysql-logo.svg',
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'name' => 'PHP',
                'image_url' => 'topics/php-logo.svg',
                'created_at' => now()
            ],
        ]);
    }
}
