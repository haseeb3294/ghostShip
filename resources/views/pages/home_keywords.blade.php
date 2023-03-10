@extends('layout.layout')
@section('title', 'GhostShip')
@section('header')
    <header id="page-topbar" class="page-topbar-layout-2">
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
                                        #Nike
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                        #AirJordan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages2" role="tab">
                                        #Playstation5
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
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
    <div class="main-content layout-2">
        <div class="page-content scrollable-div h-100-auto">
            <div class="container-fluid">
                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="home2" role="tabpanel">
                        <div class="single-post border-bottom-1 pb-2 mb-3">
                            <img src="{{ asset('assets/images/avatar/avatar1.png') }}" height="35" alt="img">
                            <div class="single-post-content">
                                <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                                    <p class="mb-0 font-theme fs-14 fw-600">Harry Boone</p>  
                                    <p class="mb-0 fs-10">12:45 AM</p>
                                    <img src="{{ asset('assets/images/icons/slack.png') }}" height="15" alt="img">
                                </div>
                                <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. Ut morbi tellus pellentesque in diam in nunc sed. Felis a non id ornare. <span class="text-danger">Neque enim sit et suscipit ultricies lacus at.</span> Bibendum pellentesque lectus a varius. Nunc diam aliquam enim metus eu sit adipiscing amet. Congue ante sollicitudin adipiscing massa.<span class="text-success">Massa commodo cursus magna sit nulla convallis ac arcu.</span>Adipiscing semper suspendisse a risus. Pulvinar aliquam pretium amet pellentesque tortor ut viverra mauris scelerisque.</p>
                            </div>
                        </div>
                        <div class="single-post border-bottom-1 pb-2 mb-3">
                            <img src="{{ asset('assets/images/avatar/avatar2.png') }}" height="35" alt="img">
                            <div class="single-post-content">
                                <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                                    <p class="mb-0 font-theme fs-14 fw-600">Wade Warren</p>  
                                    <p class="mb-0 fs-10">12:45 AM</p>
                                    <img src="{{ asset('assets/images/icons/twitter.png') }}" height="15" alt="img">
                                </div>
                                <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. Ut morbi tellus pellentesque in diam in nunc sed. Felis a non id ornare. Neque enim sit et suscipit ultricies lacus at. Bibendum pellentesque lectus a varius. Nunc diam aliquam enim metus eu sit adipiscing amet. Congue ante sollicitudin adipiscing massa. Massa commodo cursus magna sit nulla convallis ac arcu. Adipiscing semper suspendisse a risus. Pulvinar aliquam pretium amet pellentesque tortor ut viverra mauris scelerisque.</p>
                            </div>
                        </div>
                        <div class="single-post border-bottom-1 pb-2 mb-3">
                            <img src="{{ asset('assets/images/avatar/avatar3.png') }}" height="35" alt="img">
                            <div class="single-post-content">
                                <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                                    <p class="mb-0 font-theme fs-14 fw-600">Darlene Robertson</p>  
                                    <p class="mb-0 fs-10">12:45 AM</p>
                                    <img src="{{ asset('assets/images/icons/discord.png') }}" height="15" alt="img">
                                </div>
                                <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. Ut morbi tellus pellentesque in diam in nunc sed. Felis a non id ornare. Neque enim sit et suscipit ultricies lacus at. Bibendum pellentesque lectus a varius. Nunc diam aliquam enim metus eu sit adipiscing amet. Congue ante sollicitudin adipiscing massa. Massa commodo cursus magna sit nulla convallis ac arcu. Adipiscing semper suspendisse a risus. Pulvinar aliquam pretium amet pellentesque tortor ut viverra mauris scelerisque.</p>
                            </div>
                        </div>
                        <div class="single-post border-bottom-1 pb-2 mb-3">
                            <img src="{{ asset('assets/images/avatar/avatar4.png') }}" height="35" alt="img">
                            <div class="single-post-content">
                                <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                                    <p class="mb-0 font-theme fs-14 fw-600">Kathryn Murphy</p>  
                                    <p class="mb-0 fs-10">12:45 AM</p>
                                    <img src="{{ asset('assets/images/icons/discord.png') }}" height="15" alt="img">
                                </div>
                                <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. Ut morbi tellus pellentesque in diam in nunc sed. Felis a non id ornare. Neque enim sit et suscipit ultricies lacus at. Bibendum pellentesque lectus a varius. Nunc diam aliquam enim metus eu sit adipiscing amet. Congue ante sollicitudin adipiscing massa. Massa commodo cursus magna sit nulla convallis ac arcu. Adipiscing semper suspendisse a risus. Pulvinar aliquam pretium amet pellentesque tortor ut viverra mauris scelerisque.</p>
                            </div>
                        </div>
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
            <!-- container-fluid -->
        </div>
    </div>
    <div class="right-bar">
        <div class="right-bar-header">
            <p class="fs-13 mb-0 font-theme fw-600">Off-White Nike Virgil Abloh V - Black $199</p>
        </div>
        <div class="right-bar-content scrollable-div">
            <div class="conversation">
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/slack.png') }}" height="16" alt="icon">
                    <span>Botboys Club</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/twitter.png') }}" height="16" alt="icon">
                    <span>Botbroker</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/discord.png') }}" height="16" alt="icon">
                    <span>Flatinums</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/discord.png') }}" height="16" alt="icon">
                    <span>@SNKRD3str0yr</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/slack.png') }}" height="16" alt="icon">
                    <span>Watchlist Monitors</span>
                </div>
                <div class=" conversation-section mb-3">
                    <a href="javascript: void(0);" class="d-flex align-items-center">
                        <i class="ri-add-line me-1 fs-14"></i>
                        <span class="fs-15 text-black fw-500">More</span>
                    </a>
                </div>
            </div>
            <div class="conversation">
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-message icon-theme fs-18"></i>
                    <span class="text-uppercase">Message</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <span class="fs-13">Stay -up to date on new releases this month! Jordan Nike Addidas</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <span class="fs-13">Release Date: 1/13/2025</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <span class="fs-13">MSRP: $199</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <span class="fs-13">Live Raffles: 5</span>
                </div>
                <div class=" conversation-section mb-3">
                    <a href="javascript: void(0);" class="d-flex align-items-center">
                        <i class="ri-add-line me-1 fs-14"></i>
                        <span class="fs-15 text-black fw-500">More</span>
                    </a>
                </div>
            </div>
            <div class="conversation">
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">releases/calendar.nike.com</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">calendar.adidas.com</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">releases/jordanbrand.com</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">calendar.adidas.com</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">releases/jordanbrand.com</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">newbalance.com/new</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">releases/calendar.nike.com</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">calendar.adidas.com</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">releases/jordanbrand.com</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <i class="bx bx-link icon-theme fs-18"></i>
                    <span class="fs-13">newbalance.com/new</span>
                </div>
                <div class=" conversation-section mb-3">
                    <a href="javascript: void(0);" class="d-flex align-items-center">
                        <i class="ri-add-line me-1 fs-14"></i>
                        <span class="fs-15 text-black fw-500">More</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="right-bar-footer">
            <p class="fs-13 mb-0 font-theme fw-600 text-uppercase">Ghostship</p>
            <div class="d-flex align-items-center gap-2">
                <a href="javascript: void(0);" class="sidebar-icons">
                    <i class="bx bx-info-circle icon-theme fs-18"></i>
                </a>
                <a href="javascript: void(0);" class="sidebar-icons">
                    <i class="bx bx-cog icon-theme fs-18"></i>
                </a>
            </div>
        </div>
    </div>
@endsection