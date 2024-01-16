<div class="card">
    <div class="table-responsive">
        <table id="testimonial-table" class="display" cellspacing="0" width="100%">
        </table>
    </div>
</div>

<script type="text/javascript">
    loadClientsTable = function (selector) {
    // var showInvoiceInfo = true;
    // if (!"<?php //echo $show_invoice_info; ?>") {
    showInvoiceInfo = false;
    // }

    // var showOptions = true;
    // if (!"<?php //echo $can_edit_clients; ?>") {
    showOptions = false;
    // }

    var quick_filters_dropdown = @include('admin.testimonial.partials.quick_filters_dropdown');
    
    if (window.selectedClientQuickFilter){
    var filterIndex = quick_filters_dropdown.findIndex(x => x.id === window.selectedClientQuickFilter);
    if ([filterIndex] > - 1){
    //match found
    quick_filters_dropdown[filterIndex].isSelected = true;
    }
    }

    $(selector).appTable({
    source: '{{ route("testimonial.list_data") }}',
            filterDropdown: [
            {name: "quick_filter", class: "w200", options: quick_filters_dropdown}
            ],
            columns: [
            {title: "{{ __('common.id') }}", "class": "text-center w50"},
            {title: "{{ __('Service Heading') }}"},
            {title: "{{ __('Service Text') }}"},
            {title: "{{ __('Service Image') }}"},
            {title: "{{ __('common.created_at') }}"},
            {title: "{{ __('common.action') }}","class":"text-center option w60"},
            ],
            printColumns: combineCustomFieldsColumns([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], ''),
            xlsColumns: combineCustomFieldsColumns([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10], '')
    });
    };
    $(document).ready(function () {
    loadClientsTable("#testimonial-table");
    });
</script>
