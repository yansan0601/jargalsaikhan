<nav class="main-header navbar navbar-expand navbar-white navbar-light navBar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link pt-3" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item navElement">
      <a>
        <i class="fa fa-sign-out mr-2" aria-hidden="true"></i><span class="d-none d-sm-inline">Logout</span>
      <a>
    </li>
  </ul>
</nav>

<aside class="main-sidebar sidebar-dark-info elevation-1 darkBlue">
  <a href="{{route('admin_home')}}" class= 'brand-link text-center'>
    <span class="brand-text font-weight-light"><b>Админ</b><p>удирдах цонх</p></span>
  </a>

  <div class="sidebar">
    <nav>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item navItemHead py-3 pl-2">
          <span><i class="fa fa-bars"></i> Navigation</span>
        </li>

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
            <i class="nav-icon fa fa-graduation-cap"></i>
            <p>Бичлэг</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-newspaper-o"></i>
            <p>Санал хүсэлт</p>
          </a>
        </li>
        <li class="mt-4 p-2"><a class= "btn btn-sm btn-block btn-danger text-white" >LogOut</a></li>
      </ul>
    </nav>
  </div>
</aside>