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
                                                <div class="messages border-bottom bg-light" style="display:none;">
                                                    @foreach ($channel['messages']['messages'] as $item)
                                                        @if(isset($item['client_msg_id']))
                                                            <div class="message">
                                                                <p class="fs-12 mb-1 font-theme fw-bold">{{ $item['user_info']->real_name }}</p>
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
                                        <a href="https://slack.com/oauth/v2/authorize?scope=&amp;user_scope=channels%3Ahistory%2Cchannels%3Aread%2Cchannels%3Awrite%2Cusers%3Aread%2Cusers%3Awrite%2Cusers.profile%3Aread%2Cusers.profile%3Awrite&amp;redirect_uri=https%3A%2F%2Fghost-ship.beckapps.co%2Fslack-access-process&amp;client_id=4946016074774.4952826281266" style="align-items:center;color:#fff;background-color:#4A154B;border:0;border-radius:4px;display:inline-flex;font-family:Lato, sans-serif;font-size:16px;font-weight:600;height:48px;justify-content:center;text-decoration:none;width:236px"><svg xmlns="http://www.w3.org/2000/svg" style="height:20px;width:20px;margin-right:12px" viewBox="0 0 122.8 122.8"><path d="M25.8 77.6c0 7.1-5.8 12.9-12.9 12.9S0 84.7 0 77.6s5.8-12.9 12.9-12.9h12.9v12.9zm6.5 0c0-7.1 5.8-12.9 12.9-12.9s12.9 5.8 12.9 12.9v32.3c0 7.1-5.8 12.9-12.9 12.9s-12.9-5.8-12.9-12.9V77.6z" fill="#e01e5a"></path><path d="M45.2 25.8c-7.1 0-12.9-5.8-12.9-12.9S38.1 0 45.2 0s12.9 5.8 12.9 12.9v12.9H45.2zm0 6.5c7.1 0 12.9 5.8 12.9 12.9s-5.8 12.9-12.9 12.9H12.9C5.8 58.1 0 52.3 0 45.2s5.8-12.9 12.9-12.9h32.3z" fill="#36c5f0"></path><path d="M97 45.2c0-7.1 5.8-12.9 12.9-12.9s12.9 5.8 12.9 12.9-5.8 12.9-12.9 12.9H97V45.2zm-6.5 0c0 7.1-5.8 12.9-12.9 12.9s-12.9-5.8-12.9-12.9V12.9C64.7 5.8 70.5 0 77.6 0s12.9 5.8 12.9 12.9v32.3z" fill="#2eb67d"></path><path d="M77.6 97c7.1 0 12.9 5.8 12.9 12.9s-5.8 12.9-12.9 12.9-12.9-5.8-12.9-12.9V97h12.9zm0-6.5c-7.1 0-12.9-5.8-12.9-12.9s5.8-12.9 12.9-12.9h32.3c7.1 0 12.9 5.8 12.9 12.9s-5.8 12.9-12.9 12.9H77.6z" fill="#ecb22e"></path></svg>Add to Slack</a>
                                    </div>  
                                    @endif
                                </div>
                                <div class="tab-pane" id="profile2" role="tabpanel">
                                    <p class="me-3 mb-0">
                                        <img src="assets/images/users/avatar-3.jpg" alt=""
                                            class="avatar-lg rounded float-end ms-3">
                                        Experiment and play around with the fonts that you already have in the software
                                        you’re working
                                        with reputable font websites. commodo enim craft beer mlkshk aliquip jean shorts
                                        ullamco ad
                                        vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna
                                        delectus.commodo enim
                                        craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                                        organic,
                                        assumenda labore aesthetic magna delectus Scale all elements of your design: text,
                                        elements,
                                        buttons, everything. Increase or decrease the letter spacing depending on the
                                        situation and try,
                                        try again until it looks right, and each.
                                    </p>
                                </div>
                                <div class="tab-pane" id="messages2" role="tabpanel">
                                    <p class="ms-3 mb-0">
                                        <img src="assets/images/users/avatar-5.jpg" alt=""
                                            class="avatar-lg rounded float-start me-3">Trust
                                        fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold
                                        out master
                                        cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland
                                        seitan DIY, art
                                        party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                        salvia PBR, beer
                                        mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic,
                                        assumenda labore
                                        aes Homo nostrud organic, assumenda labore aesthetic magna delectus Scale all
                                        elements of your
                                        design: text, elements, buttons, everything.Increase or decrease the letter spacing
                                        depending on
                                        the situation and try, try again until it looks right, and each.
                                    </p>
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

