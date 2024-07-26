<div class="wrapper">
    @include('dashboard.partial.appbar.topbar')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <a href="#" class="brand-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <img class="brand-image img-circle elevation-3" src="assets/images/Asset 2.png" alt="" />
                    <span class="brand-text font-weight-light">Admin <i class="right fas fa-angle-left"></i></span>
                </a>
              <div id="flush-collapseOne" class="pt-5 mt-4 accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <a class="dropdown-item" href="http://127.0.0.1:8000/admin">Halaman Admin</a>
                    <form id="logout-form" action="{{url('/logout')}}" method="POST">
                        @csrf
                        <button class="dropdown-item" href="" type="submit">Log Out</button>
                    </form>
                </div>
              </div>
            </div>
          </div>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard  <i class="right fas fa-angle-left"></i></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/blog" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Blog
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/umkm" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                            <p>
                                UMKM
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/surat" class="nav-link">
                        <i class="nav-icon fa fa-mail-bulk"></i>
                            <p>
                                Surat
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- SidebarSearch Form -->
            <div class="form-inline mt-3">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </aside>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
