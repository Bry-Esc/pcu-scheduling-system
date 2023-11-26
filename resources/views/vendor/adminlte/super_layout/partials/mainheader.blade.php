<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <div class="pcu-logo-container">
        <a href="{{ url('/home') }}">
            <!-- Logo for regular state and mobile devices -->
            <img class="pcu-logo" src="{{ asset('img/schd-detailed-logo.png') }}" alt="pcu-logo" />
        </a>
    </div>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="">
                    <!-- Menu toggle button -->
                    <!-- Message icon -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
                    <!-- Dropdown Messages -->
                    <ul class="dropdown-menu">
                        <!-- Header -->
                        <li class="header">{{ trans('adminlte_lang::message.tabmessages') }}</li>
                        <li>
                            <!-- Inner menu: contains the messages -->
                            <ul class="menu">
                                <li><!-- Start message -->
                                    <a href="#">
                                        <!-- User Image -->
                                        <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image"/>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            {{ trans('adminlte_lang::message.supteam') }}
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>{{ trans('adminlte_lang::message.awesometheme') }}</p>
                                    </a>
                                </li><!-- End message -->
                            </ul><!-- /.menu -->
                        </li>
                        <li class="footer"><a href="#">c</a></li>
                    </ul>
                </li><!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="">
                    <!-- Menu toggle button -->
                    <!-- Notification icon -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </a>
                    <!-- Dropdown Notifications -->
                    <ul class="dropdown-menu">
                        <!-- Header -->
                        <li class="header">{{ trans('adminlte_lang::message.notifications') }}</li>
                        <li>
                            <!-- Inner menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- Start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> {{ trans('adminlte_lang::message.newmembers') }}
                                    </a>
                                </li><!-- End notification -->
                            </ul>
                        </li>   
                        <li class="footer">
                            <a href="{{ url('/admin/notification') }}">{{ trans('adminlte_lang::message.viewall') }}</a>
                        </li>
                    </ul>
                </li>

                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <!-- Task icon -->
                    <a href="#" class="" data-toggle="dropdown">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </a>
                    <!-- Dropdown Tasks -->
                    <ul class="dropdown-menu">
                        <!-- Header -->
                        <li class="header">{{ trans('adminlte_lang::message.tasks') }}</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            {{ trans('adminlte_lang::message.tasks') }}
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- Progress bar -->
                                        <div class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% {{ trans('adminlte_lang::message.complete') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- End task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">{{ trans('adminlte_lang::message.alltasks') }}</a>
                        </li>
                    </ul>
                </li>
                @if (Auth::guest())
                    <!-- Guest Links -->
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                @else
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- User Image in the navbar -->
                            <img src="{{ asset('img/avatar04.png') }}" class="user-image" alt="User Image" />
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <!-- Dropdown User Account -->
                        <ul class="dropdown-menu">
                            <!-- User Image in the menu -->
                            <li class="user-header">
                                <img src="{{ asset('img/avatar04.png') }}" class="img-circle" alt="User Image" />
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>{{ trans('adminlte_lang::message.login') }} </small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url('/account/change_password') }}" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.profile') }}</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ trans('adminlte_lang::message.signout') }}
                                    </a>
                                    <!-- Logout Form -->
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="submit" value="logout" style="display: none;">
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                @endif

                <!-- Control Sidebar Toggle Button -->
                {{-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> --}}
            </ul>
        </div>
    </nav>
</header>
