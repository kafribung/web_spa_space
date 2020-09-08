<div id="app">
    <form action="/admin/{{ $user->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <div class="alert alert-danger" style="display:none"></div>
            <div class="alert alert-success" style="display:none"></div>
        </div>
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="name" class="form-control"  value="{{ old('name') ?? $user->name }}" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') ?? $user->email }}" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password"  name="password" class="form-control" id="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" id="ajaxSubmit">Edit</button>
        </div>
    </form>
</div>
<script>

jQuery(document).ready(function(){
    jQuery('#ajaxSubmit').click(function(e){
        console.log(e);
        e.preventDefault();
        // $.ajaxSetup({
        //     headers: {
        //     'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //     }
        // });
        jQuery.ajax({
            url: "/admin/{{ $user->id }}",
            type : "POST",
            data: {
            '_method' : 'PATCH' , '_token' : '{{  csrf_token() }}',
            name: jQuery('#name').val(),
            email: jQuery('#email').val(),
            password: jQuery('#password').val(),
            password_confirmation: jQuery('#password_confirmation').val(),
            },
            success: function(data){
                jQuery('.alert-danger').hide();
                jQuery('.alert-success').show();
                jQuery('.alert-success').append('Data Berhasil diedit');
                setInterval(function() {
                    window.location = "/admin";
                }, 1000)
                // jQuery('.alert-danger').hide();
                // $('#open').hide();
                // $('#myModal').modal('hide');
            },
            error : function(data){
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