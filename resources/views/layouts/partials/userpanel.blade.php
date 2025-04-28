{{-- theme, alerts and settings --}}
<ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
    <li class="nav-item ps-2 pe-0">
        <div class="dropdown theme-control-dropdown">
            <a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span>
                <span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span>
                <span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme">
                        <span class="fas fa-sun"></span>
                        Light
                        <span class="fas fa-check dropdown-check-icon ms-auto text-600"></span>
                    </button>
                    <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme">
                        <span class="fas fa-moon" data-fa-transform=""></span>
                        Dark
                        <span class="fas fa-check dropdown-check-icon ms-auto text-600"></span>
                    </button>
                    <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme">
                        <span class="fas fa-adjust" data-fa-transform=""></span>
                        Auto
                        <span class="fas fa-check dropdown-check-icon ms-auto text-600"></span>
                    </button>
                </div>
            </div>
        </div>
    </li>
    
    {{-- @livewire('NotificationList') --}}

    <li class="nav-item dropdown px-1">
        <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
            </svg>
        </a>
        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
            <div class="card shadow-none">
                <div class="scrollbar-overlay nine-dots-dropdown">
                    <div class="card-body px-3">
                        <div class="row text-center gx-0 gy-0">
                            <div class="col-4">
                                <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="pages/user/profile.html" target="_blank">
                                    <div class="avatar avatar-2xl"> <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /></div>
                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11">{{ Auth::user()->name }}</p>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank">
                                    <img class="rounded" src="{{asset('falcon/assets/img/nav-icons/google.png')}}" alt="" width="40" height="40" />
                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                                </a>
                            </div>
                            <div class="col-12">
                                <hr class="my-3 mx-n3 bg-200" />
                            </div>
                            <div class="col-4">
                                <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank">
                                    <img class="rounded" src="{{asset('falcon/assets/img/nav-icons/twitter.png')}}" alt="" width="40" height="40" />
                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank">
                                    <img class="rounded" src="{{asset('falcon/assets/img/nav-icons/facebook.png')}}" alt="" width="40" height="40" />
                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank">
                                    <img class="rounded" src="{{asset('falcon/assets/img/nav-icons/instagram.png')}}" alt="" width="40" height="40" />
                                    <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="avatar avatar-xl">
                    <img class="rounded-circle w-25" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>
            @else
                <span class="inline-flex rounded-md">
                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                        {{ Auth::user()->name }}
                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </span>
            @endif
        </a>
        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#!">Set status</a>
                <a class="dropdown-item" href="{{route('profile.show')}}">Profile &amp; account</a>
                <a class="dropdown-item" href="#!">Feedback</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </li>
</ul>
