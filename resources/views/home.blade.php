@extends('layouts.app')
@section('content')


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
                                      
                                      .container {
                              max-width: 1200px;
                              margin: 0 auto;
                              padding: 0 20px;
                              }

                              header {
                              display: flex;
                              justify-content: space-between;
                              align-items: center;
                              margin-bottom: 50px;
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
                             font-weight: bold;
                             }




                                      .alert-popup-container {
  text-align: center;
}

.alert-popup-title {
  font-size: 65px;
  font-weight: bold;
  margin-top: 15px;
  margin-bottom: 15px;
  z-index: 2;
  position: relative;
}

.alert-popup-message {
  
  font-size: 21px;
  font-weight: 300;
  line-height: 1.4;
}

.alert-popup-confirm {
  margin-top: 20px;
  margin-bottom: 20px;
}

.success-checkmark {
  width: 80px;
  height: 80px;
  margin: 0 auto;

  .check-icon {
    width: 80px;
    height: 80px;
    position: relative;
    border-radius: 50%;
    box-sizing: content-box;
    border: 4px solid #4CAF50;

    &::before {
      top: 3px;
      left: -2px;
      width: 30px;
      transform-origin: 100% 50%;
      border-radius: 100px 0 0 100px;
    }

    &::after {
      top: 0;
      left: 30px;
      width: 60px;
      transform-origin: 0 50%;
      border-radius: 0 100px 100px 0;
      animation: rotate-circle 4.25s ease-in;
    }

    &::before,
    &::after {
      content: '';
      height: 100px;
      position: absolute;
      background: #FFFFFF;
      transform: rotate(-45deg);
      z-index: 2;
    }

    .icon-line {
      height: 5px;
      background-color: #4CAF50;
      display: block;
      border-radius: 2px;
      position: absolute;
      z-index: 10;

      &.line-tip {
        top: 46px;
        left: 14px;
        width: 25px;
        transform: rotate(45deg);
        animation: icon-line-tip 0.75s;
      }

      &.line-long {
        top: 38px;
        right: 8px;
        width: 47px;
        transform: rotate(-45deg);
        animation: icon-line-long 0.75s;
      }
    }

    .icon-circle {
      top: -4px;
      left: -4px;
      z-index: 10;
      width: 80px;
      height: 80px;
      border-radius: 50%;
      position: absolute;
      box-sizing: content-box;
      border: 4px solid rgba(76, 175, 80, .5);
    }

    .icon-fix {
      top: 8px;
      width: 5px;
      left: 26px;
      z-index: 1;
      height: 85px;
      position: absolute;
      transform: rotate(-45deg);
      background-color: #FFFFFF;
    }
  }
}

@keyframes rotate-circle {
  0% {
    transform: rotate(-45deg);
  }

  5% {
    transform: rotate(-45deg);
  }

  12% {
    transform: rotate(-405deg);
  }

  100% {
    transform: rotate(-405deg);
  }
}

@keyframes icon-line-tip {
  0% {
    width: 0;
    left: 1px;
    top: 19px;
  }

  54% {
    width: 0;
    left: 1px;
    top: 19px;
  }

  70% {
    width: 50px;
    left: -8px;
    top: 37px;
  }

  84% {
    width: 17px;
    left: 21px;
    top: 48px;
  }

  100% {
    width: 25px;
    left: 14px;
    top: 45px;
  }
}

@keyframes icon-line-long {
  0% {
    width: 0;
    right: 46px;
    top: 54px;
  }

  65% {
    width: 0;
    right: 46px;
    top: 54px;
  }

  84% {
    width: 55px;
    right: 0px;
    top: 35px;
  }

  100% {
    width: 47px;
    right: 8px;
    top: 38px;
  }
}

                                      @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

                                       * {
                                        
                                        box-sizing: border-box;
                                        font-family: Sans-Serif;
                                        }

                                        .welcome {
                                        height: 98vh;
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


                                      nav li {
                                      margin-right: 20px;
                                      font-size: 1.1rem;
                                      }


                                      .welcome-content {
                                      text-align: center;
                                      }

                                      

                                      /* Mobile responsiveness */
                                      @media (max-width: 767px) 
                                      {
                             
                                      .welcome-content {
                                      margin-top: 50px;
                                      text-align: center;
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

                        </style> 

                    <section class="welcome">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<div class="container">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                </div>

                



    <div class="row justify-content-center">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div class="col-md-5">&emsp;&emsp;&emsp;&emsp;


        
<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
  <defs>
    <symbol id="check" viewBox="0 0 16 16">
      <path fill="currentColor" d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M7,11.4L3.6,8L5,6.6l2,2l4-4L12.4,6L7,11.4z"></path>
    </symbol>
  </defs>
</svg>
<div class="alert-popup-container">
  <div class="success-checkmark">
    <div class="check-icon">
      <span class="icon-line line-tip"></span>
      <span class="icon-line line-long"></span>
      <div class="icon-circle"></div>
      <div class="icon-fix"></div>
    </div>
  </div>
  <div class="alert-popup-title">Congratulations,</div>
  <div class="alert-popup-message">
  your account has been successfully created.
  </div>
</div>
</div>
@endsection
