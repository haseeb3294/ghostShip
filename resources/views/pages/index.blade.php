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
                                        <span class="badge bg-light rounded-pill text-black ms-2">201</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab">
                                        Discord
                                        <span class="badge bg-light rounded-pill text-black ms-2">201</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages2" role="tab">
                                        Twitter
                                        <span class="badge bg-light rounded-pill text-black ms-2">201</span>
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
                                    <div class="row">
                                        <div class="bg-gray-light border-left-blue-3 py-3">
                                            <div class="col-12">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="w-10">
                                                                <span class="blue-marker me-3"></span>
                                                            </div>
                                                            <span class="fs-15 font-theme fw-600 w-75">
                                                                Taylor Blake
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-light-pink fs-12 rounded">Design</span>
                                                            <span class="fs-14 font-theme ms-3">Delighted Customers</span>
                                                            <span class="fs-13 font-theme opacity-50 ms-4">Do we have the
                                                                logo for this one?</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="py-3 border-bottom">
                                            <div class="col-12">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center">
                                                            <span class="w-10"></span>
                                                            <span class="fs-15 font-theme fw-600">
                                                                Rahul,Conrad,Vivek
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="d-flex align-items-center">
                                                            <span class="fs-14 font-theme">Diam sed placerat fermentum
                                                                arcu</span>
                                                            <span class="fs-13 font-theme opacity-50 ms-4">Eu auctor sit
                                                                porttitor cras fringilla odio tortor. Leo ut eu vivamus
                                                                et.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="py-3 border-bottom">
                                            <div class="col-12">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="w-10">
                                                                <span class="blue-marker me-3"></span>
                                                            </div>
                                                            <span class="fs-15 font-theme fw-600">
                                                                Devon Lane
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="d-flex align-items-center">
                                                            <span class="fs-14 font-theme">Amet risus amet magna
                                                                enim.</span>
                                                            <span class="fs-13 font-theme opacity-50 ms-4">Etiam
                                                                suspendisse ut odio vulputate mattis justo hac facilisis
                                                                varius.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="py-3 border-bottom">
                                            <div class="col-12">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="w-10">
                                                                <span class="blue-marker me-3"></span>
                                                            </div>
                                                            <span class="fs-15 font-theme fw-600">
                                                                Devon Lane
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-light-green fs-12 rounded">Growth</span>
                                                            <span class="fs-14 font-theme ms-3">Amet risus amet magna
                                                                enim.</span>
                                                            <span class="fs-13 font-theme opacity-50 ms-4">Etiam
                                                                suspendisse ut odio vulputate mattis justo hac facilisis
                                                                varius.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <div class="col-12">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="w-10">
                                                                <span class="blue-marker me-3"></span>
                                                            </div>
                                                            <span class="fs-15 font-theme fw-600">
                                                                Kathryn Murphy
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="d-flex align-items-center">
                                                            <span class="fs-14 font-theme">Amet tincidunt et id aliquam
                                                                diam</span>
                                                            <span class="fs-13 font-theme opacity-50 ms-4">Amet posuere at
                                                                urna felis nec quis consectetur amet. Adipiscing.</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
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
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
    </div>

@endsection

