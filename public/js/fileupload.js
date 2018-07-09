$(document).ready(function() {
  function notify(message, type = 'success', showCloseButton = true) {
    Messenger.options = {
      extraClasses: 'messenger-fixed messenger-on-top messenger-on-center',
      theme: 'flat'
  }

  Messenger().post({
      message: message,
      type: type,
      showCloseButton: showCloseButton
  });
  }

  // File Upload
  // 
  function ekUpload(){
      function Init() {
    
        //console.log("Upload Initialised");
    
        var fileSelect    = document.getElementById('file-upload'),
            fileDrag      = document.getElementById('file-drag'),
            submitButton  = document.getElementById('submit-button');
    
        fileSelect.addEventListener('change', fileSelectHandler, false);
    
        // Is XHR2 available?
        var xhr = new XMLHttpRequest();
        if (xhr.upload) {
          // File Drop
          fileDrag.addEventListener('dragover', fileDragHover, false);
          fileDrag.addEventListener('dragleave', fileDragHover, false);
          fileDrag.addEventListener('drop', fileSelectHandler, false);
        }
      }
    
      function fileDragHover(e) {
        var fileDrag = document.getElementById('file-drag');
    
        e.stopPropagation();
        e.preventDefault();
    
        fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
      }
    
      function fileSelectHandler(e) {
        // Fetch FileList object
        var files = e.target.files || e.dataTransfer.files;
    
        // Cancel event and hover styling
        fileDragHover(e);
    
        // Process all File objects
        for (var i = 0, f; f = files[i]; i++) {
          parseFile(f);
          uploadFile(f);
        }
      }
    
      // Output
      function output(msg) {
        // Response
        var m = document.getElementById('messages');
        m.innerHTML = msg;
      }
      var isGood= false;
      function parseFile(file) {
    
        console.log(file.name);
        output(
          '<strong>' + encodeURI(file.name) + '</strong>'
        );
        
        // var fileType = file.type;
        // console.log(fileType);
        var imageName = file.name;
    
         isGood = (/\.(?=mp4|txt|webm)/gi).test(imageName);
        if (isGood) {
          document.getElementById('start').classList.add("hidden");
          document.getElementById('response').classList.remove("hidden");
          document.getElementById('notcsv').classList.add("hidden");
          // Thumbnail Preview
          document.getElementById('file-csv').classList.remove("hidden");
          document.getElementById('file-csv').src = URL.createObjectURL(file);
          $('#file-csv').attr('alt', 'Uploading file...');
        }
        else {
          document.getElementById('file-csv').classList.add("hidden");
          document.getElementById('notcsv').classList.remove("hidden");
          document.getElementById('start').classList.remove("hidden");
          document.getElementById('response').classList.add("hidden");
          document.getElementById("file-upload-form").reset();
          $('.import-file-test-btn').fadeOut('fast');

          notify('The selected file type is not supported.', 'error');
          
        }
      }
    
      function setProgressMaxValue(e) {
        var pBar = document.getElementById('file-progress');
    
        if (e.lengthComputable) {
          pBar.max = e.total;
          //alert(e.total)
        }
      }
    
      function updateFileProgress(e) {
        var pBar = document.getElementById('file-progress');
    
        if (e.lengthComputable) {
          //alert(e.loaded)
          var progInPercent = ((e.loaded / e.total) * 100).toFixed(0);
          pBar.value = e.loaded;
          $('#progress-counter').text(progInPercent + ' %');
        }
      }
    
      function uploadFile(file) {
        var token = $("meta[name='csrf-token']").attr("content");
        var xhr = new XMLHttpRequest(),
            fileInput = document.getElementById('class-roster-file'),
            pBar = document.getElementById('file-progress');
            fileSizeLimit = 1000024; // In MB
        if (xhr.upload) {
          // Check if file is less than x MB
          if (file.size <= fileSizeLimit * 100024 * 100024 && isGood) {
            // Progress bar
            pBar.style.display = 'inline';
            xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
            xhr.upload.addEventListener('progress', updateFileProgress, false);
            // File received / failed
            xhr.onreadystatechange = function(e) {

              if (xhr.readyState == 4) {
                // Everything is good!
                $('#file-csv').attr('alt', 'File Uploaded');
                //alert('Upload Successful')
                notify('Your Video was uploaded successfully.', 'success');
           
                $('.uploader-view').animate({
                  height: 'toggle'
                }, 500,function() {
                  $('.file-stats-view').fadeIn();
                });
       
                $('.import-file-test-btn').fadeIn('fast');
                // progress.className = (xhr.status == 200 ? "success" : "failure");
                // document.location.reload(true);
              }
            };
            //Start upload
            xhr.open('POST', '/videos-upload', true);
            xhr.setRequestHeader('X-CSRF-Token', token);
            xhr.setRequestHeader('X-File-Name', file.name);
            xhr.setRequestHeader('X-File-Size', file.size);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            //console.log(file);
            xhr.send(file);
            console.log(xhr.response)
           // alert($('.file-upload-form').attr('action'));
          } else {
            //output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
          }
        }
      }
    
      // Check for the various File API support.
      if (window.File && window.FileList && window.FileReader) {
        Init();
      } else {
        document.getElementById('file-drag').style.display = 'none';
      }
    }
    ekUpload();

    $('.upload-view-return-btn').click(function() {
      $('.uploader-view').animate({
        height: 'toggle'
      }, 500,function() {
        $('.file-stats-view').fadeOut();
      });
    });

    $('.import-file-test-btn').click(function() {
      $('.uploader-view').animate({
        height: 'toggle'
      }, 500,function() {
        $('.file-stats-view').fadeIn();
      });
    });

    $('.saveField').click(function(e) {
        $.ajax({
            type: "POST",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            url: "/field-survey-rules/" + $('#id').val(),
            dataType: 'json',
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            data: {
                    rule : $('#field-rule').val(),
                    rule_type : $('#field-rule_type').val(),
                    survey_id : $('#id').val(),
                    active : $("field-active").val(),
                    description : $('#field-description').val(),
                    param_value1 : $('#field-param1').val(),
                    param_value2 : $('#field-param2').val(),
                    param_value3 : $('#field-param3').val(),
                    param_value4 : $('#field-param4').val(),
                    param_value5 : $('#field-param5').val(),
                    param_value6 : $('#field-param6').val(),
                    param_value7 : $('#field-param7').val(),
                    param_value8 : $('#field-param8').val(),
                    param_value9 : $('#field-param9').val()
            },
            success: function (data) {
		Messenger.options = {
                    extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
                    theme: 'flat'
                }

                Messenger().post({
                    message: data.message,
                    type: 'success',
                    showCloseButton: true
                });
                window.location = "type/sms/" + data.survey_id;
            },
            error: function (data){
		Messenger.options = {
                    extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
                    theme: 'flat'
                }

                Messenger().post({
                    message: data.message,
                    type: 'error',
                    showCloseButton: true
                });
            }
        });
        e.preventDefault();
    });

    $('.saveMultiple').click(function(e) {
        $.ajax({
            type: "POST",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            url: "/multiple-survey-rules/" + $('#id').val(),
            dataType: 'json',
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            data: {
                    rule : $('#multiple-rule').val(),
                    rule_type : $('#multiple-rule_type').val(),
                    survey_id : $('#id').val(),
                    active : $("multiple-active").val(),
                    description : $('#multiple-description').val(),
                    param_value1 : $('#multiple-param1').val(),
                    param_value2 : $('#multiple-param2').val(),
                    param_value3 : $('#multiple-param3').val(),
                    param_value4 : $('#multiple-param4').val(),
                    param_value5 : $('#multiple-param5').val(),
                    param_value6 : $('#multiple-param6').val(),
                    param_value7 : $('#multiple-param7').val(),
                    param_value8 : $('#multiple-param8').val(),
                    param_value9 : $('#multiple-param9').val()
            },
            success: function (data) {
		Messenger.options = {
                    extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
                    theme: 'flat'
                }

                Messenger().post({
                    message: data.message,
                    type: 'success',
                    showCloseButton: true
                });
                window.location = "type/sms/" + data.survey_id;
            },
            error: function (data){
		Messenger.options = {
                    extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
                    theme: 'flat'
                }

                Messenger().post({
                    message: data.message,
                    type: 'error',
                    showCloseButton: true
                });
            }
        });
        e.preventDefault();
    });

    $('.saveSingleSurvey').click(function(e) {
        $.ajax({
            type: "POST",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            url: "/single-survey-rules/" + $('#id').val(),
            dataType: 'json',
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            data: {
                    rule : $('#single-rule').val(),
                    rule_type : $('#single-rule_type').val(),
                    survey_id : $('#id').val(),
                    active : $("single-active").val(),
                    description : $('#single-description').val(),
                    param_value1 : $('#single-param1').val(),
                    param_value2 : $('#single-param2').val(),
                    param_value3 : $('#single-param3').val(),
                    param_value4 : $('#single-param4').val(),
                    param_value5 : $('#single-param5').val(),
                    param_value6 : $('#single-param6').val(),
                    param_value7 : $('#single-param7').val(),
                    param_value8 : $('#single-param8').val(),
                    param_value9 : $('#single-param9').val()
            },
            success: function (data) {
		Messenger.options = {
                    extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
                    theme: 'flat'
                }

                Messenger().post({
                    message: data.message,
                    type: 'success',
                    showCloseButton: true
                });
                window.location = "type/sms/" + data.survey_id;
            },
            error: function (data){
		Messenger.options = {
                    extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
                    theme: 'flat'
                }

                Messenger().post({
                    message: data.message,
                    type: 'error',
                    showCloseButton: true
                });
            }
        });
        e.preventDefault();
    });

    $.get("/importrules-datatables/"+ $('#id').val(), function(data, status){
        if (data) {
            $('#importrules_dataTable').DataTable( {
                data: JSON.parse(data),
                columns: [
                    { title: "#" },
                    { title: "Rule" },
                    { title: "Survey Name" },
                    { title: "Field" },
                    { title: "Action"},
                    { title: "Rank"},
                    { title: "Removed"},
                    { title: "Test"},
                    { title: "Survey Active"},
                    { title: "Parameter 1"},
                    { title: "Parameter 2"},
                    { title: "Parameter 3"},
                    { title: "Parameter 4"},
                    { title: "Parameter 5"},
                    { title: "Parameter 6"},
                    { title: "Parameter 7"},
                    { title: "Parameter 8"},
                    { title: "Parameter 9"}
                ]
            } );
         }
     });
});