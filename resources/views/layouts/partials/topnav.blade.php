<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggle-icon">
            <span class="toggle-line"></span>
        </span>
    </button>
    <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center">
            <img class="me-2" src="{{asset('falcon/assets/img/icons/spot-illustrations/falcon.png')}}" alt="" width="40" />
            <span class="font-sans-serif text-primary">FCNET24</span>
        </div>
    </a>
    @include('layouts.partials.searchbar')
    @include('layouts.partials.userpanel')
</nav>

<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggle-icon">
            <span class="toggle-line"></span>
        </span>
    </button>
    <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center"><img class="me-2" src="{{asset('falcon/assets/img/icons/spot-illustrations/falcon.png')}}" alt="" width="40" /><span class="font-sans-serif text-primary">FCNET24</span></div>
    </a>
    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        @include('layouts.partials.navpanel')
    </div>
    @include('layouts.partials.userpanel')
</nav>