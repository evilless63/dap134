<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mr-auto mr-lg-0" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">ВЫЙТИ</a>
                </li>
            </ul>
    </div>
</nav>

<div class="nav-scroller bg-white box-shadow">
    <nav class="nav nav-underline">
    <a class="nav-link active" href="#">Dashboard</a>
    <a class="nav-link" href="#">
        Friends
        <span class="badge badge-pill bg-light align-text-bottom">27</span>
    </a>
    <a class="nav-link" href="#">Explore</a>
    <a class="nav-link" href="#">Suggestions</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    </nav>
</div>