@extends('admin.layout.app')
@section('title',__('category List'))



@section('content')
        <div class="scrollable-page main-scrollable-page">
            <div id="page-content" class="page-wrapper clearfix">
                <div class="clearfix">
                    <ul id="client-tabs" data-bs-toggle="ajax-tab" class="nav nav-tabs bg-white title" role="tablist">
                        <li>
                            <a role="presentation" href="javascript:;" data-bs-target="#overview">Overview</a>
                        </li>
                        <li>
                            <a role="presentation" href="{{ route('category_list') }}" data-bs-target="#category_list">{{ __('Category') }}</a>
                        </li>
                        <div class="tab-title clearfix no-border">
                            <div class="title-button-group"> 
                                <a href="#" class="btn btn-default" title="{{ __('create category') }}" data-act="ajax-modal" data-title="{{ __('Create category') }}" data-method="get" data-action-url="{{ route('category.create') }}"><i data-feather='plus-circle' class='icon-16'></i> {{ __('Category Create') }}</a>
                            </div>
                        </div>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active" id="overview">
                            <div class="mt20">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="" class="white-link">
                                            <div class="card  dashboard-icon-widget">
                                                <div class="card-body">
                                                    <div class="widget-icon bg-primary"> <i data-feather="briefcase" class="icon"></i> </div>
                                                    <div class="widget-details">
                                                        <h1>2</h1> <span class="bg-transparent-white">Total clients</span> </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="white-link">
                                            <div class="card  dashboard-icon-widget">
                                                <div class="card-body">
                                                    <div class="widget-icon bg-orange"> <i data-feather="users" class="icon"></i> </div>
                                                    <div class="widget-details">
                                                        <h1>3</h1> <span class="bg-transparent-white">Total contacts</span> </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="white-link">
                                            <div class="card  dashboard-icon-widget">
                                                <div class="card-body">
                                                    <div class="widget-icon bg-orange"> <i data-feather="users" class="icon"></i> </div>
                                                    <div class="widget-details">
                                                        <h1>3</h1> <span class="bg-transparent-white">Total contacts</span> </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="white-link">
                                            <div class="card  dashboard-icon-widget">
                                                <div class="card-body">
                                                    <div class="widget-icon bg-orange"> <i data-feather="users" class="icon"></i> </div>
                                                    <div class="widget-details">
                                                        <h1>3</h1> <span class="bg-transparent-white">Total contacts</span> </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                            </div>
                           
                            <script type="text/javascript">
                            $(document).ready(function() {
                                //trigger clients tab when it's client overview page
                                $('body').on('click', '.client-widget-link', function(e) {
                                    e.preventDefault();
                                    var filter = $(this).attr("data-filter");
                                    if(filter) {
                                        window.selectedClientQuickFilter = filter;
                                        $("[data-bs-target='#clients_list']").attr("data-reload", "1").trigger("click");
                                    }
                                });
                                //trigger contacts tab when click on contact widget
                                $('body').on('click', '.contact-widget-link', function(e) {
                                    e.preventDefault();
                                    var filter = $(this).attr("data-filter");
                                    if(filter) {
                                        window.selectedContactQuickFilter = filter;
                                        $("[data-bs-target='#contacts']").attr("data-reload", "1").trigger("click");
                                    }
                                });
                            });
                            </script>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="category_list"></div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(function() {
                    var tab = "";
                    if(tab === "category_list" || tab === "category_list-has_open_projects") {
                        $("[data-bs-target='#category_list']").trigger("click");
                        window.selectedClientQuickFilter = window.location.hash.substring(1);
                    }
                }, 210);
            });
            </script>
        </div>
@endsection