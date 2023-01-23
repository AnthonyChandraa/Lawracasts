<div class="w-full mt-3 p-4 rounded-lg bg-gray-900">
    <form class="flex" action="{{route('add_comment')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$id}}"/>
        <input type="text" name="content" id="content" class="shadow-sm bg-gray-700 text-white focus:ring-indigo-500
    focus:border-indigo-500 block
    w-full sm:text-sm border-gray-300 rounded-md" placeholder="Reply this thread...">
        <button type="submit" class="p-3 border rounded-lg hover:bg-sky-900"><svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="16"
                                                                height="16"
                                            fill="rgb(255,255,255)"
                                 class="bi
        bi-send-fill" viewBox="0 0 16 16">
                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
            </svg></button>
    </form>
</div>
