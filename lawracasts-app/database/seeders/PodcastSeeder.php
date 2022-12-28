<?php

namespace Database\Seeders;

use App\Models\Podcast;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PodcastSeeder extends Seeder
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


        Podcast::query()->insert([
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "Nobody Knows What the Hell They're Doing",
                'description' => "After over a decade of working in this industry, I've come to one undeniable truth: nobody knows what the hell they're doing. Let me explain...",
                'audio_url' => 'podcasts/1.mp3'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "In Over My Head",
                'description' => "I'd love to tell you about the most dangerous app I've ever built. To say I was in over my head...is the understatement of the century.",
                'audio_url' => 'podcasts/2.mp3'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "Go Out On Your Own",
                'description' => "Making the transition from employee to business owner is, to be frank, scary as hell. If you're not careful, you'll freeze.",
                'audio_url' => 'podcasts/3.mp3'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "Technical Debt vs. Mental Debt",
                'description' => "The concept of mental debt is something that developers never talk about. We're obsessed with pointing out technical debt, but isn't there value in worrying about our limited mental energy? There's only so much complexity we can take in.",
                'audio_url' => 'podcasts/4.mp3'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "Mint-Chocolate Burnout",
                'description' => "If we're being frank, in the last month, I've felt somewhat burned out. As developers, it happens to us all at some point or another. Let's talk about that for a bit.",
                'audio_url' => 'podcasts/5.mp3'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "90% of Devs Don't Test Their Code. Why?",
                'description' => "90% of developers don't test their code. Made up percentages aside, I think you'll find that this is fairly accurate, when you gather the entire development community. How come? With so much evangelism across the board, what's the reason behind this hesitation?",
                'audio_url' => 'podcasts/6.mp3'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "Blame Amy Schumer",
                'description' => "So my wife and I recently took a trip into Nashville to see Amy Schumer perform. And wouldn't you know it: the moment we arrived, Bugsnag began sending me error reports. No laptop, and two hours from home. ...Crap.",
                'audio_url' => 'podcasts/7.mp3'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "Taking it Too Far is a Rite of Passage",
                'description' => "There's no two ways about it: taking things too far is simply a rite of passage. Whether it's developers over-evangelizing microservices and command-oriented architecture, or guitar players forcing newly learned modes into their solos, we all take it too far...before finally pulling back.",
                'audio_url' => 'podcasts/8.mp3'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "Prioritize, Incentivize, Optimize",
                'description' => "Rather than big New Year's Resolutions, I prefer to make three simple lists. Prioritize the things you love to do, incentivize the things you need to do, and optimize the things you hate to do. It's cheesy as hell, but stay with me...",
                'audio_url' => 'podcasts/9.mp3'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => $adminID,
                'title' => "The 100% Goal is Wrong",
                'description' => "Particularly when building open source tools, I think it's important to remember that the 100% goal is wrong. Or, in other words, when you repeatedly make compromises to make everyone happy, it might just turn out that you've made no one happy.",
                'audio_url' => 'podcasts/10.mp3'
            ],
        ]);
    }
}
