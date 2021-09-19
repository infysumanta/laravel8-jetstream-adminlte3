<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="pb-3 mt-3 mb-3 user-panel d-flex">
            <div class="image">
                <img src="{{Avatar::create(auth()->user()->name)}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

      
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}"
                        class="nav-link {{Route::currentRouteName() == 'admin.dashboard' ? ' active' : ''}}">
                        <i class=" nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();$('form#logout').submit();"
                        class="nav-link">
                        <i class=" nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form method="POST" id="logout" action="{{ route('logout') }}">@csrf</form>
                </li>
            </ul>
        </nav>
    </div>
</aside>