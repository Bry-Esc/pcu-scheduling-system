<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <div class="pcu-logo-container">
        <a href="{{ url('/home') }}">
            <!-- Logo for regular state and mobile devices -->
            <img class="pcu-logo" src="{{ asset('img/techSCHD.png') }}" alt="pcu-logo" />
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
                <?php $notifications = \App\LoadNotification::where('is_trash',0)->get();?>
                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        @if(count($notifications)>0)<span class="label label-warning">{{$notifications->count()}}</span>@endif
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">@if(count($notifications)>0) You have {{$notifications->count()}} notifications @endif</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                @if(count($notifications)>0)
                                    @foreach($notifications as $notif)
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-list text-aqua"></i> {{$notif->content}}
                                        </a>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        <li class="footer"><a href="{{url('/admin/notification')}}">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                @if (Auth::guest())
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                @else
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            {{-- <img src="http://scheduling.local/images/avatar5.png" class="user-image" alt="User Image"/> --}}
                            <img src="{{asset('img/avatar3.png')}}" class="user-image" alt="User Image"/>
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                {{-- <img src="http://scheduling.local/images/avatar5.png" class="img-circle" alt="User Image" /> --}}
                                <img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Image" />
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>{{ trans('adminlte_lang::message.login') }} </small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url('/account/change_password') }}" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.profile') }}</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ trans('adminlte_lang::message.signout') }}
                                    </a>
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
                <li></li>
            </ul>
        </div>
    </nav>
</header>