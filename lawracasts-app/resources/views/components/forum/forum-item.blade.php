<a href="{{$path}}" class="w-full">
    <div class="w-full flex flex-col p-4 bg-gray-900 hover:bg-sky-900 rounded-lg mt-3">
        <div class="flex flex-col gap-2">
            <div class="flex justify-between align-middle">
                <div>
                    <p class="text-white text-2xl font-semibold hover:underline">{{$title}}</p>
                </div>
                <div class="flex gap-2">
                    <div class="p-2 border-sky-600 border-solid border rounded-lg">
                        <p class="text-sky-600 text-sm font-semibold">{{$topicname}}</p>
                    </div>
                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin)
                        <form action="{{route('delete_forum')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            <button>
                                <div class="p-2 border-red-600 hover:bg-red-400 border-solid border rounded-lg">
                                    <p class="text-red-700 text-sm font-semibold">Delete</p>
                                </div>
                            </button>
                        </form>
                    @endif
                </div>

            </div>
            <p class="text-gray-400">{{$content}}</p>
            <div class="flex gap-3 align-middle">
                <div class="flex gap-1">
                    <p class="text-sm text-gray-300 font-semibold">Asked By</p>
                    <p class="text-sm text-sky-600 font-semibold">{{$name}}</p>
                </div>
                <div class="flex gap-1 align-middle">
                    <p class="text-sm text-gray-300 font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-fill" viewBox="0 0 16 16">
                            <path d="M14 0a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
                        </svg></p>
                    <p class="text-sm text-gray-300 font-semibold">{{$count}}</p>
                </div>
                <div class="flex gap-1">
                    <p class="text-sm text-gray-300 font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg></p>
                    <p class="text-sm text-gray-300 font-semibold">{{$viewcount}}</p>
                </div>
            </div>
        </div>
    </div>
</a>
