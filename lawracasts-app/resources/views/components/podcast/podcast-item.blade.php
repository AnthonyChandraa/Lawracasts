<a href="{{route('index_play', $podcast->id)}}">
    <div class="p-4 bg-gray-900 hover:bg-gray-600 flex gap-5 rounded-lg {{isset($selected) &&
    $podcast->id==$selected->id
     ? "
    border-2" : ""}}"
         style="width: 700px;">
        <div class="rounded-full bg-gray-600 p-5 h-20 w-20 flex align-middle">
            <p class="text-2xl mx-auto my-auto text-white font-semibold">{{$podcast->episode}}</p>
        </div>
        <div>
            <p class="text-3xl text-white font-bold">{{$podcast->title}}</p>
            <p class="text-md text-gray-300 font-semibold">{{strlen($podcast->description) > 70 ? substr
            ($podcast->description, 0, 70)."..." : $podcast->description}}</p>
        </div>
    </div>
</a>
<div class="flex  mb-2">
@if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin && isset($selected) &&
    $podcast->id==$selected->id)

{{--    <form action="{{route('index_edit_podcast', $podcast->id)}}" method="post" class="w-1/2">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="id" value="{{$podcast->id}}">--}}
        <button @click="toggleEditPodcast()" class="w-1/2 z-20">
            <div class="p-2 border-yellow-600  hover:bg-yellow-400 border-solid border rounded-l-lg">
                <p class="text-yellow-700 text-sm font-semibold">Edit</p>
            </div>
        </button>
{{--    </form>--}}
        <form action="{{route('delete_podcast')}}" method="post" class="w-1/2">
            @csrf
            <input type="hidden" name="id" value="{{$podcast->id}}">
            <button type="submit" class="z-20 w-full">
                <div class="p-2 border-red-600 hover:bg-red-400 border-solid border rounded-r-lg">
                    <p class="text-red-700 text-sm font-semibold">Delete</p>
                </div>
            </button>
        </form>
@endif
</div>
