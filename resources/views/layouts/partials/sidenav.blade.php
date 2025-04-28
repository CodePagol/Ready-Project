<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" data-double-top-nav="data-double-top-nav">
    <div class="w-100">
        <div class="d-flex flex-between-center">
            {{-- logo and Site name --}}
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggle-icon">
                    <span class="toggle-line"></span>
                </span>
            </button>
            <a class="navbar-brand me-1 me-sm-3" href="{{url('dashboard.index')}}">
                <div class="d-flex align-items-center">
                    <img class="me-2" src="{{asset('falcon/assets/img/icons/spot-illustrations/falcon.png')}}" alt="" width="40" />
                    <span class="font-sans-serif text-primary">FCNET24</span>
                </div>
            </a>
            @include('layouts.partials.searchbar')
            @include('layouts.partials.userpanel')
        </div>
        <hr class="my-2 d-none d-lg-block" />
        <div class="collapse navbar-collapse scrollbar py-lg-2" id="navbarDoubleTop">
            @include('layouts.partials.navpanel')
        </div>
    </div>
</nav>

<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" >
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation">
                <span class="navbar-toggle-icon">
                    <span class="toggle-line"></span>
                </span>
            </button>
        </div>
        <a class="navbar-brand" href="{{url('/')}}">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="{{asset('falcon/assets/img/icons/spot-illustrations/falcon.png')}}" alt="" width="40" /><span class="font-sans-serif text-primary">FCNET24</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            @include('layouts.partials.sidebarpanel')
            <div class="settings my-3">
                <div class="card shadow-none">
                    <div class="card-body alert mb-0" role="alert">
                        <div class="btn-close-falcon-container"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close" data-bs-dismiss="alert"></button></div>
                        <div class="text-center"><img src="{{asset('falcon/assets/img/icons/spot-illustrations/navbar-vertical.png')}}" alt="" width="80" />
                            <p class="fs-11 mt-2">Loving what you see? <br />Get your copy of <a href="https://github.com/rohan9222">Rohan</a></p>
                            <div class="d-grid">
                                <a class="btn btn-sm btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Purchase</a>
                            </div>
                            <div class="collapse mt-1" id="collapseExample">
                                <div class="card card-body">
                                    Md. Jahangir Alam Rohan
                                    Mobile: 01751136819
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggle-icon">
            <span class="toggle-line"></span>
        </span>
    </button>
    <a class="navbar-brand me-1 me-sm-3" href="{{url('/')}}">
        <div class="d-flex align-items-center">
            <img class="me-2" src="{{asset('falcon/assets/img/icons/spot-illustrations/falcon.png')}}" alt="" width="40" />
            <span class="font-sans-serif text-primary">FCNET24</span>
        </div>
    </a>
    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        @include('layouts.partials.navpanel')
    </div>
    @include('layouts.partials.userpanel')
</nav>