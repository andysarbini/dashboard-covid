<script>
    $(document).ready(function() {
        $('#posts').addClass('active');
    });

    $('#create_posts').submit(function(e){
        e.preventDefault();
        
        var data = $('#create_posts').serialize();
        var url = '{{route("posts.store")}}';
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: url,
            data:data,
            success: function(data){
                if(data === true) {
                    Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                    });
                    window.location.reload();
                } else {
                    alert('Failed');
                }
            }, error: function(error){
                console.log(error);
            }
        });
    });
    
</script>