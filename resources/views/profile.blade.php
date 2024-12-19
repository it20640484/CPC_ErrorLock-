@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
<div data-elementor-type="wp-page" data-elementor-id="22344" class="elementor elementor-22344" data-elementor-settings="[]">
	<div class="elementor-section-wrap">
		<section class="elementor-section elementor-top-section elementor-element elementor-element-c11a218 elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-bottom elementor-section-boxed elementor-section-height-default" data-id="c11a218" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
			<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9625e54" data-id="9625e54" data-element_type="column">
			            <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-3720d0c elementor-widget elementor-widget-html" data-id="3720d0c" data-element_type="widget" data-widget_type="html.default">
                                
				                <div class="elementor-widget-container">
			                      <meta charset="UTF-8">
                                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                  <title>ERRORLOCK</title>
   
                           <style>
                                       @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

                                       * {
                                        
                                        box-sizing: border-box;
                                        font-family: Sans-Serif;
                                        }

                                        .welcome {
                                        height: 140vh;
                                        background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.15)), url(https://tanknewsinternational.com/wp-content/uploads/2021/10/Storage-1335076487-copy1-scaled-1.jpg);
                                        width: 218vh;
                                        background-position: center;
                                        background-repeat: no-repeat;
                                        background-size: cover;
                                        position: relative;
                                        
                                        }
                                       .container {
                                       max-width: 1200px;
                                       margin: 0 auto;
                                       padding: 0 20px;
                                       }

                                       header {
                                       display: flex;
                                       justify-content: space-between;
                                       align-items: center;
                                       margin-bottom: 20px;
                                       width: 100%;
                                       }

                        
                                      nav ul {
                                      list-style: none;
                                      display: flex;
                                      }

                                      nav li {
                                      margin-right: 20px;
                                      font-size: 1.1rem;
                                      }

                                      nav li a {
                                      color: #fff;
                                      text-decoration: none;
                                      position: relative;
                                      }

                                      nav li a:before {
                                      content: '';
                                      position: absolute;
                                      bottom: -5px;
                                      left: 0;
                                      width: 100%;
                                      height: 3px;
                                      background-color: #F40009;
                                      transform: scaleX(0);
                                      transition: transform 0.3s ease-in-out;
                                      transform-origin: center;
                                      }

                                      nav li a:hover:before,
                                      nav li a.selected:before {
                                      transform: scaleX(1);
                                      }

                                      nav li.selected a {
                                      font-weight: normal;
                                      }

                                      .welcome-content {
                                      text-align: center;
                                      }

                                      h1 {
                                      font-size: 4rem;
                                      font-weight: normal;
                                      margin-bottom: 20px;
                                      color: #fff;
                                      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                                      }

                                      p {
                                      color: #fff;
                                      font-size: 1.5rem;
                                      margin-bottom: 40px;
                                      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
                                      }

                                      .btn {
                                      background-color: #F40009;
                                      color: #fff;
                                      padding: 10px 20px;
                                      border: none;
                                      border-radius: 5px;
                                      font-size: 1.2rem;
                                      font-weight: normal;
                                      cursor: pointer;
                                      transition: background-color 0.3s ease-in-out;
                                      }

                                      .btn:hover {
                                      background-color: #d00007;
                                      }

                                      /* Mobile responsiveness */
                                      @media (max-width: 767px) 
                                      {
                                      header {
                                      margin-bottom: 30px;
                                      }

                                      nav {
                                      flex-direction: column;
                                      }

                                      nav ul {
                                      width: 100%;
                                      }

                                      nav li {
                                      text-align: center;
                                      margin-bottom: 10px;
                                      }

                                      .welcome-content {
                                      margin-top: 50px;
                                      }
                                      }
                                      h4{
                                      color: #fff;
                                      text-decoration: none;
                                      position: relative;
                                      }
                                      div{
                                      color: #fff;
                                      text-decoration: none;
                                      position: relative;
                                      }
                                      div.transbox {
                                      margin: 1px;
                                      background-color: #000000;
                                      border: 0.5px solid black;
                                      opacity: 0.6;
                                      height:129vh;
                                      }
                                      
                                      .vote-logo {
                                      display: flex;
                                      justify-content: flex-end;
                                      align-items: center;
                                      margin-top: 20px;
                                      }
                                      .vote-logo img {
                                       width: 150px;
                                       height: 150px;
                                       margin-right: 20px;
                                       }
                                       .logo {
                                       margin: 0px;
                                       }
                                      .logo img {
                                      height: 76px;
                                      }
                                      .view-account .side-bar {
                        padding-bottom: 30px
                        }

                       .view-account .side-bar .user-info {
                       text-align: center;
                       margin-bottom: 15px;
                       padding: 30px;
                       color: #616670;
                       border-bottom: 1px solid #f3f3f3
                       }

                      .view-account .side-bar .user-info .img-profile {
                      width: 120px;
                      height: 120px;
                      margin-bottom: 15px
                      }

                      .view-account .side-bar .user-info .meta li {
                      margin-bottom: 10px
                      } 

                      .view-account .side-bar .user-info .meta li span {
                      display: inline-block;
                      width: 100px;
                      margin-right: 5px;
                      text-align: right
                      }

                      .view-account .side-bar .user-info .meta li a {
                      color: #616670
                      }

                      .view-account .side-bar .user-info .meta li.activity {
                      color: #a2a6af
                      }

                      .view-account .side-bar .side-menu {
                      text-align: center
                      }

                      .view-account .side-bar .side-menu .nav {
                      display: inline-block;
                      margin: 0 auto
                      }

                      .view-account .side-bar .side-menu .nav>li {
                      font-size: 14px;
                      margin-bottom: 0;
                      border-bottom: none;
                      display: inline-block;
                      float: left;
                      margin-right: 15px;
                      margin-bottom: 15px
                      }

                      .view-account .side-bar .side-menu .nav>li:last-child {
                      margin-right: 0
                      }

                      .view-account .side-bar .side-menu .nav>li>a {
                      display: inline-block;
                      color: #9499a3;
                      padding: 5px;
                      border-bottom: 2px solid transparent
                      }

                      .view-account .side-bar .side-menu .nav>li>a:hover {
                      color: #616670;
                      background: none
                      }

                      .view-account .side-bar .side-menu .nav>li.active a {
                      color: #40babd;
                      border-bottom: 2px solid #40babd;
                      background: none;
                      border-right: none
                      }
                      .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
                      color: #6dbd63;
                      border-bottom-color: #6dbd63
                      }

                      .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
                      color: #497cb1;
                      border-bottom-color: #497cb1
                      }

                      .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
                      color: #ec6952;
                      border-bottom-color: #ec6952
                      }

                      .view-account .side-bar .side-menu .nav>li .icon {
                      display: block;
                      font-size: 24px;
                      margin-bottom: 5px
                      }

                      .view-account .content-panel {
                      padding: 30px
                      }

                     .view-account .content-panel .title {
                      margin-bottom: 15px;
                      margin-top: 0;
                      font-size: 18px
                      }

                      .view-account .content-panel .fieldset-title {
                      padding-bottom: 15px;
                      border-bottom: 1px solid #eaeaf1;
                      margin-bottom: 30px;
                      color: #616670;
                      font-size: 16px
                      }

                      .view-account .content-panel .avatar .figure img {
                      float: right;
                      width: 64px
                      }

                      .view-account .content-panel .content-header-wrapper {
                      position: relative;
                      margin-bottom: 30px
                      }

                      .view-account .content-panel .content-header-wrapper .actions {
                      position: absolute;
                      right: 0;
                      top: 0
                      }

                      .view-account .content-panel .content-utilities {
                      position: relative;
                      margin-bottom: 30px
                      }

                      .view-account .content-panel .content-utilities .btn-group {
                      margin-right: 5px;
                      margin-bottom: 15px
                      }

                      .view-account .content-panel .content-utilities .fa {
                      font-size: 16px;
                      margin-right: 0
                      }

                      .view-account .content-panel .content-utilities .page-nav {
                      position: absolute;
                      right: 0;
                      top: 0
                      }

                      .view-account .content-panel .content-utilities .page-nav .btn-group {
                      margin-bottom: 0
                      }

                      .view-account .content-panel .content-utilities .page-nav .indicator {
                      color: #a2a6af;
                      margin-right: 5px;
                      display: inline-block
                      }

                      .view-account .content-panel .mails-wrapper .mail-item {
                      position: relative;
                      padding: 10px;
                      border-bottom: 1px solid #f3f3f3;
                      color: #616670;
                      overflow: hidden
                      }

                      .view-account .content-panel .mails-wrapper .mail-item>div {
                      float: left
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .icheck {
                      background-color: #D3D3D3
                      }

                      .view-account .content-panel .mails-wrapper .mail-item:hover {
                      background: #f9f9fb
                      }

                      .view-account .content-panel .mails-wrapper .mail-item:nth-child(even) {
                      background: #fcfcfd
                      }

                      .view-account .content-panel .mails-wrapper .mail-item:nth-child(even):hover {
                      background: #f9f9fb
                      }

                      .view-account .content-panel .mails-wrapper .mail-item a {
                      color: #616670
                      }

                      .view-account .content-panel .mails-wrapper .mail-item a:hover {
                      color: #494d55;
                      text-decoration: none
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .checkbox-container,
                      .view-account .content-panel .mails-wrapper .mail-item .star-container {
                      display: inline-block;
                      margin-right: 5px
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .star-container .fa {
                      color: #a2a6af;
                      font-size: 16px;
                      vertical-align: middle
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .star-container .fa.fa-star {
                      color: #f2b542
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .star-container .fa:hover {
                      color: #868c97
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-to {
                      display: inline-block;
                      margin-right: 5px;
                      min-width: 120px
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject {
                      display: inline-block;
                      margin-right: 5px
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label {
                      margin-right: 5px
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label:last-child {
                      margin-right: 10px
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a,
                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a:hover {
                      color: #fff
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-1 {
                      background: #f77b6b
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-2 {
                      background: #58bbee
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-3 {
                      background: #f8a13f
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-4 {
                      background: #ea5395
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-5 {
                      background: #8a40a7
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .time-container {
                      display: inline-block;
                      position: absolute;
                      right: 10px;
                      top: 10px;
                      color: #a2a6af;
                      text-align: left
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .time-container .attachment-container {
                      display: inline-block;
                      color: #a2a6af;
                      margin-right: 5px
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
                      display: inline-block;
                      text-align: right
                      }

                      .view-account .content-panel .mails-wrapper .mail-item .time-container .time.today {
                      font-weight: 700;
                      color: #494d55
                      }

                      .drive-wrapper {
                      padding: 15px;
                      background: #f5f5f5;
                      overflow: hidden
                      }

                      .drive-wrapper .drive-item {
                      width: 130px;
                      margin-right: 15px;
                      display: inline-block;
                      float: left
                      }

                      .drive-wrapper .drive-item:hover {
                      box-shadow: 0 1px 5px rgba(0, 0, 0, .1);
                      z-index: 1
                      }

                      .drive-wrapper .drive-item-inner {
                      padding: 15px
                      }

                      .drive-wrapper .drive-item-title {
                      margin-bottom: 15px;
                      max-width: 100px;
                      white-space: nowrap;
                      overflow: hidden;
                      text-overflow: ellipsis
                      }

                      .drive-wrapper .drive-item-title a {
                      color: #494d55
                      }

                      .drive-wrapper .drive-item-title a:hover {
                      color: #40babd
                      }

                      .theme-2 .drive-wrapper .drive-item-title a:hover {
                      color: #6dbd63
                      }

                      .theme-3 .drive-wrapper .drive-item-title a:hover {
                      color: #497cb1
                      }

                      .theme-4 .drive-wrapper .drive-item-title a:hover {
                      color: #ec6952
                      }

                      .drive-wrapper .drive-item-thumb {
                      width: 100px;
                      height: 80px;
                      margin: 0 auto;
                      color: #616670
                      }

                      .drive-wrapper .drive-item-thumb a {
                      -webkit-opacity: .8;
                      -moz-opacity: .8;
                      opacity: .8
                      }

                      .drive-wrapper .drive-item-thumb a:hover {
                      -webkit-opacity: 1;
                      -moz-opacity: 1;
                      opacity: 1
                      }

                      .drive-wrapper .drive-item-thumb .fa {
                      display: inline-block;
                      font-size: 36px;
                      margin: 0 auto;
                      margin-top: 20px
                      }

                      .drive-wrapper .drive-item-footer .utilities {
                      margin-bottom: 0
                      }

                      .drive-wrapper .drive-item-footer .utilities li:last-child {
                      padding-right: 0
                      }

                      .drive-list-view .name {
                      width: 60%
                      }

                      .drive-list-view .name.truncate {
                      max-width: 100px;
                      white-space: nowrap;
                      overflow: hidden;
                      text-overflow: ellipsis
                      }

                      .drive-list-view .type {
                      width: 15px
                      }

                      .drive-list-view .date,
                      .drive-list-view .size {
                      max-width: 60px;
                      white-space: nowrap;
                      overflow: hidden;
                      text-overflow: ellipsis
                      }

                      .drive-list-view a {
                      color: #494d55
                      }

                      .drive-list-view a:hover {
                      color: #40babd
                      }

                      .theme-2 .drive-list-view a:hover {
                      color: #6dbd63
                      }

                      .theme-3 .drive-list-view a:hover {
                      color: #497cb1
                      }

                      .theme-4 .drive-list-view a:hover {
                      color: #ec6952
                      }

                      .drive-list-view td.date,
                      .drive-list-view td.size {
                      color: #a2a6af
                      }

                      @media (max-width:767px) {
                      .view-account .content-panel .title {
                      text-align: center
                      }
                      .view-account .side-bar .user-info {
                      padding: 0
                      }
                      .view-account .side-bar .user-info .img-profile {
                      width: 60px;
                      height: 60px
                      }
                      .view-account .side-bar .user-info .meta li {
                      margin-bottom: 5px
                      }
                      .view-account .content-panel .content-header-wrapper .actions {
                      position: static;
                      margin-bottom: 30px
                      }
                      .view-account .content-panel {
                      padding: 0
                      }
                      .view-account .content-panel .content-utilities .page-nav {
                      position: static;
                      margin-bottom: 15px
                      }
                      .drive-wrapper .drive-item {
                      width: 100px;
                      margin-right: 5px;
                      float: none
                      }
                      .drive-wrapper .drive-item-thumb {
                      width: auto;
                      height: 54px
                      }
                      .drive-wrapper .drive-item-thumb .fa {
                      font-size: 24px;
                      padding-top: 0
                      }
                      .view-account .content-panel .avatar .figure img {
                      float: none;
                      margin-bottom: 15px
                      }
                      .view-account .file-uploader {
                      margin-bottom: 15px
                      }
                      .view-account .mail-subject {
                      max-width: 100px;
                      white-space: nowrap;
                      overflow: hidden;
                      text-overflow: ellipsis
                      }    
                      .view-account .content-panel .mails-wrapper .mail-item .time-container {
                      position: static
                      }
                      .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
                      width: auto;
                      text-align: left
                      }
                      }

                      
                      @media (min-width:768px) {
                      .view-account .side-bar .user-info {
                      padding: 0;
                      padding-bottom: 15px
                      }
                      .view-account .mail-subject .subject {
                      max-width: 200px;
                      white-space: nowrap;
                      overflow: hidden;
                      text-overflow: ellipsis
                      }
                      }

                      @media (min-width:992px) {
                      .view-account .content-panel {
                      min-height: 800px;
                      border-left: 1px solid #f3f3f7;
                      margin-left: 200px
                      }
                      .view-account .mail-subject .subject {
                      max-width: 280px;
                      white-space: nowrap;
                      overflow: hidden;
                      text-overflow: ellipsis
                      }
                      .view-account .side-bar {
                      position: absolute;
                      width: 200px;
                      min-height: 600px
                      }
                      .view-account .side-bar .user-info {
                      margin-bottom: 0;
                      border-bottom: none;
                      padding: 30px
                      }
                      .view-account .side-bar .user-info .img-profile {
                      width: 120px;
                      height: 120px
                      }
                      .view-account .side-bar .side-menu {
                      text-align: left
                      }
                      .view-account .side-bar .side-menu .nav {
                      display: block
                      }
                      .view-account .side-bar .side-menu .nav>li {
                      display: block;
                      float: none;
                      font-size: 14px;
                      border-bottom: 1px solid #f3f3f7;
                      margin-right: 0;
                      margin-bottom: 0
                      }
                      .view-account .side-bar .side-menu .nav>li>a {
                      display: block;
                      color: #9499a3;
                      padding: 10px 15px;
                      padding-left: 30px
                      }
                      .view-account .side-bar .side-menu .nav>li>a:hover {
                      background: #f9f9fb
                      }
                      .view-account .side-bar .side-menu .nav>li.active a {
                      background: #f9f9fb;
                      border-right: 2px solid #40babd;
                      border-bottom: none
                      }
                      .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
                      border-right-color: #6dbd63
                      }
                      .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
                      border-right-color: #497cb1
                      }
                      .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
                       border-right-color: #ec6952
                       }
                       .view-account .side-bar .side-menu .nav>li .icon {
                       font-size: 24px;
                       vertical-align: middle;
                       text-align: center;
                       width: 40px;
                       display: inline-block
                       }
                       }
                       .btn-success-soft {
    color: #28a745;
    background-color: rgba(40, 167, 69, 0.1);
}
.btn-danger-soft {
    color: #dc3545;
    background-color: rgba(220, 53, 69, 0.1);
}
                        </style> 
                           <section class="welcome">
                              <div class="container">
                              <div class="col-md-9">
                                                <div class="bg">&emsp;
                                                    <div class="transbox">
                                                       
                                                        <div class="card-body">

                                                        <div class="col-md-10">
                              <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                              <div class="view-account">
                                <section class="module">
                                  <div class="module-inner">
                                    <div class="side-bar">
                                      <div class="user-info">
                                        
                                        
                                      </div><br>

                                      <nav class="side-menu">
        				                        <ul class="nav">
        					                        <li><a href="#"><span class="fa fa-user"></span> Profile</a></li>
        					                        <li><a href="status"><span class="fa fa-cog"></span> Status</a></li>
        					                        <li><a href="login"><span class="fa fa-credit-card"></span> Logout</a></li>
        				                        </ul>
        			                        </nav>
                                    </div>

                                    <div class="content-panel">
                                      <form class="form-horizontal">
                                        <fieldset class="fieldset">
                                          <div class="panel-heading">
                                          
                                            <h3 class="panel-title">Personal Info</h3>
                                          </div>
                                          <hr>

                                          <form method="POST" action="{{ route('register') }}">
                                                               @csrf
                                                               <div class="row mb-2">
                                                                   <label for="epfno" class="col-md-2 col-form-label text-md-end">{{ __('EPF No') }}</label>
                                                                    <div class="col-md-9">
                                                                       <input id="epfno" type="epfno" class="form-control @error('epfno') is-invalid @enderror" placeholder="Must not be greater than 6 character" name="epfno" value="{{ old('epfno') }}" required autocomplete="name" autofocus>
                                                                       @error('epfno')
                                                                        <span class="invalid-feedback" role="alert">
                                                                           <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-2">
                            <label for="floatingName" class="col-md-2 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-9">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="required" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                                                                   <label for="floatingName" class="col-md-2 col-form-label text-md-end">{{ __('Fullname') }}</label>
                                                                    <div class="col-md-9">
                                                                       <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="name" autofocus>
                                                                       @error('fullname')
                                                                        <span class="invalid-feedback" role="alert">
                                                                           <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <fieldset class="fieldset">
                                          <div class="panel-heading">
                                            <h3 class="panel-title">Contact Info</h3>
                                          </div>
                                          <hr>

                                          <div class="row mb-2">
                            <label for="contactno" class="col-md-2 col-form-label text-md-end">{{ __('Contact No') }}</label>

                            <div class="col-md-9">
                                <input id="contactno" type="contactno" class="form-control @error('contactno') is-invalid @enderror" name="contactno" value="{{ old('contactno') }}" required autocomplete="contactno">

                                @error('contactno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                                                                   <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email') }}</label>
                                                                   <div class="col-md-9">
                                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                                        @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h3 class="panel-title">Security</h3>
                                          </div>
                                          <hr>

                                

                        <div class="row mb-2">
                           
                            <label for="password" class="col-md-2 col-form-label text-md-end">{{ __('Current Password') }}</label>
                             
                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                           
                           <label for="password-new" class="col-md-2 col-form-label text-md-end">{{ __('New Password') }}</label>
                            
                           <div class="col-md-9">
                               <input id="password-new" type="password" class="form-control" name="password_new"  required autocomplete="new-password">

                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                       </div>

                       
                       <div class="row mb-2">
                           
                           <label for="password-Confirm" class="col-md-2 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            
                           <div class="col-md-9">
                               <input id="password-Confirm" type="password" class="form-control" name="password_Confirm"  required autocomplete="new-password">

                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                       </div>
                        
                      
                        <!-- button -->
				<div class="gap-3 d-md-flex justify-content-md-end text-center">

                <div class="d-grid gap-3 col-3 mx-auto" >
                                    <button type="submit" class="btn btn-danger btn-lg">
                                      {{ __('Save') }}
                                    </button>
                                </div>

                                <div class="d-grid gap-3 col-3 mx-auto" >
                                    <button type="submit" class="btn btn-primary btn-lg">
                                      {{ __('Cancel') }}
                                    </button>
                                </div>
				</div>

                
                    </form>