<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 {{ (\Request::is('pages-rtl') ? 'fixed-end me-3 rotate-caret' : 'fixed-start ms-3' ) }}" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ url('dashboard-default') }}">
            <img src="{{ URL::asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-3 font-weight-bold">Soft UI Dashboard PRO Laravel</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link {{ ($parentFolder == 'dashboards' ? ' active' : '') }}" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>shop </title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(0.000000, 148.000000)">
                                <path class="color-background" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" opacity="0.598981585"></path>
                                <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                </g>
                            </g>
                            </g>
                        </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Dashboards</span>
                </a>
                <div class="collapse {{ ($parentFolder == 'dashboards' ? ' show' : '') }}" id="dashboardsExamples">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item {{ (Request::is('dashboard-default') ? 'active' : '') }}">
                        <a class="nav-link {{ (Request::is('dashboard-default') ? 'active' : '') }}" href="{{ url('dashboard-default') }}">
                            <span class="sidenav-mini-icon"> D </span>
                            <span class="sidenav-normal"> Default </span>
                        </a>
                        </li>
                        <li class="nav-item {{ (Request::is('dashboard-automative') ? 'active' : '') }}">
                        <a class="nav-link {{ (Request::is('dashboard-automative') ? 'active' : '') }}" href="{{ url('dashboard-automative') }}">
                            <span class="sidenav-mini-icon"> A </span>
                            <span class="sidenav-normal"> Automotive </span>
                        </a>
                        </li>
                        <li class="nav-item {{ (Request::is('dashboard-smart-home') ? 'active' : '') }}">
                        <a class="nav-link {{ (Request::is('dashboard-smart-home') ? 'active' : '') }}" href="{{ url('dashboard-smart-home') }}">
                            <span class="sidenav-mini-icon"> S </span>
                            <span class="sidenav-normal"> Smart Home </span>
                        </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ ($childFolder == 'virtual' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
                                <span class="sidenav-mini-icon"> V </span>
                                <span class="sidenav-normal"> Virtual Reality <b class="caret"></b></span>
                            </a>
                            <div class="collapse {{ ($childFolder == 'virtual' ? 'show' : '') }}" id="vrExamples">
                                <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{ (Request::is('dashboard-virtual-default') ? 'active' : '') }}">
                                    <a class="nav-link {{ (Request::is('dashboard-virtual-default') ? 'active' : '') }}" href="{{ url('dashboard-virtual-default') }}">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> VR Default </span>
                                    </a>
                                </li>
                                <li class="nav-item {{ (Request::is('dashboard-virtual-info') ? 'active' : '') }}">
                                    <a class="nav-link {{ (Request::is('dashboard-virtual-info') ? 'active' : '') }}" href="{{ url('dashboard-virtual-info') }}">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> VR Info </span>
                                    </a>
                                </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item {{ (Request::is('dashboard-crm') ? 'active' : '') }}">
                        <a class="nav-link {{ (Request::is('dashboard-crm') ? 'active' : '') }}" href="{{ url('dashboard-crm') }}">
                            <span class="sidenav-mini-icon"> C </span>
                            <span class="sidenav-normal"> CRM </span>
                        </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">LARAVEL EXAMPLES</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#laravelExamples" class="nav-link {{ ($parentFolder == 'laravel' ? ' active' : '') }}" aria-controls="applicationsExamples" role="button" aria-expanded="true">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <svg width="1rem" height="1rem" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>laravel </title>
                        <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                    <g id="shop-" transform="translate(0.000000, 148.000000)">
                                        <path class="color-background" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" id="Path" opacity="0.598981585"></path>
                                            <path class="color-background" d="M505.57 234.62c-3.28-3.53-26.82-32.29-39.51-47.79c-6.75-8.24-12.08-14.75-14.32-17.45l-.18-.22l-.2-.21c-5.22-5.83-12.64-12.51-23.78-12.51a39.78 39.78 0 0 0-5.41.44c-.37.05-.75.11-1.15.15c-2.45.27-10.06 1.5-28.14 4.48c-14 2.29-35.11 5.77-38.31 6.07l-.71.06l-.69.13c-10 1.78-16.62 6.22-19.56 13.19c-1.55 3.68-3.22 11.15 2.94 19.86c1.53 2.22 6.83 9.56 15.94 22.17c6.06 8.4 12.87 17.82 18.75 26L259.9 275L150.66 96.05l-.2-.34l-.23-.33l-.44-.65C145.32 88.17 139.76 80 123.7 80c-1.13 0-2.31 0-3.63.11c-4.6.25-21.42 1.57-40.89 3.11c-21.49 1.69-50.9 4-54.72 4.1h-.73l-.79.08c-9.14.89-15.77 4.6-19.7 11c-6.55 10.69-1.42 22.69.26 26.63C6.87 133 37.56 197.7 64.63 254.81c18 37.94 36.58 77.17 38.1 80.65a34.85 34.85 0 0 0 32.94 21.59a46.62 46.62 0 0 0 9.86-1.1h.21l.2-.05c13.86-3.38 57.83-14.54 89.2-22.59c1.9 3.32 3.9 6.83 6 10.44c21.93 38.5 37.9 66.35 43.16 73.46C287 421 295 432 310.06 432c5.46 0 10.46-1.4 15.74-2.89l1.53-.43h.12c10.53-3 150.69-52.16 157.87-55.35l.22-.1c5.44-2.41 13.66-6.05 16.18-15.4c1.65-6.12.18-12.33-4.38-18.46l-.07-.09l-.07-.09c-.85-1.1-4-5.21-8.27-10.9c-9.13-12.07-23.88-31.57-36.84-48.54c17.37-4.5 38.8-10.11 43.38-11.55c11.47-3.43 14.94-10.69 16-14.73c.79-3.15 1.82-11.2-5.9-18.85zm-320 58.19c-17.81 4.17-30.22 7.08-37.89 8.9c-6.67-13.34-19.74-39.65-32.5-65.33c-29.74-59.92-45.1-90.77-53.18-106.9l8.15-.7c13.34-1.15 31.61-2.72 41.78-3.57c16.76 28.26 74.32 125.3 96.3 162.3zM427.58 172zM310.06 416.4zm53.67-56.95c-24.21 8-37.33 12.37-44.42 14.74c-6.3-10.34-20.16-33.52-32.47-54.19l115.7-29.48c5 6.81 14.57 19.72 33.46 44.93c-18.07 6.04-48.2 16.02-72.27 24zm55.87-121.63l-23.76-31.53c13.67-2.39 21.54-3.77 26.15-4.6l12 14.88l11.94 14.82c-8.2 1.99-17.74 4.32-26.33 6.43z"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Laravel</span>
                </a>
                <div class="collapse show" id="laravelExamples">
                <ul class="nav ms-4 ps-3">
                    <li class="nav-item {{ (Request::is('laravel-user-profile')  ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('laravel-user-profile')  ? 'active' : '') }}" href="{{ url('laravel-user-profile') }}">
                        <span class="sidenav-mini-icon"> U </span>
                        <span class="sidenav-normal"> User Profile </span>
                    </a>
                    </li>
                    @if(auth()->user()->role_id == 1)
                    <li class="nav-item {{ ($childFolder == 'users-laravel' ? 'active' : '') }}">
                    <a class="nav-link {{ ($childFolder == 'users-laravel' ? 'active' : '') }}" href="{{ url('laravel-users-management') }}">
                        <span class="sidenav-mini-icon"> M </span>
                        <span class="sidenav-normal"> Users Management </span>
                    </a>
                    </li>
                    <li class="nav-item {{ ($childFolder == 'roles' ? 'active' : '') }}">
                    <a class="nav-link {{ ($childFolder == 'roles' ? 'active' : '') }}" href="{{ url('laravel-roles-management') }}">
                        <span class="sidenav-mini-icon"> K </span>
                        <span class="sidenav-normal"> Roles Management </span>
                    </a>
                    </li>
                    @endif
                    @if(auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
                    <li class="nav-item {{ ($childFolder == 'category' ? 'active' : '') }}">
                    <a class="nav-link {{ ($childFolder == 'category' ? 'active' : '') }}" href="{{ url('laravel-category-management') }}">
                        <span class="sidenav-mini-icon"> W </span>
                        <span class="sidenav-normal"> Category Management </span>
                    </a>
                    </li>
                    <li class="nav-item {{ ($childFolder == 'tags' ? 'active' : '') }}">
                    <a class="nav-link {{ ($childFolder == 'tags' ? 'active' : '') }}" href="{{ url('laravel-tags-management') }}">
                        <span class="sidenav-mini-icon"> D </span>
                        <span class="sidenav-normal"> Tags Management </span>
                    </a>
                    </li>
                    @endif
                    <li class="nav-item {{ ($childFolder == 'items' ? 'active' : '') }}">
                    <a class="nav-link {{ ($childFolder == 'items' ? 'active' : '') }}" href="{{ url('laravel-items-management') }}">
                        <span class="sidenav-mini-icon"> I </span>
                        <span class="sidenav-normal"> Items Management </span>
                    </a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">PAGES</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link {{ ($parentFolder == 'pages' ? ' active' : '') }}" aria-controls="pagesExamples" role="button" aria-expanded="false">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>office</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                            <g id="office" transform="translate(153.000000, 2.000000)">
                            <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" opacity="0.6"></path>
                            <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                            </g>
                        </g>
                        </g>
                    </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Pages</span>
                </a>
                <div class="collapse  {{ ($parentFolder == 'pages' ? 'show' : '') }}" id="pagesExamples">
                <ul class="nav ms-4 ps-3">
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'profile' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Profile <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'profile' ? 'show' : '') }}" id="profileExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('pages-profile-overview') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-profile-overview') ? 'active' : '') }}" href="{{ url('pages-profile-overview') }}">
                            <span class="sidenav-mini-icon text-xs"> P </span>
                            <span class="sidenav-normal"> Overview </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('pages-profile-projects') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-profile-projects') ? 'active' : '') }}" href="{{ url('pages-profile-projects') }}">
                            <span class="sidenav-mini-icon text-xs"> T </span>
                            <span class="sidenav-normal"> Teams </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('pages-profile-teams') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-profile-teams') ? 'active' : '') }}" href="{{ url('pages-profile-teams') }}">
                            <span class="sidenav-mini-icon text-xs"> A </span>
                            <span class="sidenav-normal"> All Projects </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'users' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                        <span class="sidenav-mini-icon"> U </span>
                        <span class="sidenav-normal"> Users <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'users' ? 'show' : '') }}" id="usersExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('pages-users-reports') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-users-reports') ? 'active' : '') }}" href="{{ url('pages-users-reports') }}">
                            <span class="sidenav-mini-icon text-xs"> R </span>
                            <span class="sidenav-normal"> Reports </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('pages-users-new') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-users-new') ? 'active' : '') }}" href="{{ url('pages-users-new') }}">
                            <span class="sidenav-mini-icon text-xs"> N </span>
                            <span class="sidenav-normal"> New User </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'account' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#accountExample">
                        <span class="sidenav-mini-icon"> A </span>
                        <span class="sidenav-normal"> Account <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'account' ? 'show' : '') }}" id="accountExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('pages-account-settings') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-account-settings') ? 'active' : '') }}" href="{{ url('pages-account-settings') }}">
                            <span class="sidenav-mini-icon text-xs"> S </span>
                            <span class="sidenav-normal"> Settings </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('pages-account-billing') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-account-billing') ? 'active' : '') }}" href="{{ url('pages-account-billing') }}">
                            <span class="sidenav-mini-icon text-xs"> B </span>
                            <span class="sidenav-normal"> Billing </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('pages-account-invoice') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-account-invoice') ? 'active' : '') }}" href="{{ url('pages-account-invoice') }}">
                            <span class="sidenav-mini-icon text-xs"> I </span>
                            <span class="sidenav-normal"> Invoice </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('pages-account-security') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-account-security') ? 'active' : '') }}" href="{{ url('pages-account-security') }}">
                            <span class="sidenav-mini-icon text-xs"> S </span>
                            <span class="sidenav-normal"> Security </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'projects' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#projectsExample">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Projects <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'projects' ? 'show' : '') }}" id="projectsExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('pages-projects-general') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-projects-general') ? 'active' : '') }}" href="{{ url('pages-projects-general') }}">
                            <span class="sidenav-mini-icon text-xs"> G </span>
                            <span class="sidenav-normal"> General </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('pages-projects-timeline') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-projects-timeline') ? 'active' : '') }}" href="{{ url('pages-projects-timeline') }}">
                            <span class="sidenav-mini-icon text-xs"> T </span>
                            <span class="sidenav-normal"> Timeline </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('pages-projects-new-project') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('pages-projects-new-project') ? 'active' : '') }}" href="{{ url('pages-projects-new-project') }}">
                            <span class="sidenav-mini-icon text-xs"> N </span>
                            <span class="sidenav-normal"> New Project </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item {{ (Request::is('pages-pricing') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('pages-pricing') ? 'active' : '') }}" href="{{ url('pages-pricing') }}">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Pricing Page </span>
                    </a>
                    </li>
                    <li class="nav-item {{ (Request::is('pages-rtl') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('pages-rtl') ? 'active' : '') }}" href="{{ url('pages-rtl') }}">
                        <span class="sidenav-mini-icon"> R </span>
                        <span class="sidenav-normal"> RTL </span>
                    </a>
                    </li>
                    <li class="nav-item {{ (Request::is('pages-widgets') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('pages-widgets') ? 'active' : '') }}" href="{{ url('pages-widgets') }}">
                        <span class="sidenav-mini-icon"> W </span>
                        <span class="sidenav-normal"> Widgets </span>
                    </a>
                    </li>
                    <li class="nav-item {{ (Request::is('pages-charts') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('pages-charts') ? 'active' : '') }}" href="{{ url('pages-charts') }}">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal"> Charts </span>
                    </a>
                    </li>
                    <li class="nav-item {{ (Request::is('pages-sweet-alerts') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('pages-sweet-alerts') ? 'active' : '') }}" href="{{ url('pages-sweet-alerts') }}">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal"> Sweet Alerts </span>
                    </a>
                    </li>
                    <li class="nav-item {{ (Request::is('pages-notifications') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('pages-notifications') ? 'active' : '') }}" href="{{ url('pages-notifications') }}">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal"> Notifications </span>
                    </a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link {{ ($parentFolder == 'applications' ? ' active' : '') }}" aria-controls="applicationsExamples" role="button" aria-expanded="false">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>settings</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(304.000000, 151.000000)">
                            <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                            </g>
                        </g>
                        </g>
                    </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Applications</span>
                </a>
                <div class="collapse {{ ($parentFolder == 'applications' ? ' show' : '') }}" id="applicationsExamples">
                <ul class="nav ms-4 ps-3">
                    <li class="nav-item {{ (Request::is('kanban') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('kanban') ? 'active' : '') }}" href="{{ url('kanban') }}">
                        <span class="sidenav-mini-icon"> K </span>
                        <span class="sidenav-normal"> Kanban </span>
                    </a>
                    </li>
                    <li class="nav-item {{ (Request::is('wizard') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('wizard') ? 'active' : '') }}" href="{{ url('wizard') }}">
                        <span class="sidenav-mini-icon"> W </span>
                        <span class="sidenav-normal"> Wizard </span>
                    </a>
                    </li>
                    <li class="nav-item {{ (Request::is('datatable') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('datatable') ? 'active' : '') }}" href="{{ url('datatable') }}">
                        <span class="sidenav-mini-icon"> D </span>
                        <span class="sidenav-normal"> DataTables </span>
                    </a>
                    </li>
                    <li class="nav-item {{ (Request::is('calendar') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('calendar') ? 'active' : '') }}" href="{{ url('calendar') }}">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal"> Calendar </span>
                    </a>
                    </li>
                    <li class="nav-item {{ (Request::is('analytics') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('analytics') ? 'active' : '') }}" href="{{ url('analytics') }}">
                        <span class="sidenav-mini-icon"> A </span>
                        <span class="sidenav-normal"> Analytics </span>
                    </a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link {{ ($parentFolder == 'ecommerce' ? ' active' : '') }}" aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg class="text-dark" width="12px" height="12px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>basket</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                            <g id="basket" transform="translate(153.000000, 450.000000)">
                            <path class="color-background" d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z" opacity="0.595377604"></path>
                            <path class="color-background" d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z"></path>
                            </g>
                        </g>
                        </g>
                    </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Ecommerce</span>
                </a>
                <div class="collapse {{ ($parentFolder == 'ecommerce' ? ' show' : '') }}" id="ecommerceExamples">
                <ul class="nav ms-4 ps-3">
                    <li class="nav-item {{ (Request::is('ecommerce-overview') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('ecommerce-overview') ? 'active' : '') }}" href="{{ url('ecommerce-overview') }}">
                        <span class="sidenav-mini-icon"> O </span>
                        <span class="sidenav-normal"> Overview </span>
                    </a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'products' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Products <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'products' ? 'show' : '') }}" id="productsExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('ecommerce-products-new-product') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('ecommerce-products-new-product') ? 'active' : '') }}" href="{{ url('ecommerce-products-new-product') }}">
                            <span class="sidenav-mini-icon text-xs"> N </span>
                            <span class="sidenav-normal"> New Product </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('ecommerce-products-edit-product') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('ecommerce-products-edit-product') ? 'active' : '') }}" href="{{ url('ecommerce-products-edit-product') }}">
                            <span class="sidenav-mini-icon text-xs"> E </span>
                            <span class="sidenav-normal"> Edit Product </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('ecommerce-products-page') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('ecommerce-products-page') ? 'active' : '') }}" href="{{ url('ecommerce-products-page') }}">
                            <span class="sidenav-mini-icon text-xs"> P </span>
                            <span class="sidenav-normal"> Product Page </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('ecommerce-products-list') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('ecommerce-products-list') ? 'active' : '') }}" href="{{ url('ecommerce-products-list') }}">
                            <span class="sidenav-mini-icon text-xs"> P </span>
                            <span class="sidenav-normal"> Products List </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'orders' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#ordersExample">
                        <span class="sidenav-mini-icon"> O </span>
                        <span class="sidenav-normal"> Orders <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'orders' ? 'show' : '') }}" id="ordersExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('ecommerce-orders-details') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('ecommerce-orders-details') ? 'active' : '') }}" href="{{ url('ecommerce-orders-details') }}">
                            <span class="sidenav-mini-icon text-xs"> O </span>
                            <span class="sidenav-normal"> Order List </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('ecommerce-orders-list') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('ecommerce-orders-list') ? 'active' : '') }}" href="{{ url('ecommerce-orders-list') }}">
                            <span class="sidenav-mini-icon text-xs"> O </span>
                            <span class="sidenav-normal"> Order Details </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item {{ (Request::is('ecommerce-referral') ? 'active' : '') }}">
                    <a class="nav-link {{ (Request::is('ecommerce-referral') ? 'active' : '') }}" href="{{ url('ecommerce-referral') }}">
                        <span class="sidenav-mini-icon"> R </span>
                        <span class="sidenav-normal"> Referral </span>
                    </a>
                    </li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#authExamples" class="nav-link {{ ($parentFolder == 'authentication' ? ' active' : '') }}" aria-controls="authExamples" role="button" aria-expanded="false">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                    <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>document</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(154.000000, 300.000000)">
                            <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                            <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                            </g>
                        </g>
                        </g>
                    </g>
                    </svg>
                </div>
                <span class="nav-link-text ms-1">Authentication</span>
                </a>
                <div class="collapse {{ ($parentFolder == 'authentication' ? ' show' : '') }}" id="authExamples">
                <ul class="nav ms-4 ps-3">
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'signin' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal"> Sign In <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'signin' ? 'show' : '') }}" id="signinExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('authentication-signin-basic') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-signin-basic') ? 'active' : '') }}" href="{{ url('authentication-signin-basic') }}">
                            <span class="sidenav-mini-icon text-xs"> B </span>
                            <span class="sidenav-normal"> Basic </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-signin-cover') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-signin-cover') ? 'active' : '') }}" href="{{ url('authentication-signin-cover') }}">
                            <span class="sidenav-mini-icon text-xs"> C </span>
                            <span class="sidenav-normal"> Cover </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-signin-illustration') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-signin-illustration') ? 'active' : '') }}" href="{{ url('authentication-signin-illustration') }}">
                            <span class="sidenav-mini-icon text-xs"> I </span>
                            <span class="sidenav-normal"> Illustration </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'signup' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#signupExample">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal"> Sign Up <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'signup' ? 'show' : '') }}" id="signupExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('authentication-signup-basic') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-signup-basic') ? 'active' : '') }}" href="{{ url('authentication-signup-basic') }}">
                            <span class="sidenav-mini-icon text-xs"> B </span>
                            <span class="sidenav-normal"> Basic </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-signup-cover') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-signup-cover') ? 'active' : '') }}" href="{{ url('authentication-signup-cover') }}">
                            <span class="sidenav-mini-icon text-xs"> C </span>
                            <span class="sidenav-normal"> Cover </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-signup-illustration') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-signup-illustration') ? 'active' : '') }}" href="{{ url('authentication-signup-illustration') }}">
                            <span class="sidenav-mini-icon text-xs"> I </span>
                            <span class="sidenav-normal"> Illustration </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'reset' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#resetExample">
                        <span class="sidenav-mini-icon"> R </span>
                        <span class="sidenav-normal"> Reset Password <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'reset' ? 'show' : '') }}" id="resetExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('authentication-reset-basic') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-reset-basic') ? 'active' : '') }}" href="{{ url('authentication-reset-basic') }}">
                            <span class="sidenav-mini-icon text-xs"> B </span>
                            <span class="sidenav-normal"> Basic </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-reset-cover') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-reset-cover') ? 'active' : '') }}" href="{{ url('authentication-reset-cover') }}">
                            <span class="sidenav-mini-icon text-xs"> C </span>
                            <span class="sidenav-normal"> Cover </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-reset-illustration') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-reset-illustration') ? 'active' : '') }}" href="{{ url('authentication-reset-illustration') }}">
                            <span class="sidenav-mini-icon text-xs"> I </span>
                            <span class="sidenav-normal"> Illustration </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'lock' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#lockExample">
                        <span class="sidenav-mini-icon"> L </span>
                        <span class="sidenav-normal"> Lock <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'lock' ? 'show' : '') }}" id="lockExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item  {{ (Request::is('authentication-lock-basic') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-lock-basic') ? 'active' : '') }}" href="{{ url('authentication-lock-basic') }}">
                            <span class="sidenav-mini-icon text-xs"> B </span>
                            <span class="sidenav-normal"> Basic </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-lock-cover') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-lock-cover') ? 'active' : '') }}" href="{{ url('authentication-lock-cover') }}">
                            <span class="sidenav-mini-icon text-xs"> C </span>
                            <span class="sidenav-normal"> Cover </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-lock-illustration') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-lock-illustration') ? 'active' : '') }}" href="{{ url('authentication-lock-illustration') }}">
                            <span class="sidenav-mini-icon text-xs"> I </span>
                            <span class="sidenav-normal"> Illustration </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'verification' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#StepExample">
                        <span class="sidenav-mini-icon"> 2 </span>
                        <span class="sidenav-normal"> 2-Step Verification <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'verification' ? 'show' : '') }}" id="StepExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('authentication-verification-basic') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-verification-basic') ? 'active' : '') }}" href="{{ url('authentication-verification-basic') }}">
                            <span class="sidenav-mini-icon text-xs"> B </span>
                            <span class="sidenav-normal"> Basic </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-verification-cover') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-verification-cover') ? 'active' : '') }}" href="{{ url('authentication-verification-cover') }}">
                            <span class="sidenav-mini-icon text-xs"> C </span>
                            <span class="sidenav-normal"> Cover </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-verification-illustration') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-verification-illustration') ? 'active' : '') }}" href="{{ url('authentication-verification-illustration') }}">
                            <span class="sidenav-mini-icon text-xs"> I </span>
                            <span class="sidenav-normal"> Illustration </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link {{ ($childFolder == 'error' ? 'active' : '') }}" data-bs-toggle="collapse" aria-expanded="false" href="#errorExample">
                        <span class="sidenav-mini-icon"> E </span>
                        <span class="sidenav-normal"> Error <b class="caret"></b></span>
                    </a>
                    <div class="collapse {{ ($childFolder == 'error' ? 'show' : '') }}" id="errorExample">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item {{ (Request::is('authentication-error404') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-error404') ? 'active' : '') }}" href="{{ url('authentication-error404') }}">
                            <span class="sidenav-mini-icon text-xs"> E </span>
                            <span class="sidenav-normal"> Error 404 </span>
                            </a>
                        </li>
                        <li class="nav-item {{ (Request::is('authentication-error500') ? 'active' : '') }}">
                            <a class="nav-link {{ (Request::is('authentication-error500') ? 'active' : '') }}" href="{{ url('authentication-error500') }}">
                            <span class="sidenav-mini-icon text-xs"> E </span>
                            <span class="sidenav-normal"> Error 500 </span>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </li>
                </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 mt-3 pt-3">
        <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
            <div class="full-background" style="background-image: url('assets/img/curved-images/white-curved.jpeg')"></div>
            <div class="card-body text-start p-3 w-100">
                <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                    <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
                </div>
                <div class="docs-info">
                <h6 class="text-white up mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold">Please check our docs</p>
                    <a href="/documentation/getting-started/overview.html" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
                </div>
            </div>
        </div>
    </div>
</aside>
