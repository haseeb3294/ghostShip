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
                    <div class="col-auto layout-rightside-col">
                        <div class="overlay"></div>
                        <div class="layout-rightside">
                            <div class="card h-100 rounded-0">
                                <div class="card-body p-0">
                                    <div class="p-3">
                                        <h6 class="text-muted mb-0 text-uppercase fw-semibold">Recent Activity</h6>
                                    </div>
                                    <div data-simplebar style="max-height: 410px;" class="p-3 pt-0">
                                        <div class="acitivity-timeline acitivity-main">
                                            <div class="acitivity-item d-flex">
                                                <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                    <div class="avatar-title bg-soft-success text-success rounded-circle">
                                                        <i class="ri-shopping-cart-2-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Purchase by James Price</h6>
                                                    <p class="text-muted mb-1">Product noise evolve smartwatch </p>
                                                    <small class="mb-0 text-muted">02:14 PM Today</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                    <div class="avatar-title bg-soft-danger text-danger rounded-circle">
                                                        <i class="ri-stack-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Added new <span class="fw-semibold">style
                                                            collection</span></h6>
                                                    <p class="text-muted mb-1">By Nesta Technologies</p>
                                                    <div class="d-inline-flex gap-2 border border-dashed p-2 mb-2">
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="bg-light rounded p-1">
                                                            <img src="assets/images/products/img-8.png" alt=""
                                                                class="img-fluid d-block" />
                                                        </a>
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="bg-light rounded p-1">
                                                            <img src="assets/images/products/img-2.png" alt=""
                                                                class="img-fluid d-block" />
                                                        </a>
                                                        <a href="apps-ecommerce-product-details.html"
                                                            class="bg-light rounded p-1">
                                                            <img src="assets/images/products/img-10.png" alt=""
                                                                class="img-fluid d-block" />
                                                        </a>
                                                    </div>
                                                    <p class="mb-0 text-muted"><small>9:47 PM Yesterday</small></p>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                                        class="avatar-xs rounded-circle acitivity-avatar">
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Natasha Carey have liked the products</h6>
                                                    <p class="text-muted mb-1">Allow users to like products in your
                                                        WooCommerce store.</p>
                                                    <small class="mb-0 text-muted">25 Dec, 2021</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-xs acitivity-avatar">
                                                        <div class="avatar-title rounded-circle bg-secondary">
                                                            <i class="mdi mdi-sale fs-14"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Today offers by <a
                                                            href="apps-ecommerce-seller-details.html"
                                                            class="link-secondary">Digitech Galaxy</a></h6>
                                                    <p class="text-muted mb-2">Offer is valid on orders of Rs.500 Or above
                                                        for selected products only.</p>
                                                    <small class="mb-0 text-muted">12 Dec, 2021</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-xs acitivity-avatar">
                                                        <div
                                                            class="avatar-title rounded-circle bg-soft-danger text-danger">
                                                            <i class="ri-bookmark-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Favoried Product</h6>
                                                    <p class="text-muted mb-2">Esther James have favorited product.</p>
                                                    <small class="mb-0 text-muted">25 Nov, 2021</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-xs acitivity-avatar">
                                                        <div class="avatar-title rounded-circle bg-secondary">
                                                            <i class="mdi mdi-sale fs-14"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Flash sale starting <span
                                                            class="text-primary">Tomorrow.</span></h6>
                                                    <p class="text-muted mb-0">Flash sale by <a href="javascript:void(0);"
                                                            class="link-secondary fw-medium">Zoetic Fashion</a></p>
                                                    <small class="mb-0 text-muted">22 Oct, 2021</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item py-3 d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-xs acitivity-avatar">
                                                        <div class="avatar-title rounded-circle bg-soft-info text-info">
                                                            <i class="ri-line-chart-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                                    <p class="text-muted mb-2"><span class="text-danger">2 days
                                                            left</span> notification to submit the monthly sales report. <a
                                                            href="javascript:void(0);"
                                                            class="link-warning text-decoration-underline">Reports
                                                            Builder</a></p>
                                                    <small class="mb-0 text-muted">15 Oct</small>
                                                </div>
                                            </div>
                                            <div class="acitivity-item d-flex">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="avatar-xs rounded-circle acitivity-avatar" />
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1 lh-base">Frank Hook Commented</h6>
                                                    <p class="text-muted mb-2 fst-italic">" A product that has reviews is
                                                        more likable to be sold than a product. "</p>
                                                    <small class="mb-0 text-muted">26 Aug, 2021</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-3 mt-2">
                                        <h6 class="text-muted mb-3 text-uppercase fw-semibold">Top 10 Categories
                                        </h6>

                                        <ol class="ps-3 text-muted">
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Mobile & Accessories <span
                                                        class="float-end">(10,294)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Desktop <span
                                                        class="float-end">(6,256)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Electronics <span
                                                        class="float-end">(3,479)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Home & Furniture <span
                                                        class="float-end">(2,275)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Grocery <span
                                                        class="float-end">(1,950)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Fashion <span
                                                        class="float-end">(1,582)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Appliances <span
                                                        class="float-end">(1,037)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Beauty, Toys & More <span
                                                        class="float-end">(924)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Food & Drinks <span
                                                        class="float-end">(701)</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a href="#" class="text-muted">Toys & Games <span
                                                        class="float-end">(239)</span></a>
                                            </li>
                                        </ol>
                                        <div class="mt-3 text-center">
                                            <a href="javascript:void(0);"
                                                class="text-muted text-decoration-underline">View all Categories</a>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h6 class="text-muted mb-3 text-uppercase fw-semibold">Products Reviews</h6>
                                        <!-- Swiper -->
                                        <div class="swiper vertical-swiper" style="height: 250px;">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="card border border-dashed shadow-none">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-sm">
                                                                    <div class="avatar-title bg-light rounded">
                                                                        <img src="assets/images/companies/img-1.png"
                                                                            alt="" height="30">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <div>
                                                                        <p
                                                                            class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                                            " Great product and looks great, lots of
                                                                            features. "</p>
                                                                        <div class="fs-11 align-middle text-warning">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end mb-0 text-muted">
                                                                        - by <cite title="Source Title">Force
                                                                            Medicines</cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card border border-dashed shadow-none">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-3.jpg"
                                                                        alt="" class="avatar-sm rounded">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <div>
                                                                        <p
                                                                            class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                                            " Amazing template, very easy to understand and
                                                                            manipulate. "</p>
                                                                        <div class="fs-11 align-middle text-warning">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-half-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end mb-0 text-muted">
                                                                        - by <cite title="Source Title">Henry Baird</cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card border border-dashed shadow-none">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0 avatar-sm">
                                                                    <div class="avatar-title bg-light rounded">
                                                                        <img src="assets/images/companies/img-8.png"
                                                                            alt="" height="30">
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <div>
                                                                        <p
                                                                            class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                                            "Very beautiful product and Very helpful
                                                                            customer service."</p>
                                                                        <div class="fs-11 align-middle text-warning">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end mb-0 text-muted">
                                                                        - by <cite title="Source Title">Zoetic
                                                                            Fashion</cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card border border-dashed shadow-none">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                        alt="" class="avatar-sm rounded">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <div>
                                                                        <p
                                                                            class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                                            " The product is very beautiful. I like it. "
                                                                        </p>
                                                                        <div class="fs-11 align-middle text-warning">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-half-fill"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-end mb-0 text-muted">
                                                                        - by <cite title="Source Title">Nancy
                                                                            Martino</cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-3">
                                        <h6 class="text-muted mb-3 text-uppercase fw-semibold">Customer Reviews</h6>
                                        <div class="bg-light px-3 py-2 rounded-2 mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <div class="fs-16 align-middle text-warning">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <h6 class="mb-0">4.5 out of 5</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-muted">Total <span class="fw-medium">5.50k</span> reviews
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">5 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 50.16%" aria-valuenow="50.16"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">2758</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">4 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 29.32%" aria-valuenow="29.32"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">1063</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">3 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 18.12%" aria-valuenow="18.12"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">997</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">2 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 4.98%" aria-valuenow="4.98"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">227</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row align-items-center g-2">
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0">1 star</h6>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p-1">
                                                        <div class="progress animated-progress progress-sm">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 7.42%" aria-valuenow="7.42"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="p-1">
                                                        <h6 class="mb-0 text-muted">408</h6>
                                                    </div>
                                                </div>
                                            </div><!-- end row -->
                                        </div>
                                    </div>

                                    <div class="card sidebar-alert bg-light border-0 text-center mx-4 mb-0 mt-3">
                                        <div class="card-body">
                                            <img src="assets/images/giftbox.png" alt="">
                                            <div class="mt-4">
                                                <h5>Invite New Seller</h5>
                                                <p class="text-muted lh-base">Refer a new seller to us and earn $100 per
                                                    refer.</p>
                                                <button type="button" class="btn btn-primary btn-label rounded-pill"><i
                                                        class="ri-mail-fill label-icon align-middle rounded-pill fs-16 me-2"></i>
                                                    Invite Now</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end .rightbar-->

                    </div> <!-- end col -->
                </div>
            </div>
            <!-- container-fluid -->
        </div>
    </div>

@endsection

