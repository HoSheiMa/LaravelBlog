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

            <!-- Category lists -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile of {{ Auth::user()->name }}</h6>
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.profile.update') }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" aria-describedby="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" aria-describedby="email">
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