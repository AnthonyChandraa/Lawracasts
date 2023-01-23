@extends('template')

@section('title', 'Lawracasts | All Courses')

@section('content')
    <p class="text-center text-white font-bold text-4xl mt-4">{{sizeof($courseHeaders)==0 ? "No" : "All"}} {{isset
    ($topicname) ?
    $topicname : ""}}
        Courses</p>
    <div class="max-w-7xl mx-auto flex justify-center">
        @if(\Illuminate\Support\Facades\Auth::check())
            <button @click="toggleAddCourseHeader()" class="">
                <div class="w-fit bg-sky-700 hover:bg-sky-800 rounded-lg px-6 py-2">
                    <p class="text-white text-lg font-bold text-center">+ New Course</p>
                </div>
            </button>
        @endif
    </div>
    <div class="max-w-7xl mx-auto grid grid-cols-2">
        @foreach($courseHeaders as $ch)
            <x-course.course-item :course="$ch"/>
        @endforeach
    </div>
    <x-course.add-course-header-form :topics="$topics"/>
@endsection
