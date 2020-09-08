@extends('layouts.master_dash')
@section('title', 'Edit Create | Kafri Bung Space')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Blog</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-11">
            <div class="card shadow">
                <div class="card-body">
                    <form action="/blogs/{{ $blog->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        @include('dashboard_from.blog_from', ['blog' => $blog])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@push('after_script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endpush
@endsection