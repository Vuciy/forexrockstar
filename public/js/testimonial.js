$(document).ready(function() {

    $('.delete-testimonial').click(function() {
        var parent = $(this).parents('.testimonial').eq(0);
        parent.hide('400', function () {
            $(this).remove();
        });
        $.ajax({
            type: "POST",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            _token: "{{ csrf_token() }}",
            url: "/testimonial-destroy",
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            data: {
                id: $(this).attr('id')
                },
            success: function (data) {
                notify('you have successfully removed an admn');
            },
            error: function() {
                notify('Could not remove this admin', 'error');
            }
            
        });
    });
    
   /*  jQuery.ajax({
        url: "/testimonial-get",
        success: function (data) {
            if (data) {  
                 alert(data);
            }
        }
        });
 */
    /* ---Post Testimonials ---- */
   /*  $('.testimonail-post').click(function() {
        $.ajax({
            type: "POST",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            _token: "{{ csrf_token() }}",
            url: "/testimonial-post",
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            data: {
                testimonial: $('.testimonial-textarea').val()
                },
            success: function (data) {

                notify('New testimonail has successfully created');
            },
            error: function() {
                notify('Could not create your testimonial', 'error');
            }
            
        });
    }); */
});
