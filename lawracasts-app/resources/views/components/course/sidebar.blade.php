<div class="w-72 p-4 rounded-lg bg-gray-900 min-h-fit">
    @if($ismyown)
        <button @click="toggleAddNewVideo()" class="w-full">
            <div class="w-full bg-sky-700 hover:bg-sky-800 rounded-lg px-6 py-2">
                <p class="text-white text-lg font-bold text-center">+ New Video</p>
            </div>
        </button>
    @endif
    @foreach($details as $d)
        <x-course.sidebar-item :detail="$d" :selected="$selected"/>
    @endforeach
</div>
