// loading bar function
function postUploadProgress(percentComplete) {
    $('.loading-bar').css('width', percentComplete + '%');
    $('.loading-bar').css('transition', 'all 0.8s');
}

function onRequestSuccess(response, button, buttonText, prompt, redirctUrl) {
    if (response.success == true) {
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
        prompt.html('<div class="alert alert-success mb-4">' + response.message + '</div>');
        setTimeout(() => {
            window.location.href = redirctUrl;
        }, 2000);
    } else {
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
        prompt.html('<div class="alert alert-danger mb-4">' + response.message + '</div>');
        button.prop('disabled', false);
        button.html(buttonText);
        setTimeout(function(){
            $('.loading-bar').css('transition', 'none');
            $('.loading-bar').css('width', 0);
        },500);
    }
}

function ajaxCall(form, action, btn, redirect, successCallback) {

    var formData = new FormData(form[0]);
    var btnText = btn.html();
    var button = btn;
    var prompt = $('body').find('.prompt');
    $.ajax({
        type: "POST",
        url: action,
        dataType: 'json',
        contentType: false,
        processData: false,
        cache: false,
        data: formData,
        mimeType: "multipart/form-data",
        beforeSend: function () {
            btn.prop('disabled', true);
            btn.html('Processing...');
        },
        success: function (res) {
            if ((successCallback !== undefined) && (successCallback !== null)) {
                successCallback(res, button, btnText, prompt, redirect);
            }
        },
        error: function (e) { 
            $('html, body').animate({
                scrollTop: $("body").offset().top
            }, 500);
            prompt.html('<div class="alert alert-danger mb-4">Error : Please try again later</div>');
            button.prop('disabled', false);
            button.html(btnText);
            setTimeout(function(){
                $('.loading-bar').css('transition', 'none');
                $('.loading-bar').css('width', 0);
            },500);
        },
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = 100 * (evt.loaded / evt.total);
                    //Do something with upload progress here
                    postUploadProgress(percentComplete.toFixed(2))
                }
            }, false);

            xhr.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = 100 * (evt.loaded / evt.total);
                    //Do something with download progress
                    postUploadProgress(percentComplete.toFixed(2))

                }
            }, false);

            return xhr;
        }
    });
}
