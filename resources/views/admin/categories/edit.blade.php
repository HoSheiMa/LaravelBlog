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
                <h6 class="m-0 font-weight-bold text-primary">Edit Category: {{ $category->name }}</h6>
                </div>
                <div class="card-body">


                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-group row">               
                                <label class="col-md-3 control-label text-lg-left pt-2" for="name">Category Title</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control mb-4">
                                </div>  
                            </div>

                            <div class="form-group row">               
                                <label class="col-md-3 control-label text-lg-left pt-2" for="name">Category Meta Title</label>
                                <div class="col-md-6">
                                    <input type="text" name="meta_title" value="{{ $category->meta_title }}" id="name" class="form-control mb-4">
                                </div>  
                            </div>

                            <div class="form-group row">               
                                <label class="col-md-3 control-label text-lg-left pt-2" for="name">Category Meta Description</label>
                                <div class="col-md-6">
                                    <input type="text" name="meta_description" value="{{ $category->meta_description }}" id="name" class="form-control mb-4">
                                </div>  
                            </div>

                            <footer class="card-footer text-left" style="padding-left: 0;">
                                <button type="submit" class="btn btn-primary">Update </button>
                                <a href="{{ route('admin.categories.index') }}" type="reset" class="btn btn-default">Reset</a>
                            </footer>

                        </form>

                    
                </div>
          </div>

   



    

        </div><!-- /.container-fluid -->





    </div>
    <!-- End of Main Content -->

@endsection

@push('js')
<script src="{{ asset('public/assets/backend/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
@endpush