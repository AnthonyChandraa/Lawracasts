<?php

namespace Database\Seeders;

use App\Models\CourseDetail;
use App\Models\CourseHeader;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id1 = '2beec520-6cea-4ac5-b831-0ce8165a6fe3';
        $id2 = '95c00cf9-db72-4174-80ef-141c3496fcf3';
        $user1 = User::query()->where('last_name', '=', 'Member 1')->first();
        $user2 = User::query()->where('last_name', '=', 'Member 2')->first();
        $php = Topic::query()->where('name', '=', 'PHP')->first();
        $blade = Topic::query()->where('name', '=', 'Blade')->first();

        CourseHeader::query()->insert([
            'id' => $id1,
            'user_id' => $user1->id,
            'topic_id' => $php->id,
            'title' => 'Introduction To Laravel Framework',
            'description' => 'Created By Code Step By Step on Youtube.',
            'view_count' => 0,
            'created_at' => now()
        ]);

        CourseHeader::query()->insert([
            'id' => $id2,
            'user_id' => $user2->id,
            'topic_id' => $blade->id,
            'title' => 'Introduction To Blade',
            'description' => 'VBL Laravel @Software Laboratory Center',
            'view_count' => 0,
            'created_at' => now()
        ]);

        CourseDetail::query()->insert([
           'course_id' => $id1,
           'title' => 'What is Laravel ?',
            'video_url' => 'courses/l91.mp4',
            'is_published' => true,
            'created_at' => now()
        ]);

        CourseDetail::query()->insert([
            'course_id' => $id1,
            'title' => 'Important points before start with Laravel',
            'video_url' => 'courses/l92.mp4',
            'is_published' => true,
            'created_at' => now()
        ]);

        CourseDetail::query()->insert([
            'course_id' => $id1,
            'title' => 'What is MVC in laravel',
            'video_url' => 'courses/l93.mp4',
            'is_published' => true,
            'created_at' => now()
        ]);

        CourseDetail::query()->insert([
            'course_id' => $id1,
            'title' => 'Download PHP and MySql',
            'video_url' => 'courses/l94.mp4',
            'is_published' => false,
            'created_at' => now()
        ]);

        CourseDetail::query()->insert([
            'course_id' => $id1,
            'title' => 'Composer',
            'video_url' => 'courses/l95.mp4',
            'is_published' => false,
            'created_at' => now()
        ]);

        CourseDetail::query()->insert([
            'course_id' => $id2,
            'title' => 'Blade',
            'video_url' => 'courses/vbl1.mp4',
            'is_published' => true,
            'created_at' => now()
        ]);




    }
}
