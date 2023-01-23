@extends('template')

@section('title', 'Lawracasts | All Topics')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="w-full flex flex-col justify-center gap-4 mt-14">
            <p class="text-4xl font-semibold text-white text-center">Explore By Topic</p>
            <p class="text-base text-white text-center">All Lawracasts series are categorized into various //topics.
                This should
                provide <br> you with an alternate way to decide what to learn next, whether it be a <br> particular
                framework, language, or tool.</p>
        </div>
        <div class="w-full grid grid-cols-6 mt-6 gap-2.5">
            @foreach($topics as $t)
                <x-TopicButton :name="$t->name" :imageUrl="$t->image_url" :id="$t->id" />
            @endforeach

        </div>

    </div>
@endsection
