<div x-show="isRegisterOpen" x-cloak x-transition.opacity id="authentication-modal" tabindex="-1" aria-hidden="true"
     class="fixed top-0 left-0 right-0 z-50 w-full p-4 h-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal
     md:h-full backdrop-blur-sm flex justify-center content-center">
    <div @click.outside="openRegister = false" x-cloak class="relative mx-auto my-auto inset-x-0 w-full h-full max-w-md
    md:h-auto">
        <!-- Modal content -->
        <div  class="relative bg-white  rounded-lg shadow dark:bg-gray-700">
            <button @click="toggleRegister()" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent
            hover:bg-gray-200
            hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Register to Lawracasts</h3>
                <form class="space-y-6" action="{{route('register')}}" method="post" onsubmit="toggleRegister()">
                    @csrf
                    <div class="flex justify-between">
                        <div>
                            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Your
                                first name</label>
                            <input type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300
                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                         dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                   placeholder="Justine" required>
                        </div>
                        <div>
                            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Your
                                last name</label>
                            <input type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300
                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                         dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                   placeholder="Winata" required>
                        </div>
                    </div>
                    <div>
                        <label for="dob" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Your Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="bg-gray-50 border border-gray-300
                        text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                         dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                              value="2012-12-12" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="confirm" class="block mb-2 text-sm font-medium text-gray-900
                        dark:text-white">Confirm your
                            password</label>
                        <input type="password" name="confirm" id="confirm" placeholder="••••••••" class="bg-gray-50
                        border
                         border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" value="0" class="w-4 h-4 border
                                border-gray-300
                                rounded
                                bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                            </div>
                            <label for="terms" class="ml-2 text-sm font-medium text-gray-900
                            dark:text-gray-300">Agree to the Terms & Conditions.</label>
                        </div>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center
                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create your account</button>
                </form>
            </div>
        </div>
    </div>
</div>

