    <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Imge"  />
                   <!-- <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Imge"  />--> 
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
             </div>
        @endif

        {{-- Search Form (Optional) --}}
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form> --}}

        <!-- Sidebar Menu -->
       <!-- <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>-->
            <!-- Optionally, you can add icons to the links -->
            
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home '></i> <span>Home</span></a></li>
                
            {{-- <li>
                <a href="/admin/faculty_loading">
                    <i class='fa  fa-list'></i>
                    <span>Schedule Generation</span>
                </a>
            </li> --}}
            
            {{-- Maintenance --}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>Maintenance</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                
                <ul class="treeview-menu">
                    <li>
                        <a href="/admin/room_management">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <span>Room</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/section_management">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <span>Section</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/curiculum_management/curriculum">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <span>Curriculum</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- User Profile --}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Instuctor</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/admin/instructor/add_instructor">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <span>Add Instructor</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/instructor/view_instructor_account">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>View Instructors</span>
                        </a>
                    </li>
                </ul>
            </li>
                
            {{-- Reports & Analytics --}}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Reports & Analytics</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{url('/admin/reports/rooms_occupied') }}">
                            <i class="fa fa-circle-o"></i> <span>Rooms Occupied</span>
                        </a>
                    </li>
                </ul>
            </li>            
                    
            <?php $notifications = \App\LoadNotification::where('is_trash',0)->get();?>

            {{-- <li>
                <a href="/admin/add_curriculum">
                    <i class='fa fa-folder'></i>
                    <span>Add Curriculum</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li> --}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
