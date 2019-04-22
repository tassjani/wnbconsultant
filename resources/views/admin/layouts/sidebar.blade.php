<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Natassja Adani</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

            <li class=""><a href=" {{ route('admin/home') }} "><i class="fa fa-fw fa-dashboard"></i> Dashboard </a></li>
            <li class=""><a href="{{  route('about.index')    }}"><i class="fa fa-fw fa-newspaper-o"></i> About us </a></li>
            <li class=""><a href="{{  route('service.index')  }}"><i class="fa fa-fw fa-briefcase"></i> Services </a></li>
            <li class=""><a href="{{  route('project.index')  }}"><i class="fa fa-fw fa-folder"></i> Projects </a></li>
           <!--  <li class=""><a href="{{  route('team.index')     }}"><i class="fa fa-fw fa-group""></i> Team </a></li> -->
            <li class=""><a href="{{  route('news.index')     }}"><i class="fa fa-fw fa-newspaper-o"></i> News</a></li>
            <li class=""><a href="{{ route('contact.index')  }}"><i class="fa fa-envelope"></i> Contact 
              <span class="pull-right-container">
                <span class="label label-primary pull-right">13</span>
              </span></a></li>
            <li class=""><a href="{{  route('tag.index')      }}"><i class="fa fa-fw fa-tags"></i> Tags</a></li>
            <li class=""><a href="{{  route('client.index')   }}"><i class="fa fa-money"></i> Clients </a></li>
            <li class=""><a href="{{  route('role.index')      }}"><i class="fa fa-fw fa-child"></i> Roles</a></li>
            <li class="treeview">
             <a href="#">
              <i class="fa fa-meh-o"></i> <span>User</span>
             <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
             </span>
             </a>
             <ul class="treeview-menu">
            <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> All users</a></li>
            <li><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i> Add users</a></li>
            </ul>
          </li>
    </section>
    <!-- /.sidebar -->
  </aside>