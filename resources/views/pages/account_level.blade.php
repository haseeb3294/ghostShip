@extends('layout.layout')
@section('title','GhostShip')
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
                    <div class="d-flex align-items-center">
                        <span class="fs-18 font-theme fw-bold">Account</span>
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
                    <div class="col-xl-12">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="theme-card-2">
                                            <div class="border-bottom-1 mb-3">
                                                <p class="mb-3 fw-bold fs-15">Suscipit vitae cras  quis.</p>
                                                <p class="text-theme-light mb-3 lh-24">Tincidunt leo adipiscing tincidunt rutrum fringilla quam. Varius phasellus purus scelerisque ultrices in volutpat dictum leo sit. Sit aliquet feugiat dignissim consectetur placerat ipsum sollicitudin suspendisse auctor.</p>
                                            </div>
                                            <div>
                                                <ul class="account-features">
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Elit at</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Turpis lectus in euismod</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Consequat faucibus</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Semper</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Lobortis iaculis commodo</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Consectetur pretium proin</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Morbi malesuada egestas</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Vel urna elit iaculis orci</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Sagittis tellus mattis in</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Elit facilisis turpis quis quis</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Varius pharetra nec</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Commodo vivamus sed</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="theme-card-2">
                                            <div class="border-bottom-1 mb-3">
                                                <p class="mb-3 fw-bold fs-15">Vulputate vel dolor</p>
                                                <p class="text-theme-light mb-3 lh-24">Nisl condimentum lectus mauris tortor. Malesuada morbi aliquet id feugiat enim sit diam. In massa eget pellentesque mattis rutrum erat integer. Massa suspendisse enim sit vitae mi cras tellus nulla id. Viverra suspendisse sed aenean velit sit</p>
                                            </div>
                                            <div>
                                                <ul class="account-features">
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Volutpat</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Eu ipsum at nisl amet</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Amet nulla sed aliquet</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Sagittis leo</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Amet aliquam amet</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Scelerisque in enim lectus</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Ipsum quam vel proin eget</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Massa amet eleifend neque</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Cursus iaculis aliquet</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Vestibulum arcu et nunc</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-3">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Aliquet nisi proin turpis</p>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2">
                                                        <img src="{{ asset('assets/images/figma/check-icon.png') }}" alt="icon" height="15">
                                                        <p class="mb-0 fw-600">Volutpat sed a in nunc et</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div><!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
    </div>

@endsection
