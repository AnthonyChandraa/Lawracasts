<div class="" style="width: 800px">
    <form action="{{route('index_search_forum')}}" method="get" class="flex justify-end">
        <input type="text" name="search" id="search" class="shadow-sm focus:ring-sky-600 h-10 focus:border-indigo-500
        block w-1/3 bg-gray-700 text-white
         sm:text-sm border-gray-300 rounded-lg" placeholder="Begin Your Search...">
        <button type="submit" class="p-2 border rounded-lg hover:bg-sky-900">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(255,255,255)" class="bi bi-search"
                 viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </form>
    <div class="w-full">
        @foreach($forums as $f)
            <x-forum.forum-item title="{{$f->title}}"
                                content="{{$f->content}}"
                                name="{{$f->user->first_name}} {{ $f->user->last_name}}"
                                count="{{$f->count}}"
                                topicname="{{$f->topic->name}}"
                                path="{{route('index_detail', $f->id)}}"
                                viewcount="{{$f->view_count}}"
                                :id="$f->id"/>
        @endforeach
    </div>
    <div class="mt-2" id="paginator">
        {{$forums->links('')}}
    </div>

</div>
