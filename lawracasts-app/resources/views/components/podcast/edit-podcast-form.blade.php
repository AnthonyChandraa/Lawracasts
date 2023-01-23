<div x-show="isEditPodcastOpen" x-transition.opacity x-cloak id="authentication-modal"
     tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full
      backdrop-blur-sm flex justify-center content-center">
    <div  x-cloak class="relative mx-auto my-auto inset-x-0 w-full h-full max-w-md
    md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button @click="toggleEditPodcast()" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent
            hover:bg-gray-200
            hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Podcast</h3>
                <form class="space-y-6" action="{{route('edit_podcast')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{isset($edit) ? $edit->id : ""}}" >
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Podcast Title</label>
                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300
                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                         dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               placeholder="Write the title here..." required value="{{isset($edit) ? $edit->title : ""
                               }}">
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Podcast Description</label>
                        <textarea id="description" name="description" rows="3" class="max-w-lg shadow-sm block w-full
                        focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 bg-gray-600 p-2
                        text-white
                        rounded-md" placeholder="Enter Podcast Description...">{{isset($edit) ?
                        $edit->description : ""}}</textarea>
                    </div>
                    <div class=" w-full sm:gap-4 sm:items-start sm:border-t sm:border-gray-200
                    sm:pt-5">
                        <label for="cover_photo" class="block text-sm font-medium text-white sm:mt-px sm:pt-2">
                            Audio File
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400 bi bi-soundwave" xmlns="http://www.w3.org/2000/svg"
                                         width="16" height="16"
                                         fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file2" class="relative cursor-pointer bg-white rounded-md
                                        font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span class="p-2">Upload a file</span>
                                            <input id="file2" name="file2" type="file" class="sr-only">
                                        </label>

                                    </div>
                                    <p class="text-xs text-gray-500">
                                        MP3 up to 10MB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Podcast</button>
                </form>
            </div>
        </div>
    </div>
</div>
