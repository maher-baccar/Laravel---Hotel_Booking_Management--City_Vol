<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admin/dashboard') }}">
                <div class="sidebar-brand-text mx-3">{{ __('city vol voyage') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseRoom" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Room Management') }}</span>
                </a>
                <div id="collapseRoom" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('category') }}</a>
                        <a class="collapse-item {{ request()->is('admin/rooms') || request()->is('admin/rooms/*') ? 'active' : '' }}" href="{{ route('admin.rooms.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('room') }}</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseBooking" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Booking Management') }}</span>
                </a>
                <div id="collapseBooking" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/customers') || request()->is('admin/customers/*') ? 'active' : '' }}" href="{{ route('admin.customers.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('customer') }}</a>
                        <a class="collapse-item {{ request()->is('admin/bookings') || request()->is('admin/bookings/*') ? 'active' : '' }}" href="{{ route('admin.bookings.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('booking') }}</a>
                        <a class="collapse-item {{ request()->is('admin/find_rooms') || request()->is('admin/find_rooms/*') ? 'active' : '' }}" href="{{ route('admin.find_rooms.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('find room') }}</a>
                    </div>
                </div>
            </li>

                     <!-- Nav Item  -->
             <li class="nav-item {{ request()->is('admin/system_calendars') || request()->is('admin/system_calendars') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.system_calendars.index') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>{{ __('Calendar') }}</span></a>
            </li>


        </ul>