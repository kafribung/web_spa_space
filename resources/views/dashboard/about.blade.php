@extends('layouts.master_dash')
@section('title', 'About | Kafri Bung Space')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid" id="app">
    @if (session('msg'))
        <p class="alert alert-info">{{ session('msg') }}</p>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">About {{ Auth::user()->name }}</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->

        <div class="col-xl-12 col-lg-11">
            <div class="card  shadow mb-4">
                <div class="card-header">
                    <a href=""  class="btn btn-primary btn-sm float-right"  data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i></a>
                </div>
                <div class="card-body ">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">About</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $angkaAwal = 1
                            @endphp
                            @forelse ($abouts as $about)
                            <tr>
                                <th scope="row">{{ $angkaAwal++ }}</th>
                                <td>{{ $about->description }}</td>
                                <td>
                                    <a href="" data-remote="/abouts/{{ $about->id }}/edit" data-title="Data Tentang" class="btn btn-warning btn-sm"  data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @empty
                                <p class="alert alert-info">About Kosong</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal-->
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
    <!-- End Edit Modal-->

    <!-- Add Modal-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="alert alert-danger" style="display:none"></div>
                            <div class="alert alert-success" style="display:none"></div>
                        </div>
                        @include('dashboard_from.about_from')
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" id="ajaxSubmit">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add Modal-->
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

{{-- Add --}}
<script>
    jQuery(document).ready(function(){
    jQuery('#ajaxSubmit').click(function(e){
        e.preventDefault();
        jQuery.ajax({
            url: "/abouts",
            type : "post",
            data: {
            '_method' : 'POST' , '_token' : '{{  csrf_token() }}',
            description: jQuery('#description').val(),
            },
            success: function(data){
                jQuery('.alert-danger').hide();
                jQuery('.alert-success').show();
                jQuery('.alert-success').append('Data Berhasil Ditambahkan');
                setInterval(function() {
                    $('.modal').hide();
                    window.location = "/abouts";
                }, 2000)
            },
            error : function(data){
                console.log(data)
                if(data.responseJSON.errors)
                {
                    jQuery('.alert-danger').html('');
                    jQuery.each(data.responseJSON.errors, function(key, value){
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').append('<li>'+value+'</li>');
                    });
                }
            }
            });
        });
});
</script>
@endpush
@endsection