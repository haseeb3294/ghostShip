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
                        <span class="fs-18 font-theme fw-bold">Waitlist</span>
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
        <div class="page-content py-0 h-100-vh">
            <div class="container-fluid h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-6 text-center waitList">
                        <h3>
                            Join the Waitlist
                        </h3>
                        <p>
                            Adipiscing vitae in tellus tellus vitae eget duis nunc. Id sed tincidunt rhoncus at ultrices eget bibendum ipsum. Eu consectetur id dictum non. Purus et malesuada ut dui at ut.
                        </p>
                        <button type="button" class="btn btn-secondary-theme fw-600 fs-18 px-4">Join Waitlist</button>
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
    </div>
@endsection
