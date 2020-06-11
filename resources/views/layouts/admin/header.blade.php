<nav class="main-header navbar navbar-expand navbar-white navbar-light navBar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link pt-3" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item navElement">
    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out mr-2" aria-hidden="true"></i><span class="d-none d-sm-inline">Гарах</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    </li>
  </ul>
</nav>

<aside class="main-sidebar sidebar-dark-info elevation-1 darkBlue">
  <a href="{{route('admin_home')}}" class= 'brand-link text-center'>
    <span><b>Админ</b><p style="margin-bottom: 0px">Удирдах цонх</p></span>
  </a>

  <div class="sidebar">
    <nav>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{route('posts.index')}}" class="nav-link">
            <i class="nav-icon fa fa-newspaper-o"></i>
            <p>Мэдээ</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('about.index')}}" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>Намтар</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('videos.index')}}" class="nav-link">
            <i class="nav-icon fa fa-video-camera"></i>
            <p>Бичлэг</p>
          </a>
        </li>
        <a class="btn btn-sm btn-block btn-danger text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out p-2" aria-hidden="true"></i><span class="d-none d-sm-inline">Гарах</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
        </form>
      </ul>
    </nav>
  </div>
</aside>