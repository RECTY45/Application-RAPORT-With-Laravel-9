   <!-- Navbar Start -->
<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0 d-flex justify-content-between">
               
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center me-auto">
        <div class="nav-item dropdown ">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">RECTY.Exploit</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">My Profile</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
               <button type="submit" class="dropdown-item ">Log Out</button>
            </form>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
