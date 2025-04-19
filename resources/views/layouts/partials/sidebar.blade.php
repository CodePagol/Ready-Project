<div id="sidebar" class="d-none d-lg-block z-1 sidebar d-flex flex-column p-3 bg-body-tertiary">
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
     --}}
        <!-- Navigation Links -->
    {{-- <div class="collapse navbar-collapse" id="navbarNav"> --}}
     
        {{-- <a href="/" class="navbar-brand d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <!-- Logo -->
            <x-application-mark class="sidebar-logo w-25" />
            {!! siteUrlSettings('site_name') !!}
        </a> --}}

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            {{-- <a href="{{ route('dashboard.index') }}" class="nav-link link-body-emphasis {{ request()->routeIs('dashboard') ? 'active' : '' }}"> --}}
            <a href="" class="nav-link link-body-emphasis">
                <i class="bi bi-pie-chart-fill me-2"></i>
                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>
    </ul>
</div>