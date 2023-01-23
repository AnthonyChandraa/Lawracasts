@extends('template')

@section('title', 'Lawracasts | Profile')

@section('content')
    <div class="max-w-7xl mx-auto p-4 bg-gray-900 rounded-lg" style="width: 600px">
        <p class="text-center text-white font-semibold text-2xl mb-3">Profile</p>
        <x-profile.user-container />
        <x-profile.api-container :accessToken="$accessToken" />
    </div>
@endsection
