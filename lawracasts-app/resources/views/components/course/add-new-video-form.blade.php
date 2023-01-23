<div x-show="isAddNewVideo"  x-transition.opacity x-cloak id="authentication-modal"
     tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full
      backdrop-blur-sm flex justify-center content-center">
    <div  x-cloak class="relative mx-auto my-auto inset-x-0 w-full h-full max-w-md
    md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button @click="toggleAddNewVideo()" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent
            hover:bg-gray-200
            hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Video</h3>
                <form class="space-y-6" action="{{route('add_video')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$id}}">
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Video Title</label>
                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300
                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                         dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               placeholder="Write the title here..." required>
                    </div>

                    <div class=" w-full sm:gap-4 sm:items-start sm:border-t sm:border-gray-200
                    sm:pt-5">
                        <label for="cover_photo" class="block text-sm font-medium text-white sm:mt-px sm:pt-2">
                            Video File
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-camera-reels mx-auto h-12 w-12 text-gray-400" viewBox="0 0 16 16">
                                        <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/>
                                        <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7zm6 8.73V7.27l-3.5 1.555v4.35l3.5 1.556zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1z"/>
                                        <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file3" class="relative cursor-pointer bg-white rounded-md
                                        font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span class="p-2">Upload a file</span>
                                            <input id="file3" name="file3" type="file" class="sr-only">
                                        </label>

                                    </div>
                                    <p class="text-xs text-gray-500">
                                        MP4 up to 50MB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Podcast</button>
                </form>
            </div>
        </div>
    </div>
</div>
