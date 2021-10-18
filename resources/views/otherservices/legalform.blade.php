@extends('layouts.master')
@section('title', 'Divorce ')
@section('content')
    <div class="page">
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h2 class="title">Legal Forms</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="/">Home</a>
                                </span>
                                <span>Legal Forms</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">

            <!-- sidebar -->
            <div class="ttm-row sidebar ttm-sidebar-left ttm-bgcolor-white clearfix">
                <div class="container">

                    <!-- row -->
                    <div class="row">

                        {{-- <div
                            class="col-lg-4 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey mt_100 pt-100 mb_100 pb-100 res-991-mt-0 res-991-pt-0 widget-area sidebar-left">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div> --}}
                        {{-- <aside class="widget widget-nav-menu">
                                <ul class="widget-menu">
                                    <li><a href="business-law.html">Business Law</a></li>
                                    <li class="active"><a href="criminal-law.html">Criminal Law</a></li>
                                    <li><a href="divorce-law.html">Divorce Law</a></li>
                                    <li><a href="education-law.html">Education Law</a></li>
                                    <li><a href="family-law.html">Family Law</a></li>
                                    <li><a href="industrial-law.html">Industrial Law</a></li>
                                </ul>
                            </aside> --}}
                        {{-- <aside class="widget widget-download">
                                <ul class="download">
                                    <li><i class="fa fa-file-pdf-o"></i><a href="#">Download.pdf</a></li>
                                    <li><i class="fa fa-file-pdf-o"></i><a href="#">Download.txt</a></li>
                                </ul>
                            </aside> --}}
                        {{-- <aside class="widget widget_media_image">
                                <a href="#"><img class="img-fluid" src="images/widget-banner.jpg"
                                        alt="widget-banner"></a>
                            </aside> --}}
                        {{-- <aside class="widget tagcloud-widget with-title">
                                <h3 class="widget-title">Popular Tags</h3>
                                <div class="tagcloud">
                                    <a href="#" class="tag-cloud-link"># Travelling</a>
                                    <a href="#" class="tag-cloud-link"># Business</a>
                                    <a href="#" class="tag-cloud-link"># Art</a>
                                    <a href="#" class="tag-cloud-link"># Startup</a>
                                    <a href="#" class="tag-cloud-link"># Developement</a>
                                    <a href="#" class="tag-cloud-link"># News</a>
                                    <a href="#" class="tag-cloud-link"># Freelance</a>
                                    <a href="#" class="tag-cloud-link"># Themes</a>
                                    <a href="#" class="tag-cloud-link"># WP</a>
                                    <a href="#" class="tag-cloud-link"># Generative</a>
                                </div>
                            </aside> --}}
                        {{-- </div> --}}
                        <div class="col content-area">
                            <div class="ttm-service-single-content-area">
                                <div class="post-featured-wrapper mb-45 res-991-mb-20">
                                    <div class="post-featured">
                                        <img class="img-fluid"
                                            style="object-fit: none;object-position: center top;width: 100%;max-height: 350px;margin-bottom: 1rem;"
                                            src="images/portfolio/post-two-1200x800.jpg" alt="">
                                    </div>
                                </div>
                                <div class="ttm-service-description">
                                    {{-- <h3>Criminal law jurisdictions</h3> --}}
                                    {{-- <div class="mb-15">
                                        <h6> will give you a complete account of the system, and expound the actual teachings
                                            of the great explorer of the truth, the master-builder of human happiness.</h6>
                                        <h6>I will give you a complete account of the system, and expound the actual
                                            teachings of the great explorer of the truth, the master-builder of human
                                            happiness. No one rejects, dislikes, or avoids pleasure itself, because it is
                                            pleasure, but because those who do not know how to pursue pleasure rationally
                                            encounter consequences that are extremely painful.</h6>
                                        <div class="row">
                                            {{-- <div class="col-sm-4">
                                                <!-- ttm-fid -->
                                                <div class="ttm-fid inside content-align-before-border-style">
                                                    <div class="ttm-fid-contents">
                                                        <h4 class="ttm-fid-inner">
                                                            <span data-appear-animation="animateDigits" data-from="0"
                                                                data-to="25" data-interval="5" data-before=""
                                                                data-before-style="sup" data-after="" data-after-style="sub"
                                                                class="numinate">25</span>
                                                        </h4>
                                                        <h3 class="ttm-fid-title">Years Of Experience</h3>
                                                    </div>
                                                </div><!-- ttm-fid end -->
                                            </div> --}}
                                    {{-- <div class="col-sm-4">
                                                <!-- ttm-fid -->
                                                <div class="ttm-fid inside content-align-before-border-style">
                                                    <div class="ttm-fid-contents">
                                                        <h4 class="ttm-fid-inner">
                                                            <span data-appear-animation="animateDigits" data-from="0"
                                                                data-to="7860" data-interval="15" data-before=""
                                                                data-before-style="sup" data-after="" data-after-style="sub"
                                                                class="numinate">7860</span>
                                                        </h4>
                                                        <h3 class="ttm-fid-title">Happy Customers</h3>
                                                    </div>
                                                </div><!-- ttm-fid end -->
                                            </div> --}}
                                    {{-- <div class="col-sm-4">
                                                <!-- ttm-fid -->
                                                <div class="ttm-fid inside content-align-before-border-style">
                                                    <div class="ttm-fid-contents">
                                                        <h4 class="ttm-fid-inner">
                                                            <span data-appear-animation="animateDigits" data-from="0"
                                                                data-to="760" data-interval="15" data-before=""
                                                                data-before-style="sup" data-after="" data-after-style="sub"
                                                                class="numinate">760</span>
                                                        </h4>
                                                        <h3 class="ttm-fid-title">New Customers</h3>
                                                    </div>
                                                </div><!-- ttm-fid end -->
                                            </div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Our Best Services Included</h3>
                                    <p>Family law consists of a body of statutes and case precedentss that govern
                                        the legal responsibilitiees between individuals who share a domestic
                                        connection. These casees usually involve parties who are relateed by blood
                                        or marriagee, but family law can affect those in more distant or casual
                                        relationshiips as well. Due to the motionally-charged nature of moost family
                                        law cases, litigants are strongly advised to retain legal counsel</p>
                                    <div class="row mt-15 mb-30">
                                        {{-- <div class="col-lg-12">
                                                    <ul
                                                        class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                        <li><i class="fa fa-arrow-circle-right"></i>
                                                            <div class="ttm-list-li-content">Lorem ipsum dolor sit amet,
                                                                consectetur.</div>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right"></i>
                                                            <div class="ttm-list-li-content">Nemo enim ipsam voluptatem
                                                                voluptas.</div>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right"></i>
                                                            <div class="ttm-list-li-content">combined with handful of model
                                                                sentence.</div>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right"></i>
                                                            <div class="ttm-list-li-content">accusantium doloremque
                                                                laudantium Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, quaerat. .</div>
                                                        </li>
                                                        <li><i class="fa fa-arrow-circle-right"></i>
                                                            <div class="ttm-list-li-content">expedita distinctio. Nam libero
                                                                tempore.</div>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                        {{-- <div class="col-sm-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Lorem ipsum dolor sit amet, consectetur.</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Nemo enim ipsam voluptatem voluptas.</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">combined with handful of model sentence.</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">accusantium doloremque laudantium.</div></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">expedita distinctio. Nam libero tempore.</div></li>
                                                </ul>
                                            </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Legal Form for your needs</h3>


                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms-Business
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Administration by Creditor on Behalf of Himself and All other Creditors
                                                    </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Administration by Specific Legatee</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Affidavit for Condo Nation of Delay in filling an appeal</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Against Surety for payment of Rent</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Against a Builder for Defective Workmanship</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Against a Fraudulent Purchaser and his Trans fee with Notice</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> An Injunction restricting Waste</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Breach of Agreements to Purchase land</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Carrying on Noxious Manufacture</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Against a Fraudulent Purchaser and his Trans fee with Notice</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> An Injunction restricting Waste"</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Breach of Agreements to Purchase land</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Carrying on noxious Manufacture</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Defense In Any Suit for debt</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Defense in administration suit by Pecuniary Legatee</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Defense in All Suits for Wrongs</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Defense in Suits for Detention of Goods</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Defense in Suits for Goods Sold and Delivered</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Defense in Suits for Infringement of Copyright</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Defense in Suits on Bonds</li>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms-Company Laws
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement between a Company and
                                                        its Branch Manager</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Assignment of Policy of Life
                                                        Insurance</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> BSE Listing Agreement</li>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms-Consumer laws

                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Complaints against Airlines converted</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Consumer Complaint before the District Consumer Dispute Redressal Forum
                                            </li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms-Criminal laws
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Anticipatory Bail Application</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Bail Application</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Bail Bond After Arrest Under a Warrant</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Bond For Good Behavior</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Bond To Keep Peace</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Bond and Bail Bond for Attendance before Office in Charge of Police
                                                        Station or Court</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> F.I.R (First Information Report)</li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms - Deeds
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed For Assignment of Copyright</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of Guarantee</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed creating charge on the property</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of Assignment of Patent</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of Conveyance by the Official Liquidator of a Limited Company</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of Indemnity</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of adoption</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of adoption of a son</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of conditional Gift</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of English mortgage between an individual and a firm of money
                                                        lenders</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of family arrangement for release of property in favor of other
                                                        beneficiaries in consideration of annuity </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of family settlement between the heirs of a deceased </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of gift of good will of business </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of gift of immovable property </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of gift of movable property </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of mortgage by conditional sale</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of settlement under which a son agrees to pay down debt to his
                                                        father </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of sub lease</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of surrender of lease</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of surrender of the whole property</li>
        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms - Family Law
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Adoption Deed</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Adoption by a Widow of a Son</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Adoption of a daughter by an Unmarried Women</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Divorce Petition by Hindu Wife on the Grounds of Cruelty</li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms - Gifts
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift Of Books for Education of Daughte</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift Of Immovable Propert</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift by father to his son of land by mortgag</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift by lady to her minor grand son</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift of a house to the daughte</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift of a piece of lan</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift of charit</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift of land for building a templ</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift of library to trust without reversion claus</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift of money to brother for meeting the marriage expenses of the niece
                                                        of the donor"</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift of money to grand so</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift to a purpose with a condition for revocatio</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift to daughte</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift to so</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Gift with a condition for revocation </li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms - Mortgage
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement reducing the rate of interest in mortgage deed</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Another deed of reconveyance for reconvening mortgaged property</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed creating charge on the property</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Mortgage by conditional sale</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Reconveyance deed</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Record or mortgage by deposit of title deeds</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Second Mortgage</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Simple mortgage by manager of joint Hindu family for legal necessity
                                                    </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Simple mortgage deed</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Simple mortgage deed in the form of a deed</li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms- Partition
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Confirmation of partition already made by the members of joint Hindu
                                                        family</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed evidencing oral partition</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of partial Partition dividing the joint family business only while
                                                        other properties remaining joint", </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of partial partition by one member from the other members of joint
                                                        Hindu family</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of partition</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of partition between co-owners</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of partition between members of a joint Hindu family</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of partition between two tenants in common</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of partition with a cash payment for equalization </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Family Arrangement</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Partition deed</li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms - Partnership
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement admitting a minor to the benefit of partnership</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement admitting a new partner</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement modifying the partnership deed</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Another partnership deeds</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of dissolution where one partner takes over assets and liabilities
                                                        of the business </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of dissolution where the business is continued by some partners
                                                    </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of partnership</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of retirement</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Form of furnishing statement specifying alteration in the firm name or
                                                        in the location of the principal place of business of the firm</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Form of giving notice of change of constitutional of the firm</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Notice of retirement by one partner to other partners</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Partnership agreement between a partnership firm and a Hindu joint
                                                        family </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Partnership agreement between advocates</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Partnership agreement between an individual a partnership firm and a
                                                        company </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Partnership agreement between two partnership firms</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Partnership agreement between two Limited Companies</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Partnership agreement between a partnership firm and a Hindu joint
                                                        family", </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Partnership agreement for a single venture</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Preliminary notice to a partner to show an opportunity why he should not
                                                        be expelled from partnership.</li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms-Trust Agreements
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Declaration of Trust (Public)</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of Appointment of New Trustees</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of Family Trust</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of Private Trust</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Model Trust deed for a Private Specific Trust</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Public Charitable Trust</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Revocable Living Trust Agreements for an individual</li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms - Wills
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Codicil substituting a trustee</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Codicil substituting a trustee appointed under will</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> form of a complicated will</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Revocation of will</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Short form of will</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Simple will</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Simple will giving all property to wife</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Will by a disabled person in favor of wife and daughter</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Will by a Hindu in favor of family</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Will in favor of minor son</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Will in favor of relations</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Will with several legacies and religious and charitable bequest and
                                                        residue to vest in trustees for benefit of wife and children </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Will with trust for wife and children’s pecuniary legacies and annuities
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-item-header">
                                                Legal Forms - Sales
                                            </div>
                                            <div class="accordion-item-body">
                                                <div class="accordion-item-body-content">
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale for purchase of a plot for constructing flats</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreements for sale of a home</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of a house when purchase money is to be paid in
                                                        installments </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of an apartment</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of flat by a flat purchase, when co-operative society
                                                        has not been formed and flat is not ready</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of free hold property"</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of future goods</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of goods</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of goods (C.I.F Basis)</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Defence In Any Suit for debt (F.O.B Basis)</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of goods under the buyer's trade mark</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of leasehold property</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of mortgaged house</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreement for sale of ready goods</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreements for transfer of developments rights</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Agreements for sale technical equipment</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed in respect of leasehold</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of a house</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of apartment</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of conveyance (where the consideration is payable by installments
                                                    </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of conveyance by mortgage</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of conveyance in favor of mortgage</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of conveyance of a property exclusive of a flat or floor in the
                                                        building</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of conveyance of an interest in property</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of conveyance of freehold property</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of conveyance of reversion</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Deed of conveyance subject to right of way</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Development agreement by the landlords in front of a builder</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Form for obtaining income-tax clearance certificate under section 230a,
                                                        income-tax act,1961 form no.34a</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Form of agreement to be entered between promoter and purchaser of flat
                                                    </li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Particulars of conditions of sale by auction of moveable property</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Sales by official liquidator of the company</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Sales deed by liquidator in the voluntary winding up of the company</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Sales deed of land with buildings</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Sales of a house by an executor appointed under will</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Sales of property to various purchases as tenants in common</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Sales of property to various purchasers in different portions</li>
                                                    <li><i class="fa fa-arrow-circle-right"></i> Statement of transfer of immovable property for obtaining no-objection
                                                        certificate from appointment authority income tax department form
                                                        no.37-1",</li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <!-- acadion -->
                                {{-- <div class="accordion">
                                    <!-- toggle -->
                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms-Business</a></div>
                                        <div class="toggle-content">
                                            <li><i class="fa fa-arrow-circle-right"></i> Administration by Creditor on Behalf of Himself and All other Creditors
                                            </li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Administration by Specific Legatee</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Affidavit for Condo Nation of Delay in filling an appeal</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Against Surety for payment of Rent</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Against a Builder for Defective Workmanship</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Against a Fraudulent Purchaser and his Trans fee with Notice</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> An Injunction restricting Waste</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Breach of Agreements to Purchase land</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Carrying on Noxious Manufacture</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Against a Fraudulent Purchaser and his Trans fee with Notice</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> An Injunction restricting Waste"</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Breach of Agreements to Purchase land</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Carrying on noxious Manufacture</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Defense In Any Suit for debt</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Defense in administration suit by Pecuniary Legatee</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Defense in All Suits for Wrongs</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Defense in Suits for Detention of Goods</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Defense in Suits for Goods Sold and Delivered</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Defense in Suits for Infringement of Copyright</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Defense in Suits on Bonds</li>
                                        </div>
                                    </div><!-- toggle end -->
                                    <!-- toggle -->

                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms-Company Laws</a></div>
                                        <div class="toggle-content">
                                            <li><i class="fa fa-arrow-circle-right"></i> Agreement between a Company and
                                                its Branch Manager</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> Assignment of Policy of Life
                                                Insurance</li>
                                            <li><i class="fa fa-arrow-circle-right"></i> BSE Listing Agreement</li>
                                        </div>
                                    </div><!-- toggle end -->
                                    <!-- toggle -->
                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms-Consumer laws</a>
                                        </div>
                                        <div class="toggle-content">
                                            <li>Complaints against Airlines converted</li>
                                            <li>Consumer Complaint before the District Consumer Dispute Redressal Forum
                                            </li>
                                        </div>
                                    </div><!-- toggle end -->
                                    <!-- toggle -->
                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms-Criminal laws</a></div>
                                        <div class="toggle-content">
                                            <li>Anticipatory Bail Application</li>
                                            <li>Bail Application</li>
                                            <li>Bail Bond After Arrest Under a Warrant</li>
                                            <li>Bond For Good Behavior</li>
                                            <li>Bond To Keep Peace</li>
                                            <li>Bond and Bail Bond for Attendance before Office in Charge of Police
                                                Station or Court</li>
                                            <li>F.I.R (First Information Report)</li>
                                        </div>
                                    </div>

                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms - Deeds</a></div>
                                        <div class="toggle-content">
                                            <li>Deed For Assignment of Copyright</li>
                                            <li>Deed of Guarantee</li>
                                            <li>Deed creating charge on the property</li>
                                            <li>Deed of Assignment of Patent</li>
                                            <li>Deed of Conveyance by the Official Liquidator of a Limited Company</li>
                                            <li>Deed of Indemnity</li>
                                            <li>Deed of adoption</li>
                                            <li>Deed of adoption of a son</li>
                                            <li>Deed of conditional Gift</li>
                                            <li>Deed of English mortgage between an individual and a firm of money
                                                lenders</li>
                                            <li>Deed of family arrangement for release of property in favor of other
                                                beneficiaries in consideration of annuity </li>
                                            <li>Deed of family settlement between the heirs of a deceased </li>
                                            <li>Deed of gift of good will of business </li>
                                            <li>Deed of gift of immovable property </li>
                                            <li>Deed of gift of movable property </li>
                                            <li>Deed of mortgage by conditional sale</li>
                                            <li>Deed of settlement under which a son agrees to pay down debt to his
                                                father </li>
                                            <li>Deed of sub lease</li>
                                            <li>Deed of surrender of lease</li>
                                            <li>Deed of surrender of the whole property</li>

                                        </div>
                                    </div><!-- toggle end -->
                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms - Family laws</a></div>
                                        <div class="toggle-content">
                                            <li>Adoption Deed</li>
                                            <li>Adoption by a Widow of a Son</li>
                                            <li>Adoption of a daughter by an Unmarried Women</li>
                                            <li>Divorce Petition by Hindu Wife on the Grounds of Cruelty</li>
                                        </div>
                                    </div>
                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms - Gifts</a></div>
                                        <div class="toggle-content">
                                            <li>Gift Of Books for Education of Daughte</li>
                                            <li>Gift Of Immovable Propert</li>
                                            <li>Gift by father to his son of land by mortgag</li>
                                            <li>Gift by lady to her minor grand son</li>
                                            <li>Gift of a house to the daughte</li>
                                            <li>Gift of a piece of lan</li>
                                            <li>Gift of charit</li>
                                            <li>Gift of land for building a templ</li>
                                            <li>Gift of library to trust without reversion claus</li>
                                            <li>Gift of money to brother for meeting the marriage expenses of the niece
                                                of the donor"</li>
                                            <li>Gift of money to grand so</li>
                                            <li>Gift to a purpose with a condition for revocatio</li>
                                            <li>Gift to daughte</li>
                                            <li>Gift to so</li>
                                            <li>Gift with a condition for revocation </li>
                                        </div>
                                    </div>
                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms - Mortgage</a></div>
                                        <div class="toggle-content">
                                            <li>Agreement reducing the rate of interest in mortgage deed</li>
                                            <li>Another deed of reconveyance for reconvening mortgaged property</li>
                                            <li>Deed creating charge on the property</li>
                                            <li>Mortgage by conditional sale</li>
                                            <li>Reconveyance deed</li>
                                            <li>Record or mortgage by deposit of title deeds</li>
                                            <li>Second Mortgage</li>
                                            <li>Simple mortgage by manager of joint Hindu family for legal necessity
                                            </li>
                                            <li>Simple mortgage deed</li>
                                            <li>Simple mortgage deed in the form of a deed</li>
                                        </div>
                                    </div>
                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms- Partition </a></div>
                                        <div class="toggle-content">
                                            <li>Confirmation of partition already made by the members of joint Hindu
                                                family</li>
                                            <li>Deed evidencing oral partition</li>
                                            <li>Deed of partial Partition dividing the joint family business only while
                                                other properties remaining joint", </li>
                                            <li>Deed of partial partition by one member from the other members of joint
                                                Hindu family</li>
                                            <li>Deed of partition</li>
                                            <li>Deed of partition between co-owners</li>
                                            <li>Deed of partition between members of a joint Hindu family</li>
                                            <li>Deed of partition between two tenants in common</li>
                                            <li>Deed of partition with a cash payment for equalization </li>
                                            <li>Family Arrangement</li>
                                            <li>Partition deed</li>
                                        </div>
                                    </div>
                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms - Partnership</a></div>
                                        <div class="toggle-content">
                                            <li>Agreement admitting a minor to the benefit of partnership</li>
                                            <li>Agreement admitting a new partner</li>
                                            <li>Agreement modifying the partnership deed</li>
                                            <li>Another partnership deeds</li>
                                            <li>Deed of dissolution where one partner takes over assets and liabilities
                                                of the business </li>
                                            <li>Deed of dissolution where the business is continued by some partners
                                            </li>
                                            <li>Deed of partnership</li>
                                            <li>Deed of retirement</li>
                                            <li>Form of furnishing statement specifying alteration in the firm name or
                                                in the location of the principal place of business of the firm</li>
                                            <li>Form of giving notice of change of constitutional of the firm</li>
                                            <li>Notice of retirement by one partner to other partners</li>
                                            <li>Partnership agreement between a partnership firm and a Hindu joint
                                                family </li>
                                            <li>Partnership agreement between advocates</li>
                                            <li>Partnership agreement between an individual a partnership firm and a
                                                company </li>
                                            <li>Partnership agreement between two partnership firms</li>
                                            <li>Partnership agreement between two Limited Companies</li>
                                            <li>Partnership agreement between a partnership firm and a Hindu joint
                                                family", </li>
                                            <li>Partnership agreement for a single venture</li>
                                            <li>Preliminary notice to a partner to show an opportunity why he should not
                                                be expelled from partnership.</li>
                                        </div>
                                    </div>

                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms-Trust Agreements</a></div>
                                        <div class="toggle-content">
                                            <li>Declaration of Trust (Public)</li>
                                            <li>Deed of Appointment of New Trustees</li>
                                            <li>Deed of Family Trust</li>
                                            <li>Deed of Private Trust</li>
                                            <li>Model Trust deed for a Private Specific Trust</li>
                                            <li>Public Charitable Trust</li>
                                            <li>Revocable Living Trust Agreements for an individual</li>
                                        </div>
                                    </div>

                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms - Wills</a></div>
                                        <div class="toggle-content">
                                            <li>Codicil substituting a trustee</li>
                                            <li>Codicil substituting a trustee appointed under will</li>
                                            <li>form of a complicated will</li>
                                            <li>Revocation of will</li>
                                            <li>Short form of will</li>
                                            <li>Simple will</li>
                                            <li>Simple will giving all property to wife</li>
                                            <li>Will by a disabled person in favor of wife and daughter</li>
                                            <li>Will by a Hindu in favor of family</li>
                                            <li>Will in favor of minor son</li>
                                            <li>Will in favor of relations</li>
                                            <li>Will with several legacies and religious and charitable bequest and
                                                residue to vest in trustees for benefit of wife and children </li>
                                            <li>Will with trust for wife and children’s pecuniary legacies and annuities
                                            </li>
                                        </div>
                                    </div>

                                    <div
                                        class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                                        <div class="toggle-title"><a href="#">Legal Forms - Sales</a></div>
                                        <div class="toggle-content">
                                            <li>Agreement for sale for purchase of a plot for constructing flats</li>
                                            <li>Agreements for sale of a home</li>
                                            <li>Agreement for sale of a house when purchase money is to be paid in
                                                installments </li>
                                            <li>Agreement for sale of an apartment</li>
                                            <li>Agreement for sale of flat by a flat purchase, when co-operative society
                                                has not been formed and flat is not ready</li>
                                            <li>Agreement for sale of free hold property"</li>
                                            <li>Agreement for sale of future goods</li>
                                            <li>Agreement for sale of goods</li>
                                            <li>Agreement for sale of goods (C.I.F Basis)</li>
                                            <li>Defence In Any Suit for debt (F.O.B Basis)</li>
                                            <li>Agreement for sale of goods under the buyer's trade mark</li>
                                            <li>Agreement for sale of leasehold property</li>
                                            <li>Agreement for sale of mortgaged house</li>
                                            <li>Agreement for sale of ready goods</li>
                                            <li>Agreements for transfer of developments rights</li>
                                            <li>Agreements for sale technical equipment</li>
                                            <li>Deed in respect of leasehold</li>
                                            <li>Deed of a house</li>
                                            <li>Deed of apartment</li>
                                            <li>Deed of conveyance (where the consideration is payable by installments
                                            </li>
                                            <li>Deed of conveyance by mortgage</li>
                                            <li>Deed of conveyance in favor of mortgage</li>
                                            <li>Deed of conveyance of a property exclusive of a flat or floor in the
                                                building</li>
                                            <li>Deed of conveyance of an interest in property</li>
                                            <li>Deed of conveyance of freehold property</li>
                                            <li>Deed of conveyance of reversion</li>
                                            <li>Deed of conveyance subject to right of way</li>
                                            <li>Development agreement by the landlords in front of a builder</li>
                                            <li>Form for obtaining income-tax clearance certificate under section 230a,
                                                income-tax act,1961 form no.34a</li>
                                            <li>Form of agreement to be entered between promoter and purchaser of flat
                                            </li>
                                            <li>Particulars of conditions of sale by auction of moveable property</li>
                                            <li>Sales by official liquidator of the company</li>
                                            <li>Sales deed by liquidator in the voluntary winding up of the company</li>
                                            <li>Sales deed of land with buildings</li>
                                            <li>Sales of a house by an executor appointed under will</li>
                                            <li>Sales of property to various purchases as tenants in common</li>
                                            <li>Sales of property to various purchasers in different portions</li>
                                            <li>Statement of transfer of immovable property for obtaining no-objection
                                                certificate from appointment authority income tax department form
                                                no.37-1",</li>
                                        </div>
                                    </div>
                                </div><!-- acadion end--> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
    </div>
    <!-- sidebar end -->

    </div>
    <!--site-main end-->


    </div>
@endsection
