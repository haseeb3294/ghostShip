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
                        <span class="fs-18 font-theme fw-bold">Settings</span>
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
        <div class="page-content" style="padding:0;padding-top:calc(36px + 1.5rem) !important;">
           <div class="settings-container">
                <div class="setting-navigation">
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a href="#general-setting" class="nav-link active" data-bs-toggle="tab" role="tab">General Settings</a>
                        </li>
                        <li class="nav-item">
                            <a href="#example1" class="nav-link" data-bs-toggle="tab" role="tab">Example 1</a>
                        </li>
                        <li class="nav-item">
                            <a href="#example2" class="nav-link" data-bs-toggle="tab" role="tab">Example 2</a>
                        </li>
                        <li class="nav-item">
                            <a href="#example3" class="nav-link" data-bs-toggle="tab" role="tab">Example 3</a>
                        </li>
                        <li class="nav-item">
                            <a href="#example4" class="nav-link" data-bs-toggle="tab" role="tab">Example 4</a>
                        </li>
                        <li class="nav-item">
                            <a href="#example5" class="nav-link" data-bs-toggle="tab" role="tab">Example 5</a>
                        </li>
                        <li class="nav-item">
                            <a href="#example6" class="nav-link" data-bs-toggle="tab" role="tab">Example 6</a>
                        </li>
                        <li class="nav-item">
                            <a href="#example7" class="nav-link" data-bs-toggle="tab" role="tab">Example 7</a>
                        </li>
                        <li class="nav-item">
                            <a href="#example8" class="nav-link" data-bs-toggle="tab" role="tab">Example 8</a>
                        </li>
                    </ul>
                </div>
                <div class="setting-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="general-setting" role="tabpanel">
                            <div class="setting-header">
                                <h2 class="mb-0">General Settings</h2>
                            </div>
                            <div class="setting-content-body">
                                <div class="setting-item">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                        <p class="mb-0 fw-600 fs-14">Add webhooks to select specific channels/servers from discord/slack</p>
                                        <a href="javascript:void(0)" class="btn btn-light text-dark btn-custom">Add</a>
                                    </div>
                                    <p class="mb-0 fs-13 text-theme-light-grey">Adipiscing ut risus enim faucibus amet urna a orci. Mauris auctor.</p>
                                </div>
                                <div class="setting-item">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                        <p class="mb-0 fw-600 fs-14">Add specific users/hashtags from twitter</p>
                                        <a href="javascript:void(0)" class="btn btn-light text-dark btn-custom">Add</a>
                                    </div>
                                    <p class="mb-0 fs-13 text-theme-light-grey">Tellus vulputate laoreet a pellentesque nisi fames consectetur at.  </p>
                                </div>
                                <div class="setting-item">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                        <p class="mb-0 fw-600 fs-14">Accounts connected (authorized apps)</p>
                                        <a href="javascript:void(0)" class="btn btn-light text-dark btn-custom">Add</a>
                                    </div>
                                    <p class="mb-0 fs-13 text-theme-light-grey">Massa arcu donec donec scelerisque phasellus tellus sed risus.</p>
                                </div>
                                <div class="setting-item">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                        <p class="mb-0 fw-600 fs-14">Add unique colors/sounds to keywords</p>
                                        <a href="javascript:void(0)" class="btn btn-light text-dark btn-custom">Add</a>
                                    </div>
                                    <p class="mb-0 fs-13 text-theme-light-grey">Vitae euismod urna adipiscing in sagittis est amet. Ultrices tristique.</p>
                                </div>
                                <div class="setting-item">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-1">
                                        <p class="mb-0 fw-600 fs-14">Enable/disable notifications, notifications schedule</p>
                                        <a href="javascript:void(0)" class="btn btn-light text-dark btn-custom">Add</a>
                                    </div>
                                    <p class="mb-0 fs-13 text-theme-light-grey">Nunc elit semper diam risus fames. Vulputate cras tempus id nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="example1" role="tabpanel">
                            <div class="setting-header">
                                <h2 class="mb-0">Example 1</h2>
                            </div>
                            <div class="setting-content-body">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo obcaecati ut pariatur distinctio quidem soluta nam natus mollitia odit asperiores molestiae, quod qui ullam odio quas explicabo accusantium maxime veritatis.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="example2" role="tabpanel">
                            <div class="setting-header">
                                <h2 class="mb-0">Example 2</h2>
                            </div>
                            <div class="setting-content-body">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo obcaecati ut pariatur distinctio quidem soluta nam natus mollitia odit asperiores molestiae, quod qui ullam odio quas explicabo accusantium maxime veritatis.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="example3" role="tabpanel">
                            <div class="setting-header">
                                <h2 class="mb-0">Example 3</h2>
                            </div>
                            <div class="setting-content-body">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo obcaecati ut pariatur distinctio quidem soluta nam natus mollitia odit asperiores molestiae, quod qui ullam odio quas explicabo accusantium maxime veritatis.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="example4" role="tabpanel">
                            <div class="setting-header">
                                <h2 class="mb-0">Example 4</h2>
                            </div>
                            <div class="setting-content-body">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo obcaecati ut pariatur distinctio quidem soluta nam natus mollitia odit asperiores molestiae, quod qui ullam odio quas explicabo accusantium maxime veritatis.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="example5" role="tabpanel">
                            <div class="setting-header">
                                <h2 class="mb-0">Example 5</h2>
                            </div>
                            <div class="setting-content-body">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo obcaecati ut pariatur distinctio quidem soluta nam natus mollitia odit asperiores molestiae, quod qui ullam odio quas explicabo accusantium maxime veritatis.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="example6" role="tabpanel">
                            <div class="setting-header">
                                <h2 class="mb-0">Example 6</h2>
                            </div>
                            <div class="setting-content-body">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo obcaecati ut pariatur distinctio quidem soluta nam natus mollitia odit asperiores molestiae, quod qui ullam odio quas explicabo accusantium maxime veritatis.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="example7" role="tabpanel">
                            <div class="setting-header">
                                <h2 class="mb-0">Example 7</h2>
                            </div>
                            <div class="setting-content-body">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo obcaecati ut pariatur distinctio quidem soluta nam natus mollitia odit asperiores molestiae, quod qui ullam odio quas explicabo accusantium maxime veritatis.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="example8" role="tabpanel">
                            <div class="setting-header">
                                <h2 class="mb-0">Example 8</h2>
                            </div>
                            <div class="setting-content-body">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo obcaecati ut pariatur distinctio quidem soluta nam natus mollitia odit asperiores molestiae, quod qui ullam odio quas explicabo accusantium maxime veritatis.</p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
@endsection
