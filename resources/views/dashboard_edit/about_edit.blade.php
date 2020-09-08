<div id="app">
    <form>
        <div class="form-group">
            <div class="alert alert-danger" style="display:none"></div>
            <div class="alert alert-success" style="display:none"></div>
        </div>
        @include('dashboard_from.about_from', compact('about'))
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-warning" id="ajaxSubmit">Edit</button>
        </div>
    </form>
</div>
<script>

jQuery(document).ready(function(){
    jQuery('#ajaxSubmit').click(function(e){
        console.log(e);
        e.preventDefault();
        jQuery.ajax({
            url: "/abouts/{{ $about->id }}",
            type : "POST",
            data: {
            '_method' : 'PATCH' , '_token' : '{{  csrf_token() }}',
            description: jQuery('#description').val(),
            },
            success: function(data){
                jQuery('.alert-danger').hide();
                jQuery('.alert-success').show();
                jQuery('.alert-success').append('Data Berhasil diedit');
                setInterval(function() {
                    window.location = "/abouts";
                }, 1000)
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