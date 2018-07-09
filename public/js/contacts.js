$(document).ready(function() {
    $('.contact-form').on('submit', function(e) {
        $.ajax({
            type: "POST",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            _token: "{{ csrf_token() }}",
            url: "/send-mail",
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                subject:   $('#subject').val(),
                messege: $('#messege').val()
                },
            success: function (data) {
                notify('Email was sent successfully');
            },
            error: function() {
                notify('Could not send an email', 'error');
            }
            
        });

        e.preventDefault();
    });
});