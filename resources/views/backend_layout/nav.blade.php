

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-dark bg-primary navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
          <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
              <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="fa fa-bars"></i></a></li>
              <li class="nav-item"><a class="navbar-brand" href="#">
                  <h3 class="brand-text">Art360</h3></a></li>
              <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
          </div>
          <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
              <ul class="nav navbar-nav mr-auto float-left">
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="fa fa-bars"></i></a></li>
              </ul>
              <ul class="nav navbar-nav float-right">
                <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="user-name">{{ Auth::user()->name}}</span></a>
                  <div class="dropdown-menu dropdown-menu-right">

                    {{-- <div class="dropdown-divider"></div> --}}
                       <form action="{{ route('logout') }}" method="POST" >
                        @csrf
                        <button type="submit" style="width:100% !important;background:transparent !important;border-style:none !important;" ><i class="ft-power" >Logout</i></button>
                    </form>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
