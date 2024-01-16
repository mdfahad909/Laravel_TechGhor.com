
<form action="{{ route('post.update', $post->id) }}" method="post" id="post-form" class="general-form"  accept-charset="utf-8" novalidate="novalidate">
    @method('PUT')
@csrf

<div class="modal-body clearfix " id="sshmieul">
    <div class="container-fluid">



<div class="form-group">
    <div class="row">
        <label for="postName" class="col-md-3">{{ __('post Name') }}</label>
        <div class="col-md-9">
            <input type="text" name="post_name" value="{{ old('post_name',$post->post_name) }}" id="postName" required class="form-control" placeholder="{{ __('post Name') }}">
        </div>
            @error('post_name')
               <div class="text-danger">{{ $message }}</div>
           @enderror
    </div>
</div>

<div class="form-group">
    <div class="row">
        <label for="postLogo" class="col-md-3">{{ __('post Logo') }}</label>
        <div class="col-md-9">
            <input type="file"  name="post_logo"  id="post_logo" class="form-control">
        </div>
        
    </div>
</div>

<div class="form-group">
    <div class="row">
        <label for="postName" class="col-md-3">{{ __('post Heading') }}</label>
        <div class="col-md-9">
            <input type="text" name="post_heading" value="{{ old('post_heading',$post->post_heading) }}" id="postHeading" required class="form-control" placeholder="{{ __('post Heading') }}">
        </div>
            @error('post_heading')
               <div class="text-danger">{{ $message }}</div>
           @enderror
    </div>
</div>

<div class="form-group">
    <div class="row">
        <label for="postImage" class="col-md-3">{{ __('post Image') }}</label>
        <div class="col-md-9">
            <input type="file"  name="post_image"  id="post_image" class="form-control">
        </div>
        
    </div>
</div>


<div class="form-group">
    <div class="row">
        <label for="postdetails">{{ __('post Heading') }}</label>
        <div class="col-md-12">
            <textarea id="editor" required  name="post_details" class="form-control">
            {{ old('post_details',$post->post_details) }}
            </textarea>
            
        </div>
            @error('post_details')
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

        window.contactForm = $("#post-form").appForm({
            closeModalOnSuccess: false,
            onSuccess: function (result) {
                $("#post-table").appTable({newData: result.data, dataId: result.id});
                window.contactForm.closeModal();
            }
        });
        // setTimeout(function () {
        //     $("#first_name").focus();
        // }, 200);
    });
</script>  

<script type="text/javascript" src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>	

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>