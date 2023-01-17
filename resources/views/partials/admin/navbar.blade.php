
<div id="nav1">
    <div class="container">
        <ul class="d-flex gap-4 list-unstyled text-uppercase">
            <li class="nav item"><a class="nav-link text-white {{Route::currentRouteName() == 'admin.dashboard' ?  'bg-secondary' : ''}}" href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="nav item"><a class="nav-link text-white {{Route::currentRouteName() == 'admin.projects.index' ?  'bg-secondary' : ''}}" href="{{route('admin.projects.index')}}">Projects</a></li>
            {{-- <li><a href="">Categories</a></li>
            <li><a href="">Tags</a></li>
            <li><a href="">Users</a></li> --}}
        </ul>
    </div>
</div>