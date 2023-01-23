@extends('template')

@section('title', 'Lawracasts | Forums')

@section('content')
    <div class="max-w-7xl mx-auto flex flex-col justify-center align-middle">
        <x-forum-detail.content-container :forum="$forum"/>
        @if(\Illuminate\Support\Facades\Auth::check())
            <x-forum-detail.add-comment-container :id="$forum->id" />
        @endif
        <x-forum-detail.comments-container :comments="$comments" />
    </div>
@endsection
