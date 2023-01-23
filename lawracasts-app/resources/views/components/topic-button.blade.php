<a href="{{route('index_course_topic', $id)}}" id="topic-btn" class="bg-gray-700 hover:bg-gray-900 rounded-2xl flex
align-middle
 shadow">
    <div class="flex p-2 gap-1 w-72 h-20">
        <div class="flex flex-col w-1/2 h-full p-2.5 justify-center align-middle object-center object-contain">
            <img src="{{asset('storage/'.$image_url)}}" class="" alt="" />
        </div>
        <div class="h-full w-full flex flex-col justify-center">
            <p class="text-base font-semibold text-white">{{$name}}</p>
        </div>
    </div>
</a>
