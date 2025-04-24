<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title>Cart system</title>
   <!-- <link rel="icon" type="image/x-icon" href="{{ asset('src/assets/img/favicon.ico')}}" /> -->
   <link href="{{ asset('layouts/collapsible-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('layouts/collapsible-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
   <script src="{{ asset('layouts/collapsible-menu/loader.js')}}"></script>
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
   <link href="{{ asset('src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('layouts/collapsible-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('layouts/collapsible-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
   <link href="{{ asset('src/plugins/src/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
   <link href="{{ asset('src/assets/css/light/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('src/assets/css/dark/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
   <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
   <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   <!-- Include jQuery and Bootstrap JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body class="layout-boxed alt-menu">
   <!-- BEGIN LOADER -->
   <div id="load_screen">
      <div class="loader">
         <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
         </div>
      </div>
   </div>
   <!--  END LOADER -->
   <!--  BEGIN NAVBAR  -->
   <div class="header-container container-xxl">
      <header class="header navbar navbar-expand-sm expand-header">
         <ul class="navbar-item flex-row ms-lg-auto ms-0">
            <li class="nav-item me-3">
               <a href="{{ route('cartview') }}" class="nav-link position-relative">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-shopping-bag">
                     <path d="M6 2L3 6v13a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                     <line x1="3" y1="6" x2="21" y2="6"></line>
                     <path d="M16 10a4 4 0 0 1-8 0"></path>
                  </svg>
                  <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                     {{ count(session('cart', [])) }}
                  </span>
               </a>
            </li>

            <li class="nav-item theme-toggle-item">
               <a href="javascript:void(0);" class="nav-link theme-toggle">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode">
                     <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode">
                     <circle cx="12" cy="12" r="5"></circle>
                     <line x1="12" y1="1" x2="12" y2="3"></line>
                     <line x1="12" y1="21" x2="12" y2="23"></line>
                     <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                     <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                     <line x1="1" y1="12" x2="3" y2="12"></line>
                     <line x1="21" y1="12" x2="23" y2="12"></line>
                     <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                     <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                  </svg>
               </a>
            </li>
            <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
               <div class="drodpown-title message">
                  <h6 class="d-flex justify-content-between"><span class="align-self-center">Messages</span> <span class="badge badge-primary">9 Unread</span></h6>
               </div>
               <div class="notification-scroll">
                  <div class="dropdown-item">
                     <div class="media server-log">
                        <img src="../src/assets/img/profile-16.jpeg" class="img-fluid me-2" alt="avatar">
                        <div class="media-body">
                           <div class="data-info">
                              <h6 class="">Kara Young</h6>
                              <p class="">1 hr ago</p>
                           </div>
                           <div class="icon-status">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                 <line x1="18" y1="6" x2="6" y2="18"></line>
                                 <line x1="6" y1="6" x2="18" y2="18"></line>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown-item">
                     <div class="media ">
                        <img src="../src/assets/img/profile-15.jpeg" class="img-fluid me-2" alt="avatar">
                        <div class="media-body">
                           <div class="data-info">
                              <h6 class="">Daisy Anderson</h6>
                              <p class="">8 hrs ago</p>
                           </div>
                           <div class="icon-status">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                 <line x1="18" y1="6" x2="6" y2="18"></line>
                                 <line x1="6" y1="6" x2="18" y2="18"></line>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown-item">
                     <div class="media file-upload">
                        <img src="../src/assets/img/profile-21.jpeg" class="img-fluid me-2" alt="avatar">
                        <div class="media-body">
                           <div class="data-info">
                              <h6 class="">Oscar Garner</h6>
                              <p class="">14 hrs ago</p>
                           </div>
                           <div class="icon-status">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                 <line x1="18" y1="6" x2="6" y2="18"></line>
                                 <line x1="6" y1="6" x2="18" y2="18"></line>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="drodpown-title notification mt-2">
                     <h6 class="d-flex justify-content-between"><span class="align-self-center">Notifications</span> <span class="badge badge-secondary">16 New</span></h6>
                  </div>
                  <div class="dropdown-item">
                     <div class="media server-log">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server">
                           <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                           <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                           <line x1="6" y1="6" x2="6" y2="6"></line>
                           <line x1="6" y1="18" x2="6" y2="18"></line>
                        </svg>
                        <div class="media-body">
                           <div class="data-info">
                              <h6 class="">Server Rebooted</h6>
                              <p class="">45 min ago</p>
                           </div>
                           <div class="icon-status">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                 <line x1="18" y1="6" x2="6" y2="18"></line>
                                 <line x1="6" y1="6" x2="18" y2="18"></line>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown-item">
                     <div class="media file-upload">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                           <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                           <polyline points="14 2 14 8 20 8"></polyline>
                           <line x1="16" y1="13" x2="8" y2="13"></line>
                           <line x1="16" y1="17" x2="8" y2="17"></line>
                           <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <div class="media-body">
                           <div class="data-info">
                              <h6 class="">Kelly Portfolio.pdf</h6>
                              <p class="">670 kb</p>
                           </div>
                           <div class="icon-status">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                 <line x1="18" y1="6" x2="6" y2="18"></line>
                                 <line x1="6" y1="6" x2="18" y2="18"></line>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown-item">
                     <div class="media ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                           <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                        <div class="media-body">
                           <div class="data-info">
                              <h6 class="">Licence Expiring Soon</h6>
                              <p class="">8 hrs ago</p>
                           </div>
                           <div class="icon-status">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                 <line x1="18" y1="6" x2="6" y2="18"></line>
                                 <line x1="6" y1="6" x2="18" y2="18"></line>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </li>
            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
               <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar-container">
                     <div class="avatar avatar-sm avatar-indicators avatar-online">
                        <img alt="avatar" src="../src/assets/img/profile-30.png" class="rounded-circle">
                     </div>
                  </div>
               </a>

            </li>
         </ul>
      </header>
   </div>
   <!--  END NAVBAR  -->
   <!--  BEGIN MAIN CONTAINER  -->
   <div class="main-container" id="container">
      <div class="overlay"></div>
      <div class="search-overlay"></div>
      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">
         <nav id="sidebar">
            <div class="navbar-nav theme-brand flex-row  text-center">
               <div class="nav-logo">
                  <div class="nav-item theme-logo">
                     <a href="./index.html">
                        <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                     </a>
                  </div>
                  <div class="nav-item theme-text">
                     @if(session()->has('user_name'))
                     <a href="/" class="nav-link"> Hi, {{ session('user_name') }} </a>

                     @else
                     <a href="/" class="nav-link"> Hi User </a>
                     @endif

                  </div>
               </div>
               <div class="nav-item sidebar-toggle">
                  <div class="btn-toggle sidebarCollapse">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                     </svg>
                  </div>
               </div>
            </div>
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
               <li class="menu active">
                  <a href="/user" class="dropdown-toggle">
                     <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                           <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                           <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Home</span>
                     </div>

                  </a>
               </li>
               <li class="menu ">
                  <a href="{{route('user_profile')}}" class="dropdown-toggle">
                     <div class="">
                        <span>Profile</span>
                     </div>

                  </a>
               </li>
               <li class="menu ">
                  <a href="{{route('products')}}" class="dropdown-toggle">
                     <div class="">
                        <span>Products</span>
                     </div>

                  </a>
               </li>
               <li class="menu ">
                  <a href="{{url('logout')}}" class="dropdown-toggle">
                     <div class="">

                        <span>Logout</span>
                     </div>

                  </a>
               </li>

            </ul>
         </nav>
      </div>
      <!--  END SIDEBAR  -->
      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
         <div class="layout-px-spacing">