<div class="w-full mt-4 border-t-2">
    <div class="mt-2">
        <form action="{{route('generate_token')}}" method="post">
            @csrf
            <div class="flex flex-col">
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    API Token</label>
                <div class="flex">
                    <textarea id="content" name="content" rows="5" class="max-w-lg shadow-sm block w-full
                        focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 bg-gray-600 p-2
                        text-white
                        rounded-md" disabled>{{$accessToken}}</textarea>
                    <button type="submit" class="w-fit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                        focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
                         dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Generate</button>
                </div>
            </div>
        </form>
    </div>
</div>
