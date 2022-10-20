@php
    use App\Helpers\App;
@endphp

<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      </ul>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hi, adnmin</div></a>
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
        <a href="index.html">REPOSITORY</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">UPN</a>
      </div>
        <?php
          $url_menu = Request::segment(1);
          $url_submenu = Request::segment(2);
        ?>
        <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown @if($url_menu == "dashboard") active @endif"><a href="/dashboard" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a></li> 
          
          <li class="menu-header">Apps</li>
          <li class="nav-item dropdown"><a href="/produk" class="nav-link"><i class="fas fa-home"></i><span>Produk</span></a></li> 
          <li class="nav-item dropdown"><a href="/kas" class="nav-link"><i class="fas fa-home"></i><span>Kas</span></a></li> 
        </ul>
        
    </aside>
  </div>