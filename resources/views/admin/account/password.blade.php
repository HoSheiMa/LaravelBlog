@extends('layouts.backend.backapp')

@push('css')

@endpush

@section('content')


        <!-- Begin Page Content -->
        <div class="container-fluid">

            
            @if(session('successMsg'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('successMsg') }}
                </div>
            @endif

            @if(session('loginerrorMsg'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('loginerrorMsg') }}
                </div>
            @endif

            @error('password')
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ $message }}
                </div>
            @enderror

            <!-- Category lists -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Change password for {{ Auth::user()->name }}</h6>
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.password.update') }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name"><strong>Current Password</strong></label>
                        <input type="password" class="form-control" id="name" name="old_password" placeholder="Enter Your Current Password">
                    </div>

                    <div class="form-group">
                        <label for="newPassword"><strong>New Password</strong></label>
                        <input type="password" class="form-control" id="newPassword" name="password" placeholder="Enter Your New Password">
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword"><strong>Confirm New Password</strong></label>
                        <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm New Password">
                    </div>


                    <footer class="card-footer text-left mt-5" style="padding-left: 0;">
                        <button type="submit" class="btn btn-primary">Update </button>
                    </footer>
                    </form>
                    
                </div>
          </div>

   



    

        </div><!-- /.container-fluid -->





    </div>
    <!-- End of Main Content -->

@endsection

@push('js')

@endpush