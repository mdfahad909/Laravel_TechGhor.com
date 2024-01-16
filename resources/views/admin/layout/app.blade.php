<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="fairsketch">
    <link rel="icon" href="{{ asset('admin/assets/images/techghor.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TechGhor</title>

         <script type="text/javascript">
            AppHelper = {};
            AppHelper.settings = {};
            AppHelper.baseUrl = "/";
            AppHelper.assetsDirectory = "{{ asset('admin/assets/') }}";
            AppHelper.settings.defaultThemeColor = "F2F2F2";
            AppHelper.settings.scrollbar="jquery";
        </script>
        
        <script type="text/javascript">
            AppLanugage = {};
            AppLanugage.locale = "en";
            AppLanugage.localeLong = "en-US";

            AppLanugage.days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
            AppLanugage.daysShort = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
            AppLanugage.daysMin = ["Su","Mo","Tu","We","Th","Fr","Sa"];

            AppLanugage.months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
            AppLanugage.monthsShort = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

            AppLanugage.today = "Today";
            AppLanugage.yesterday = "Yesterday";
            AppLanugage.tomorrow = "Tomorrow";

            AppLanugage.search = "Search";
            AppLanugage.noRecordFound = "No record found.";
            AppLanugage.print = "Print";
            AppLanugage.excel = "Excel";
            AppLanugage.printButtonTooltip = "Press escape when finished.";

            AppLanugage.fileUploadInstruction = "Drag-and-drop documents here <br /> (or click to browse...)";
            AppLanugage.fileNameTooLong = "Filename is too long.";

            AppLanugage.custom = "Custom";
            AppLanugage.clear = "Clear";

            AppLanugage.total = "Total";
            AppLanugage.totalOfAllPages = "Total of all pages";

            AppLanugage.all = "All";

            AppLanugage.preview_next_key = "Next (Right arrow key)";
            AppLanugage.preview_previous_key = "Previous (Left arrow key)";

            AppLanugage.filters = "Filters";

            AppLanugage.comment = "Comment";

        </script>
    <script type='text/javascript' src='{{ asset('admin/assets/js/app.all.js') }}'></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        </script>



    <link rel='stylesheet' type='text/css' href="{{ asset('admin/assets/bootstrap/css/bootstrap.min.css') }}" />

    <link rel='stylesheet' type='text/css' href="{{ asset('admin/assets/js/select2/select2.css') }}" />
    <link rel='stylesheet' type='text/css' href="{{ asset('admin/assets/js/select2/select2-bootstrap.min.css') }}" />

    <link rel='stylesheet' type='text/css' href="{{ asset('admin/assets/css/app.all.css') }}" />

    <link rel='stylesheet' type='text/css' href="{{ asset('admin/assets/css/custom-style.css') }}" />

    <style>
    .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
        height: 400px;
    }
    </style>

</head>

<body class="">


    @include('admin.partials.admin_nav')
    <div id="left-menu-toggle-mask">
      @include('admin.partials.admin_sidebar')
        <!-- sidebar menu end -->
        <script type='text/javascript'>
            feather.replace();
        </script>

        <div class="page-container overflow-auto ">
            <div id="pre-loader">
                <div id="pre-loade" class="app-loader">
                    <div class="loading"></div>
                </div>
            </div>

            <div class="scrollable-page main-scrollable-page">
                @yield('content')
            </div>

            <div class="footer p15">
                <div class="float-end">
                    </b>Copyright &copy;<a target="_blank" href="https://www.techghor.com/"><b>TechGhor.com</b></a></b>
                </div>

            </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ajaxModal" role="dialog" aria-labelledby="ajaxModal" aria-hidden="true" data-bs-focus="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ajaxModalTitle" data-title="RISE - Ultimate Project Manager & CRM"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="ajaxModalContent">

                </div>
                <div id='ajaxModalOriginalContent' class='hide'>
                    <div class="original-modal-body">
                        <div class="circle-loader"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModal" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="confirmationModalTitle">Delete?</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="confirmationModalContent" class="modal-body">
                    <div class="container-fluid">
                        Are you sure? You won't be able to undo this action! </div>
                </div>
                <div class="modal-footer clearfix">
                    <button id="confirmDeleteButton" type="button" class="btn btn-danger" data-bs-dismiss="modal"><i data-feather="trash-2" class="icon-16"></i> Delete</button>
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal"><i data-feather="x" class="icon-16"></i> Cancel</button>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>	

    <link rel='stylesheet' type='text/css' href="{{ asset('admin/assets/js/summernote/summernote.css') }}" />

    <script type='text/javascript' src="{{ asset('admin/assets/js/summernote/summernote.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('admin/assets/js/awesomplete/awesomplete.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('admin/assets/js/summernote/lang/summernote-en-US.js') }}"></script>
    <div style='display: none;'>
        <script type='text/javascript'>
            feather.replace();
        </script>
    </div>

            <div style='display: none;'>
            <script type='text/javascript'>
                feather.replace();
                @php
                $error_message = session('error');
                $success_message = session('success');
                @endphp

                @if ($error_message)
                    {{ 'appAlert.error("' . $error_message . '");' }}
                @endif

                @if ($success_message)
                    {{ 'appAlert.success("' . $success_message . '", {duration: 10000});' }}
                @endif
            </script>
        </div>

</body>

</html>