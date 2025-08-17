
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
        <div class="d-flex sidebar-profile">
            <div class="sidebar-profile-image">
            <img src="{{asset('warehouse/images/noBgBlack.png')}}" alt="image">
            <span class="sidebar-status-indicator"></span>
            </div>
            <div class="sidebar-profile-name">
            <p class="sidebar-name">
                {{Auth::user()->name}}
            </p>
            <p class="sidebar-designation">
                {{Auth::user()->role}}
            </p>
            </div>
        </div>
        {{-- <p class="sidebar-menu-title">{{__('Main Menu')}}</p> --}}
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">New</span></span>
        </a>
        </li>
        <p class="sidebar-menu-title">{{__('Main Menu')}}</p>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#main-menu" aria-expanded="false" aria-controls="ui-basic">
            <i class="typcn typcn-briefcase menu-icon"></i>
            <span class="menu-title">{{__('Data Master')}}</span>
            <i class="typcn typcn-chevron-right menu-arrow"></i>
        </a>
        <div class="collapse" id="main-menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=""><i class="mdi mdi-dropbox"></i> {{__('Data Karyawan')}}</a></li>
                <li class="nav-item"> <a class="nav-link" href=""><i class="mdi mdi-dropbox"></i> {{__('Data Barang')}}</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">{{__('Data Gudang')}}</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">{{__('Data Area')}}</a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="typcn typcn-film menu-icon"></i>
            <span class="menu-title">Penerimaan</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('penerimaan_index')}}">{{__('Master Penerimaan')}}</a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="typcn typcn-chart-pie-outline menu-icon"></i>
            <span class="menu-title">{{__('Penagihan')}}</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">{{__('Data Tagihan')}}</a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="typcn typcn-th-small-outline menu-icon"></i>
            <span class="menu-title">{{__('Penjualan')}}</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">{{__('Retail')}}</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">{{__('Online')}}</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">{{__('B2B')}}</a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <i class="typcn typcn-compass menu-icon"></i>
            <span class="menu-title">Icons</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="typcn typcn-user-add-outline menu-icon"></i>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
            <i class="typcn typcn-globe-outline menu-icon"></i>
            <span class="menu-title">Error pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="pages/documentation/documentation.html">
            <i class="typcn typcn-document-text menu-icon"></i>
            <span class="menu-title">Documentation</span>
        </a>
        </li>
    </ul>
    <ul class="sidebar-legend">
        <li>
        <p class="sidebar-menu-title">Category</p>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">#Sales</a></li>
        <li class="nav-item"><a href="#" class="nav-link">#Marketing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">#Growth</a></li>
    </ul>
    </nav>

