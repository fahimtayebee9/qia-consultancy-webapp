@extends('layouts.frontend')
@section('content')

    <style>
        html {
            font-size: 14px;
        }

        .bg-E7F1FB{
            background: #E7F1FB!important;
        }
        .bg-FFF{
            background: #FFF;
        }
        .font-16{
            font-size: 16px!important;
        }
        .font-15{
            font-size: 15px!important;
        }
        .cta-link{
            color: #fff;
        }
        .cta-link:hover{
            color: #CE1F41;
        }

        .container {
            font-size: 15px;
            color: #666666;
            /*font-family: "Open Sans";*/
        }

        .card-custom {
            overflow: hidden;
            min-height: 450px;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
            background-image: linear-gradient(to right top, #CBEDEE, #F3F2F3);
        }

        .card-custom-img {
            height: 200px;
            min-height: 200px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-color: #e3f0f1;
        }

        /* First border-left-width setting is a fallback */
        .card-custom-img::after {
            position: absolute;
            content: '';
            top: 161px;
            left: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-top-width: 40px;
            border-right-width: 0;
            border-bottom-width: 0;
            border-left-width: 545px;
            border-left-width: calc(575px - 5vw);
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: inherit;
        }

        .card-custom-avatar img {
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
            position: absolute;
            top: 100px;
            left: 1.25rem;
            width: 100px;
            height: 100px;

        }

        .custom-head-su {

            position: absolute;
            top: 21px;
            left: 1.25rem;
            /* width: 100px; */
            height: 100px;
            font-size: 22px;
            color: #ffffff;
        }

        .pt-50 {
            padding-top: 50px;
        }

        .pb-50 {
            padding-bottom: 50px;
        }

        .qia-help .title {
            font-size: 24px;
            line-height: 24px;
            padding-bottom: 20px;
        }

        .btn-demo {
            background: #E7F1FB;
            color: #004c94;
            transition: 0.3s all ease-in-out;
            padding: 14px 40px 14px 40px;
            border-radius: 30px 30px 30px 30px;
        }

        .btn-demo:hover,
        .see-more-btn .quote-btn:hover {
            background: #CE1F41;
            color: #E7F1FB;
            box-shadow: 0 0 5px 0 #CE1F41;
            border: none;
        }

        .accdordion-title {
            font-size: 18px;
            font-weight: 500;
            text-decoration: none !important;
            color: #181818;
        }

        .industry-title {
            font-size: 18px;
            font-weight: 500;
            color: #181818;
            margin-top: 15px;
            display: block;
        }

        .collapsible-link {
            width: 100%;
            position: relative;
            text-align: left;
        }

        .collapsible-link::before {
            content: "\f107";
            position: absolute;
            top: 50%;
            right: 1.2rem;
            transform: translateY(-50%);
            display: block;
            font-family: "FontAwesome";
            font-size: 1.1rem;
        }

        .collapsible-link[aria-expanded="true"]::before {
            content: "\f106";
        }

        .btn-link:hover {
            color: #002246 !important;
            text-decoration: none !important;
            background: #E7F1FB;
        }

        .btn-link:focus {
            color: #002246 !important;
            text-decoration: none !important;
            background: #E7F1FB;
        }

        @media (max-width: 768px) {
            .contact-wrap .desc {
                margin-bottom: 20px !important;
            }

            .qia-about .learn-more {
                margin-bottom: 20px !important;
            }
        }

        .industries-grid, .ratings-grid, .aboutUs-grid {
            display: grid;
            gap: 20px; 
            justify-items: center;
            align-items: center;
        }

        .ratings-grid {
            grid-template-columns: repeat(3, 1fr);
        }
        .industries-grid{
            grid-template-columns: repeat(4, 1fr);
        }
        .aboutUs-grid{
            grid-template-columns: repeat(5, 1fr);
        }


        .industry-card, .ratings-card {
            width: 100%;
            padding: 35px 25px;
            border-radius: 5px;
            transition: 0.3s all ease-in-out;
        }

        .industry-card:hover{
            box-shadow: 0 0 9px 2px rgb(0 0 0 / 8%);
        }


        .logo-img img {
            display: block;
            margin: auto;
        }

        .see-more-btn button {
            padding: 8px 16px;
            cursor: pointer;
        }

        /* Loading spinner styles */
        .loading-spinner {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            margin-top: 0px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -180%);
        }

        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border-left-color: #2A338F;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .see-more-btn .quote-btn {
            transition: 0.3s all ease-in-out;
            background: #2A338F;
            border-radius: 100px;
            color: #fff;
            margin-top: 25px;
            border: none;
        }
    </style>

    <!-- Banner Section Start -->
    <div class="qia-banner main-home pt-100 pb-100  md-pt-80 md-pb-80" style="background: url({{ asset('storage/qiss-qms/banners/Hero-Background.jpg') }});" alt="QIA">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 pr-30 md-mb-70 md-pr-15 d-flex align-items-center">
                    <div class="content-wrap">
                        <h1 class="it-title" style="font-size: 36px!important;">
                            Quality Control Management Software
                        </h1>
                        <div class="description">
                            <p class="desc font-16" style="text-align: justify;">
                                Many organizations struggle with quality management challenges like inefficient document handling, limited data visibility, 
                                and risk management. At QISS, we recognize these frustrations and offer our Quality Management Software designed to meet your 
                                needs. With tailored modules that simplify daily tasks, QISS QMS not only helps you maintain compliance with standards like ISO 
                                9001 but also improves your overall operational efficiency. Let us help you achieve a smoother quality management experience—your
                                 success is our success.
                            </p>
                        </div>
                        <a class="readon btn-demo" href="https://www.qi-a.com/contact">Get A Free Demo</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 pl-30 md-pl-15 align-middle">
                    <img src="{{ asset('storage/qiss-qms/banners/QMS Software - hero image.jpg') }}" alt="Quality Control Management Software">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Ratings Section Start -->
    <div class="qia-partner style4" style="background-color: #ffff; padding: 60px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center pb-3">
                    <h2 style="font-size: 32px!important;font-weight: bold;" class="m-0 text-capitalize">
                        Our Software Rating
                    </h2>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="qia-ratings">
                        <div class="ratings-grid">
                            <div class="logo-img text-center">
                                <a href="https://www.capterra.com/p/104370/QISS-Quality-Management-System/reviews/">
                                    <img src="{{ asset('storage/qiss-qms/cap-badge-same.png') }}" style="width: 70%; margin: auto;" alt="${item.title}" loading="lazy">
                                </a>
                            </div>

                            <div class="logo-img text-center">
                                <a href="https://www.getapp.com/operations-management-software/a/qiss-quality-management-system/reviews/">
                                    <img src="{{ asset('storage/qiss-qms/get-app-same.png') }}" style="width: 70%; margin: auto;" alt="${item.title}" loading="lazy">
                                </a>
                            </div>

                            <div class="logo-img text-center">
                                <a href="https://www.softwareadvice.com/compliance/qiss-quality-management-system-profile/">
                                    <img src="{{ asset('storage/qiss-qms/soft-badge-same.png') }}" style="width: 70%; margin: auto;" alt="${item.title}" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ratings Section End -->

    <!-- How We can Help - Start -->
    <div class="qia-about pb-120 md-pt-80 md-pb-80 bg-E7F1FB" style="padding-top: 40px;">
        <div class="container">
            <div class="row" style="padding-bottom: 40px;">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="title text-center mb-0 mt-0 font-weight-bold text-capitalize"
                        style="font-size: 30px !important;">
                        Solve Common Quality Management Challenges
                    </h2>
                    <div class="services-desc text-center">
                        <p class="font-16">
                            Streamline your processes, manage compliance and drive continuous improvement with our QMS software.
                        </p>
                    </div>
                </div>
            </div>
            <div id="our-helps"></div>
        </div>
    </div>
    <!-- How We can Help - End -->

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30" style="background: url({{ asset('storage/qiss-qms/banners/Banners.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                QISS QMS Software for Quality Assurance Managers
                            </h2>
                        </div>
                        <p class="m-0 font-16" style="font-weight: 400; color: #ffffff;">
                            <a class="cta-link" href="https://www.researchgate.net/publication/268812128_Costs_and_Benefits_of_ISO9000-based_Quality_Management_Systems_to_Construction_Contractors">Research</a> 
                            shows that QMS software can help quality managers reduce costs associated with non-compliance, 
                            rework, and wastage, enhancing management systems and fostering a culture of continuous improvement for better project outcomes.
                        </p>
                    </div>
                    <div class="col-lg-3 text-right col-md-12">
                        <div class="button-wrap">
                            <a class="readon btn-demo"
                                {{ get_option('get_demo_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('get_demo_button_url') }}">Get A Free Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get Demo Section End -->

    {{-- SERVICES SECTION START --}}
    <div class="qia-services gray-color main-home style2 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title2 text-center mb-45">
                <h2 class="title title2">
                    What QISS QMS Can Do?
                </h2>
                <div class="services-desc">
                    <p class="font-16">
                        Upgrade your quality management system by incorporating advanced capabilities.
                    </p>
                </div>
            </div>
            <div class="row" id="services-grid">
                {{-- DYNAMIC CONTENT --}}
            </div>
        </div>
    </div>
    {{-- SERVICES SECTION END --}}

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30"style="background: url({{ asset('storage/qiss-qms/banners/Banners.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                We Have a Total of 30 modules in Our QISS QMS Software
                            </h2>
                        </div>
                        <p class="m-0 font-16" style="font-weight: 400;color: #ffffff;">
                            Contact our team to learn more about our management software and how it can help you maintain quality.
                        </p>
                    </div>
                    <div class="col-lg-3 text-right col-md-12">
                        <div class="button-wrap">
                            <a class="readon btn-demo"
                                {{ get_option('get_demo_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('get_demo_button_url') }}">Contact Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get Demo Section End -->

    <!-- INDUSTRY Section Start -->
    <div class="qia-partner style4 pb-20 bg-E7F1FB">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center pb-3">
                    <h2 style="font-size: 32px!important;font-weight: bold;" class="m-0 text-capitalize">
                        QISS QMS for Your Industries
                    </h2>
                    <p style="font-weight: bold;" class="m-0 font-16">A software tailored to your quality needs</p>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="industries-grid">
                        <!-- Industry Items will go here -->
                    </div>

                    <!-- See More Button -->
                    <div class="see-more-btn text-center mt-4">
                        <button class="quote-btn" onclick="toggleIndustries()">See More</button>
                    </div>

                    <!-- Loading animation -->
                    <div class="loading-spinner" style="display: none;">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INDUSTRY Section End -->

    <!-- How We can Help - Start -->
    <div class="qia-about pt-5 pb-120 bg-FFF md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-1 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title">
                            <h2 class="title pb-3 m-0">
                                Why Choose QISS QMS for Your Business?
                            </h2>
                            <p class="desc pb-2 m-0 font-16" style="text-align:justify;">
                                When you choose our Quality Management Software, you’re not just getting a tool—you’re giving your team the chance 
                                to really excel in quality management. With over 30 years of experience, we understand how to make your workflow 
                                smoother through effective task scheduling. Our E-Signature feature keeps things secure, while our audit trail ensures 
                                every action is transparent. We’re here to support you, helping you get the most out of our software. 
                                Join our satisfied clients who trust us for their quality management needs!
                            </p>
                        </div>
                        <div class="btn-part">
                            <a class="readon learn-more"
                                {{ get_option('home_about_btn_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('home_about_btn_url') }}">
                                {{ get_option('home_about_btn_text') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/qiss-qms/banners/Banner-Image-12.png') }}" alt="Why Choose QISS QMS">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How We can Help - End -->

    <!-- Testimonial Section -->
    <div class="qia-testimonial style8 gray-color pt-30 pb-50 md-pt-80 md-pb-80">
        <div class="container">
            <div class="sec-title6 mb-50 text-center">
                <span class="sub-text new-text">{{ get_option('testimonial_title') }}</span>
                <h2 class="title mt-2 mb-0">{{ get_option('testimonial_header') }}</h2>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="testimonial-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                        data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                        data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                        data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
                        data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                        data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">

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
                                        <div class="testi-content pl-0">
                                            <div class="testi-name">{{ $testimonial->name }}</div>
                                            <span class="testi-title">{{ $testimonial->designation }}</span>
                                        </div>
                                    </div>

                                    <span>
                                        <img src="{{ asset('storage/home-page-content/' . $testimonial->rating) }}" alt="Rating Images">
                                    </span>
                                    <p>{{ $testimonial->content }}</p>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section -->

    <!-- Client Partner Section Start -->
    <div class="qia-partner style4 pb-20 bg-FFF">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center pb-3">
                    <h2 style="font-size: 32px!important;font-weight: bold; margin-top:0px;margin-bottom: 20px;">
                        Our Clients
                    </h2>
                </div>
                <div class="col-lg-12">
                    <div class="qia-carousel owl-carousel" data-autoplay="true" data-loop="true" data-items="4"
                        data-rtl="true" data-smart-speed="1000" data-hoverpause="false" data-nav-speed="true"
                        data-autoplay-timeout="2500">
                        @php
                            $clientPartners = App\ClientPartner::get();
                        @endphp
                        @foreach ($clientPartners as $clientPartner)
                            <div class="partner-item">
                                <div class="logo-img">
                                    <a href="javascript:;">
                                        <img src="{{ asset('storage/home-page-content/' . $clientPartner->picture) }}"
                                            alt="{{ $clientPartner->alt_tag }}">
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

    <!-- About Us - Start -->
    <div class="qia-about pt-5 pb-120 bg-E7F1FB md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-12 order-lg-1">
                    <div class="contact-wrap">
                        <div class="sec-title text-center">
                            <h2 class="title pb-3">
                                About QIA
                            </h2>
                            <p class="desc m-0 font-16">
                                The Quality Institute of America (QIA), located in Houston, Texas, is dedicated to enhancing client profitability through effective management systems. Our flagship product, QISS QMS software, automates Quality Management Systems to streamline processes and improve efficiency. In addition to our software solutions, we offer traditional consulting, training, and auditing services for various Management System standards. At QIA, we empower organizations to achieve higher quality standards and drive sustainable growth.
                            </p>
                        </div>
                        <div class="aboutUs-grid" style="margin-top: 30px;">
                            <!-- Industry Items will go here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us - End -->

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30" style="background: url({{ asset('storage/qiss-qms/banners/Banners-2.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                Automate Your Quality Management Process
                            </h2>
                        </div>
                        <p class="m-0 font-16" style="font-weight: 400;color: #ffffff;">
                            Speed up your management process with QISS QMS software.
                        </p>
                        <div class="button-wrap" style="margin-top: 30px;">
                            <a class="readon btn-demo"
                                {{ get_option('get_demo_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('get_demo_button_url') }}">Contact Our Team</a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right col-md-12">
                        <img src="{{ asset('storage/qiss-qms/banners/Banner-Image-11.png') }}" alt="Why Choose QISS LAB">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get Demo Section End -->

    <!-- About Us - Start -->
    <div class="qia-about pt-5 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-2">
                    <div class="contact-wrap">
                        <div class="sec-title pb-3">
                            <h2 class="title pb-3">
                                QMS Software for Small Business
                            </h2>
                            <p class="desc m-0 font-16">
                                Our quality control management software offers several benefits for small businesses, including affordability 
                                through lower prices and flexible subscription models. Its intuitive interface and easy setup ensure quick 
                                adoption without extensive training. The software is scalable, accommodating growth and increased complexity 
                                as businesses expand. Additionally, it enhances compliance with industry standards, reducing the risk of penalties. 
                                By maintaining high-quality standards, small businesses can also boost customer satisfaction and loyalty, ultimately 
                                improving operational success.
                            </p>
                        </div>
                        {{-- <div class="btn-part">
                            <a class="readon learn-more"
                                {{ get_option('home_about_btn_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('home_about_btn_url') }}">{{ get_option('home_about_btn_text') }}</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/qiss-qms/banners/a-manager-of-small-business-is-showing-qms-software-dashboard-to-his-staff.jpg') }}" alt="QISS LAB">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us - End -->

    <!-- FAQ Section -->
    <div class="qia-testimonial style8 pt-30 pb-50 md-pt-80 md-pb-80 bg-E7F1FB">
        <div class="container">
            <div class="sec-title6 mb-50 text-center">
                <h2 class="title">Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div id="accordionExample" class="accordion"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Section -->

    <!-- Blog Section Start -->
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
            <div class="qia-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="false">
                @php
                    $blogs = App\Blog::select('slug', 'cover_photo', 'created_at', 'category_id', 'author_id', 'header')
                        ->whereIn('id', [52, 70, 85])
                        ->get();
                @endphp
                @foreach ($blogs as $blog)
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href="{{ $blog->slug }}">
                                <img style="width:370px;height:250px;"
                                    src="{{ asset('storage/blog/' . $blog->cover_photo) }}"
                                    alt="{{ $blog->cover_photo_alter_tag }}">
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
                                <li class="date"><i class="fa fa-calendar-check-o"></i>
                                    {{ date('d F, Y', strtotime($blog->created_at)) }}</li>
                                @php
                                    $blogAuthor = App\BlogAuthor::where('id', $blog->author_id)->first();
                                @endphp
                                @if ($blogAuthor)
                                    <li class="admin"><i class="fa fa-user-o"></i> {{ $blogAuthor->name }}</li>
                                @endif
                            </ul>
                            <h3 class="blog-title"><a href="{{ $blog->slug }}">{{ $blog->header }}</a></h3>
                            <div class="blog-button"><a class="text-muted" href="{{ $blog->slug }}">Details..</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <div class="modal fade" id="modal_remote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content" id="remote_modal_content">

            </div>
        </div>
    </div>

    <div class="modal fade" id="book_modal_remote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content" id="book_remote_modal_content">

            </div>
        </div>
    </div>

    <script>
        let isShowingMore = false;

        const toggleIndustries = () => {
            const industriesGrid = document.querySelector('.industries-grid');
            const button = document.querySelector('.see-more-btn button');
            const spinner = document.querySelector('.loading-spinner');

            const industries = [
                {
                    title: "Laboratory",
                    img: "{{ asset('storage/qiss-qms/industries/Laboratory.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Manufacturing",
                    img: "{{ asset('storage/qiss-qms/industries/Manufacturing.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Oil & Gas",
                    img: "{{ asset('storage/qiss-qms/industries/Oil & Gas.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Pharmaceutical",
                    img: "{{ asset('storage/qiss-qms/industries/Pharmaceutical.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Food",
                    img: "{{ asset('storage/qiss-qms/industries/Food.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Chemical",
                    img: "{{ asset('storage/qiss-qms/industries/Chemical.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Construction",
                    img: "{{ asset('storage/qiss-qms/industries/Construction.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Medical",
                    img: "{{ asset('storage/qiss-qms/industries/Medical.svg') }}",
                    url: "javascript:;"
                },
                // Add more industries as needed
            ];

            const initialVisibleCount = 4;
            
            if(industries.length == initialVisibleCount){
                button.style.display = 'none';
            }

            spinner.style.display = 'flex';

            setTimeout(() => {
                spinner.style.display = 'none';

                industriesGrid.innerHTML = '';

                if (isShowingMore) {
                    industries.forEach(industry => {
                        let industryElement = document.createElement('div');
                        industryElement.classList.add('industry-card');

                        industryElement.innerHTML = `
                            <div class="logo-img text-center">
                                <a href="${industry.url}">
                                    <img src="${industry.img}" style="width: 100px; margin: auto;" loading="lazy" alt="${industry.title}">
                                    <span class="industry-title">${industry.title}</span>
                                </a>
                            </div>
                        `;
                        industriesGrid.appendChild(industryElement);
                    });
                    button.innerText = 'See Less';
                } else {
                    industries.slice(0, initialVisibleCount).forEach(industry => {
                        let industryElement = document.createElement('div');
                        industryElement.classList.add('industry-card');

                        industryElement.innerHTML = `
                            <div class="logo-img text-center">
                                <a href="${industry.url}">
                                    <img src="${industry.img}" style="width: 100px; margin: auto;" loading="lazy" alt="${industry.title}">
                                    <span class="industry-title">${industry.title}</span>
                                </a>
                            </div>
                        `;
                        industriesGrid.appendChild(industryElement);
                    });
                    button.innerText = 'See More';
                }

                isShowingMore = !isShowingMore;

            }, 500);
        }

        const lazyLoadAboutUs = () => {
            const gridContainer = document.querySelector('.aboutUs-grid');

            const itemsList = [
                {
                    title: "30 Years Of Experience",
                    img: "{{ asset('storage/qiss-qms/usp-icons/USP-30 Years.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "ISO Trainer",
                    img: "{{ asset('storage/qiss-qms/usp-icons/USP - ISO Trainer.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "ISO Consultants",
                    img: "{{ asset('storage/qiss-qms/usp-icons/USP - ISO Consultants.svg') }}",
                    url: "{{ route('qiss-lab-marine') }}"
                },
                {
                    title: "Internal ISO Auditor",
                    img: "{{ asset('storage/qiss-qms/usp-icons/USP - ISO Auditor.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Customer Support",
                    img: "{{ asset('storage/qiss-qms/usp-icons/USP - Customer Support.svg') }}",
                    url: "javascript:;"
                }
                // Add more industries as needed
            ];

            const initialVisibleCount = 5;

            itemsList.slice(0, initialVisibleCount).forEach(item => {
                let industryElement = document.createElement('div');
                industryElement.classList.add('industry-card');
                const title = item.title ? `<span class="industry-title font-15">${item.title}</span>` : '';

                // Populate industry data
                industryElement.innerHTML = `
                    <div class="logo-img text-center">
                        <img src="${item.img}" style="width: 100px; margin: auto;" alt="${item.title}" loading="lazy">
                        ${title}
                    </div>
                `;
                gridContainer.appendChild(industryElement);
            });
        }

        const loadServices = () => {
            const defaultIcon = "{{ asset('img/shape.png') }}";
            const servicesList = [
                {
                    "title": "Document Control",
                    "description": "Ensure all quality management documents are current, accessible, and properly managed to support compliance.",
                    "img": "{{ asset('storage/qiss-qms/features/Document.svg') }}"
                }, {
                    "title": "CAPA Management",
                    "description": "Use QISS QMS to identify issues, implement solutions, and prevent future occurrences to ensure continuous improvement.",
                    "img": "{{ asset('storage/qiss-qms/features/CAPA.svg') }}"
                }, {
                    "title": "Non-Conformance",
                    "description": "Identify non-conformance issues, analyze their root causes and take actions to improve processes and prevent recurrence",
                    "img": "{{ asset('storage/qiss-qms/features/NCR.svg') }}"
                }, {
                    "title": "Risk Management",
                    "description": "Identify potential risks, assess their impact, and implement strategies to mitigate them effectively with our QMS software.",
                    "img": "{{ asset('storage/qiss-qms/features/Risk.svg') }}"
                }, {
                    "title": "Audit Management",
                    "description": "With QISS QMS, you can plan, execute, and analyze audits to support compliance and improve quality in organizational processes.",
                    "img": "{{ asset('storage/qiss-qms/features/Audit.svg') }}"
                }, {
                    "title": "Supplier Management",
                    "description": "Ensures supplier quality by conducting audits, verifying certificates, and managing NCR to maintain compliance and performance.",
                    "img": "{{ asset('storage/qiss-qms/features/Supplier.svg') }}"
                }, {
                    "title": "HSE Management",
                    "description": "Manage incident reports to identify root causes, reduce negative impacts, and implement corrective actions to prevent future accidents.",
                    "img": "{{ asset('storage/qiss-qms/features/HSE.svg') }}"
                }, {
                    "title": "Calibration Management",
                    "description": "Check the instrument’s accuracy and precision of measurements to increase product quality and reduce errors.",
                    "img": "{{ asset('storage/qiss-qms/features/Calibration.svg') }}"
                }, {
                    "title": "Training Management",
                    "description": "Plan, deliver and evaluate training programs to improve employee skills so that they can perform their roles effectively.",
                    "img": "{{ asset('storage/qiss-qms/features/Training.svg') }}"
                },{
                    "title": "Customer Complaint & Survey",
                    "description": "Improve your product quality by addressing and resolving customer issues, leading to greater satisfaction and loyalty.",
                    "img": "{{ asset('storage/qiss-qms/features/Customer compliant.svg') }}"
                },{
                    "title": "Maintenance",
                    "description": "Manage repair of equipment, machinery, and facilities to ensure optimal performance and longevity with our QISS QMS software.",
                    "img": "{{ asset('storage/qiss-qms/features/Maintenance.svg') }}"
                },{
                    "title": "Impact Monitoring",
                    "description": "Track performance, identify issues, and ensure continuous improvement through data analysis.",
                    "img": "{{ asset('storage/qiss-qms/features/Impact Monitoring.svg') }}"
                }
            ];

            servicesList.forEach(service => {
                let serviceElement = document.createElement('div');
                serviceElement.classList.add('col-lg-4', 'col-md-4', 'mb-3');

                // Populate service data
                serviceElement.innerHTML = `
                    <div class="services-item" style="min-height: 318px;">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="javascript:;">
                                    <img src="${service.img}" alt="${service.title}" style="width: 70px!important; height:70px!important;" loading="lazy">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="${defaultIcon}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">${service.title}</h3>
                            </div>
                            <div class="services-desc">
                                <p class="font-16">${service.description}</p>
                            </div>
                        </div>
                    </div>
                `;

                // Append the new service element to the container (e.g., #services-grid)
                document.querySelector('#services-grid').appendChild(serviceElement);
            });
        }

        const loadFaq = () => {
            const questionsList = [
                {
                    "title": "What are the pricing options for your QMS software?",
                    "description": "Our software is available through several pricing tiers, depending on your desired features. We offer monthly and annual subscription plans. Please contact our sales team for specific pricing details and potential promotional offers.",
                    "hasLink": true,
                    "link": "https://www.qi-a.com/contact",
                    "replace": "contact our sales team"
                }, {
                    "title": "Can you provide a demo of your software?",
                    "description": "Yes, we offer personalized demos of our QMS software. You can explore the interface, key features, and integration capabilities during the demo. You can schedule a demo through our website.",
                    "hasLink": true,
                    "link": "https://www.qi-a.com/contact",
                    "replace": "schedule a demo"
                }, {
                    "title": "What is your policy on data security and compliance within your QMS software, particularly for regulated industries?",
                    "description": "We prioritize data security and compliance with industry standards, including ISO and FDA regulations. Our software is designed to help you maintain compliance in regulated industries.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Can I integrate it with existing systems such as ERP?",
                    "description": "Yes. Our quality management system can be integrated with existing systems such as ERP systems.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Do I need different software for HSE?",
                    "description": "No. With QISS QMS, you can manage all types of ISO compliance in one place.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Can I use it for multi location organizations?",
                    "description": "Yes, QISS QMS is designed with multi-region, multi-area, and multi-location functionality. With this single software, you can efficiently manage your Quality Management System (QMS) across all your global locations while maintaining designated user permissions. Additionally, QISS QMS is a multi-program solution, enabling you to manage not only your Quality Management System but also Food Safety Management and Environmental Management Systems within the same platform.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                }
            ];

            questionsList.forEach((faqItem, index) => {
                let questionElement = document.createElement('div');
                questionElement.classList.add('card');

                // Generate dynamic IDs
                const collapseId = `collapse-${index}`;
                const targetId = `collapseTarget-${index}`;
                const headingId = `heading-${index}`;

                const collapseClass = index === 0 ? 'collapse show' : 'collapse';
                const areaExpanded = index === 0 ? true : false;

                let description = faqItem.description;
                if (faqItem.hasLink) {
                    description = description.replace(
                        faqItem.replace, 
                        `<a href="${faqItem.link}" class="text-primary">${faqItem.replace}</a>`
                    );
                }

                questionElement.innerHTML = `
                    <div id="${headingId}" class="bg-white shadow-sm border-0">
                        <h2 class="m-0" style="line-height: 0;">
                            <button type="button" data-toggle="collapse" data-target="#${collapseId}"
                                aria-expanded="${areaExpanded}" aria-controls="${collapseId}" style="padding: 25px;"
                                class="card-header btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">
                                ${faqItem.title}
                            </button>
                        </h2>
                    </div>
                    <div id="${collapseId}" aria-labelledby="${headingId}" data-parent="#accordionExample"
                        class="${collapseClass}">
                        <div class="card-body" style="padding: 25px;">
                            <p class="font-weight-light m-0 font-16">
                                ${description}
                            </p>
                        </div>
                    </div>
                `;

                document.querySelector('#accordionExample').appendChild(questionElement);
            });
        }

        const loadHelpSection = () => {
            const helpsList = [
                {
                    "title": "Document Handling",
                    "description": "Inefficient document handling is a common challenge for organizations, leading to frustrating version control issues and misplaced files. Searching for essential documents can be a hassle, especially when outdated versions surface. Quality control management software addresses this by automating document control and centralizing all documentation. This ensures access to the latest versions, simplifies the review and approval process, and significantly reduces errors. Ultimately, QISS QMS provides peace of mind, allowing your team to focus on what truly matters.",
                    "img": "{{ asset('storage/qiss-qms/banners/document control.jpg') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }, {
                    "title": "Real-Time Reporting",
                    "description": "Limited real-time data visibility can significantly hold back organizations by slowing down decision-making and making it difficult to identify emerging quality issues. Our QISS Quality Management Software provides real-time dashboards and reporting tools that enable teams to monitor key quality metrics effortlessly. This improved visibility supports proactive management of quality issues, allowing for timely corrective actions that keep operations running smoothly and efficiently.",
                    "img": "{{ asset('storage/qiss-qms/banners/Reporting.jpg') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }, {
                    "title": "Compliance Challenges",
                    "description": "Dealing with compliance challenges can be overwhelming for many organizations, especially when trying to keep up with industry standards and regulations. Without effective management, this can lead to costly penalties. QISS QMS makes compliance management easy by automating key workflows and providing robust audit management tools. Our quality management software ensures alignment with standards like ISO 9001, preparing you for audits and minimizing non-compliance risk. This proactive approach allows you to focus on your core operations with confidence.",
                    "img": "{{ asset('storage/qiss-qms/banners/Compliance challeges.jpg') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }, {
                    "title": "Risk Management",
                    "description": "Ineffective risk management poses a significant challenge for organizations, often leading to reactive responses rather than proactive solutions. This frustration comes from scrambling to address issues after they arise instead of preventing them. Our QISS QMS Software has built-in risk management features that help organizations systematically identify, assess, and prioritize risks. By establishing a structured approach to risk management, businesses can implement preventive measures that tackle current challenges and promote continuous improvement in their quality processes.",
                    "img": "{{ asset('storage/qiss-qms/banners/Risk Management.jpg') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }
            ];

            helpsList.forEach((helpItem, index) => {
                let helpElement = document.createElement('div');
                helpElement.classList.add('qia-help', 'row', 'align-items-center', 'pt-50', 'pb-50');
                const orderTextClass = index % 2 === 0 ? 'order-lg-1' : 'order-lg-2';
                const orderImgClass = index % 2 === 0 ? 'order-lg-2' : 'order-lg-1';

                helpElement.innerHTML = `
                    <div class="col-lg-6 ${orderTextClass}">
                        <div class="contact-wrap">
                            <div class="sec-title mb-0">
                                <h3 class="title pb-3">${helpItem.title}</h3>
                                <p class="font-16 desc pb-0 m-0" style="text-align: justify">${helpItem.description}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ${orderImgClass}">
                        <div class="home8-about z-index-1">
                            <img src="${helpItem.img}" alt="${helpItem.title}" loading="lazy">
                        </div>
                    </div>
                    ${helpItem.hasButton ? `
                    <div class="btn-part">
                        <a class="readon learn-more" target="_blank" href="${helpItem.buttonUrl}">
                            ${helpItem.buttonText}
                        </a>
                    </div>` : ''}
                `;

                document.querySelector('#our-helps').appendChild(helpElement);
            });
        }

        window.onload = function() {
            toggleIndustries();
            loadServices();
            loadFaq();
            loadHelpSection();
            lazyLoadAboutUs();
        }
    </script>
@stop

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/parsley.css') }}">
    <script src="{{ asset('js/parsley.min.js') }}"></script>
@endpush
