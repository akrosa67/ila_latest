@extends('layouts.master')
@section('title', 'Home ')
@section('content')


<div class="page">


    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h2 class="title">Contact Us</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- page-title end-->


<!--site-main start-->
<div class="site-main">

    <section class="ttm-row clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box style3 top-icon text-center ttm-bgcolor-grey">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="ti ti-location-pin"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5>Visit Our Place</h5>
                            </div>
                            <div class="featured-desc">
                                <p>Valsaravakkam, Chennai</p>
                            </div>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box style3 top-icon text-center ttm-bgcolor-grey">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="ti ti-mobile"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5>Quick Contact</h5>
                            </div>
                            <div class="featured-desc">
                                <p>Call Us On: +123-456-7890</p>
                            </div>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box style3 top-icon text-center ttm-bgcolor-grey">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="ti ti-alarm-clock"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5>Visit Between</h5>
                            </div>
                            <div class="featured-desc">
                                <p>Bussiness Hour Only For Office</p>
                            </div>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
            </div>
        </div>
    </section>

    <section class="ttm-row contact-section bg-layer bg-img12 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="pt-100 pr-60 pl-15 mt-80 ttm-textcolor-white res-991-pt-50 res-767-mt-0">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h5>CONTACT US</h5>
                                <h2 class="title">Feel Free To Ask Send Your<strong class="ttm-textcolor-skincolor"> Message.</strong></h2>
                            </div>
                        </div><!-- section title end -->
                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice when no</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span ttm-bgcolor-white spacing-7 mt-80 res-767-mt-15 z-index-1">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input"><input name="your-name" type="text" value="" placeholder="First Name" required="required"></span>
                                        </label>
                                        <label>
                                            <span class="text-input"><input name="email" type="email" value="" placeholder="Email" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input"><input name="your-name" type="text" value="" placeholder="Last Name" required="required"></span>
                                        </label>
                                        <label>
                                            <span class="text-input"><input name="your-phone" type="text" value="" placeholder="Cell Phone" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input"><textarea name="message" rows="4" cols="40" placeholder="Message" required="required"></textarea></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Submit Request</button>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>

    <!--google_map-->
    {{-- <div id="google_map" class="google_map mt_80 res-991-mt-0">
        <div class="map_container">
            <div id="map"></div>
        </div>
    </div> --}}

</div><!--site-main end-->




<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->

@endsection
