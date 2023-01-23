<div class="w-full flex flex-col gap-2 p-4 bg-gray-900 mt-2 rounded-lg">
    @if($comments->isEmpty())
        <p class="text-center text-gray-400">No Comment Yet.</p>
    @else
        @foreach($comments as $c)
            <x-forum-detail.comment-item :comment="$c" />
        @endforeach
    @endif
</div>
