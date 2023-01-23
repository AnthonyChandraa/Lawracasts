<div class="p-4 rounded-lg bg-gray-900" style="width: 1000px; height: 90vh">

    <div>
        <video src="{{isset($selected) ? asset('storage/'.$selected->video_url) : ""}}" controls class="w-full h-fit"/>
    </div>
    <div class="w-full flex justify-between p-2">
        <div>
            <p class="text-2xl text-white font-bold">{{isset($selected) ? $selected->title : "No Video Selected"}}</p>
            <p class="text-md text-gray-300 font-semibold"> {{isset($selected) ? "Uploaded on ".date_format
        ($selected->created_at, 'D, M
        d h:m
        ') :
        ""}}</p>
        </div>
       @if(isset($selected) && $ismyown)

            <div class="flex gap-2">
                <form action="{{route('toggle_video_status')}}" method="post" class="w-fit">
                    @csrf
                    <input type="hidden" name="id" value="{{$selected->course_id}}">
                    <input type="hidden" name="title" value="{{$selected->title}}">
                    <input type="hidden" name="video_url" value="{{$selected->video_url}}">
                    <button type="submit" class="z-20 w-full">
                        <div class="p-2 border-green-600 hover:bg-green-400 border-solid border rounded-lg">
                            <p class="text-green-700 text-sm font-semibold">{{$selected->is_published ? "Takedown" :
                        "Publish"}}</p>
                        </div>
                    </button>
                </form>
                <form action="{{route('delete_video')}}" method="post" class="w-fit">
                    @csrf
                    <input type="hidden" name="id" value="{{$selected->course_id}}">
                    <input type="hidden" name="title" value="{{$selected->title}}">
                    <input type="hidden" name="video_url" value="{{$selected->video_url}}">
                    <button type="submit" class="z-20 w-full">
                        <div class="p-2 border-red-600 hover:bg-red-400 border-solid border rounded-lg">
                            <p class="text-red-700 text-sm font-semibold">Delete</p>
                        </div>
                    </button>
                </form>
            </div>
        @endif
    </div>
</div>
