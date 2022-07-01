<ul class="navbar-nav bg-gradient bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url();?>">
        <div class="sidebar-brand-icon rotate-n-0">
        <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mutiara Print Shop</div>
    </a>


    <?php if (in_groups('Admin')):?>
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Heading -->
        <div class="sidebar-heading">
            User Management
        </div>

        <!-- Nav Item - User list -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin');?>">
                <i class="fas fa-users"></i>
                <span>User List</span></a>
        </li>
        <!-- Nav Item - Order list -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Admin/orderlist');?>">
                <i class="fas fa-list"></i>
                <span>Order List</span></a>
            </li>
    <?php endif ;?>
    
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
            Produk
        </div>
    <!-- Nav Item - Beranda -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Produk/index');?>">
            <i class="fas fa-tags"></i>
            <span>Produk</span></a>
    </li>
    <!-- Nav Item - pesanan -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('User/pesanan');?>">
        <i class="fas fa-shopping-cart"></i>
            <span>Pesanan</span></a>
    </li>
    </hr>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
     Profile
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user');?>">
            <i class="fas fa-user"></i>
            <span>My Profile</span></a>
    </li>

    

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Lainnya
    </div>

    <!-- Nav Item - costumer service -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('User/costumerservis');?>">
        <i class="fas fa-headset"></i>
            <span>Costumer Service</span></a>
    </li>

    <!-- Nav Item - Sosial Media -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('User/sosialmedia');?>">
            <i class="fab fa-instagram"></i>
            <span>Sosial Media</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        Logout
    </div>

    <!-- Nav Item - logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>