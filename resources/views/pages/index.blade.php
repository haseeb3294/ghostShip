@extends('layout.layout')
@section('title', 'GhostShip')
@section('header')
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="17">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                        id="topnav-hamburger-icon">
                        <span class="hamburger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <div class="card-header align-items-center d-flex border-0 h-60 pb-0">
                        <div class="flex-shrink-0 ms-2">
                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab">
                                        Slack
                                        {{-- <span class="badge bg-light rounded-pill text-black ms-2">201</span> --}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                        Discord
                                        {{-- <span class="badge bg-light rounded-pill text-black ms-2">201</span> --}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages2" role="tab">
                                        Twitter
                                        {{-- <span class="badge bg-light rounded-pill text-black ms-2">201</span> --}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('summary') }}">
                                        <div class="d-flex align-items-center">
                                            <i class="ri-add-line me-1 fs-14"></i>
                                            <span>More</span>
                                        </div>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bx bx-search fs-22"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button"
                            class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                            <i class='bx bx-moon fs-22'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content text-muted">
                                <div class="tab-pane active" id="home2" role="tabpanel">
                                    @if(!empty($slack_access))
                                        <div class="row channels">
                                            @if (!empty($slack['channels']))
                                                @foreach ($slack['channels'] as $channel)
                                                <div class="py-3 single-channel border-bottom {{ ($loop->index + 1 == 1) ? 'active' : '' }}">
                                                    <div class="col-12">
                                                        <div class="row align-items-center">
                                                            <div class="col-12">
                                                                <a href="javascript:void(0)">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="w-auto">
                                                                            <span class="blue-marker me-3"></span>
                                                                        </div>
                                                                        <span class="fs-15 font-theme fw-600">
                                                                            {{ ucfirst($channel['name']) }}
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            {{-- <div class="col-sm-9">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="fs-14 font-theme">Amet risus amet magna
                                                                        enim.</span>
                                                                    <span class="fs-13 font-theme opacity-50 ms-4">Etiam
                                                                        suspendisse ut odio vulputate mattis justo hac facilisis
                                                                        varius.</span>
                                                                </div>
                                                            </div> --}}
                                                        </div>
    
                                                    </div>
                                                </div>
                                                <div class="messages border-bottom bg-theme-light" style="display:none;">
                                                    @foreach ($channel['messages']['messages'] as $item)
                                                        @if(isset($item['client_msg_id']))
                                                            <div class="message">
                                                                <p class="fs-12 mb-1 font-theme fw-bold">{{ $item['user_info']->username }}</p>
                                                                <p class="fs-13 mb-0 font-theme">{{ $item['text'] }}</p>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                @endforeach
                                            @else
                                                <div class="text-center pt-5">
                                                    <p class="text-center fs-15 mb-3 font-theme">Error while loading from slack, please try again !</p>
                                                </div>  
                                            @endif
                                        </div>
                                    @else
                                    <div class="text-center pt-5">
                                        <p class="text-center fs-15 mb-3 font-theme">Please add your slack account to continue !</p>
                                        <a href="https://slack.com/oauth/v2/authorize?scope=&amp;user_scope=channels%3Ahistory%2Cchannels%3Aread%2Cusers%3Aread%2Cusers.profile%3Aread&amp;redirect_uri=https%3A%2F%2Fghost-ship.beckapps.co%2Fslack-access-process&amp;client_id=4946016074774.4952826281266" style="align-items:center;color:#fff;background-color:#4A154B;border:0;border-radius:4px;display:inline-flex;font-family:Lato, sans-serif;font-size:16px;font-weight:600;height:48px;justify-content:center;text-decoration:none;width:236px"><svg xmlns="http://www.w3.org/2000/svg" style="height:20px;width:20px;margin-right:12px" viewBox="0 0 122.8 122.8"><path d="M25.8 77.6c0 7.1-5.8 12.9-12.9 12.9S0 84.7 0 77.6s5.8-12.9 12.9-12.9h12.9v12.9zm6.5 0c0-7.1 5.8-12.9 12.9-12.9s12.9 5.8 12.9 12.9v32.3c0 7.1-5.8 12.9-12.9 12.9s-12.9-5.8-12.9-12.9V77.6z" fill="#e01e5a"></path><path d="M45.2 25.8c-7.1 0-12.9-5.8-12.9-12.9S38.1 0 45.2 0s12.9 5.8 12.9 12.9v12.9H45.2zm0 6.5c7.1 0 12.9 5.8 12.9 12.9s-5.8 12.9-12.9 12.9H12.9C5.8 58.1 0 52.3 0 45.2s5.8-12.9 12.9-12.9h32.3z" fill="#36c5f0"></path><path d="M97 45.2c0-7.1 5.8-12.9 12.9-12.9s12.9 5.8 12.9 12.9-5.8 12.9-12.9 12.9H97V45.2zm-6.5 0c0 7.1-5.8 12.9-12.9 12.9s-12.9-5.8-12.9-12.9V12.9C64.7 5.8 70.5 0 77.6 0s12.9 5.8 12.9 12.9v32.3z" fill="#2eb67d"></path><path d="M77.6 97c7.1 0 12.9 5.8 12.9 12.9s-5.8 12.9-12.9 12.9-12.9-5.8-12.9-12.9V97h12.9zm0-6.5c-7.1 0-12.9-5.8-12.9-12.9s5.8-12.9 12.9-12.9h32.3c7.1 0 12.9 5.8 12.9 12.9s-5.8 12.9-12.9 12.9H77.6z" fill="#ecb22e"></path></svg>Add to Slack</a>
                                    </div>  
                                    @endif
                                </div>
                                <div class="tab-pane" id="profile2" role="tabpanel">
                                    <div class="text-center pt-5">
                                        <p class="text-center fs-15 mb-3 font-theme">Please add your discord account to continue !</p>
                                        <a href="javascript:void(0)"
                                               style="align-items:center;color:#fff;background-color:#272727;border:0;border-radius:4px;display:inline-flex;font-family:Lato, sans-serif;font-size:16px;font-weight:600;height:48px;justify-content:center;text-decoration:none;width:236px">
                                                <svg style="height:20px;width:20px;margin-right:12px"
                                                     xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                                                </svg>
                                                Connect Discord</a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages2" role="tabpanel">
                                    <div class="text-center pt-5">
                                        <p class="text-center fs-15 mb-3 font-theme">Please add your twitter account to continue !</p>
                                        <a href="javascript:void(0)"
                                               style="align-items:center;color:#fff;background-color:#2c3362;border:0;border-radius:4px;display:inline-flex;font-family:Lato, sans-serif;font-size:16px;font-weight:600;height:48px;justify-content:center;text-decoration:none;width:236px">
                                               <svg xmlns="http://www.w3.org/2000/svg" style="height:20px;width:20px;margin-right:8px" viewBox="0 0 20 20">
                                                <path fill="#1DA1F2" d="M17.5 4.5c-.6.3-1.3.5-2 .6.7-.4 1.2-1 1.4-1.8-.6.3-1.3.5-2 .7-.6-.7-1.5-1.2-2.5-1.2-1.9 0-3.5 1.6-3.5 3.5 0 .3 0 .6.1.9C5.5 7.7 3.3 6.3 1.5 4.5c-.4.7-.6 1.6-.6 2.5 0 1.7.9 3.2 2.2 4.1-.8 0-1.6-.2-2.3-.6v.1c0 2.4 1.7 4.4 4 4.9-.4.1-.8.2-1.2.2-.3 0-.5 0-.8-.1.5 1.8 2.1 3.1 4 3.1-1.5 1.2-3.4 1.9-5.5 1.9-.4 0-.8 0-1.2-.1 2 1.3 4.4 2 7 2 8.4 0 13-7 13-13v-.6c.9-.7 1.7-1.5 2.3-2.5z"/>
                                              </svg>
                                              
                                                Connect Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
    </div>

@endsection

@section('custom-scripts')
<script>
    $('.single-channel').on('click',function(){
        if ($(this).next('.messages').css('display') !== 'block') {
            $('.messages').hide();
        }
        $(this).next('.messages').slideToggle();
    });
</script>
@endsection

