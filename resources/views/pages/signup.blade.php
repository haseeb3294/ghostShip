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
                        <span class="fs-18 font-theme fw-bold">Create Account</span>
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
                            <div class="card-body form-steps">
                                <form action="#">
                                    <div id="custom-progress-bar" class="progress-nav mb-4">
                                        <div class="progress" style="height: 1px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <ul class="nav nav-pills progress-bar-tab custom-nav px-4" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link rounded-pill active"
                                                        data-progressbar="custom-progress-bar" id="pills-gen-info-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-gen-info"
                                                        type="button" role="tab" aria-controls="pills-gen-info"
                                                        aria-selected="true">1
                                                </button>
                                                <span class="form-wizard-title mt-3">
                                                    Personal Info
                                                </span>
                                            </li>
                                            <li class="nav-item position-relative" role="presentation">
                                                <button class="nav-link rounded-pill"
                                                        data-progressbar="custom-progress-bar" id="pills-info-desc-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-info-desc"
                                                        type="button" role="tab" aria-controls="pills-info-desc"
                                                        aria-selected="false">2
                                                </button>
                                                <span class="form-wizard-title mt-3">
                                                    Select Plan
                                                </span>
                                            </li>
                                            <li class="nav-item position-relative" role="presentation">
                                                <button class="nav-link rounded-pill"
                                                        data-progressbar="custom-progress-bar" id="pills-success-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-success"
                                                        type="button" role="tab" aria-controls="pills-success"
                                                        aria-selected="false">3
                                                </button>
                                                <span class="form-wizard-title left-30 mt-3">
                                                    Payment info
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel"
                                             aria-labelledby="pills-gen-info-tab">
                                            <div class="mt-5 pt-4">
                                                <div class="mb-4">
                                                    <div>
                                                        <p class="fs-12 fw-600 font-theme opacity-75">PROFILE DETAILS</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div class="did-floating-label-content">
                                                                <input class="did-floating-input" type="text"
                                                                       placeholder=" ">
                                                                <label class="did-floating-label">First Name</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div class="did-floating-label-content">
                                                                <input class="did-floating-input" type="text"
                                                                       placeholder=" ">
                                                                <label class="did-floating-label">Last Name</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div class="did-floating-label-content">
                                                                <input class="did-floating-input" type="email"
                                                                       placeholder=" ">
                                                                <label class="did-floating-label">Email Address</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div class="did-floating-label-content">
                                                                <input class="did-floating-input" type="text"
                                                                       placeholder=" ">
                                                                <label class="did-floating-label">Phone No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div class="did-floating-label-content">
                                                                <input class="did-floating-input" type="password"
                                                                       placeholder=" ">
                                                                <label class="did-floating-label">Create Password</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div class="did-floating-label-content">
                                                                <input class="did-floating-input" type="password"
                                                                       placeholder=" ">
                                                                <label class="did-floating-label">Confirm Password</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div class="did-floating-label-content">
                                                                <input class="did-floating-input" type="text"
                                                                       placeholder=" ">
                                                                <label class="did-floating-label">User Name</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <div class="did-floating-label-content">
                                                                <input class="did-floating-input" type="text"
                                                                       placeholder=" ">
                                                                <label class="did-floating-label">Date of birth</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <div class="did-floating-label-content">
                                                                <input class="did-floating-input" type="text"
                                                                       placeholder=" ">
                                                                <label class="did-floating-label">Address</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button"
                                                        class="ms-auto btn btn-secondary-theme fw-600 fs-18 px-5 nexttab"
                                                        data-nexttab="pills-info-desc-tab">Next
                                                </button>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->

                                        <div class="tab-pane fade" id="pills-info-desc" role="tabpanel"
                                             aria-labelledby="pills-info-desc-tab">
                                            <div class="mt-5 pt-4">
                                                <div class="mb-4">
                                                    <div>
                                                        <p class="fs-12 fw-600 font-theme opacity-75">SELECT PLAN</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="border border-1 rounded p-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-9">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="round">
                                                                            <input type="checkbox" id="checkbox" name="plan"/>
                                                                            <label for="checkbox"></label>
                                                                        </div>
                                                                        <div>
                                                                            <h3 class="fs-18 font-theme">Basic Account Plan</h3>
                                                                            <p class="mb-0 font-theme opacity-75 lh-38">
                                                                                Turpis est suspendisse tortor in ipsum pretium sed. Auctor auctor volutpat et nec bibendum vel. Senectus purus.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="mb-0 fs-22 fw-bold text-blue text-end">$20/month</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-12">
                                                        <div class="border border-1 rounded p-3">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-9">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="round">
                                                                            <input type="checkbox" id="checkbox1" name="plan" />
                                                                            <label for="checkbox1"></label>
                                                                        </div>
                                                                        <div>
                                                                            <h3 class="fs-18 font-theme">Upgrade to pro account Plan</h3>
                                                                            <p class="mb-0 font-theme opacity-75 lh-38">
                                                                                At vitae vitae habitant elit tortor quis nisl. Cursus felis a risus molestie tristique. Commodo consectetur nisl sed.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="mb-0 fs-22 fw-bold text-blue text-end">$30/month</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button"
                                                        class="ms-auto btn btn-secondary-theme btn-label fw-600 right fs-18 px-5 nexttab nexttab"
                                                        data-nexttab="pills-success-tab">Next
                                                </button>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->

                                        <div class="tab-pane fade" id="pills-success" role="tabpanel"
                                             aria-labelledby="pills-success-tab">
                                            <div class="mt-5 pt-4">
                                                <div class="mb-2">
                                                    <div>
                                                        <p class="fs-12 fw-600 font-theme opacity-75">Payment Information</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="theme-card mb-5">
                                                            <div class="card-content">
                                                                <div class="alert alert-theme-blue d-flex align-items-center gap-2">
                                                                    <div class="icon-group">
                                                                        <img src="{{ asset('assets/images/figma/info-icon.png') }}" alt="icon">
                                                                    </div>
                                                                    <p class="mb-0 fs-15">Verify the information before proceeding</p>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <p class="mb-0">Basic Subscription</p>
                                                                    <p class="mb-0 text-theme-blue">$20.00</p>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <p class="mb-0">Tax</p>
                                                                    <p class="mb-0 text-theme-blue">$5.00</p>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <p class="mb-0 fs-15 fw-bold">Subtotal</p>
                                                                    <p class="mb-0 fs-15 fw-bold text-theme-blue">$25.00</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment-information">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="mb-4">
                                                                    <div class="did-floating-label-content">
                                                                        <input class="did-floating-input" type="text" placeholder="Enter card number" value="1235 1598 1563">
                                                                        <label class="did-floating-label">Card Number</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="mb-4">
                                                                    <div class="did-floating-label-content">
                                                                        <input class="did-floating-input" type="text" placeholder="Enter name on card" value="Visa Card">
                                                                        <label class="did-floating-label">Name on card</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div>
                                                                    <div class="did-floating-label-content">
                                                                        <input class="did-floating-input" type="text" placeholder="Card expiry date" value="22/08/2025">
                                                                        <label class="did-floating-label">Expiry date</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div>
                                                                    <div class="did-floating-label-content">
                                                                        <input class="did-floating-input" type="text" placeholder="Security code" value="3258">
                                                                        <label class="did-floating-label">Security code</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-3 text-end">
                                                                <button type="button" class="ms-auto btn btn-secondary-theme fw-600 fs-18 px-5">Save
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </form>
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
