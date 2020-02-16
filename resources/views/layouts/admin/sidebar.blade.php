<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-{!! config('any_cms.theme') !!}">
    <!-- Brand Logo -->
    <a href="#" class="brand-link brand-link navbar-white">
        <img src="../../dist/img/AdminLTELogo.png"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><b>{{ config('any_cms.project_name') }}</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ isActiveLink('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-circle"></i>
                        <p>
                            รายงาน
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('member.listing') }}" class="nav-link {{ isActiveLink('member/*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            จัดารสมาชิก
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('event.listing') }}" class="nav-link {{ isActiveLink('event/*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-level-up-alt"></i>
                        <p>
                            จัดการกิจกรรม
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

