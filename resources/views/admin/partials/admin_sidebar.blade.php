<div class="sidebar sidebar-off">
    <a class="sidebar-toggle-btn hide" href="#">
    <i data-feather="menu" class="icon mt-1 text-off"></i>
 </a>

    <a class="sidebar-brand brand-logo" href=""><img class="dashboard-image" src="assets/images/techghor.png" /></a>
    <a class="sidebar-brand brand-logo-mini" href=""><img class="dashboard-image" src="{{ asset('admin/assets/images/favicon.png') }}" /></a>

    <div class="sidebar-scroll">
        <ul id="sidebar-menu" class="sidebar-menu">


            <li class="">
                <a href="{{ route('/') }}" target="blank">
                    <i data-feather="monitor" class="icon"></i>
                    <span class="menu-text ">View Site</span>
                </a>
            </li>


            <li class="{{ request()->routeIs('dashboard')?'active':'' }} main">
                <a href="{{ route('dashboard') }}">
                    <i data-feather="monitor" class="icon"></i>
                    <span class="menu-text ">Dashboard</span>
                </a>
            </li>

           

            <li class="{{ request()->routeIs('service.*')?'open':'' }} expand main ">
                <a href=""> <i data-feather="shopping-cart" class="icon"></i> <span class="menu-text ">{{ __('menu.service') }}</span> </a>
                <ul>
                    <li class="{{ request()->routeIs('service.index')?'active':'' }}">
                        <a href="{{ route('service.index') }}"> <i data-feather='list' width='12'></i> <span>{{ __('Service List') }}</span> </a>
                    </li>
                </ul>
            </li>

            <li class="{{ request()->routeIs('information.index')?'active':'' }} main">
                <a href="{{ route('information.index') }}">
                    <i data-feather="monitor" class="icon"></i>
                    <span class="menu-text ">{{ __('menu.information') }}</span>
                </a>
            </li>

            <li class="{{ request()->routeIs('category.index')?'active':'' }} main">
                <a href="{{ route('category.index') }}">
                    <i data-feather="monitor" class="icon"></i>
                    <span class="menu-text ">{{ __('Category') }}</span>
                </a>
            </li>

            <li class="{{ request()->routeIs('post.index')?'active':'' }} main">
                <a href="{{ route('post.index') }}">
                    <i data-feather="monitor" class="icon"></i>
                    <span class="menu-text ">{{ __('Post') }}</span>
                </a>
            </li>

            <li class="{{ request()->routeIs('testimonial.index')?'active':'' }}">
                <a href="{{ route('testimonial.index') }}"> <i data-feather='list' width='12'></i> <span>{{ __('Testimonial') }}</span> </a>
            </li>
            <li class="{{ request()->routeIs('team.index')?'active':'' }}">
                <a href="{{ route('team.index') }}"> <i data-feather='list' width='12'></i> <span>{{ __('Our Team') }}</span> </a>
            </li>

            {{-- <li class="{{ request()->routeIs('information.edit')?'active':'' }}">
                <a href="{{ route('information.edit',1) }}"> <i data-feather='list' width='12'></i> <span>{{ __('Client') }}</span> </a>
            </li> --}}
           
            <li class="expand main">
                <a href="">
                    <i data-feather="shopping-cart" class="icon"></i>
                    <span class="menu-text">Sales</span>
                </a>
                <ul>
                    <li>
                        <a href="">
                                <i data-feather='minus' width='12'></i>
                                <span>Invoices</span>
                            </a>
                    </li>
                    <li>
                        <a href="">
                                <i data-feather='minus' width='12'></i>
                                <span>Invoices1</span>
                            </a>
                    </li>
                    <li>
                        <a href="">
                                <i data-feather='minus' width='12'></i>
                                <span>Invoices2</span>
                            </a>
                    </li>
                </ul>
            </li>



            <li class="main">
                <a href="">
                    <i data-feather="settings" class="icon"></i>
                    <span class="menu-text ">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>