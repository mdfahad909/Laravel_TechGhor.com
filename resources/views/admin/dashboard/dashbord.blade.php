@extends('admin.layout.app')
@section('content')
<div id="page-content" class="page-wrapper clearfix dashboard-view">
    <div class="clearfix mb15 dashbaord-header-area">
        <div class="clearfix float-start"> <span class="float-start p10 pl0">
            <span style="background-color: #ad159e" class="color-tag border-circle"></span> </span>
            <h4 class="float-start">My work dashboard</h4> </div>
    </div>
    <script>
    $(document).ready(function() {
        //modify design for mobile devices
        if(isMobile()) {
            var $dashboardTags = $("#dashboards-color-tags"),
                $dashboardTagsClone = $dashboardTags.clone(),
                $dashboardDropdown = $(".dashboard-dropdown .dropdown-menu");
            $dashboardTags.addClass("hide");
            $dashboardTagsClone.removeClass("float-end");
            $dashboardTagsClone.children("span").addClass("p5 text-center inline-block");
            $dashboardTagsClone.children("span").find("a").each(function() {
                $(this).children("span").removeClass("p10").addClass("p5");
            });
            var liDom = "<li id='color-tags-container-for-mobile' class='bg-off-white text-center'></li>"
            $dashboardDropdown.prepend(liDom);
            $("#color-tags-container-for-mobile").html($dashboardTagsClone);
        }
    });
    </script>
    <div class="clearfix row">
        <div class="col-md-12 widget-container"> </div>
    </div>
    <div class="dashboards-row clearfix row">
        <div class="widget-container col-md-4">
            <a href="https://rise.fairsketch.com/projects/index" class="white-link">
                <div class="card dashboard-icon-widget">
                    <div class="card-body ">
                        <div class="widget-icon bg-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid icon">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                        </div>
                        <div class="widget-details">
                            <h1>4</h1> <span class="bg-transparent-white">Open Projects</span> </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="widget-container col-md-4">
            <a href="https://rise.fairsketch.com/projects/all_projects/completed" class="white-link">
                <div class="card dashboard-icon-widget">
                    <div class="card-body ">
                        <div class="widget-icon bg-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="widget-details">
                            <h1>0</h1> <span class="bg-transparent-white">Projects Completed</span> </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="widget-container col-md-4">
            <div id="js-clock-in-out" class="card dashboard-icon-widget clock-in-out-card">
                <div class="card-body">
                    <div class="widget-icon  bg-info ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock icon">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="widget-details">
                        <a href="#" class="btn btn-default text-primary" title="Clock Out" id="timecard-clock-out" data-post-id="5" data-post-clock_out="1" data-act="ajax-modal" data-title="Clock Out" data-action-url="https://rise.fairsketch.com/attendance/note_modal_form">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out icon-16">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg> Clock Out</a>
                        <div class="mt5 bg-transparent-white" title="2022-06-08 05:32:55 pm">Clock started at : 05:32:55 pm</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection