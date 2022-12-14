<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
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
                <li class="menu-title"><span>@lang('translation.menu')</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="ri-settings-2-fill"></i>
                        <span data-key="t-multi-level">Setup</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('statuses.index') }}"
                                    class="nav-link {{ Request::is('statuses') || Request::is('statuses/*') ? 'active' : '' }}"
                                    data-key="t-dashboards">
                                    Status
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('gamer-tags.index') }}"
                                    class="nav-link {{ Request::is('gamer-tags') || Request::is('gamer-tags/*') ? 'active' : '' }}"
                                    data-key="t-dashboards">
                                    Gamer Tags
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('tournaments.index') }}"
                                    class="nav-link {{ Request::is('tournaments') || Request::is('tournaments/*') ? 'active' : '' }}"
                                    data-key="t-dashboards">
                                    Tournaments
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('teams.index') }}"
                                    class="nav-link {{ Request::is('teams') || Request::is('teams/*') ? 'active' : '' }}"
                                    data-key="t-dashboards">
                                    Teams
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
