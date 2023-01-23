<a href="{{$path}}">
    <div class="w-full {{\Illuminate\Support\Facades\Request::url() == $path ? "bg-gray-900" : "bg-gray-700"}}
    font-semibold
    hover:bg-sky-900 p-2.5 rounded-lg text-white">
        <p class="text-white {{\Illuminate\Support\Facades\Request::url() == $path ? "underline" : ""}}">{{$name}}</p>
    </div>
</a>
