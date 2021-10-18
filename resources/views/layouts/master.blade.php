<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indo Law Associates</title>
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/mains.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">

    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ionicon.min.css') }}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style>
        .login-popup {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1099;
            background-color: rgba(0, 0, 0, 0.6);
            visibility: hidden;
            opacity: 0;
            transition: all 1s ease;
        }

        .login-popup.show {
            visibility: visible;
            opacity: 1;
        }

        .login-popup .box {
            background-color: #ffffff;
            width: 650px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-wrap: wrap;
            opacity: 0;
            margin-left: 50px;
            transition: all 1s ease;

        }

        .login-popup.show .box {
            opacity: 1;
            margin-left: 0;
        }

        .login-popup .box .img-area {
            flex: 0 0 50%;
            max-width: 50%;
            position: relative;
            overflow: hidden;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-popup .box .img-area h1 {
            font-size: 30px;
        }

        .login-popup .box .img-area .img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-image: url('img/bg.jpg');
            background-size: cover;
            background-position: center;
            animation: zoomInOut 7s linear infinite;
            z-index: -1;

        }

        @keyframes zoomInOut {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        .login-popup .box .form {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 40px 30px;
        }

        .login-popup .box .form h1 {
            color: #000000;
            font-size: 30px;
            margin: 0 0 30px;
        }

        .login-popup .box .form .form-control {
            height: 45px;
            margin-bottom: 30px;
            width: 100%;
            border: none;
            border-bottom: 1px solid #cccccc;
            font-size: 15px;
            color: #000000;
        }

        .login-popup .box .form .form-control:focus {
            outline: none;
        }

        .login-popup .box .form label {
            font-size: 15px;
            color: #555555;
        }

        .login-popup .box .form .btn {
            width: 100%;
            background-color: #b14233;
            margin-top: 10px;
            height: 45px;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            text-transform: uppercase;
            color: #ffffff;
            cursor: pointer;
        }

        .login-popup .box .form .btn:focus {
            outline: none;
        }

        .login-popup .box .form .close {
            position: absolute;
            right: 10px;
            top: 0px;
            font-size: 30px;
            cursor: pointer;
        }

        /*responsive*/
        @media(max-width: 767px) {
            .login-popup .box {
                width: calc(100% - 30px);
            }

            .login-popup .box .img-area {
                display: none;
            }

            .login-popup .box .form {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

    </style>

</head>

<body>
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        {{-- <div class="login-popup">
            <div class="box">
                <div class="img-area">
                    <div class="img">
                    </div>
                    <img src="{{ asset('./images/logo/ila-logo.png') }}"
                                alt="">
                </div>
                <div class="form">
                    <form action="javascript:;" class="login100-form validate-form flex-sb flex-w">
                        <span class="login100-form-title p-b-53">
                            Sign In With
                        </span>
    
    
                        <a href="javascript:;" id="phoneAuth" class="btn-google m-b-20">
                            <img src="https://cdn2.iconfinder.com/data/icons/font-awesome/1792/phone-512.png" alt="PHONE">
                            Phone
                        </a>
                        
                        <div class="p-t-31 p-b-9 cstm-div phone-div">
                            <span class="txt1">
                                Phone Number <span style="font-size: 10px;">(include country code eg:+91)</span>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input phone-div" data-validate = "Mobile Number is required">
                            <input class="input100" type="text" name="phone_number" >
                            <span class="focus-input100"></span>
                        </div>
    
                        <div id="recaptcha-container" style="margin-top: 10px"></div>
    
                        <div class="p-t-31 p-b-9 cstm-div otp-div" >
                            <span class="txt1">
                                OTP  
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input otp-div" data-validate = "OTP is required">
                            <input class="input100"  type="text" name="verify_otp" >
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="container-login100-form-btn m-t-17 phone-div">
                            <button class="login100-form-btn sendOTP">
                                Send OTP
                            </button>
                        </div>
    
                        <div class="container-login100-form-btn m-t-17 otp-div">
                            <button type="button" id="verifyOTP" class="login100-form-btn">
                                Verify OTP
                            </button>
                        </div>
    
                         <div class="w-full text-center p-t-55">
                            <span class="txt2">
                                Not a member?
                            </span>
                            <a href="#" class="txt2 bo1">
                                Sign up now
                            </a>
                        </div> 
                    </form>
                    <div class="close">&times;</div>
                
                        <div class="alert alert-danger" id="error" style="display: none;"></div>
                        
                        
                        <div class="card-body">
                            <h5>Please Enter your Details, to get a callback</h3>
                            <div class="alert alert-success" id="sentSuccess" style="display: none;"></div>
                            <form class="ttm-contactform wrap-form">
                                <label>Enter Your Mobile Number</label>
                                <input type="text" id="number" class="form-control" placeholder="+91********">
                                <div id="recaptcha-container" class="captcha" style="max-width:150px!important;transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                                <button type="button" class="btn btn-success" onclick="phoneSendAuth();">SendCode</button>
                            </form>
                        </div>
                       
                        <div class="card-body">
                            <div class="alert alert-success" id="successRegsiter" style="display: none;"></div>
                            <form class="ttm-contactform wrap-form">
                                <label>Enter Your Verification Code</label>

                                <input type="text" id="verificationCode" class="form-control"
                                    placeholder="Enter verification code">
                                <button type="button" class="btn btn-success" onclick="codeverify();">Verify code</button>
                            </form>
                        </div>
                </div>
           </div>
            <div class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary">Save changes</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            <div class="row justify-content-md-center align-items-center">
                <div class="col-sm-6">
                    <div class="card text-center">
                        <div class="card-header">
                          Featured
                        </div>
                        <div class="card-body">
                            <div class="alert alert-danger" id="error" style="display: none;"></div>
                            <div class="card">
                                <div class="card-header">
                                    Enter Phone Number
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-success" id="sentSuccess" style="display: none;"></div>
                                    <form>
                                        <label>Phone Number:</label>
                                        <input type="text" id="number" class="form-control" placeholder="+91********">
                                        <div id="recaptcha-container"></div>
                                        <button type="button" class="btn btn-success" onclick="phoneSendAuth();">SendCode</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card" style="margin-top: 10px">
                                <div class="card-header">
                                    Enter Verification code
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-success" id="successRegsiter" style="display: none;"></div>
                                    <form>
                                        <input type="text" id="verificationCode" class="form-control"
                                            placeholder="Enter verification code">
                                        <button type="button" class="btn btn-success" onclick="codeverify();">Verify code</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                      </div>
                   
                </div>
            </div>
        </div> --}}
        <!-- preloader end -->
        <!--header start-->
        <header class="header">
            <div class="containers">
                <div class="wrapper">
                    <div class="header-item-left">
                        {{-- <h1><a href="./index.html" class="brand">Store</a></h1> --}}
                        <a href="{{ url('/') }}"> <img src="{{ asset('./images/logo/ila-logo.png') }}"
                                alt="" width='50%'></a>
                    </div>
                    <!-- Section: Navbar Menu -->
                    <div class="header-item-center">
                        <div class="overlay"></div>
                        <nav class="menu">
                            <div class="menu-mobile-header">
                                <button style="border: 0px;border-radius: 0px;padding-top:0;padding-bottom:0;" type="button" class="menu-mobile-arrow"><i
                                        class="ion ion-ios-arrow-back"></i></button>
                                <div class="menu-mobile-title"></div>
                                <button style="border: 0px;border-radius: 0px;padding-top:0;padding-bottom:0;" type="button" class="menu-mobile-close"><i
                                        class="ion ion-ios-close"></i></button>
                            </div>
                            <ul class="menu-section">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                {{-- <li class="menu-item-has-children">
									<a href="#">New Products <i class="ion ion-ios-arrow-down"></i></a>
									<div class="menu-subs menu-mega menu-column-4">
										<div class="list-item text-center">
											<a href="#">
												<img src="./asset/image-1.jpg" class="responsive" alt="New Product">
												<h4 class="title">New Product 1</h4>
											</a>
										</div>
										<div class="list-item text-center">
											<a href="#">
												<img src="./asset/image-2.jpg" class="responsive" alt="New Product">
												<h4 class="title">New Product 2</h4>
											</a>
										</div>
										<div class="list-item text-center">
											<a href="#">
												<img src="./asset/image-3.jpg" class="responsive" alt="New Product">
												<h4 class="title">New Product 3</h4>
											</a>
										</div>
										<div class="list-item text-center">
											<a href="#">
												<img src="./asset/image-4.jpg" class="responsive" alt="New Product">
												<h4 class="title">New Product 4</h4>
											</a>
										</div>
									</div>
								</li> --}}
                                <li class="menu-item-has-children">
                                    <a href="#">Book a Lawyer <i class="ion ion-ios-arrow-down"></i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Personal/Family
                                            </h4>
                                            <ul>
                                                <li><a href="{{ route('perosnalfamily.divorce') }}">Divorce</a></li>
                                                <li><a href="{{ route('perosnalfamily.familydispute') }}">Family
                                                        Dispute</a></li>
                                                <li><a href="{{ route('perosnalfamily.childcustody') }}">Child
                                                        Custody</a></li>
                                                <li><a href="{{ route('perosnalfamily.muslimlaw') }}">Muslim Law</a>
                                                </li>
                                                <li><a href="{{ route('perosnalfamily.medicalnegligence') }}">Medical
                                                        Negligence</a></li>
                                                <li><a href="{{ route('perosnalfamily.motoraccident') }}">Motor
                                                        Accident</a></li>
                                                <li><a
                                                        href="{{ route('perosnalfamily.willstrust') }}">Wills/Trusts</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('perosnalfamily.labourservices') }}">Labour&Service</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Corporate
                                            </h4>
                                            <ul>
                                                <li><a href="{{ route('croporatelaw.arbiration') }}">Arbitration</a></li>
                                                <li><a href="{{ route('croporatelaw.tradecopyrights') }}">Trademark & Copyright</a></li>
                                                <li><a href="{{ route('croporatelaw.customcentralexcercise') }}">Customs & Central Excise</a></li>
                                                <li><a href="{{ route('croporatelaw.startup') }}">Startup</a></li>
                                                <li><a href="{{ route('croporatelaw.bankingfinance') }}">Banking/Finance</a></li>
                                                <li><a href="{{ route('croporatelaw.gst') }}">GST</a></li>
                                                <li><a href="{{ route('croporatelaw.croporate') }}">Corporate</a></li>
                                                <li><a href="{{ route('croporatelaw.employeeinsurance') }}">Employee Insurance</a></li>
                                            </ul>
                                        </div>

                                        <div class="list-item">
                                            <h4 class="title">Civil/Debt Matters</h4>
                                            <ul>
                                                <li><a href="{{ route('civildebt.documentation') }}">Documentation</a></li>
                                                <li><a href="{{ route('civildebt.consumercourt') }}">Consumer Court</a></li>
                                                <li><a href="{{ route('civildebt.civil') }}">Civil</a></li>
                                                <li><a href="{{ route('civildebt.chequebounce') }}">Cheque Bounce</a></li>
                                                <li><a href="{{ route('civildebt.recovery') }}">Recovery</a></li>

                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Criminal/Property</h4>
                                            <ul>
                                                <li><a href="{{ route('criminalproperty.criminal') }}">Criminal</a></li>
                                                <li><a href="{{ route('criminalproperty.property') }}">Property</a></li>
                                                <li><a href="{{ route('criminalproperty.landlordtenant') }}">Landlord/Tenant</a></li>
                                                <li><a href="{{ route('criminalproperty.cybercrime') }}">Cyber Crime</a></li>

                                            </ul>
                                        </div>

                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Legal Services <i class="ion ion-ios-arrow-down"></i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Family/Matrimonial</h4>
                                            <ul>
                                                <li><a href="{{ route('family.mutualdivorce') }}">Mutual Divorce</a></li>
                                                <li><a href="{{ route('family.marriageregistration') }}">Marriage Registration</a></li>
                                                <li><a href="{{ route('family.courtmarriage') }}">Court Marriage</a></li>
                                                <li><a href="{{ route('family.divorcenotice') }}">Divorce Notice</a></li>
                                                <li><a href="{{ route('family.marriagecounselling') }}">Marriage Counselling</a></li>
                                                <li><a href="{{ route('family.willdrafting') }}">Wil Drafting</a></li>

                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Civil Law/Property</h4>
                                            <ul>
                                                <li><a href="{{ route('civillaw.successioncertificate') }}">Succession Certificate</a></li>
                                                <li><a href="{{ route('civillaw.propertyverification') }}">Property Verification</a></li>
                                                <li><a href="{{ route('civillaw.propertyregistration') }}">Property Registration</a></li>
                                                <li><a href="{{ route('civillaw.giftdeeddrafting') }}">Gift Deed Drafting</a></li>
                                                <li><a href="{{ route('civillaw.leaseagreementdrafting') }}">Lease Agreement Drafting </a></li>
                                                <li><a href="{{ route('civillaw.leaseregistration') }}">Lease Registration</a></li>
                                            </ul>

                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Documentation
                                            </h4>
                                            <ul>
                                                <li><a href="{{ route('documentation.mou') }}">MoU</a></li>
                                                <li><a href="{{ route('documentation.namechange') }}">Name Change</a></li>
                                                <li><a href="{{ route('documentation.saledeedregistration') }}">Sale Deed Registration</a></li>
                                                <li><a href="{{ route('documentation.willregistration') }}">Will Registration</a></li>
                                                <li><a href="{{ route('documentation.powerofattorney') }}">Power of Attorney</a></li>
                                            </ul>

                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">Legal Notice</h4>
                                            <ul>
                                                <li><a href="{{ route('legalnotice.divorcenotice') }}">Divorce Notice</a></li>
                                                <li><a href="{{ route('legalnotice.tenantevictionnotice') }}">Tenant Eviction Notice </a></li>
                                                <li><a href="{{ route('legalnotice.refundofsecuritynotice') }}">Refund of Security Notice</a></li>
                                                <li><a href="{{ route('legalnotice.faultyproductnotice') }}">Faulty Product Notice</a></li>
                                                <li><a href="{{ route('legalnotice.chequebouncenotice') }}">Cheque Bounce Notice</a></li>
                                                <li><a href="{{ route('legalnotice.recoverynoticeofdues') }}">Recovery Notice of Dues
                                                    </a></li>
                                            </ul>

                                        </div>
                                        {{-- <div class="list-item">
											<h4 class="title">Civil Law/Property</h4>
											<ul>
												<li><a href="#">Succession Certificate</a></li>
												<li><a href="#">Property Verification</a></li>
												<li><a href="#">Property Registration</a></li>
												<li><a href="#">Gift Deed Drafting</a></li>
                                                <li><a href="#">Lease Agreement Drafting </a></li>
												<li><a href="#">Lease Registration</a></li>
											</ul>
											
										</div> --}}



                                    </div>
                                </li>
                                {{-- <li><a href="{{ route('paralegal.index') }}">Paralegal Services</a></li> --}}
                                <li class="menu-item-has-children">
                                    <a href="#">Other Services <i class="ion ion-ios-arrow-down"></i></a>
                                    <div class="menu-subs menu-column-1">
                                        <ul style="list-style: none">
                                            <li><a href="{{ route('otherservices') }}">Other Services</a></li>
                                            <li><a href="#">ILA Services</a></li>
                                            <li><a href="{{ route('legalforms') }}">Legal Forms</a></li>
                                            <li><a href="{{ route('paralegal.index') }}">Paralegal Services</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">About <i class="ion ion-ios-arrow-down"></i></a>
                                    <div class="menu-subs menu-column-1">
                                        <ul style="list-style: none"    >
                                            <li><a href="{{ url('/about') }}">About us</a></li>
                                            <li><a href="{{ url('/contact') }}">contact us</a></li>
                                            <li><a href="#">Privacy & Policy</a></>
                                            <li><a href="#">Term of Cookies</a></>
                                        </ul>
                                    </div>
                                </li>
                                {{-- <li><a href="#">Contact Us</a></li> --}}
                            </ul>
                        </nav>
                    </div>

                    <div class="header-item-right">
                        <button style="margin-right:10px;font-size:1rem;font-weight:400" class="tp-caption ttm-btn ttm-btn-style-fill ttm-btn-color-skincolor">Join Us</button>
                        
                        <button style="font-size:1rem;font-weight:400;"  class="tp-caption ttm-btn ttm-btn-style-fill ttm-btn-color-skincolor">Book an
                            appointment</button>

                        <button type="button" class="menu-mobile-trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        {{-- <header id="masthead" class="header ttm-header-style-02">
            <div class="top_bar ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 col-lg-10 d-flex flex-row align-items-center justify-content-center pr-80">
                            <div class="top_bar_contact_item">
                                Location: Chennai,Tamil Nadu, India.
                            </div>
                            <div class="top_bar_content_item">
                                <div class="top_bar_social">
                                    <ul class="social-icons">
                                        <li><a class="tooltip-bottom" target="_blank" href="" data-tooltip="Facebook"
                                                tabindex="-1"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a class="tooltip-bottom" target="_blank" href="" data-tooltip="Twitter"
                                                tabindex="-1"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a class="tooltip-bottom" target="_blank" href="" data-tooltip="Flickr"
                                                tabindex="-1"><i class="fab fa-flickr"></i></a>
                                        </li>
                                        <li><a class="tooltip-bottom" target="_blank" href="" data-tooltip="Linkedin"
                                                tabindex="-1"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="top_bar_contact_item ml-auto">
                                <a href="#">Make A Claim</a>
                            </div>
                            <div class="top_bar_contact_item">
                                <a href="#">Services</a>
                            </div>
                            <div class="top_bar_contact_item">
                                <a href="#">Solution Center</a>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-2">
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span ttm-bgcolor-skincolor ml_60 pl-30">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <a href="#">Get A Quotes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-darkgrey">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="site-navigation">
                                    <div class="site-navigation-content d-flex flex-row">
                                        <div class="site-branding mr-auto">
                                            <a class="home-link" href="index.html" title="IndolawAssociates" rel="home">
                                                <img id="logo-img" class="img-center" src="images/logo-white.png"
                                                    alt="logo-img">
                                            </a>
                                        </div>
                                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                        </div>
                                        <nav id="main-menu" class="main-menu menu-mobile">
                                            <ul class="menu">
                                                <li class="menu-item has-submenu"><a href="index.html">Home</a>
                                                    <ul class="submenu sub-menu">
                                                        <li><a href="index.html">Classic Home</a></li>
                                                        <li><a href="home-2.html">Attorney Home</a></li>
                                                        <li><a href="home-3.html">Modern Home</a></li>
                                                        <li class="has-submenu active">
                                                            <a href="#">Header Styles</a>
                                                            <ul class="submenu sub-menu">
                                                                <li><a href="index.html">Header Style 01</a></li>
                                                                <li class="active"><a target="_blank"
                                                                        href="header-style-02.html">Header Style 02</a>
                                                                </li>
                                                                <li><a target="_blank"
                                                                        href="header-style-03.html">Header Style 03</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item has-submenu"><a href="#">About</a>
                                                    <ul class="submenu sub-menu">
                                                        <li><a href="aboutus-1.html">About Us 1</a></li>
                                                        <li><a href="aboutus-2.html">About Us 2</a></li>
                                                        <li><a href="team-1.html">Attorneys 1</a></li>
                                                        <li><a href="team-2.html">Attorneys 2</a></li>
                                                        <li><a href="team-details.html">Attorney Details</a></li>
                                                        <li><a href="services-1.html">Services 1</a></li>
                                                        <li><a href="services-2.html">Services 2</a></li>
                                                        <li><a href="faq.html">Faq</a></li>
                                                        <li><a href="error.html">404 Page</a></li>
                                                        <li><a href="element.html">Elements</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item has-submenu"><a href="#">Case Study</a>
                                                    <ul class="submenu sub-menu">
                                                        <li><a href="#">Case Study Style 1</a>
                                                        </li>
                                                        <li><a href="#">Case Study Style 2</a>
                                                        </li>
                                                        <li class="has-submenu"><a href="#">Case Study Single</a>
                                                            <ul class="submenu sub-menu">
                                                                <li><a href="#">Style One</a></li>
                                                                <li><a href="#">Style Two</a></li>
                                                                <li><a href="#">Style Three</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item has-submenu"><a href="#">Practice Areas</a>
                                                    <ul class="submenu sub-menu">
                                                        <li><a href="business-law.html">Business Law</a></li>
                                                        <li><a href="criminal-law.html">Criminal Law</a></li>
                                                        <li><a href="divorce-law.html">Divorce Law</a></li>
                                                        <li><a href="education-law.html">Education Law</a></li>
                                                        <li><a href="family-law.html">Family Law</a></li>
                                                        <li><a href="industrial-law.html">Industrial Law</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item has-submenu"><a href="#">Blog</a>
                                                    <ul class="submenu sub-menu">
                                                        <li><a href="blog.html">Blog Classic</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="blog-single.html">Blog Single View</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="#">Contact Us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header> --}}

        
        @yield('content')



        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->

    <script>
      

  const loginPopup = document.querySelector(".login-popup");
  const close = document.querySelector(".close");


  window.addEventListener("load",function(){
 
   showPopup();
   // setTimeout(function(){
   //   loginPopup.classList.add("show");
   // },5000)

  })

  function showPopup(){
        const timeLimit = 5 // seconds;
        let i=0;
        const timer = setInterval(function(){
         i++;
         if(i == timeLimit){
          clearInterval(timer);
          loginPopup.classList.add("show");
         } 
         console.log(i)
        },1000);
  }

  close.addEventListener("click",function(){
    loginPopup.classList.remove("show");

  $("#btnClose").click(function (e)
  {
    
  })
     localStorage["PopupShown"] = 'yes'; //Save in the sessionStorage if the modal has been shown
  });
  


      
    // </script>
      <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
      <script>
    //      const firebaseConfig = {
    //          apiKey: "AIzaSyB6p_z1sUqiVvNwVFmzbaBujTjgqIsM8mY",
    //          authDomain: "indolaw-associates.firebaseapp.com",
    //          projectId: "indolaw-associates",
    //          storageBucket: "indolaw-associates.appspot.com",
    //          messagingSenderId: "772447660818",
    //          appId: "1:772447660818:web:ea8c8e03d55c198019e1cb",
    //          measurementId: "G-2KSQPKJK1M"
    //      };
 
    //      firebase.initializeApp(firebaseConfig);
    //  </script>
      <script type="text/javascript">
    //      window.onload = function() {
    //          render();
    //      };
 
    //      function render() {
    //          window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    //          recaptchaVerifier.render();
    //      }
 
    //      function phoneSendAuth() {
 
    //          var number = $("#number").val();
 
    //          firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
 
    //              window.confirmationResult = confirmationResult;
    //              coderesult = confirmationResult;
    //              console.log(coderesult);
 
    //              $("#sentSuccess").text("Message Sent Successfully.");
    //              $("#sentSuccess").show();
 
    //          }).catch(function(error) {
    //              $("#error").text(error.message);
    //              $("#error").show();
    //          });
 
    //      }
 
    //      function codeverify() {
 
    //          var code = $("#verificationCode").val();
 
    //          coderesult.confirm(code).then(function(result) {
    //              var user = result.user;
 
    //              $("#successRegsiter").text("you are register Successfully.");
    //              $("#successRegsiter").show();
 
    //          }).catch(function(error) {
    //              $("#error").text(error.message);
    //              $("#error").show();
    //          });
    //      }
    //  </script>


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.js') }}"></script>
    <script src="{{ asset('js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('js/jquery-validate.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/numinate.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/mains.js')}}"></script>

	<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>

	<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>

	<!-- Add Firebase products that you want to use -->
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-firestore.js"></script>

	<script type="text/javascript" src="{{ asset('js/firebase-conf.js') }}"></script>

	<script type="text/javascript" src="{{ asset('js/phone.js') }}"></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('revolution/js/slider.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    {{-- <script src="js/map.js"></script> --}}
    {{-- <script src="https://maps.google.com/maps/api/js?sensor=false"></script> --}}
</body>
@include('partials.footer')

</html>
