<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center px-2 lg:px-0">
                <div class="flex-shrink-0">
                    <img class="hidden lg:block h-8 w-auto" src="{{asset('storage/assets/logo-white.png')}}"
                         alt="Workflow">
                </div>
                <div class="hidden lg:block lg:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{route('index')}}"
                           class="{{\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() == 'index' ?
                           "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}
                           px-3 py-2
                           rounded-md
                           text-sm
                           font-medium">Home</a>
                        <a href="{{route('index_topic')}}"
                           class="{{\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() == 'index_topic' ?
                           "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}  px-3 py-2 rounded-md text-sm
                           font-medium">Topic</a>
                        <a href="{{route('index_forum')}}"
                           class="{{\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() == 'index_forum' ?
                           "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}} px-3 py-2 rounded-md text-sm
                           font-medium">Forum</a>
                        <a href="{{route('index_podcast')}}"
                           class="{{\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() ==
                           'index_podcast' ?
                           "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}  px-3 py-2 rounded-md text-sm
                           font-medium">Podcasts</a>
                        <a href="{{route('index_course')}}"
                           class="{{\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() ==
                           'index_course' ?
                           "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}  px-3 py-2 rounded-md text-sm
                           font-medium">Course</a>
                    </div>
                </div>
            </div>
            <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-end">
                <div class="max-w-lg w-full lg:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <!-- Heroicon name: solid/search -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="search" name="search" class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-white focus:ring-white focus:text-gray-900 sm:text-sm" placeholder="Search" type="search">
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:ml-4">
                <div x-data="{ open: false }" class="flex items-center">
                    <!-- Profile dropdown -->
                    @if(!\Illuminate\Support\Facades\Auth::check())
                        <div  class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <button @click="toggleLogin()"
                               class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm
                           font-medium">Login</button>
                            <button @click="toggleRegister()"
                               class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm
                           font-medium">Register</button>
                        </div>
                    @else
                    <div class="ml-4 relative flex-shrink-0">
                        <div>
                            <button @click="open = ! open" type="button" class="bg-gray-800 rounded-full flex text-sm text-white
                            focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{\Illuminate\Support\Facades\Auth::check() ?
                                asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image_url) : asset
                                ('storage/assets/profile.gif')
                                }}" alt="Profile Picture">
                            </button>
                        </div>
                        <div x-show="open" @click.outside="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white
                        ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->


                                <a href="{{route('index_profile', \Illuminate\Support\Facades\Auth::user()->id)}}"
                                   class="{{\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() ==
                           'index_profile' ? "bg-gray-100" : ""}} block px-4 py-2 text-sm text-gray-700"
                                   role="menuitem"
                                   tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1"
                                       id="user-menu-item-2">Log out</button>
                                </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
