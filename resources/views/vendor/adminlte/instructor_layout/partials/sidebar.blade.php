<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('img/avatar2.png') }}" class="img-circle" alt="User Imge"  />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
             </div>
        @endif

        <!-- search form (Optional) -->
<!--        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
       <!-- <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>-->
            <!-- Optionally, you can add icons to the links -->
            <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li class="active">
                <a href="{{ url('home') }}">
                    <i class='fa fa-home '></i><span>Home</span>
                </a>
            </li>

            {{-- View Schedule --}}
            <li class="">
                <a href="{{ url('/instructor/faculty_loading') }}">
                    <i class='fa fa-calendar-check-o '></i><span>View Schedule</span>
                </a>
            </li>   

            {{-- Schedule Generation --}}
            <li>
                <a href="/admin/faculty_loading">
                    <i class="fa fa-calendar" aria-hidden="true"></i><span>Generate Schedule</span>
                </a>
            </li>

            {{-- Reports & Analytics --}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i><span>Reports & Analytics</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/admin/reports/rooms_occupied') }}"><i class="fa fa-circle-o"></i> <span>Rooms Occupied</span></a></li>
                </ul>
            </li>
    </section>
    <!-- /.sidebar -->
</aside>
