<div style="width: 800px" class="bg-gray-900 p-4 rounded-lg flex flex-col">

    <x-forum-detail.user-banner-container :user="$forum->user"/>
    <div class="w-full flex flex-col gap-2.5 bg-gray-700 rounded-md mt-4 p-2">
        <p class="text-xl text-white font-semibold">{{$forum->title}}</p>
    </div>
    <div class="w-full mt-2 p-2">
        <p class="text-gray-200">{{$forum->content}}</p>
    </div>
</div>
