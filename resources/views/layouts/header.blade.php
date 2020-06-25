<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} -   @if(isset($title)) {{ $title }} @endif </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{URL::asset('/images/favicon.png')}}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{URL::asset('/images/favicon.ico')}}">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{URL::asset('plugins/font-awesome/css/all.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/data-tables/css/datatables.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('plugins/slimscroll/slimscroll.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/colors/default-custom.css')}}" id="color">
    <link rel="stylesheet" href="{{URL::asset('css/colors.css')}}">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Font Family Css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        th,td,tr{
            text-align:  center !important;
        }


    </style>

</head>

<body @if(Route::currentRouteName() == '/') class="login" @endif >

@if(Route::currentRouteName() == 'home' || Route::currentRouteName() == 'accounts' || Route::currentRouteName() == 'ads-manager')
<!-- loader -->
<div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- end loader -->
  <div class="page">
      <div class="main-wrap">

          <!-- headertop -->
          <div class="header">
              <nav class="navbar">
                  <div class="container-fluid">
                      <div class="navbar-holder d-flex justify-content-between">
                          <!-- Navbar Header-->
                          <div class="navbar-header d-flex align-items-center">
                              <!-- Navbar Brand -->
                              <a href="/home" class="navbar-brand ">
                                  <div class="brand-text d-none d-lg-inline-block"><strong>Mobile LM</strong></div>
                                  <div class="brand-text  d-sm-inline-block d-lg-none"><strong>LM</strong></div>
                              </a>
                          </div>
                          <!-- Navbar Menu -->
                          <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center float-right">
                              <li class="nav-item dropdown d-flex align-items-center mr-2">
                                  <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                      <img src="{{asset('images/moi.jpg')}}" alt="user" class="rounded-circle">
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item text-danger" href="/logout"><i class="fas fa-power-off mr-2"></i> Logout</a></li>
                                  </ul>
                              </li>
                              <li class="visible-xs d-xs-flex toggle-icon">
                                  <a href="#top-nav-list" data-toggle="collapse" aria-expanded="false">
                                      <i class="fas fa-fw fa-bars"></i>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
          <!-- end headertop -->
          <!-- navigation -->
          <div class="main-heading">
              <nav class="top-nav  navbar-collapse collapse" id="top-nav-list">
                  <!-- BEGIN: nav-content -->
                  <ul class="metismenu nav nav-inverse nav-bordered nav-inline nav-hoverable is-center" data-plugin="metismenu">
                      <li @if(Route::currentRouteName() == 'home') class="active" @endif>
                          <a href="/home">
                              <span class="nav-icon">
                                  <i class="fas fa-cogs"></i>
                              </span>
                              <span class="nav-title">Dashboard</span>
                          </a>
                      </li>
                      <!-- BEGIN: chart -->
                      <li @if(Route::currentRouteName() == 'accounts') class="active" @endif>
                          <a href="/accounts">
                              <span class="nav-icon">
                                  <i class="fas fa-users"></i>
                              </span>
                              <span class="nav-title">Accounts</span>
                          </a>
                      </li>
                      <!-- END: chart -->

                      <!-- BEGIN: ui -->
                      <li @if(Route::currentRouteName() == 'ads-manager') class="active" @endif>
                          <a href="/ads-manager">
                              <span class="nav-icon">
                                  <i class="fab fa-adversal"></i>
                              </span>
                              <span class="nav-title">Ads Manager</span>
                          </a>
                      </li>
                      <!-- END: ui -->
                  </ul>
              </nav>
          </div>
          <!-- end navigation -->
@endif
