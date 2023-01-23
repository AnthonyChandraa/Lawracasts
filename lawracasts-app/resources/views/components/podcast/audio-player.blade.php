<div class="fixed w-96" style="right: 70%;top: 12%">
    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin)
        <button @click="toggleAddPodcast()" class="w-full mb-2" >
            <div class="w-full bg-sky-700 hover:bg-sky-800 rounded-lg px-6 py-2">
                <p class="text-white text-lg font-bold text-center">+ New Podcast</p>
            </div>
        </button>
    @endif
    <div class="rounded-lg p-4 bg-gray-900 w-full">
        <p class="text-sm text-sky-600 font-semibold">Episode {{isset($podcast) ? $podcast->episode : "?"}}</p>
        <p class="text-xl text-white font-bold">{{isset($podcast) ? $podcast->title : "No Podcast Selected"}}</p>
        <p class="text-white text-md mt-1">{{isset($podcast) ? $podcast->description : ""}}</p>
        <div class="flex justify-center mt-4">
            <audio src="{{isset($podcast) ? asset('storage/'.$podcast->audio_url) : ""}}" controls />
        </div>
    </div>
</div>
