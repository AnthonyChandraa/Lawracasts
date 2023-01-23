<div class="w-full rounded-lg bg-gray-700 pl-3 pb-4 pt-4 pr-3 mt-2 mb-2 flex flex-col gap-2 justify-between
{{isset($selected) && $selected->course_id == $detail->course_id && $selected->title == $detail->title &&
$selected->video_url == $detail->video_url ?
"border-2" : ""}}">
    <div class="flex justify-between align-middle">
        <div class="pt-1">
            <p class="text-md text-gray-300 font-semibold">Episode {{$detail->episode}}</p>
        </div>
        <div>
            <form action="{{route('index_play_course')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$detail->course_id}}">
                <input type="hidden" name="title" value="{{$detail->title}}">
                <input type="hidden" name="video_url" value="{{$detail->video_url}}">
                <button class="" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(255,255,255)" class="bi
        bi-play-fill hover:bg-gray-400 rounded-lg" viewBox="0 0 16 16">
                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
    <p class="text-sm font-semibold text-white">{{$detail->title}}</p>
</div>
