<div class="p-4 mt-2 mb-2" style="min-height: 80vh">
    @foreach($podcasts as $p)
        <x-podcast.podcast-item :podcast="$p" :selected="$selected" />
    @endforeach

</div>
