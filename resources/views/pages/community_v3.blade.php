@extends('layout.layout')
@section('title', 'GhostShip')
@section('header')
    <header id="page-topbar" class="page-topbar-layout-2">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                        <span class="hamburger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <div class="community-header-left-content">
                        <div class="community-header-heading">
                            <i class="icon-theme fs-18 mdi mdi-account-group"></i>
                            <p class="mb-0 font-theme fs-12 fw-600 text-uppercase">Community</p>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="d-flex align-items-center gap-1">
                                <i class="icon-theme fs-14 mdi mdi-account-outline"></i>
                                <span class="fs-11 text-theme-light">21</span>   
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="icon-theme fs-14 mdi mdi-pin-outline"></i>
                                <span class="fs-11 text-theme-light">1</span>   
                            </div>
                            <a href="javascript:void(0)" class="text-theme-light fs-12">Create Group</a>
                            <a href="{{ route('community_v3_video') }}" class="text-theme-light fs-12 d-flex align-items-center gap-1"><span>Add Party</span> <span class="mdi mdi-plus fs-16"></span></a>
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
        <div class="page-content scrollable-div h-100-auto px-0 overflow-hidden">
            <div class="conversation-messages scrollable-div h-92-auto px-3">
                <div class="single-post border-bottom-1 pb-2 mb-3">
                    <img src="{{ asset('assets/images/avatar/avatar1.png') }}" height="35" alt="img">
                    <div class="single-post-content">
                        <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                            <p class="mb-0 font-theme fs-14 fw-600">Harry Boone</p>  
                            <p class="mb-0 fs-10">12:45 AM</p>
                        </div>
                        <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. Ut morbi tellus pellentesque in diam in nunc sed. Felis a non id ornare. <span class="text-danger">Neque enim sit et suscipit ultricies lacus at.</span> Bibendum pellentesque lectus a varius. Nunc diam aliquam enim metus eu sit adipiscing amet. Congue ante sollicitudin adipiscing massa.<span class="text-success">Massa commodo cursus magna sit nulla convallis ac arcu.</span>Adipiscing semper suspendisse a risus. Pulvinar aliquam pretium amet pellentesque tortor ut viverra mauris scelerisque.</p>
                    </div>
                </div>
                <div class="single-post border-bottom-1 pb-2 mb-3">
                    <img src="{{ asset('assets/images/avatar/avatar2.png') }}" height="35" alt="img">
                    <div class="single-post-content">
                        <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                            <p class="mb-0 font-theme fs-14 fw-600">Darlene Robertson</p>  
                            <p class="mb-0 fs-10">12:50 AM</p>
                        </div>
                        <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. </p>
                    </div>
                </div>
                <div class="single-post border-bottom-1 pb-2 mb-3">
                    <img src="{{ asset('assets/images/avatar/avatar3.png') }}" height="35" alt="img">
                    <div class="single-post-content">
                        <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                            <p class="mb-0 font-theme fs-14 fw-600">Kathryn Murphy</p>  
                            <p class="mb-0 fs-10">12:51 AM</p>
                        </div>
                        <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. <a href="javascript:void(0)">calendar.adidas.com</a></p>
                    </div>
                </div>
                <div class="single-post border-bottom-1 pb-2 mb-3">
                    <img src="{{ asset('assets/images/avatar/avatar1.png') }}" height="35" alt="img">
                    <div class="single-post-content">
                        <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                            <p class="mb-0 font-theme fs-14 fw-600">Harry Boone</p>  
                            <p class="mb-0 fs-10">12:45 AM</p>
                        </div>
                        <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. Ut morbi tellus pellentesque in diam in nunc sed. Felis a non id ornare. <span class="text-danger">Neque enim sit et suscipit ultricies lacus at.</span> Bibendum pellentesque lectus a varius. Nunc diam aliquam enim metus eu sit adipiscing amet. Congue ante sollicitudin adipiscing massa.<span class="text-success">Massa commodo cursus magna sit nulla convallis ac arcu.</span>Adipiscing semper suspendisse a risus. Pulvinar aliquam pretium amet pellentesque tortor ut viverra mauris scelerisque.</p>
                    </div>
                </div>
                <div class="single-post border-bottom-1 pb-2 mb-3">
                    <img src="{{ asset('assets/images/avatar/avatar2.png') }}" height="35" alt="img">
                    <div class="single-post-content">
                        <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                            <p class="mb-0 font-theme fs-14 fw-600">Darlene Robertson</p>  
                            <p class="mb-0 fs-10">12:50 AM</p>
                        </div>
                        <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. </p>
                    </div>
                </div>
                <div class="single-post border-bottom-1 pb-2">
                    <img src="{{ asset('assets/images/avatar/avatar3.png') }}" height="35" alt="img">
                    <div class="single-post-content">
                        <div class="d-flex align-items-center gap-2 mb-2 mt-1">
                            <p class="mb-0 font-theme fs-14 fw-600">Kathryn Murphy</p>  
                            <p class="mb-0 fs-10">12:51 AM</p>
                        </div>
                        <p>Porta non vulputate amet sit ullamcorper nibh donec viverra. <a href="javascript:void(0)">calendar.adidas.com</a></p>
                    </div>
                </div>
            </div>
            <div class="chat-box-area">
                <div class="conversation-chat-box">
                    <input type="text" class="conversation-chat-input">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <a href="javascript:vodi(0)" class="fs-15 text-theme-light">
                                <i class="mdi mdi-plus"></i>
                            </a>
                            <div class="d-flex align-items-center gap-2">
                                <a href="javascript:vodi(0)" class="fs-15 text-theme-light">
                                    <i class="mdi mdi-video-outline"></i>
                                </a>
                                <a href="javascript:vodi(0)" class="fs-15 text-theme-light">
                                    <i class="mdi mdi-microphone-outline"></i>
                                </a>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <a href="javascript:vodi(0)" class="fs-15 text-theme-light">
                                    <i class="mdi mdi-emoticon-happy-outline"></i>
                                </a>
                                <a href="javascript:vodi(0)" class="fs-15 text-theme-light">
                                    <span class="mdi mdi-alphabetical-variant"></i>
                                </a>
                                <a href="javascript:vodi(0)" class="fs-15 text-theme-light">
                                    <span class="mdi mdi-at"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <a href="javascript:vodi(0)" class="fs-15 text-theme-light">
                                <i class="mdi mdi-send"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-bar">
        <div class="right-bar-header">
            {{-- <p class="fs-13 mb-0 font-theme fw-600">Off-White Nike Virgil Abloh V - Black $199</p> --}}
        </div>
        <div class="right-bar-content scrollable-div">
            <div class="conversation">
                <div class="d-flex conversation-section align-items-center gap-2">
                    <span class="fw-bold text-uppercase">Design App</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/figma.png') }}" height="16" alt="icon">
                    <span>Figma</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/miro.png') }}" height="16" alt="icon">
                    <span>Miro</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/mural.png') }}" height="16" alt="icon">
                    <span>Mural</span>
                </div>
            </div>
            <div class="conversation">
                <div class="d-flex conversation-section align-items-center gap-2">
                    <span class="fw-bold text-uppercase">Productivity App</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/google-drive.png') }}" height="16" alt="icon">
                    <span>Google Drive</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/google-docs.png') }}" height="16" alt="icon">
                    <span>Google Docs</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/google-sheets.png') }}" height="16" alt="icon">
                    <span>Google Sheets</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/google-slides.png') }}" height="16" alt="icon">
                    <span>Google Slides</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/airtable.png') }}" height="16" alt="icon">
                    <span>Airtable</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/google-calendar.png') }}" height="16" alt="icon">
                    <span>Google Calendar</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/outlook-calendar.png') }}" height="16" alt="icon">
                    <span>Outlook Calendar</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/asana.png') }}" height="16" alt="icon">
                    <span>Asana</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/dropbox.png') }}" height="16" alt="icon">
                    <span>Dropbox</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/nortion.png') }}" height="16" alt="icon">
                    <span>Nortion</span>
                </div>
            </div>
            <div class="conversation">
                <div class="d-flex conversation-section align-items-center gap-2">
                    <span class="fw-bold text-uppercase">Marketplace app</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/ebay.png') }}" height="16" alt="icon">
                    <span>eBay</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/offer-up.png') }}" height="16" alt="icon">
                    <span>OfferUp</span>
                </div>
                <div class="d-flex conversation-section align-items-center gap-2">
                    <img src="{{ asset('assets/images/icons/goat.png') }}" height="16" alt="icon">
                    <span>GOAT</span>
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