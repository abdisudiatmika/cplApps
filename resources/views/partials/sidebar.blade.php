<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CPL App</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Navigasi
    </div>

    <!-- Nav Item - Dosen -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengajar.index') }}">
            <i class="fas fa-user-tie"></i>
            <span>Dosen</span>
        </a>
    </li>

    <!-- Nav Item - CPL -->
    @if(auth()->user()->role == 'admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cpl.index') }}">
            <i class="fas fa-list"></i>
            <span>CPL</span>
        </a>
    </li>
    @endif
    <!-- Nav Item - Mahasiswa -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('mahasiswa.index') }}">
            <i class="fas fa-user-graduate"></i>
            <span>Mahasiswa</span>
        </a>
    </li>


<!-- Nav Item - Mata Kuliah -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('mata-kuliah.index') }}">
        <i class="fas fa-book"></i>
        <span>Mata Kuliah</span>
    </a>
</li>
<!-- Nav Item - Input Persentase CPL -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('bobot-cpl.create') }}">
        <i class="fas fa-percentage"></i>
        <span>Input Persentase CPL</span>
    </a>
</li>
<!-- Nav Item - MK Dosen -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('dosendashboard') }}">
        <i class="fas fa-chalkboard-teacher"></i>
        <span>Mata Kuliah Dosen</span>
    </a>
</li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->
