@extends('template')

@section('title', 'Lawracasts | Detail Course')

@section('content')
    <div class="max-w-7xl mx-auto flex gap-2">
        <x-course.sidebar :details="$details" :selected="$selected" :ismyown="$ismyown"/>
        <x-course.video-pane :selected="$selected" :ismyown="$ismyown"/>
    </div>
    <x-course.add-new-video-form :id="$id"/>
@endsection
