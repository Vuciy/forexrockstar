$(document).ready(function() {
    var channelName = 'forex rockstar';
var vidWidth = 500;
var vidHeight = 400;
var maxResults = 10;

    /* Youtube Channe Videos */
    $.get (
        "https://www.googleapis.com/youtube/v3/channels", {
            part: 'contentDetails',
            forUsername: channelName,
            key: 'AIzaSyD6hNhqxZSD2ItZUpE_eJrBv7x0Q3D7Zto'},

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
                    console.log(data.items[0].snippet.title)
                    $.each(data.items, function(i, item) {
                        //alert(item.snippet.title)
                        vidTitle = item.snippet.title;
                        videoId = item.snippet.resourceId.videoId;

                        src ='https://www.youtube.com/embed/'+videoId;

                        output = `
                        <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="video">
                            <span class="">
                                <iframe >
                                    src="`+src+`">
                                </iframe>
                            </span>
                            <a class="course-title" href="`+src+`">`+vidTitle+`</a>
                        </div>
                    </div>
                        `;

                        $('.youtube-channel').append(output);
                    });
                }
        );

    }

});