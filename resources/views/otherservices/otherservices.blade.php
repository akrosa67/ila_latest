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
                            <h2 class="title">Other Services</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}">Home</a>
                            </span>
                            <span>Other Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- page-title end-->
    <div class="other-services-main">
        <div class="other-services-grid">
            <div class="os-inner-div"><img src="{{ asset('images/other-services/BulkReturnFiling.jpg') }}" alt=""><h6 class="inner-head">Bulk Return Filing</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/BusinessIncomeReturn.jpg') }}" alt=""><h6>Business Income Return</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/ChangeInAuthorizedCapitalOfCompany.jpg') }}" alt=""><h6>Change In Authorized Capital</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/ChangeinDirectors.jpg') }}" alt=""><h6>Change in Directors</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/ChangeInRegisteredOffice.jpg') }}" alt=""><h6>Change In Registered Office</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/CompanyAnnualFiling.jpg') }}" alt=""><h6>Company Annual Filing</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/DrugLicense.jpg') }}" alt=""><h6>Drug License</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/ESICRegistration.jpg') }}" alt=""><h6>ESIC Registration</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/ESM,EMSM,ESSI Registration.jpg') }}" alt=""><h6>ESME/MSME/SSI Registration</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/FSSAIFoodLicense.jpg') }}" alt=""><h6>FSSAI Food License</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/GSTReturn.jpg') }}" alt=""><h6>GST Return</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/IncomeTaxReturn.jpg') }}" alt=""><h6>Income Tax Return</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/ISORegistration.jpg') }}" alt=""><h6>ISO Registration</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/PatentRegistration.jpg') }}" alt=""><h6>Patent Registration</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/ProfessionalTaxRegistration.jpg') }}" alt=""><h6>Professional Tax Registration</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/PropertyPossessionDelay - NCLT.jpg') }}" alt=""><h6>Property Possession Delay - NCLT</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/PropertyPossessionDelay - RERA.jpg') }}" alt=""><h6>Property Possession Delay - RERA</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/ROCCompliances.jpg') }}" alt=""><h6>ROC Compliances</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/TradeLicense.jpg') }}" alt=""><h6>Trade License</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/TrademarkAssignment.jpg') }}" alt=""><h6>Trademark Assignment</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/TrademarkObjection.jpg') }}" alt=""><h6>Trademark Objection</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/TrademarkRegistration.jpg') }}" alt=""><h6>Trademark Registration</h6></div>
            <div class="os-inner-div"><img src="{{ asset('images/other-services/TrademarkRenewal.jpg') }}" alt=""><h6>Trademark Renewal</h6></div>
        </div>
    </div>
</div>