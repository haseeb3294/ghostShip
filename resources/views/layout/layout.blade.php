<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.head')
</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    @yield('header')
    <!-- ========== App Menu ========== -->
    @include('components.sidebar')
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('content')
    <!-- end main content-->

</div>
<!-- END layout-wrapper --> 

<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

{{-- modals --}}
<div class="modal fade" id="commandsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header border-bottom-1">
          <div class="d-flex align-items-center gap-2">
             <i class="mdi mdi-apple-keyboard-command fs-18 icon-theme"></i>
             <h5 class="mb-0 fw-bold fs-15">Ghostship Commands</h5>
          </div>
        </div>
        <div class="modal-body p-0">
            <div class="command-popup-item">
                <input type="text" class="command-popup-input" name="command">
            </div>
            <div class="command-popup-item active">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <i class="mdi mdi-calendar icon-theme fs-18"></i>
                        <p class="mb-0 text">Calendar</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="theme-badge">Ctrl</span>
                        <span class="theme-badge">Alt</span>
                        <span class="theme-badge">1</span>
                    </div>
                </div>
            </div>
            <div class="command-popup-item">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <i class="mdi mdi-login icon-theme fs-18"></i>
                        <p class="mb-0 text">Login</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="theme-badge">Ctrl</span>
                        <span class="theme-badge">L</span>
                    </div>
                </div>
            </div>
            <div class="command-popup-item">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <i class="mdi mdi-newspaper-variant-outline icon-theme fs-18"></i>
                        <p class="mb-0 text">Today News</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="theme-badge"><i class="mdi mdi-apple-keyboard-command"></i></span>
                        <span class="theme-badge">Ctrl</span>
                        <span class="theme-badge">N</span>
                    </div>
                </div>
            </div>
            <div class="command-popup-item">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <i class="mdi mdi-twitter icon-theme fs-18"></i>
                        <p class="mb-0 text">Tweet</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="theme-badge">Ctrl</span>
                        <span class="theme-badge">T</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<!-- JAVASCRIPT -->
@include('includes.scripts')
@yield('custom-scripts')
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Sep 2022 07:24:16 GMT -->
</html>
