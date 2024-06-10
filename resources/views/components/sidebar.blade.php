<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class='{{ Request::is('home') ? 'active' : '' }}'>
                <a class="nav-link"
                    href="{{ url('home') }}">Dashboard</a>
            </li>
            <li class='{{ Request::is('users') ? 'active' : '' }}'>
                <a class="nav-link"
                    href="{{ url('users') }}">Management Users</a>
            </li>
            <li class='{{ Request::is('companies/1') ? 'active' : '' }}'>
                <a class="nav-link"
                    href="{{ url('companies',1) }}">Company Profile</a>
            </li>

        </ul>


    </aside>
</div>
