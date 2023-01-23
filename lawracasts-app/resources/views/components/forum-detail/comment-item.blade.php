<div class="flex justify-between align-middle">
    <div class="flex gap-2 mt-2.5">
        <img class="h-8 border p-1 rounded-lg bg-gray-800" src="{{asset('storage/'. $comment->user->image_url)}}" />
        <p class="text-white font-semibold">{{$comment->user->first_name}} {{$comment->user->last_name}}</p>
        <p class="text-sky-600">{{date_format($comment->created_at, 'd-M-Y h:m')}}</p>
    </div>
    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin)
        <div>
            <form action="{{route('delete_comment')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$comment->id}}">
                <button type="submit">
                    <div class="p-2 border-red-600 hover:bg-red-400 border-solid border rounded-lg">
                        <p class="text-red-700 text-sm font-semibold">Delete</p>
                    </div>
                </button>
            </form>
        </div>
    @endif
</div>
<div class="w-full p-2 bg-gray-700 rounded-lg">

    <p class="text-white text-lg">{{$comment->content}}</p>
</div>
