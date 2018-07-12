
$(document).ready(function() {

        /* ---Post Testimonials ---- */
        $('#update-testimonial').on('submit',function(e) {
            //alert($('.testimonial-textarea').val());
            if ($('.testimonial-textarea').val() == '' || $('.testimonial-title').val() == '') {

                if ($('.testimonial-textarea').val() == '') {
                    $('.testimonial-textarea').css('border-color', '#dd4b39');
                    $('.testimonial-textarea').parent().find('.required-text').text('Please Fill out this field');
                }else {
                    $('.required-text').text('');
                    $('.testimonial-textarea').css('border-color', '#ebebeb') 
                }

                if ($('.testimonial-title').val() == '') {
                    $('.testimonial-title').css('border-color', '#dd4b39');
                    $('.testimonial-title').parent().find('.required-text').text('Please Fill out this field');
                }else {
                    $('.required-text').text('');
                    $('.testimonial-title').css('border-color', '#ebebeb');
                }

            }else {
                $('.required-text').text('');
                $('.testimonial-textarea').css('border-color', '#ebebeb')
                $('.testimonial-title').css('border-color', '#ebebeb');
                $.ajax({
                    type: "POST",
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    _token: "{{ csrf_token() }}",
                    url: "/testimonial-post",
                    contentType: "application/x-www-form-urlencoded; charset=utf-8",
                    data: {
                        testimonial: $('.testimonial-textarea').val(),
                        title: $('.testimonial-title').val()
                        },
                    success: function (data) {
                        notify('New testimonail has successfully created');
                    },
                    error: function() {
                        notify('Could not create your testimonial', 'error');
                    }
                    
                });
            }
            e.preventDefault();
        });


        /* -- post admin -- */
        $('#add-new-admin').on('submit',function(e) {
            //alert($('.testimonial-textarea').val());
            if ($('.admin-name').val() == '' || $('.admin-email').val() == '' || $('.admin-password').val() == '') {

                if ($('.admin-name').val() == '') {
                    $('.admin-name').css('border-color', '#dd4b39');
                    $('.admin-name').parent().find('.required-text').text('Please Fill out this field');
                }else {
                    $('.required-text').text('');
                    $('.admin-name').css('border-color', '#ebebeb') 
                }

                if ($('.admin-email').val() == '') {
                    $('.admin-email').css('border-color', '#dd4b39');
                    $('.admin-email').parent().find('.required-text').text('Please Fill out this field');
                }else {
                    $('.required-text').text('');
                    $('.admin-email').css('border-color', '#ebebeb');
                }

                if ($('.admin-password').val() == '' ) {
                    $('.admin-password').css('border-color', '#dd4b39');
                    $('.admin-password').parent().find('.required-text').text('Please Fill out this field');
                }else {
                    $('.required-text').text('');
                    $('.admin-password').css('border-color', '#ebebeb');
                }

            }else {
                $('.required-text').text('');
                $('.admin-name').css('border-color', '#ebebeb')
                $('.admin-email').css('border-color', '#ebebeb');
                $('.admin-password').css('border-color', '#ebebeb');
                $.ajax({
                    type: "POST",
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    _token: "{{ csrf_token() }}",
                    url: "/add-admin-post",
                    contentType: "application/x-www-form-urlencoded; charset=utf-8",
                    data: {
                        name: $('.admin-name').val(),
                        email: $('.admin-email').val(),
                        password: $('.admin-password').val()
                        },
                    success: function (data) {
                        notify('New Admin has successfully created');
                    },
                    error: function() {
                        notify('Could not create new Admin', 'error');
                    }
                    
                });
            }
            e.preventDefault();
        });


        /* Remove Admin */ 

        $('.remove-admin').click(function() {
            var parent = $(this).parents('tr').eq(0);
            parent.hide('400', function () {
                $(this).remove();
            });
            $.ajax({
                type: "POST",
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                _token: "{{ csrf_token() }}",
                url: "/remove-admin-post",
                contentType: "application/x-www-form-urlencoded; charset=utf-8",
                data: {
                    id: $(this).attr('id')
                    },
                success: function (data) {
                    alert('you have successfully removed an admn')
                    notify('you have successfully removed an admn');
                },
                error: function() {
                    alert('Could not remove this admin');
                    notify('Could not remove this admin', 'error');
                }
                
            });
        });



var channelName = 'TechGuyWeb';
var vidWidth = 500;
var vidHeight = 400;
var maxResults = 10;


    /* Youtube Channe Videos */
    $.get (
        "https://www.googleapis.com/youtube/v3/channels", {
            part: 'contentDetails',
            key: 'sAIzaSyD6hNhqxZSD2ItZUpE_eJrBv7x0Q3D7Zto'},

            function(data) {
                $.each(data.items, function(i, item) {
                    pid = item.contentDetails.relatedPlaylists.uploads;
                    getVids(pid);
                });
            }
    );

    function getVids(pid) {

        $.get (
            "https://www.googleapis.com/youtube/v3/playlistItems", {
                part: 'snippet',
                maxResults: maxResults,
                playlistId: pid,
                key: 'AIzaSyD6hNhqxZSD2ItZUpE_eJrBv7x0Q3D7Zto'
            },
    
                function(data) {
                    $.each(data.items, function(i, item) {
                        vidTitle = item.snippet.tittle;
                        videoId = item.snippet.resourceId.videoId;

                        output = `
                        <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="video">
                            <a class="about-video" href="#">
                                <iframe heightsrc="www.youtube.com/embed/`+videoId+`"></iframe>
                                <i class="play-icon fa fa-play"></i>
                            </a>
                            <a class="course-title" href="#">`+vidTitle+`</a>
                        </div>
                    </div>
                        `;
                    });

                    $('.youtube-channel').append(output);
                }
        );

    }

});