<div x-show="isAddCourseHeaderOpen"  x-transition.opacity x-cloak id="authentication-modal"
     tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full
      backdrop-blur-sm flex justify-center content-center">
    <div x-cloak class="relative mx-auto my-auto inset-x-0 w-full h-full max-w-md
    md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button @click="toggleAddCourseHeader()" type="button" class="absolute top-3 right-2.5 text-gray-400
            bg-transparent
            hover:bg-gray-200
            hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Course</h3>
                <form class="space-y-6" action="{{route('add_course_header')}}" method="post">
                    @csrf
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Course Name</label>
                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300
                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                         dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               placeholder="Enter Course Name..." required>
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Course Description</label>
                        <textarea id="description" name="description" rows="3" class="max-w-lg shadow-sm block w-full
                        focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 bg-gray-600 p-2
                        text-white
                        rounded-md" placeholder="Enter Course Description..."></textarea>
                    </div>
                    <div>
                        <label for="topic" class="block text-sm font-medium text-white mb-2">Topic</label>
                        <select id="topic" name="topic" class="block w-full pl-3 pr-10 py-2 bg-gray-600
                        text-white text-base
                        border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            @foreach($topics as $t)
                                <option value="{{$t->id}}">{{$t->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Course</button>
                </form>
            </div>
        </div>
    </div>
</div>
