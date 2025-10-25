<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="#" class="site_title">
            <i class="fa fa-connectdevelop"></i>
            <span> Dashboard </span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">

          {{--  <img src="" alt="logedin-admin" class="img-circle profile_img">  --}}
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>admin name </h2>

        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
       {{--  start  first section of the side menu   --}}
        <div class="menu_section">
          <ul class="nav side-menu">
            <li>
                <a href="{{ route('dashboard')}}">
                <i class="fa fa-home"></i>
                Home <!-- <span class="fa fa-chevron-down"></span>-->
               </a>

              {{--  <ul class="nav child_menu">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="index2.html">Dashboard2</a></li>
                <li><a href="index3.html">Dashboard3</a></li>
              </ul>  --}}

            </li>
            <li><a href="{{ route('head-master.index')}}"><i class="fa fa-"></i> HeadMaster</a> </li>
          </ul>
        </div>
      {{--  end first section of the side menu   --}}
      {{--  start  second section of the side menu   --}}
        {{--  <div class="menu_section">
          <ul class="nav side-menu">
            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                  <li><a href="#level1_1">Level One</a>
                  <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="sub_menu"><a href="level2.html">Level Two</a>
                      </li>
                      <li><a href="#level2_1">Level Two</a>
                      </li>
                      <li><a href="#level2_2">Level Two</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#level1_2">Level One</a>
                  </li>
              </ul>
            </li>
          </ul>
        </div>  --}}
     {{--  end  second section of the side menu   --}}
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">

        <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>

      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>
