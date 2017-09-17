<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          {{ HTML::image('img/user2-160x160.jpg', 'User Image',  array('class' => 'img-circle')) }}
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in s
      idebar.less -->
      <ul class="sidebar-menu " data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
          <a href="{{route('users')}}">
            <i class="fa fa-files-o"></i><span class="text-info">User Management</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('campaigns')}}">
            <i class="fa fa-share"></i> <span class="text-info">Campaign Management</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('news')}}">
            <i class="fa fa-share"></i> <span class="text-info">News Management</span>
          </a>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>