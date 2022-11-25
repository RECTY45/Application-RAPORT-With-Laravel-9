
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Dash-Raport</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle mr-2" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3 float-left">
                        <h6 class="mb-0">RECTY.Exploit</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100 row ">
                    <a href="/pages/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <p class="px-3 ">Data Master</p>
                    @if (auth()->user()->role === 'admin')
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Manajemen User</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('user.index') }}" class="dropdown-item">View</a>
                            <a href="#" class="dropdown-item">Add</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Kelas</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">View</a>
                            <a href="#" class="dropdown-item">Add</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Jurusan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">View</a>
                            <a href="#" class="dropdown-item">Add</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Tahun Pelajaran</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">View</a>
                            <a href="#" class="dropdown-item">Add</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Siswa</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">View</a>
                            <a href="#" class="dropdown-item">Add</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Guru    </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">View</a>
                            <a href="#" class="dropdown-item">Add</a>
                        </div>
                    </div>
                    @endif

                    @if(auth()->user()->role === "guru")

                    @endif
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
