<nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
  <div class="flex flex-wrap items-center justify-between">
      <div class="flex items-center justify-start gap-1">
          <button id="draw-nav-button" data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
              aria-controls="drawer-navigation"
              class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
              <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                      clip-rule="evenodd"></path>
              </svg>
              <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
              </svg>
              <span class="sr-only">Toggle sidebar</span>
          </button>

          {{-- <x-elements.logo >Esport Arena</x-elements.logo> --}}
          <x-application-logo class="block w-auto text-gray-800 fill-current h-9 dark:text-gray-200" />
          <a href="{{ route('dashboard') }}"
              class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
              ESN-INVENTARIS
          </a>
      </div>
      <div class="flex items-center lg:order-2">
          {{-- avatar --}}
          <!-- Settings Dropdown -->
          <div class="flex sm:items-center sm:ms-6">
              <x-dropdown align="right" width="48">
                  <x-slot name="trigger">
                      <button
                          class="items-center hidden px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md md:inline-flex hover:text-gray-700 focus:outline-none">
                          <div>
                              <span class="sr-only">Open user menu</span>
                              
                              {{-- @forelse ($logos as $item)
                                  <img class="w-8 h-8 rounded-full" src="{{ asset('/storage/logos/'.$item->avatar) }}" alt="{{ Auth::user()->name }}" />
                              @empty
                                  <img class="w-8 h-8 rounded-full" src="/img/logo.png" alt="{{ Auth::user()->name }}" />
                              @endforelse --}}
                              {{-- @if (Auth::user()->logo)
                                  
                                  <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->logo }}" alt="u{{ Auth::user()->name }}" />
                              @else
                                  <img class="w-8 h-8 rounded-full" src="/img/logo.png" alt="u{{ Auth::user()->name }}" />
                              @endif --}}
                          </div>
                          <div class="hidden mx-2 text-primary md:flex">{{ Auth::user()->name }}</div>


                      </button>
                  </x-slot>

                  
                  <x-slot name="content">
                      <div class="px-4 py-3 bg-secondary">
                          <span
                            class="block text-sm font-semibold text-gray-900 dark:text-white"
                            >{{ Auth::user()->name }}</span
                          >
                          <span
                            class="block text-sm text-gray-900 truncate dark:text-white"
                            >{{ Auth::user()->email }}</span
                          >
                        </div>
                      <x-dropdown-link :href="route('profile.edit')">
                          {{ __('Profile') }}
                      </x-dropdown-link>

                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf

                          <x-dropdown-link :href="route('logout')"
                              onclick="event.preventDefault();
                                      this.closest('form').submit();">
                              {{ __('Log Out') }}
                          </x-dropdown-link>
                      </form>
                  </x-slot>
              </x-dropdown>
          </div>
      </div>
  </div>
  </div>
</nav>