<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <div class="container-fluid">
                    <div class="d-flex h-60 align-items-center justify-content-between border-bottom-1 px-3">
                        <a href="javascript: void(0);" class="sidebar-icons">
                            <i class="bx bx-search icon-theme fs-18"></i>
                        </a>
                        <form class="w-70">
                            <input class="form-control form-control-sm border-0" type="text"
                                placeholder="How can I help you..?">
                        </form>
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('settings') }}" class="sidebar-icons">
                                <i class="bx bx-cog icon-theme fs-18"></i>
                            </a>
                            <a href="{{ route('index') }}" class="sidebar-icons">
                                <i class="bx bx-home icon-theme fs-18"></i>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex h-50-px align-items-center justify-content-between border-bottom-1 px-3">
                        <a href="{{ route('index') }}" class="font-theme">
                            <span class="fs-13 fw-600 text-uppercase">Ghostship</span>
                        </a>
                    </div>
                    <div class="d-flex h-50-px align-items-center justify-content-between border-bottom-1 px-3">
                        <span class="fs-14 fw-600">Recent Conversations</span>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="conversation">
                        <div class="d-flex conversation-section align-items-start gap-3">
                            <span>
                                <i class="bx bx-message icon-theme fs-18 mt-1"></i>
                            </span>
                            <span>What shoes are releasing this month?</span>
                        </div>
                        <div class="d-flex conversation-section align-items-start gap-3">
                            <span>
                                <i class="bx bx-message icon-theme fs-18 mt-1"></i>
                            </span>
                            <span>Can you let me know what raffles are open?</span>
                        </div>
                        <div class="d-flex conversation-section align-items-start gap-3">
                            <span>
                                <i class="bx bx-message icon-theme fs-18 mt-1"></i>
                            </span>
                            <span>What notifications did I miss in the last hour?</span>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="conversation">
                        <div class="d-flex conversation-section align-items-center gap-2 sidebar-commands-title" style="cursor:pointer;">
                            <span>
                                <img src="{{ asset('assets/images/figma/ghostship.png') }}" height="45" width="45" alt="img" class="object-fit-contain logo-app-dark">
                                <img src="{{ asset('assets/images/figma/ghostship-icon-white.png') }}" class="object-fit-contain logo-app-light"
                                    height="45" width="45" alt="img">
                            </span>
                            <span class="text-uppercase text-black fw-bold">Commands</span>
                            <span class="mb-2 command-title-icon" title="Ghostship commands help automate tasks and summarize notifications"><i class="bx bx-help-circle icon-theme fs-14"></i></span>
                        </div>
                        <div class="d-flex conversation-section align-items-center gap-3">
                            <i class="mdi mdi-react icon-theme fs-18"></i>
                            <span>Release calendar</span>
                        </div>
                        <div class="d-flex conversation-section align-items-center gap-3">
                            <i class="mdi mdi-react icon-theme fs-18"></i>
                            <span>Login</span>
                        </div>
                        <div class="d-flex conversation-section align-items-center gap-3">
                            <i class="mdi mdi-react icon-theme fs-18"></i>
                            <span>Raffles</span>
                        </div>
                        <div class="d-flex conversation-section align-items-center gap-3">
                            <i class="mdi mdi-react icon-theme fs-18"></i>
                            <span>News</span>
                        </div>
                        <div class="d-flex conversation-section align-items-center gap-3">
                            <i class="mdi mdi-react icon-theme fs-18"></i>
                            <span>Tweet</span>
                        </div>
                        <div class="d-flex conversation-section align-items-center gap-3">
                            <i class="mdi mdi-react icon-theme fs-18"></i>
                            <span>Checkout</span>
                        </div>
                        <div class=" conversation-section mb-3">
                            <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#commandsModal" class="d-flex align-items-center">
                                <i class="ri-add-line me-1 fs-14"></i>
                                <span class="fs-15 text-black fw-500">More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="conversation">
                        <div class="d-flex conversation-section align-items-center gap-2">
                            <i class="mdi mdi-account-group-outline icon-theme fs-24    "></i>
                            <a href="{{ route('community_v3') }}">
                                <span class="text-uppercase text-black fw-bold">COMMUNITY</span>
                            </a>
                        </div>
                        <a href="{{ route('signup') }}" class="d-flex conversation-section mb-4 align-items-center gap-1">
                            <i class="bx bx-medal icon-theme fs-22"></i>   
                            <span>Upgrade to Pro</span>
                        </a>
                    </div>
                    <div class="conversation">
                        <div class="d-flex conversation-section align-items-center gap-2">
                            <i class="mdi mdi-logout icon-theme fs-18"></i>
                            <a href="{{ route('user_logout') }}">
                                <span class="text-uppercase text-black fw-bold fs-13">Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div>
                        <div class="d-flex conversation-section align-items-end p-4 gap-2">
                            <span>
                                <img src="{{ asset('assets/images/figma/ghostship.png') }}" class="me-2 object-fit-contain logo-app-dark"
                                    height="68" width="60" alt="img">
                                <img src="{{ asset('assets/images/figma/ghostship-icon-white.png') }}" class="me-2 object-fit-contain logo-app-light"
                                    height="68" width="60" alt="img">
                            </span>
                            <div class="notifications-alert">
                                <p class="fs-11">
                                    When do you want to see the notifications?
                                </p>
                                <div class="d-flex">
                                    <button
                                        class="rounded-pill btn btn-sm btn-outline-secondary waves-effect waves-light me-1">
                                        Hour
                                    </button>
                                    <button
                                        class="btn btn-secondary btn-sm rounded-pill waves-effect waves-light me-1">
                                        Daily
                                    </button>
                                    <button
                                        class="rounded-pill btn btn-sm btn-outline-secondary waves-effect waves-light">
                                        Minutes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
