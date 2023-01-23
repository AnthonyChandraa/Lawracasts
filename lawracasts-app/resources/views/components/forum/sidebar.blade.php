<div class="w-56 max-w-xs flex flex-col gap-2">
    <button @click="{{!\Illuminate\Support\Facades\Auth::check() ? "toggleLogin()" : "toggleAddThread()"}}" class="">
        <div class="w-full bg-sky-700 hover:bg-sky-800 rounded-lg px-6 py-2">
            <p class="text-white text-lg font-bold text-center">+ New Thread</p>
        </div>
    </button>
    <x-forum.sidebar-button name="All Threads" path="{{route('index_forum')}}"/>
    <x-forum.sidebar-button name="Popular" path="{{route('index_popular')}}"/>
    <x-forum.sidebar-button name="No Replies Yet" path="{{route('index_no_replies')}}" />
</div>
