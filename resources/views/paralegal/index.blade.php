@extends('layouts.master')
@section('title', 'Paralegal Services ')
@section('content')
    <div class="page">
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h2 class="title">Paralegal Services</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{ url('/') }}">Home</a>
                                </span>
                                <span>About Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page-title end-->
        <section class="ttm-row ttm-grid-view pb-60 res-991-pb-30 clearfix">
            <div class="container">
                <div class="main">

                    <!--cards -->
                   
                   <div class="card">
                   
                   <div class="image">
                      <img src="{{ asset('images/aadhaar.png') }}">
                   </div>
                   <div class="title">
                   
                   </div>
                   <div class="des">
                    <p>Aadhaar Card Services</p>
                   
                   </div>
                   </div>
                   <!--cards -->
                   
                   
                   <div class="card">
                   
                   <div class="image">
                      <img src="{{ asset('images/pancard.png') }}">
                   </div>
                   <div class="title">
                   
                   </div>
                   <div class="des">
                    <p>Pancard Services</p>
                   
                   </div>
                   </div>
                   <!--cards -->
                   
                   
                   <div class="card">
                   
                   <div class="image">
                      <img src="{{ asset('images/birth.png') }}">
                   </div>
                   <div class="title">
                   
                   </div>
                   <div class="des">
                    <p>Birth & Death Certificate</p>
                   
                   </div>
                   </div>
                   <!--cards -->
                   
                   
                   <div class="card">
                   
                   <div class="image">
                      <img src="{{ asset('images/willgifting.png') }}">
                   </div>
                   <div class="title">
                   
                   </div>
                   <div class="des">
                    <p>Will & Gift Writing</p>
                   
                   </div>
                   </div>
                   <!--cards -->
                   
                   <div class="card">
                   
                   <div class="image">
                      <img src="{{ asset('images/legalnotice.png') }}">
                   </div>
                   <div class="title">
                   
                   </div>
                   <div class="des">
                    <p>Legal Notice</p>
                   
                   </div>
                   </div>
                   <!--cards -->
                   
                   <div class="card">
                   
                   <div class="image">
                      <img src="{{ asset('images/ecpatta.png') }}">
                   </div>
                   <div class="title">
                   
                   </div>
                   <div class="des">
                    <p>EC,Patta & Land Verification</p>
                   
                   
                   </div>
                   </div>
                   <!--cards -->
                   
                   
                   <div class="card">
                   
                   <div class="image">
                      <img src="{{ asset('images/educational.png') }}">
                   </div>
                   <div class="title">
                   
                   </div>
                   <div class="des">
                    <p>Educational Issues</p>
                   
                   </div>
                   </div>
                   <!--cards -->
                   
                   
                   <div class="card">
                   
                   <div class="image">
                      <img src="{{ asset('images/affidavit.png') }}">
                   </div>
                   <div class="title">
                   
                   </div>
                   <div class="des">
                    <p>Affidavits</p>
                   
                   </div>
                   </div>
                   </div>
                {{-- <div class="row">
                   
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view2">
                            <div class="ttm-team-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="images/team-member/team-img01.jpg" alt="image"> 
                                </div>
                                <div class="ttm-team-box-view-overlay-inner">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a href="team-details.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team text-center">
                                <p class="category">Family Lawyer</p>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Alex Edward</a></h5>
                                </div>
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Instagram"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view2">
                            <div class="ttm-team-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="images/team-member/team-img02.jpg" alt="image">
                                </div>
                                <div class="ttm-team-box-view-overlay-inner">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a href="team-details.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team text-center">
                                <p class="category">Civil Lawyer</p>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Harly Rayan</a></h5>
                                </div>
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Instagram"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view2">
                            <div class="ttm-team-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="images/team-member/team-img03.jpg" alt="image"> 
                                </div>
                                <div class="ttm-team-box-view-overlay-inner">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a href="team-details.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team text-center">
                                <p class="category">Criminal Lawyer</p>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Andrew Bon</a></h5>
                                </div>
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Instagram"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view2">
                            <div class="ttm-team-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="images/team-member/team-img04.jpg" alt="image"> 
                                </div>
                                <div class="ttm-team-box-view-overlay-inner">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a href="team-details.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team text-center">
                                <p class="category">Financial Lawyer</p>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">John Martin</a></h5>
                                </div>
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Instagram"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view2">
                            <div class="ttm-team-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="images/team-member/team-img05.jpg" alt="image"> 
                                </div>
                                <div class="ttm-team-box-view-overlay-inner">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a href="team-details.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team text-center">
                                <p class="category">Bankruptcy Lawyer</p>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Thomas Charlie</a></h5>
                                </div>
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Instagram"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view2">
                            <div class="ttm-team-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="images/team-member/team-img06.jpg" alt="image"> 
                                </div>
                                <div class="ttm-team-box-view-overlay-inner">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a href="team-details.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team text-center">
                                <p class="category">Immigration Lawyer</p>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Jack Callum</a></h5>
                                </div>
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Twitter"><i class="ti ti-twitter-alt"></i></a></li>
                                        <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Instagram"><i class="ti ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                </div> --}}
            </div>
        </section>
    </div>
    <!--site-main end-->


@endsection
