@extends('layouts.frontend')
@section('content')


<!-- Banner Section Start -->
<div class="qia-banner main-home pt-100 pb-100  md-pt-80 md-pb-80" style="background: url({{ asset('storage/logo/'. get_option('banner_background_picture')) }}); padding-bottom: 32px;" alt="QIA">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 pr-140 md-mb-70 md-pr-15">
                <div class="content-wrap">
                    <h1 class="it-title">Quality Management System (QMS)</h1>
                    <div class="description">
                        <p class="desc">
                            Do you want to make things better, spend less money, and earn more? QISS is a software that can help you reach that goal.
                        </p>

                        <div id="get_demo_alert_area">
                            
                        </div>
                    </div>
                    <p class="get-demo-form">
                        <input type="text" id="get_demo_email" placeholder="{{ get_option('banner_input_placeholder') }}">
                        <button type="button" id="get_demo_request">
                            {{ get_option('banner_button_text') }}
                        </button>
                    </p>
                    
                    <figure>
                        <picture style="display: flex;">
                            <a href="https://www.capterra.com/reviews/104370/QISS-Quality-Management-System?utm_source=vendor&amp;utm_medium=badge&amp;utm_campaign=capterra_reviews_badge" target="_blank"> <img border="0" src="https://www.qi-a.com/storage/upload/cap-badge-same.png?v=2069264&amp;p=104370"> </a>
                            <a href="https://www.getapp.com/operations-management-software/a/qiss-quality-management-system/reviews/" target="_blank"> <img border="0" src="https://www.qi-a.com/storage/upload/get-app-same.png"> </a>
                            <a href="https://www.softwareadvice.com/compliance/qiss-quality-management-system-profile/reviews/" target="_blank"> <img border="0" src="https://www.qi-a.com/storage/upload/soft-badge-same.png"> </a>
                        </picture>
                    </figure>
                </div>
            </div>
                    
            <style>
                
            </style>
            <div class="col-md-6 banner-video">
                <div class="services-img srr">
                    <a href="https://www.youtube.com/watch?v=oIxbixAtQz4" target="_blank">
                        <img src="https://www.qi-a.com/storage/service/qiss-qms-play-video.webp" alt="">
                    </a>
                </div>
            </div>
            
            
            
            
            <!--<div class="col-lg-5 col-md-12 pl-70 md-pl-15">-->
            <!--    <div class="qia-contact main-media">-->
            <!--        <div class="video-item" style="background: url({{ asset('storage/logo/'. get_option('banner_video_picture')) }});" alt="QIA">-->
            <!--            <div class="qia-videos">-->
            <!--                <div class="animate-border main-home style2">-->
            <!--                    <a class="popup-border content_management" data-url="{{ route('show-banner-video') }}" href="javascript:;">-->
            <!--                    {{-- <a class="popup-border" data-toggle="modal" data-target="#exampleModal" href="{{ get_option('banner_video_url') }}"> --}}-->
            <!--                        <i class="fa fa-play" ></i>-->
            <!--                    </a>-->
            <!--                </div>-->
            <!--            </div> -->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</div>

<div class="qia-why-choose pt-120 pb-120 md-pt-75 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 md-pb-60">
                <div class="sec-title mb-40">
                    <div class="sub-text style4-bg">QISS</div>
                    <h3 class="title pb-20">
                        Achieve Your Business Goals with Our Comprehensive Solutions
                    </h3>
                    <div class="desc">
                        Improve your quality management system with our comprehensive solutions. Find out how we can help you make things easier, spend less money, and improve the quality of your products and services. Our QMS solutions are designed to help you achieve your business goals and objectives.
                    </div>
                </div>
                <div class="services-wrap mb-25">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/1.png') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="">Everything You Need to Manage Quality</a></h3>
                        <p class="services-txt">Our QMS software has 30+ modules covering everything you need to manage quality, from document processes, procedures, risk management, auditing, and corrective action. Our software enables you to simplify your quality procedures, increase compliance and minimize risk.</p>
                    </div>
                </div>
                <div class="services-wrap mb-25">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/2.png') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="">Compliance with Industry Standards</a></h3>
                        <p class="services-txt">With our QMS software QISS, you can stay in compliance with industry standards and avoid costly fines and penalties. Our software complies with various standards such as ISO 9001, ISO 13485, IATF 16949, API Q1, API Q2, AS 9100, CGMP, and more. It ensure that your operations and services meet excellent standards of quality, safety, and security.</p>
                    </div>
                </div>
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/3.png') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="">Comprehensive Reporting</a></h3>
                        <p class="services-txt">Our QMS software's comprehensive reporting gives you the insights you need to keep your quality management system running smoothly. Our reports will help you track progress, pinpoint areas for improvement, and make informed decisions that exceed your customers' expectations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-part">
                    <img src="{{ asset('storage/upload/QMS-core-modules.png') }}" alt="">
                </div>
                <div class="animation">
                    <div class="top-shape">
                        <img class="dance" src="{{ asset('static/assets/images/choose/dotted-2.png') }}" alt="images">
                    </div>
                    <div class="bottom-shape">
                        <img class="dance2" src="{{ asset('static/assets/images/choose/dotted-1.png') }}" alt="images">
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</div>

<!-- Get Demo Section Start -->
<div class="qia-cta style1 bg7 pt-30 pb-30" style="background: url({{ asset('storage/logo/'. get_option('get_demo_background_picture')) }});" alt="QIA">
    <div class="container">
        <div class="cta-wrap">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12 md-mb-30">
                    <span>{{ get_option('get_demo_title') }}</span>
                    <div class="title-wrap">
                        <h3 class="epx-title">{{ get_option('get_demo_header') }}</h3>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-12">
                    <div class="button-wrap">
                        <a class="readon learn-more" {{ get_option('get_demo_open_another_tab') == 1 ? 'target="_blank"' : '' }} href="{{ get_option('get_demo_button_url') }}">{{ get_option('get_demo_button_text') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get Demo Section End -->

<!-- Client Partner Section Start -->
<div class="qia-partner style4 pb-20" style="background-color: #ffff;" >
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 text-center pt-3">
                <h4 style="font-size: 23px !important;font-weight: bold;" >{{ get_option('banner_client_partner_text') }}</h4>
            </div>
            <div class="col-lg-8">
                <div class="qia-carousel owl-carousel" data-autoplay="true" data-loop="true" data-items="4" data-smart-speed="1000" data-hoverpause="false" data-nav-speed="true"  data-autoplay-timeout="2500" >
                    @php
                        $clientPartners = App\ClientPartner::get();
                    @endphp
                    @foreach ($clientPartners as $clientPartner)
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="javascript:;">
                                    <img src="{{ asset('storage/home-page-content/'. $clientPartner->picture) }}" alt="{{ $clientPartner->alt_tag }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Client Partner Section End -->

<div id="qia-about" class="qia-about pt-120 pb-120 md-pt-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="sec-title mb-50">
                    <div class="sub-text style4-bg">Learn More </div>
                    <h2 class="title pb-20">
                        29+ Years of Helping Brands Achieve Their Goals
                    </h2>
                    <div class="desc">
                        Request a demo today to see how QISS QMS can help you achieve your goals. With over 29 years of experience, QISS QMS is the all-in-one solution for brands looking to improve their quality management. 
                    </div>
                </div>
                <!-- Counter Section Start -->
                <div class="qia-counter style3">
                    <div class="container">
                        <div class="counter-top-area">
                            <div class="row">
                                <div class="col-sm-6 sm-pr-0 sm-pl-0 xs-mb-30">
                                    <div class="counter-list">
                                        <div class="counter-text" style="padding-left: 20px;">
                                            <div class="count-number">
                                                <span class="qia-count plus">30</span>
                                            </div>
                                            <h3 class="title">Modules</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 sm-pr-0 sm-pl-0">
                                    <div class="counter-list" style="padding-left: 35px;">
                                        <div class="counter-text">
                                            <div class="count-number">
                                                <span class="qia-count plus">750</span>
                                            </div>
                                            <h3 class="title">Projects Delivered</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm- sm-pr-0 sm-pl-0">
                                    <div class="counter-list">
                                        <div class="counter-text" style="margin-left: 160px;">
                                            <div class="count-number">
                                                <span class="qia-count plus">450</span>
                                            </div>
                                            <h3 class="title">Happy Clients</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter Section End -->
            </div>
            <div class="col-lg-7">
                <!-- Services Section Start -->
                <div class="rs-services style3 md-pt-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 pr-10 pt-40 sm-pt-0 sm-pr-0 sm-pl-0">
                                <div class="services-item mb-20">
                                    <div class="services-icon">
                                        <div class="image-part">
                                            <img class="main-img" src="{{ asset('static/assets/images/choose/reduce-cost-and-waste-100.png') }}" alt="">
                                            <img class="hover-img" src="{{ asset('static/assets/images/services/style3/hover-img/1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="services-content">
                                        <div class="services-text">
                                            <h5 class="title"><a href="">Reduce Costs and Waste</a></h5>
                                        </div>
                                        <div class="services-desc">
                                            <p>
                                                Save money by improving efficiency and increasing profits.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="services-item cyan-bg">
                                    <div class="services-icon">
                                        <div class="image-part">
                                            <img class="main-img" src="{{ asset('static/assets/images/choose/proactively-driving-100.png') }}" alt="">
                                            <img class="hover-img" src="{{ asset('static/assets/images/services/style3/hover-img/2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="services-content">
                                        <div class="services-text">
                                            <h5 class="title"><a href="">Proactively Drive Compliance</a></h5>
                                        </div>
                                        <div class="services-desc">
                                            <p>
                                                Identify and address areas for improvement and prevent costly fines and penalties by staying in compliance.
                                            </p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-6 pl-10 sm-pr-0 sm-pl-0 sm-mt-20">
                                <div class="services-item gold-bg mb-20">
                                    <div class="services-icon">
                                        <div class="image-part">
                                            <img class="main-img" src="{{ asset('static/assets/images/choose/traking-and-managing-100.png') }}" alt="">
                                            <img class="hover-img" src="{{ asset('static/assets/images/services/style3/hover-img/3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="services-content">
                                        <div class="services-text">
                                            <h5 class="title"><a href="">Track and Manage your Quality</a></h5>
                                        </div>
                                        <div class="services-desc">
                                            <p>
                                                Get a comprehensive view, make informed decisions, create and manage quality improvement plans.<br>
                                                <br>
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="services-item blue-bg">
                                    <div class="services-icon">
                                        <div class="image-part">
                                            <img class="main-img" src="{{ asset('static/assets/images/choose/root-cause-analysis-100.png') }}" alt="">
                                            <img class="hover-img" src="{{ asset('static/assets/images/services/style3/hover-img/4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="services-content">
                                        <div class="services-text">
                                            <h5 class="title"><a href="">Root Cause Analysis</a></h5>
                                        </div>
                                        <div class="services-desc">
                                            <p>
                                                Identify the root cause, develop and implement corrective actions and improve your quality and safety by reducing problems.
                                            </p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Services Section End -->
            </div>
        </div>
    </div>
</div>

<div class="qia-why-choose style2 gray-color rs-rain-animate pt-120 pb-120 md-pt-70 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 md-mb-30">
                <div class="sec-title mb-40">
                    <div class="sub-text style4-bg left">Let's Talk</div>
                    <h2 class="title pb-20">
                        Get Expert Advice
                    </h2>
                    <div class="desc">
                        Let's schedule a time to talk about your QMS needs. We'll help you find the best QMS solution for your business.
                    </div>
                </div>
                <div class="services-wrap mb-25">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/style2/1.png') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="#">Email</a></h3>
                        <p class="services-txt">sales@qi-a.com</p>
                    </div>
                </div>
                <div class="services-wrap mb-25">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/style2/2.png') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="#">Call Us</a></h3>
                        <p class="services-txt"> (+01) 888 507-0619</p>
                    </div>
                </div>
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/style2/3.png') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="#">Office Address</a></h3>
                        <p class="services-txt">17625 El Camino Real, Suite 395,</p>
                        <p class="services-txt">Houston, TX 77058 USA</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="qia-contact mod1">
                    <div class="contact-wrap">
                        <div class="content-part mb-25">
                            <h2 class="title mb-15">Schedule Appointment</h2>
                            <!--<p class="desc">We here to help you 24/7 with experts</p>-->
                        </div>
                        <div id="appointment-messages"></div>
                        <form id="appointment-form" method="post" class="ajax_form" action="{{ route('schedule-appointment') }}">
                            @csrf
                            <input type="hidden" name="origin" value="{{ url()->full() }}">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="appointment_name" name="appointment_name" placeholder="Name" required="">
                                    </div> 
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="email" id="appointment_email" name="appointment_email" placeholder="E-Mail" required="">
                                    </div>   
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="appointment_designation" name="appointment_designation" placeholder="Designation" required="">
                                    </div>   
                                    <div class="col-lg-12 mb-25">
                                        <input class="from-control" type="text" id="appointment_company" name="appointment_company" placeholder="Company" required="">
                                    </div>
                                    <div class="col-lg-12 mb-25">
                                        <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="submit-btn orange-btn" type="submit" value="Submit Now" id="submit">
                                    <input style="display:none;" class="submit-btn orange-btn" disabled type="button" value="Processing" id="submitting"> 
                                </div>
                            </fieldset>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="line-inner">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>

<!-- About Section -->
<div class="qia-about pt-120 pb-120 bg13  md-pt-80 md-pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="home8-about z-index-1">
                    <img src="https://www.qi-a.com/storage/logo/Q3jJJsl9HSR4OOZaR993rMuw33CC3sLz7x34ZpNN.bin" alt="About Picture" style="border-radius: 20px;">
                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="contact-wrap">
                    <div class="sec-title mb-30">
                        <div class="sub-text style-bg">{{ get_option('home_about_title') }}</div>
                        <h4 class="title pb-38">
                            {{ get_option('home_about_header') }}
                        </h4>
                        <div class="desc pb-35">
                           {{ get_option('home_about_content') }}
                        </div>
                    </div>
                    <div class="btn-part">
                        <a class="readon learn-more" {{ get_option('home_about_btn_open_another_tab') == 1 ? 'target="_blank"' : '' }} href="{{ get_option('home_about_btn_url') }}">{{ get_option('home_about_btn_text') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="qia-industry pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <span class="sub-text gold-color">Work For Any Industry</span>
            <h2 class="title">
                Best Solutions, For All Organizations
            </h2>
        </div>
        <div class="all-services">
            <div class="services-item">
                <a href="https://www.qi-a.com/capa-management-software">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/CAPA.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">CAPA</h5> 
                    </div>
                </div>
                </a>
            </div>
            <div class="services-item">
                <a href="https://www.qi-a.com/management-of-change-moc">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/Management-of-Change.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">MOC</h5> 
                    </div>
                </div>
                </a>
            </div>
            <div class="services-item">
                <a href="https://www.qi-a.com/training-management-software">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/Training.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">Training</h5> 
                    </div>
                </div>
                </a>
            </div>
            <div class="services-item">
                <a href="https://www.qi-a.com/document-control">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/Document-Management.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">Document</h5> 
                    </div>
                </div>
                </a>
            </div>
            <div class="services-item">
                <a href="https://www.qi-a.com/risk-management">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/Risk-Management.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">Risk</h5> 
                    </div>
                </div>
                </a>
            </div>
            <div class="services-item">
                <a href="https://www.qi-a.com/nonconformance-management-software">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/Nonconformance.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">Nonconformance</h5> 
                    </div>
                </div>
                </a>
            </div>
            <div class="services-item">
                <a href="https://www.qi-a.com/customer-survey">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/Customer-Management.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">Customer Mgmt.</h5> 
                    </div>
                </div>
                </a>
            </div>
            <div class="services-item">
                <a href="https://www.qi-a.com/supplier-management-software">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/Supplier-Management.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">Supplier Mgmt.</h5> 
                    </div>
                </div>
                </a>
            </div>
            <div class="services-item">
                <a href="https://www.qi-a.com/health-safety-and-environment-hse-reporting">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/HSE.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">HSE</h5> 
                    </div>
                </div>
                </a>
            </div>
            <div class="services-item">
                <a href="https://www.qi-a.com/audit-management-software">
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/Audit-Management.webp') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h5 class="title">Audit</h5>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Section -->
<div class="qia-testimonial style8 gray-color pt-30 pb-50 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title6 mb-50 text-center">
            <span class="sub-text new-text">{{ get_option('testimonial_title') }}</span>
            <h5 class="title">{{ get_option('testimonial_header') }}</h5>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="testimonial-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true">

                    @php
                        $testimonials = App\Testimonial::get();
                        $testimonialCounter = 1;
                    @endphp
                    @foreach ($testimonials as $testimonial)
                        @if ($testimonialCounter == 1)
                            @php
                                $testimonialName = $testimonial->name;
                                $testimonialDesignation = $testimonial->designation;
                                $testimonialLink = $testimonial->id;
                                $testimonialCounter += 1;
                            @endphp
                        @endif
                        <div class="testi-item" data-id="{{ $testimonial->id }}">
                            
                            <div class="item-content-basic">

                                <div class="testi-information mb-3">
                                    {{-- <div class="img-part">
                                        <img src="assets/images/testimonial/style2/3.jpg" alt="Images">
                                    </div> --}}
                                    <div class="testi-content pl-0">
                                        <div class="testi-name">{{ $testimonial->name }}</div>
                                        <span class="testi-title">{{ $testimonial->designation }}</span>
                                    </div>
                                </div>

                                <span><img src="{{ asset('storage/home-page-content/'. $testimonial->rating) }}" alt="Rating Images"></span>
                                <p>{{ $testimonial->content }}</p>
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="qia-contact mod1">
                    <div class="contact-wrap" style="padding: 0;;" id="testimonial_content">
                        <img src="storage/home-page-content/EeOtq5mPasiYvpjBryAVxFL5paxVjnFQOgoS38g5.png" alt="">
                        <div class="qia-videos">
                            <div class="animate-border main-home">
                                <h4 class="testimonial-h4">{{ $testimonialName }}</h4>
                                <h5 class="testimonial-h6">{{ $testimonialDesignation }}</h5>
                                <a style="left: 50%;top: 30%;" class="popup-border popup-videos content_management" href="javascript:;" data-url="{{ url('show-banner-video?id='. $testimonialLink) }}">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="qia-technology gray-color pt-120 pb-120 md-pt-80 md-pb-80">
    <!--<div class="container">-->
    <!--    <div class="sec-title2 text-center mb-45">-->
    <!--        <span class="sub-text gold-color">Technology Index</span>-->
    <!--        <h2 class="title title2">-->
    <!--            What Technology We Are Using For Our Valued Customers-->
    <!--        </h2>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/3.png') }}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/2.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/3.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/4.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/5.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/6.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/7.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/8.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/9.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/10.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/11.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/12.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/13.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/14.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/15.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/16.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/17.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-lg-2 col-md-4 col-sm-4 col-6">-->
    <!--            <div class="technology-item">-->
    <!--                <a href="#">-->
    <!--                    <div class="logo-img">-->
    <!--                        <img src="{{ asset('static/assets/images/technology/style2/18.png')}}" alt="">-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-lg-12 text-center">-->
    <!--        <div class="btn-part mt-30">-->
    <!--            <a class="readon started" href="#">Get Started</a>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>  -->
</div>

<!-- Case Study Section -->
<div class="qia-case-study primary-background">
    <div class="row margin-0 align-items-center">
        <div class="col-lg-4 padding-0">
            <div class="case-study bg12 mod" style="background: url({{ asset('storage/logo/'. get_option('case_study_bg_picture')) }});" alt="QIA">
                <div class="sec-title2 mb-30">
                    <div class="sub-text white-color">{{ get_option('case_study_title') }}</div>
                    <h5 class="title testi-title white-color pb-20">
                        {{ get_option('case_study_header') }}
                    </h5>
                    <div class="desc-big">
                       {{ get_option('case_study_content') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 padding-0">
            <div class="case-study-wrap">
                <!-- Project Section Start -->
                <div class="qia-project style3 modify1 mod md-pt-0">
                    <div class="qia-carousel owl-carousel" data-loop="false" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="true" data-md-device-dots="false">
                        @php
                            $caseStudies = App\CaseStudy::get();
                        @endphp
                        @foreach ($caseStudies as $caseStudy)
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="{{ $caseStudy->link }}" {{ $caseStudy->open_another_tab == 1 ? 'target="_blank"' : '' }} ><img src="{{ asset('storage/home-page-content/'. $caseStudy->picture) }}" alt="{{ $caseStudy->alt_tag }}"></a>
                                </div>
                                <div class="project-content">
                                    <div class="portfolio-inner">
                                        <h3 class="title"><a href="{{ $caseStudy->link }}" {{ $caseStudy->open_another_tab == 1 ? 'target="_blank"' : '' }}>{{ $caseStudy->header }}</a></h3>
                                        <span class="category"><a href="{{ $caseStudy->link }}" {{ $caseStudy->open_another_tab == 1 ? 'target="_blank"' : '' }}>{{ $caseStudy->title }}</a></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="qia-blog" class="qia-blog pt-110 pb-120 md-pt-75 md-pb-80">
    <div class="container">  
        <div class="sec-title2 text-center mb-30">
            <h4 class="title testi-title">
                {{ get_option('home_blog_header') }}
            </h4>
            <div class="desc">
                {!! nl2br(get_option('home_blog_content')) !!}
            </div>
        </div>
        <div class="qia-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
            @php
                $blogs = App\Blog::select('slug', 'cover_photo', 'created_at', 'category_id', 'author_id', 'header')->get()->random(4);
            @endphp
            @foreach ($blogs as $blog)
                <div class="blog-item">
                    <div class="image-wrap">
                        <a href="{{ $blog->slug }}">
                            <img style="width:370px;height:250px;" src="{{ asset('storage/blog/'. $blog->cover_photo) }}" alt="{{ $blog->cover_photo_alter_tag }}">
                        </a>
                        @php
                            $blogCategory = App\BlogCategory::where('id', $blog->category_id)->first();
                        @endphp
                        @if ($blogCategory)
                            <ul class="post-categories">
                                <li><a href="{{ $blogCategory->slug }}">{{ $blogCategory->name }}</a></li>
                            </ul>
                        @endif
                    </div>
                    <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="date"><i class="fa fa-calendar-check-o"></i> {{ date('d F, Y', strtotime($blog->created_at)) }}</li>
                        @php
                            $blogAuthor = App\BlogAuthor::where('id', $blog->author_id)->first();
                        @endphp
                        @if ($blogAuthor)
                            <li class="admin"><i class="fa fa-user-o"></i> {{ $blogAuthor->name }}</li>
                        @endif
                    </ul>
                    <h3 class="blog-title"><a href="{{ $blog->slug }}">{{ $blog->header }}</a></h3>
                    <div class="blog-button"><a class="text-muted" href="{{ $blog->slug }}">Details..</a></div>
                    </div>
                </div>
            @endforeach
         </div>
    </div>
</div>

<div class="modal fade" id="modal_remote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" id="remote_modal_content">
            
        </div>
    </div>
</div>

<div class="modal fade" id="book_modal_remote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" id="book_remote_modal_content">
            
        </div>
    </div>
</div>

@stop

@push('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="{{asset('/css/parsley.css')}}">
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script>
        $(document).on('click', '.event-category', function() {
            let id = $(this).data('id');
            let url = '{{ URL::to("get-event-category") }}'
            $('.event-category').removeClass('event-active');
            $(this).addClass('event-active');
            $.ajax({
                type : 'GET',
                url : url,
                data : {
                    id : id
                },
                dataType: 'HTML',
                cache: false,
                success: function(html) {
                    $('#trainings_details_area').html(html);
                }
            })
        })

        $(document).on('click', '.book_event', function() {
            let url = $(this).data("url");
            $.ajax({
                type : 'GET',
                url : url,
                dataType: 'HTML',
                cache: false,
                success: function(html) {
                    $('#book_modal_remote').modal('show');
                    $('#book_remote_modal_content').html(html);
                    _modalFormValidation();
                }
            })
        })
       
        $(document).on('click', '.content_management', function() {
            let url = $(this).data("url");
            $.ajax({
                type : 'GET',
                url : url,
                dataType: 'HTML',
                cache: false,
                success: function(html) {
                    $('#modal_remote').modal('show');
                    $('#remote_modal_content').html(html);
                }
            })
        })

        document.addEventListener('click', function (e) {
            if(e.target.className === 'modal'){
            }else {
                $('#remote_modal_content').html("");
            }
        }, false);


        $(document).on('click', '.solution_content', function() {
            let id = $(this).data('id');
            $.ajax({
                type : 'GET',
                url : '{{ route("get_solution_details") }}',
                data: {
                    id : id
                },
                dataType: 'HTML',
                cache: false,
                success: function(html) {
                    $('#solution_content').html(html);
                }
            })
        })

        var _modalFormValidation = function() {
            if ($('#content_form').length > 0) {
                $('#content_form').parsley().on('field:validated', function() {
                    var ok = $('.parsley-error').length === 0;
                    $('.bs-callout-info').toggleClass('hidden', !ok);
                    $('.bs-callout-warning').toggleClass('hidden', ok);
                });
            }
            $('#content_form').on('submit', function(e) {
                e.preventDefault();
                $('#submit').hide();
                $('#submiting').show();
                $(".ajax_error").remove();
                var submit_url = $('#content_form').attr('action');
                //Start Ajax
                var formData = new FormData($("#content_form")[0]);
                $.ajax({
                    url: submit_url,
                    type: 'POST',
                    data: formData,
                    contentType: false, // The content type used when sending data to the server.
                    cache: false, // To unable request pages to be cached
                    processData: false,
                    dataType: 'JSON',
                    success: function(data) {
                        if (data.status == 'danger') {
                            toastr.error(data.message);

                        } else {
                            toastr.success(data.message)
                            $('#submit').show();
                            $('#submiting').hide();
                            $('#book_modal_remote').modal('toggle');

                            setTimeout(() => {
                                window.location.href="";
                            }, 2500);
                        }
                    },
                    error: function(data) {
                        var jsonValue = data.responseJSON;
                        const errors = jsonValue.errors;
                        if (errors) {
                            var i = 0;
                            $.each(errors, function(key, value) {
                                const first_item = Object.keys(errors)[i];
                                const message = errors[first_item][0];
                                if ($('#' + first_item).length > 0) {
                                    $('#' + first_item).parsley().removeError('required', {
                                        updateClass: true
                                    });
                                    $('#' + first_item).parsley().addError('required', {
                                        message: value,
                                        updateClass: true
                                    });
                                }

                                // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                                new PNotify({
                                    width: '30%',
                                    title: jsUcfirst(first_item) + ' Error!!',
                                    text: value,
                                    type: 'error',
                                    addclass: 'alert alert-danger alert-styled-left',
                                });
                                i++;
                            });
                        } else {
                            new PNotify({
                                width: '30%',
                                title: 'Something Wrong!',
                                text: jsonValue.message,
                                type: 'error',
                                addclass: 'alert alert-danger alert-styled-left',
                            });
                        }
                        $('#submit').show();
                        $('#submiting').hide();
                    }
                });
            });
        };
        
        var _classFormValidation = function() {
            $(".ajax_form").parsley();

            $(".ajax_form").on('submit', function(event) {
                event.preventDefault();
                $(this).parsley().validate();

                if ($(this).parsley().isValid()) {
                    var submit_url = $(this).attr('action');
                    var formData = new FormData($(this)[0]);
                    
                    // Start Ajax
                    $.ajax({
                        url: submit_url,
                        type: 'POST',
                        data: formData,
                        contentType: false, // The content type used when sending data to the server.
                        cache: false, // To unable request pages to be cached
                        processData: false,
                        dataType: 'JSON',
                        beforeSend: function () {
                            $('#submit').hide();
                            $('#submitting').show();
                        },
                        success: function(data) {
                            if (data.status == "danger") {
                                toastr.error(data.message);

                                $('#submit').show();
                                $('#submitting').hide();

                            } else {
                                toastr.success(data.message);

                                $('#submit').show();
                                $('#submitting').hide();

                                setTimeout(() => {
                                    window.location.href="";
                                }, 2500);
                            }
                            
                        }
                    });
                }
            });
        };

        _classFormValidation();
    </script>
@endpush