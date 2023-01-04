@php
use App\Helpers\App;
@endphp

<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right position-relative">
        <li style="position: absolute; top: -19px; left: -60px"><input type="checkbox" id="darkmode-toggle"><label for="darkmode-toggle" id="darkmode-label"><i class="fas fa-sun"></i><i class="fas fa-moon"></i></label></li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->first_name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="/change-password" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a href="/logout" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Gema</a>
        </div>
        <?php
          $url_menu = Request::segment(1);
        ?>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown @if($url_menu == "dashboard" || $url_menu == '') active @endif"><a href="/dashboard"
                    class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a></li>

            <li class="menu-header">Apps</li>
            <li class="nav-item dropdown  @if($url_menu == "produk") active @endif""><a href="/produk"
                    class="nav-link"><i class="fas fa-home"></i><span>Produk</span></a></li>
            <li class="nav-item dropdown  @if($url_menu == " kas") active @endif""><a href="/kas" class="nav-link"><i
                        class="fas fa-home"></i><span>Kas</span></a></li>

            <li class="menu-header">Data Master</li>
            <li class="nav-item dropdown  @if($url_menu == "banner") active @endif""><a href="/banner"
                    class="nav-link"><i class="fas fa-audio-description"></i><span>Data Banner</span></a></li>
        </ul>
    </aside>
</div>
