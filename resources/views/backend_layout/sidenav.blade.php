<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow bg-primary.bg-darken-1 " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        @can('view-dashboard')
        <li class=" nav-item {{ Request::path()=='home' ? 'active' : '' }}"><a href="{{route('home')}}"><i class="icon-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
        </li>
        @endcan
        
        @can('manage-properties')
        <li class=" nav-item {{ Request::path()=='my-property' ? 'active' : '' }}"><a href="{{route('all_properties')}}"><i class="fa fa-building-o"></i><span class="menu-title" data-i18n="nav.dash.main">Arts</span></a>
        </li>
        @endcan
         
        @can('manage-blog')
        <li class=" nav-item {{ Request::path()=='blog/all/posts' ? 'active' : '' }}" ><a href="{{ route('blog.all_posts') }}"><i class="icon-note"></i><span class="menu-title" data-i18n="nav.templates.main">Blog</span></a>
        </li>
        @endcan
              
        @can('manage-categories')
          
        <li class=" nav-item {{ Request::path()=='categories/list' ? 'active' : '' }}"><a href="{{route('category.index')}}"><i class="icon-folder"></i><span class="menu-title" data-i18n="nav.category.general">Categories</span></a>
        </li>
        @endcan
              
        @can('manage-homeslider')
          
        <li class=" nav-item {{ Request::path()=='slider/images' ? 'active' : '' }}"><a href="{{route('slider_images')}}"><i class="icon-picture"></i><span class="menu-title" data-i18n="nav.category.general">Home Slider</span></a>
        </li>
        @endcan

        @can('manage-features')
          
        <li class=" nav-item {{ Request::path()=='all/features' ? 'active' : '' }}"><a href="{{route('all_features')}}"><i class="icon-list"></i><span class="menu-title" data-i18n="nav.category.general">features</span></a>
        </li>
        @endcan

        @can('manage-messages')
        <li class=" nav-item {{ Request::path()=='all/customer-messages' ? 'active' : '' }}"><a href="{{route('customer_messages')}}"><i class="icon-envelope-letter"></i><span class="menu-title" data-i18n="nav.category.general">Messages</span></a>
        </li>
        @endcan
        @can('manage-users')
          
        <li class=" nav-item {{ Request::path()=='all/members' ? 'active' : '' }}"><a href="{{route('all_users')}}"><i class="icon-people"></i><span class="menu-title" data-i18n="nav.layouts.temp">Users</span></a>
        </li>
        @endcan
        @can('manage-roles')
        <li class=" nav-item {{ Request::path()=='roles/' ? 'active' : '' }}"><a href="{{url('/roles')}}"><i class="icon-people"></i><span class="menu-title" data-i18n="nav.layouts.temp">Roles and Permissions</span></a>
        </li>
        @endcan
            

      </ul>
    </div>
  </div>
