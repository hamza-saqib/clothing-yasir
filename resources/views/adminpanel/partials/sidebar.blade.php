<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="{{asset('storage')}}/images/admins/{{Auth::guard('admin')->user()->profile_image}}" style="width: 70px; height: 70px"/>
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs">
                                <strong class="font-bold">{{Auth::guard('admin')->user()->name}}</strong>
                            </span> <span class="text-muted text-xs block">{{Auth::guard('admin')->user()->role}} <b
                                    class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        {{-- <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li> --}}
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                    {{-- <span class="fa arrow"></span> --}}
                    {{-- <span class="pull-right label label-primary">SPECIAL</span> --}}

                </a>

            </li>
            <li class="@if (request()->is('admin/product*'))  {{'active'}} @else {{''}} @endif">
                <a href="#">
                    <i class=" fa fa-cube"></i>
                    <span class="nav-label">Products</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.product.create') }}">Create</a></li>
                    <li><a href="{{ route('admin.product.index') }}">List</a></li>
                </ul>
            </li>

            <li class="@if (request()->is('admin/order*'))  {{'active'}} @else {{''}} @endif">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span class="nav-label">Orders</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.order.index') }}">List</a></li>
                </ul>
            </li>

            <li class="@if (request()->is('admin/user*'))  {{'active'}} @else {{''}} @endif">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="nav-label">Users</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.user.index') }}">List</a></li>
                </ul>
            </li>

            <li class="@if (request()->is('admin/blog*'))  {{'active'}} @else {{''}} @endif">
                <a href="#">
                    <i class="fa fa-file-text"></i>
                    <span class="nav-label">Blogs</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.blog.create') }}">Create</a></li>
                    <li><a href="{{ route('admin.blog.index') }}">List</a></li>
                    <li><a href="{{ route('admin.blog-category.index') }}">Manage Category</a></li>
                </ul>
            </li>


        </ul>

    </div>
</nav>
