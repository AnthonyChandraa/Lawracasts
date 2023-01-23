<div class="w-full h-12 flex gap-5 align-middle">
    <div class="w-12 bg-gray-800 p-2 rounded-sm">
        <img src="{{asset('storage/'.$user->image_url)}}" />
    </div>
    <div class="flex flex-col align-middle h-full">
        <p class="text-xl text-white font-semibold">{{$user->first_name}} {{$user->last_name}}</p>

    </div>
</div>
