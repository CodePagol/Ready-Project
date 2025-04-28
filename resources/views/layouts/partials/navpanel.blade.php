<ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
    <li class="nav-item">
        <!-- parent pages-->
        <a class="nav-link" href="{{url('dashboard.index') }}" role="button">Dashboard</a>
    </li>
    <li class="nav-item">
        <!-- parent pages-->
        <a class="nav-link" href="{{url('mikrotik-sync') }}" role="button">Mikrotik Sync</a>
    </li>
    <li class="nav-item">
        <!-- parent pages-->
        <a class="nav-link" href="{{url('address-setup') }}" role="button">Address</a>
    </li>
    <li class="nav-item">
        <!-- parent pages-->
        <a class="nav-link" href="{{url('package-list-setup') }}" role="button">Package</a>
    </li>
    <li class="nav-item">
        <!-- parent pages-->
        <a class="nav-link" href="{{url('new-customer') }}" role="button">Create Customer</a>
    </li>
    <li class="nav-item">
        <!-- parent pages-->
        <a class="nav-link" href="{{url('customers.index') }}" role="button">Customers</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="collections">Collection</a>
        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="collections">
            <div class="bg-white dark__bg-1000 rounded-3 py-2">
                <img class="img-dropdown" src="{{asset('falcon/assets/img/icons/spot-illustrations/authentication-corner.png')}}" width="60" alt="" />
                <a class="dropdown-item link-600 fw-medium" href="{{url('payment-collection') }}">Payment Collection</a>
                <a class="dropdown-item link-600 fw-medium" href="{{url('collection-edit') }}">
                    Collection Edit
                    <span class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="reports">Reports</a>
        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="reports">
            <div class="bg-white dark__bg-1000 rounded-3 py-2">
                <img class="img-dropdown" src="{{asset('falcon/assets/img/icons/spot-illustrations/authentication-corner.png')}}" width="60" alt="" />
                <a class="dropdown-item link-600 fw-medium" href="{{url('collection-report.index') }}">
                    Collections Report
                    <span class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                </a>
                <a class="dropdown-item link-600 fw-medium" href="{{url('customer-summary') }}">
                    Customer Summary
                    <span class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="admin">Admin</a>
        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="admin">
            <div class="bg-white dark__bg-1000 rounded-3 py-2">
                <img class="img-dropdown" src="{{asset('falcon/assets/img/icons/spot-illustrations/authentication-corner.png')}}" width="60" alt="" />
                <a class="dropdown-item link-600 fw-medium" href="{{url('sms-setup') }}">
                    SMS Setup
                    <span class="badge rounded-pill ms-2 badge-subtle-success">New</span>
                </a>
            </div>
        </div>
    </li>
</ul>
