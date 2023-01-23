<div class="w-full flex flex-col">
    <div class="flex gap-10 pl-4">
        <div class="w-24 flex justify-center">
            <img class="h-20 w-20 border rounded-full bg-gray-600" src="{{asset('storage/'
            .\Illuminate\Support\Facades\Auth::user()->image_url)}}" />
        </div>
        <div class="w-96">
            <form action="{{route('update_profile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 flex gap-1">
                    <div class="w-1/2">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            First Name</label>
                        <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300
                    text-gray-900
                    text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                    dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="John" required
                               value="{{\Illuminate\Support\Facades\Auth::user()->first_name}}">
                    </div>
                    <div class="w-1/2">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300
                    text-gray-900
                    text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                    dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Doe" required
                               value="{{\Illuminate\Support\Facades\Auth::user()->last_name}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required
                           value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                </div>
                <div class="w-full">
                    <label for="cover_photo" class="block text-sm font-medium text-white sm:mt-px sm:pt-2">
                        Profile Picture
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="rgb(255,255,255)"
                                     class="bi bi-camera-reels mx-auto h-12 w-12 text-gray-400" viewBox="0 0 16 16">
                                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/>
                                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
                                    <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file4" class="relative cursor-pointer bg-white rounded-md
                                        font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span class="p-2">Upload a file</span>
                                        <input id="file4" name="file4" type="file" class="sr-only">
                                    </label>

                                </div>
                                <p class="text-xs text-gray-500">
                                    JPG or PNG up to 5MB
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                        focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
                         dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
