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
                     <a href="#">
                        <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                     </a>
                  </div>
                  <div class="nav-item theme-text">
                     <a href="/" class="nav-link"> Hi User </a>
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


               <li class="menu ">
                  <a href="{{url('/')}}" class="dropdown-toggle">
                     <div class="">

                        <span>Register</span>
                     </div>

                  </a>
               </li>
               <li class="menu ">
                  <a href="{{url('login')}}" class="dropdown-toggle">
                     <div class="">

                        <span>Login</span>
                     </div>

                  </a>
            </ul>
         </nav>
      </div>
      <!--  END SIDEBAR  -->
      <!--  BEGIN CONTENT AREA  -->
      <div id="content" class="main-content">
         <div class="layout-px-spacing">