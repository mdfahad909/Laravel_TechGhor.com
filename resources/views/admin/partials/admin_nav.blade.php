<nav class="navbar navbar-expand fixed-top navbar-light navbar-custom shadow-sm" role="navigation" id="default-navbar">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link sidebar-toggle-btn" aria-current="page" href="#">
                    <i data-feather="menu" class="icon"></i>
                </a>
                </li>
            </ul>

            <div class="d-flex w-auto">
                <ul class="navbar-nav">
                    <script type='text/javascript' src='{{asset('admin/assets/js/awesomplete/awesomplete.min.js') }}'></script>

                    <li class="nav-item dropdown">
                        <a href="#" id="personal-language-icon" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i data-feather='globe' class='icon'></i></a>
                        <ul class="dropdown-menu dropdown-menu-end language-dropdown">
                            <li>
                                <a href="#" class="dropdown-item clearfix" data-reload-on-success="1" data-act="ajax-request" data-action-url="https://rise.fairsketch.com/team_members/save_personal_language/Czech">English</a>

                                <a href="#" class="dropdown-item clearfix"
                                    data-reload-on-success="1" data-act="ajax-request" data-action-url="https://rise.fairsketch.com/team_members/save_personal_language/French">Bangla</a>

                                </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#" id="web-notification-icon" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i data-feather='bell' class='icon'></i></a>
                        <div class="dropdown-menu dropdown-menu-end notification-dropdown w400">
                            <div class="dropdown-details card bg-white m0">
                                <div class="list-group">
                                    <span class="list-group-item inline-loader p10"></span>
                                </div>
                            </div>
                            <div class="card-footer text-center mt-2">
                                <a href="https://rise.fairsketch.com/notifications">See All</a> </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown hidden-sm ">
                        <a href="#" id="message-notification-icon" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i data-feather='mail' class='icon'></i></a>
                        <div class="dropdown-menu dropdown-menu-end w300">
                            <div class="dropdown-details card bg-white m0">
                                <div class="list-group">
                                    <span class="list-group-item inline-loader p10"></span>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <a href="https://rise.fairsketch.com/messages">See All</a> </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="user-dropdown" href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="avatar-xs avatar me-1" >
                            <img alt="..." src="{{ asset('admin/assets/images/fahad.jpg')}}">
                        </span>
                        <span class="user-name ml10">Md Fahad</span>
                    </a>
                        <ul class="dropdown-menu dropdown-menu-end w200">




                            <li><a href="{{ route('users.index') }}" class="dropdown-item">Manage User</a></li>

                            <li><a href="{{ route('roles.index') }}" class="dropdown-item">Manage Role</a></li>





                            <li><a href="{{ route('change-password') }}" class="dropdown-item"><i data-feather='key' class='icon-16 me-2'></i>Change Password</a></li>
                            <li><a href="" class="dropdown-item"><i data-feather='settings' class='icon-16 me-2'></i>My preferences</a></li>


                            <li class="dropdown-divider"></li>
                            <li class="pl10 ms-2 mt10 theme-changer">
                                <span class='color-tag clickable mr15 change-theme' data-color='F2F2F2' style='background:#F2F2F2'> </span><span class='color-tag clickable mr15 change-theme' style='background:#00BCD4' data-color='00BCD4'> </span>
                                <span
                                    class='color-tag clickable mr15 change-theme' style='background:#17a589' data-color='17a589'> </span><span class='color-tag clickable mr15 change-theme' style='background:#1E202D' data-color='1E202D'> </span><span class='color-tag clickable mr15 change-theme' style='background:#1d2632' data-color='1d2632'> </span>
                                    <span
                                        class='color-tag clickable mr15 change-theme' style='background:#2471a3' data-color='2471a3'> </span><span class='color-tag clickable mr15 change-theme' style='background:#2e4053' data-color='2e4053'> </span><span class='color-tag clickable mr15 change-theme' style='background:#2e86c1' data-color='2e86c1'> </span>
                                        <span
                                            class='color-tag clickable mr15 change-theme' style='background:#404040' data-color='404040'> </span><span class='color-tag clickable mr15 change-theme' style='background:#555a61' data-color='555a61'> </span><span class='color-tag clickable mr15 change-theme' style='background:#557bbb' data-color='557bbb'> </span>
                                            <span
                                                class='color-tag clickable mr15 change-theme' style='background:#5d78ff' data-color='5d78ff'> </span><span class='color-tag clickable mr15 change-theme' style='background:#839192' data-color='839192'> </span><span class='color-tag clickable mr15 change-theme' style='background:#83c340' data-color='83c340'> </span>
                                                <span
                                                    class='color-tag clickable mr15 change-theme' style='background:#884ea0' data-color='884ea0'> </span><span class='color-tag clickable mr15 change-theme' style='background:#a6acaf' data-color='a6acaf'> </span><span class='color-tag clickable mr15 change-theme' style='background:#a93226' data-color='a93226'> </span>
                                                    <span
                                                        class='color-tag clickable mr15 change-theme' style='background:#d68910' data-color='d68910'> </span>
                            </li>


                            <li class="dropdown-divider"></li>
                            <li><a href="{{ route('logout') }}" class="dropdown-item"><i data-feather="log-out" class='icon-16 me-2'></i> Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>