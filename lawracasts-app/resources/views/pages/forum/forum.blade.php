@extends('template')

@section('title', 'Lawracasts | Forums')

@section('content')
    <div class="max-w-7xl mx-auto flex flex-col ">
        <div class="w-full flex gap-3">
            <x-forum.sidebar />
            <x-forum.content-pane :forums="$forums"/>
        </div>
    </div>
    <x-forum.new-thread-form :topics="$topics"/>
@endsection
