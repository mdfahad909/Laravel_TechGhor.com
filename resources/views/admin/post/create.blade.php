

<form action="{{ route('post.store') }}" method="post" id="post-form" class="general-form"  accept-charset="utf-8" novalidate="novalidate">
@csrf

<div class="modal-body clearfix" id="sshmieul">
    <div class="container-fluid">
    <div class="form-group">
        <div class="row">
            <label for="post_thumbnail" class="col-md-3">{{ __('Post Thumbnail') }}</label>
            <div class="col-md-9">
                <input type="file"  name="post_thumbnail"  id="post_thumbnail" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <label for="category_id" class="col-md-3">{{ __('Blog Category') }}</label>
            <div class="col-md-9"><select class="form-control" name="category_id" id="category_id" value="{{ old('category_id') }}">
                    <option value="">Select Blog Category</option>
                    @foreach ($category as $categoys)
                        <option value="{{$categoys->id}}" {{old('category_id')==$categoys->id?'selected':'' }}> {{$categoys->category_name}}</option>
                    @endforeach
                </select>
            </div>
                @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <label for="title" class="col-md-3">{{ __('Blog Title') }}</label>
            <div class="col-md-9">
                <input type="text" name="title" id="title"  class="form-control" placeholder="{{ __('Blog Title') }}">
            </div>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <label for="short_description" class="col-md-3">{{ __('Short Description') }}</label>
            <div class="col-md-9">
                <textarea name="short_description" class="form-control" id="short_description" cols="30" rows="10" placeholder="Short Description"></textarea>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <label for="editor">{{ __('Post Details') }}</label>
            <div class="col-md-12">
                <textarea id="editor"  name="details" class="form-control"></textarea>
            </div>
                @error('details')
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


        <script>
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    ckfinder: {
                        uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        </script>


