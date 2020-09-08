@extends('layouts.master_dash')
@section('title', 'Create | Kafri Bung Space')
@section('content')
 <!-- Begin Page Content -->
<div class="container-fluid" id="app">
    @if (session('msg'))
        <p class="alert alert-info">{{ session('msg') }}</p>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Blog</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        @forelse ($blogs as $blog)
        <div class="col-lg-4">
            <div class="card mb-4 py-3 border-left-success">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $blog->title }}</h6>
                </div>
                <div class="card-body">
                    <p>{!! Str::limit($blog->description, 30) !!}</p>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="/blogs/{{ $blog->slug }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a  onclick="deleteData({{ $blog->id }})" id="delete" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </div>
                        <div>
                            <small>{{ $blog->user->name }}</small>
                            <small>{{ $blog->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <p class="alert alert-success">Data Blog is Null</p>
        @endforelse
    </div>
</div>
<!-- /.container-fluid -->
@push('after_script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
function deleteData(id) {
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
        $.ajax({
                url : "/blogs/"+ id,
                type : "POST",
                data : {'_method' : 'DELETE' , '_token' : '{{  csrf_token() }}'},
                success: function(){
                    swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success',
                    ),
                    window.location.href = "/blog";
                    // location.reload();
                },
                error : function(){
                    swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :',
                    'error')
                }
            })
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :',
            'error'
            )
        }
    })
}
</script>
@endpush
@endsection