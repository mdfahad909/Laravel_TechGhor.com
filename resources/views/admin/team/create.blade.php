
 


<form action="{{ route('team.store') }}" method="post" id="team-form" class="general-form"  accept-charset="utf-8" novalidate="novalidate">
@csrf

<div class="modal-body clearfix" id="sshmieul">

    <div class="container-fluid">



    <div class="form-group">
        <div class="row">
            <label for="name" class="col-md-3">{{ __('Name') }}</label>
            <div class="col-md-9">
                <input type="text" name="name" id="name"  class="form-control" placeholder="{{ __('Name') }}">
            </div>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <label for="Image" class="col-md-3">{{ __('Image') }}</label>
            <div class="col-md-9">
                <input type="file"  name="image"  id="image" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <label for="position" class="col-md-3">{{ __('Position') }}</label>
            <div class="col-md-9">
                <select name="position" id="position" class="form-control">
                    <option selected disabled>Position</option>
                    <option value="Web Designer">Web Designer</option>
                    <option value="Web Developer">Web Developer</option>

                </select>
                
            </div>
                @error('position')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>



  






    </div>
</div>

<div class="modal-footer">

    <button type="button" class="btn btn-default" data-bs-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x icon-16"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> Close</button>

    <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-16"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> Save</button>

</div>
</form>






<script type="text/javascript">
    $(document).ready(function () {
        var addType = "single";
        //send data to show the task after save
        window.showAddNewModal = false;

        // $("#save-and-add-button").click(function () {
        //     window.showAddNewModal = true;
        //     $(this).trigger("submit");
        // });

        window.contactForm = $("#team-form").appForm({
            closeModalOnSuccess: false,
            onSuccess: function (result) {
                $("#team-table").appTable({newData: result.data, dataId: result.id});
                window.contactForm.closeModal();
            }
        });
        // setTimeout(function () {
        //     $("#first_name").focus();
        // }, 200);
    });
</script>  


