<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ghostship - Verify Email</title>
    @include('includes.head')
</head>
<body>
    <div class="loading-bar" style="width: 0;"></div>
    <div class="d-flex align-items-center justify-content-center" style="min-height:100vh;">
        <div class="w-40 m-auto px-5 py-5 shadow-lg rounded">
            <div class="text-center mb-4">
                <img src="{{ asset('assets/images/figma/ghostship.png') }}" height="80" width="80" alt="logo" class="mb-2">
                <h1 class="mb-1 fw-bold fs-20">Ghostship</h1>
                <p class="mb-0 fs-12">Enter the code to verify your email.</p>
            </div>
            <form id="user_verify_form">
                @csrf
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="prompt"></div>
                    </div>
                    <div class="col-12">
                        @if(Session::has('message'))
                        <div class="mb-3 flash-message" style="display:block">
                            <div class="alert alert-success">{{ Session::get('message') }}</div> 
                        </div>
                        @endif
                        <div class="mb-4">
                            <div class="did-floating-label-content">
                                <input type="hidden" name="user_id" value="{{ $userID }}">
                                <input class="did-floating-input" type="text" name="otp" required>
                                <label class="did-floating-label">Code</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" id="user_verify_btn" class="ms-auto btn btn-secondary-theme fw-600 fs-18 px-5 mb-2">Verify</button>
                        <p class="mb-0 fs-13">Didn't recieve the code? <a href="{{ route('resend_otp',$userID) }}" class="text-decoration-underline">Send again</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('includes.scripts')
    <script>
        $(document).ready(function(){
            if($('.flash-message').css('display') === 'block'){
                setTimeout(() => {
                    $('.flash-message').hide();   
                }, 3000);
            }
        });
    </script>
    <script>
        $('#user_verify_form').validate({
            submitHandler: function() {
                ajaxCall($('#user_verify_form'), "{{ route('user_verify_email') }}", $('#user_verify_btn'),
                    "{{ route('index') }}", onRequestSuccess);
            }
        });
    </script>
</body>
</html>