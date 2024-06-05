        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
                <div class="sidebar-brand-icon rotate-n-0">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TOKO MURAH</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Looping Menu-->
                <div class="sidebar-heading">
                    Home
                </div>
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Dashboard</span></a>
                        </li>
                    </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Master Data
                </div>
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Kategori Produk</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Data Produk</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Data User</span></a>
                        </li>
                    </li>
                <!-- Divider -->
                <hr class="sidebar-divider mt-3">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Transaksi
                </div>
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('pinjam'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Produk Sudah DiKirim</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('pinjam/daftarBooking'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span>Produk Belum DiKirim</span></a>
                        </li>
                    </li>
                
                    <!-- Divider -->
                <hr class="sidebar-divider mt-3">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

  
            <!-- Heading -->
                <div class="sidebar-heading">
                    
                </div>
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('Laporan/laporan_buku'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('Laporan/laporan_anggota'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('Laporan/laporan_pinjam'); ?>">
                                <i class="fa fa-fw fa book"></i>
                                <span></span></a>
                        </li>
                    </li>                
                    <!-- Divider -->
                <hr class="sidebar-divider mt-3">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 id="sidebartoggle"></button>
            </div>
              </ul>
        