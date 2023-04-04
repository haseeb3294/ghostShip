<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ghostship - Login</title>
    @include('includes.head')
</head>
<body>
    <div class="loading-bar" style="width: 0;"></div>
    <div class="d-flex align-items-center justify-content-center" style="min-height:100vh;">
        <div class="w-40 m-auto px-5 py-5 shadow-lg rounded">
            <div class="text-center mb-4">
                <img src="{{ asset('assets/images/figma/ghostship.png') }}" height="80" width="80" alt="logo" class="mb-2">
                <h1 class="mb-1 fw-bold fs-20">Ghostship</h1>
                <p class="mb-0 fs-12">Login to continue to Ghostship</p>
            </div>
            <form id="user_signin_form" method="post">
                @csrf
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="prompt"></div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <div class="did-floating-label-content">
                                <input class="did-floating-input" type="email"
                                       placeholder="" name="email" required>
                                <label class="did-floating-label">Email Address</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <div class="did-floating-label-content">
                                <input class="did-floating-input" type="password"
                                       placeholder="" name="password" required>
                                <label class="did-floating-label">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" id="user_signin_btn" class="ms-auto btn btn-secondary-theme fw-600 fs-18 px-5 mb-2">Login</button>
                        <p class="mb-0 fs-13">You don't have an account? <a href="{{ route('user_signup') }}" class="text-decoration-underline">Signup</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('includes.scripts')
    <script>
        $('#user_signin_form').validate({
            submitHandler: function() {
                var formData = new FormData($('#user_signin_form')[0]);
                var btnText = $('#user_signin_btn').html();
                var button = $('#user_signin_btn');
                var prompt = $('body').find('.prompt');
                $.ajax({
                    type: "POST",
                    url: "{{ route('user_signin_action') }}",
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    cache: false,
                    data: formData,
                    mimeType: "multipart/form-data",
                    beforeSend: function() {
                        $('#user_signin_btn').prop('disabled', true);
                        $('#user_signin_btn').html('Processing...');
                    },
                    success: function(response) {
                        if (response.success == true) {
                            $('html, body').animate({
                                scrollTop: $("body").offset().top
                            }, 500);
                            prompt.html('<div class="alert alert-success mb-4">' + response.message + '</div>');
                            setTimeout(() => {
                                window.location.href = `{{ route('index') }}`;
                            }, 2000);
                        } 
                        else if (response.success === 'verification'){
                            $('html, body').animate({
                                scrollTop: $("body").offset().top
                            }, 500);
                            prompt.html('<div class="alert alert-warning mb-4">' + response.message + '</div>');
                            setTimeout(() => {
                                window.location.href = `{{ route('verify_email','id') }}`.replace('id',response.session_id);
                            }, 2000);
                        }    
                        else {
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
                    },
                    error: function(e) {
                        $('html, body').animate({
                            scrollTop: $("body").offset().top
                        }, 500);
                        prompt.html(
                            '<div class="alert alert-danger mb-4">Error : Please try again later</div>'
                            );
                        button.prop('disabled', false);
                        button.html(btnText);
                        setTimeout(function() {
                            $('.loading-bar').css('transition', 'none');
                            $('.loading-bar').css('width', 0);
                        }, 500);
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
        });
    </script>
</body>
</html>