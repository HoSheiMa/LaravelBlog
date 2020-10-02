@extends('layouts.backend.backapp')

@push('css')

@endpush

@section('content')


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            @if(session('successMsg'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('successMsg') }}
                </div>
            @endif

            <!-- Post lists -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Comments ({{ $comments->count() }})</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Comment</th>
                                    <th>In reply to</th>
                                    <th>Author</th>
                                    <th>Created at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $key=>$comment)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ str_limit($comment->comment, '100') }}</td>
                                    <td><a target="_blank" href="{{ route('post.details', $comment->post->slug) }}">{{ str_limit($comment->post->title, '40') }}</a></td>
                                    <td>{{ $comment->user->name }}</td>
                                    <td>{{ $comment->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('post.details', $comment->post->slug . '#comments') }}" target="_blank">View</a> - 
                                        <a href="#" onclick="deleteComment({{ $comment->id }})">Delete</a>
                                        <form id="delete-form-{{ $comment->id }}" action="{{ route('admin.comment.destroy', $comment->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        
                                
                            </tbody>
                        </table>
                    </div>
                </div>
          </div>

        </div><!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    function deleteComment(id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
            }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-' + id).submit();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
                )
            }
        })
    }
</script>
@endpush