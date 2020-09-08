@extends('layouts.master_dash')
@section('title', 'Admin | Kafri Bung Space')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid" id="app">
    @if (session('msg'))
        <p class="alert alert-info">{{ session('msg') }}</p>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Admin</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-11">
            <div class="card  shadow mb-4">
                <div class="card-body ">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $angkaAwal = 1
                            @endphp
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $angkaAwal++ }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="" data-remote="/admin/{{ $user->email }}/edit" data-title="Data {{$user->name}}" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>
    <!-- End Logout Modal-->
</div>
<!-- /.container-fluid -->
@push('after_script')
{{-- Edit Admin --}}
<script>
    jQuery(document).ready(function($) {
        $('#editModal').on('show.bs.modal', function(e){
            var button = $(e.relatedTarget);
            var modal  = $(this);
            modal.find('.modal-body').load(button.data("remote"));
            modal.find('.modal-title').html(button.data("title"));
        });
    });
</script>
@endpush
@endsection