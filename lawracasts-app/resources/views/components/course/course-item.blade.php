<a href="{{route('index_course_detail', $course->id)}}">
    <div class="p-6 bg-sky-600 h-fit hover:bg-sky-700 rounded-lg m-2" style="width: 35vw">
        <div class="w-full flex gap-2 justify-between">
            <p class="text-white text-2xl hover:underline font-semibold">{{$course->title}}</p>
            <div class="flex gap-1">
                <div class="p-2 border-white border-solid border-2 h-fit rounded-lg">
                    <p class="text-white text-sm font-semibold">{{$course->topic->name}}</p>
                </div>
                @if($course->ismyown)
                    <form action="{{route('delete_course')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$course->id}}">
                        <button type="submit" class="z-20">
                            <div class="p-2 border-red-400 hover:bg-red-300 border-solid border-2 rounded-lg ">
                                <p class="text-red-400 text-sm font-semibold">Delete</p>
                            </div>
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <p class="mt-2 text-md text-gray-300 font-semibold">{{$course->description}}</p>

        <div class="flex mt-4 gap-6">
            <div class="flex flex-col">
                <p class="text-gray-300 font-semibold text-sm ">Published By</p>
                <p class="text-white font-semibold">{{$course->user->first_name}} {{$course->user->last_name}}</p>
            </div>
            <div class="flex flex-col">
                <p class="text-gray-300 font-semibold text-sm ">Published On</p>
                <p class="text-white font-semibold">{{date_format($course->created_at, 'D, M d h:m')}}</p>
            </div>
            <div class="flex flex-col">
                <p class="text-gray-300 font-semibold text-sm ">Total Video(s)</p>
                <p class="text-white font-semibold">{{$course->videocount}} video(s)</p>
            </div>
            <div class="flex flex-col">
                <p class="text-gray-300 font-semibold text-sm">Views</p>
                <p class="text-white font-semibold">{{$course->view_count}}</p>
            </div>
        </div>
    </div>
</a>
