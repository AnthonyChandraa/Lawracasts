@extends('template')

@section('title', 'Lawracasts | All Podcasts')

@section('content')
    <x-podcast.audio-player :podcast="$selected" />
    <div class="max-w-max flex gap-2 mx-auto" style="margin-left: 31%">
        <x-podcast.podcasts-container :podcasts="$podcasts" :selected="$selected" />
    </div>
    <x-podcast.edit-podcast-form :edit="$edit" />

@endsection
