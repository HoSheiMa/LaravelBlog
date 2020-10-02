@extends('layouts.backend.backapp')

@push('css')
<link rel="stylesheet" href="{{ asset('public/assets/backend/vendors/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />
@endpush

@section('content')


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                
            </div>

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <!-- Category lists -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create New Post</h6>
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.posts.store') }}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    @csrf
                                
                        <div class="row">
                        
                            <div class="col-lg-8">
                                <div class="block-title">
                                    <h6 style="font-weight: 800;">POST DETAILS</h6>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <label for="postTitle">Post Title</label>
                                    <input type="text" class="form-control" name="title" id="postTitle" aria-describedby="postTitle">
                                </div>
                                <div class="form-group">
                                    <label for="postMetaTitle">Post Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title" id="postMetaTitle" aria-describedby="postMetaTitle">
                                </div>
                                <div class="form-group">
                                    <label for="postMetaDescription">Post Meta Description</label>
                                    <input type="text" class="form-control" name="meta_description" id="postMetaDescription" aria-describedby="postMetaDescription">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="postEditor">Post Content</label>
                                    <textarea class="form-control" name="body" id="postEditor" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-4">  
                                <div class="block-title">
                                    <h6 style="font-weight: 800;">POST META</h6>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <label>Select category</label>
                                    <select class="form-control" name="categories[]" id="category">
                                    <!--<select class="form-control" name="category_id" id="category">-->
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Featured Image</label>

                                        <div class="fileupload fileupload-new mb-4" data-provides="fileupload">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="fas fa-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileupload-exists">Change</span>
                                                    <span class="fileupload-new">Select file</span>
                                                    <input type="file" name="image" />
                                                </span>
                                                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>
                        
                        </div>

                        <footer class="card-footer text-left" style="padding-left: 0;">
                            <button type="submit" class="btn btn-primary">Submit </button>
                            <a href="{{ route('admin.posts.index') }}" type="reset" class="btn btn-default">Reset</a>
                        </footer>

                    </form>

                </div> <!-- /.card-body -->
          </div> <!-- /.card -->

        </div><!-- /.container-fluid -->





    </div>
    <!-- End of Main Content -->

@endsection

@push('js')
<script src="{{ asset('public/assets/backend/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('public/assets/backend/vendors/tinymce/tinymce.min.js') }}"></script>
<script>
    $(function() {
        tinymce.init({
            selector: '#postEditor',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample ',
            image_advtab: true
        });
        tinymce.suffix = ".min";
        tinyMCE.baseURL = '{{ asset('public/assets/backend/vendors/tinymce') }}';
    });
</script>
@endpush