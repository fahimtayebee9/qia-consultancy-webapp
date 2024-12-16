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
        .softwares-grid .services-title{
            font-size: 22px;
            margin: 10px auto;
        }
        .softwares-grid a{
            transition: 0.2s all ease-in-out;
            padding: 25px;
            border-radius: 10px;
            border: 1px solid transparent;
        }
        .softwares-grid a:hover{
            border: 1px solid #004c94;
            box-shadow: 0 0 9px 2px rgb(0 0 0 / 8%);
        }
    </style>

    <!-- Banner Section Start -->
    <div class="qia-banner main-home pt-100 pb-100  md-pt-80 md-pb-80" style="background: url({{ asset('storage/qiss-qms/banners/Hero-Background.jpg') }});" alt="QIA">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 pr-30 md-mb-70 md-pr-15 d-flex align-items-center">
                    <div class="content-wrap">
                        <h1 class="it-title" style="font-size: 36px!important;">
                            Software Company for Management Systems
                        </h1>
                        <div class="description">
                            <p class="desc font-16" style="text-align: justify;">
                                At our software company, we specialize in creating innovative management systems designed to 
                                improve organizational efficiency. Our comprehensive suite of QISS software streamlines operations 
                                and fosters collaboration across teams. With a user-friendly interface and customizable features, 
                                our software empowers businesses of all sizes to optimize workflows and achieve their objectives. 
                                Partner with us to revolutionize your management processes and drive sustainable growth.
                            </p>
                        </div>
                        <a class="readon btn-demo" href="https://www.qi-a.com/contact">Our Products</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 pl-30 md-pl-15 align-middle">
                    <img src="{{ asset('storage/homepage/homepage-hero-image-4.png') }}" alt="Software Company for Management Systems">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

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
                <div class="col-lg-6 order-lg-1">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/homepage/benefits-of-management-system.jpg') }}" alt="QISS LAB">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="contact-wrap">
                        <div class="sec-title pb-3">
                            <h2 class="title pb-3">
                                Benefits of Our Management Software
                            </h2>
                            <p class="desc m-0 font-16" style="text-align: justify;">
                                Management software improves business performance by automating tasks, improving collaboration, and 
                                providing real-time data for better decision-making. It reduces operational costs, ensures compliance 
                                with standards, and offers customizable solutions that scale with your needs. Centralized information 
                                improves accessibility, making it a vital tool for driving efficiency and sustainable growth.
                            </p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- About Us - End -->

    <!-- Softwares - Start -->
    <div class="qia-about pt-5 pb-120 bg-FFF md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-12 order-lg-1">
                    <div class="contact-wrap">
                        <div class="sec-title text-center">
                            <h2 class="title">
                                Our QISS Products
                            </h2>
                        </div>
                        <div class="softwares-grid" style="margin-top: 30px; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px;">
                            <a href="{{ route('qiss-qms-demo') }}" class="logo-img text-center">
                                <img src="{{ asset('storage/homepage/qiss-qms-software.png') }}" style="width: 100%; margin: auto;" alt="${item.title}" loading="lazy">
                                <h3 class="services-title">
                                    QISS QMS
                                </h3>
                                <p class="desc m-0 font-16" style="color: #181818;">
                                    A Quality Management Software
                                </p>
                            </a>
    
                            <a href="{{ route('qiss-lab') }}" class="logo-img text-center">
                                <img src="{{ asset('storage/homepage/qiss-lab-software.png') }}" style="width: 100%; margin: auto;" alt="${item.title}" loading="lazy">
                                <h3 class="services-title">
                                    QISS LAB
                                </h3>
                                <p class="desc m-0 font-16" style="color: #181818;">
                                    A Lab Management Software
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Softwares - End -->

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30" style="background: url({{ asset('storage/qiss-qms/banners/Banners.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                Improve the Efficiency of Your Management Systems for Greater Success
                            </h2>
                        </div>
                        {{-- <p class="m-0 font-16" style="font-weight: 400; color: #ffffff;">
                            <a class="cta-link" href="https://www.researchgate.net/publication/268812128_Costs_and_Benefits_of_ISO9000-based_Quality_Management_Systems_to_Construction_Contractors">Research</a> 
                            shows that QMS software can help quality managers reduce costs associated with non-compliance, 
                            rework, and wastage, enhancing management systems and fostering a culture of continuous improvement for better project outcomes.
                        </p> --}}
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
                                Learn More About Our QISS Softwares Capabilities
                            </h2>
                        </div>
                        <p class="m-0 font-16" style="font-weight: 400;color: #ffffff;">
                            Contact our team to learn more about our management software and how it can help you.
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

    <!-- About Us - Start -->
    <div class="qia-about pt-5 pb-120 bg-FFF md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-1">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/homepage/choose-your-industry.jpg') }}" alt="QISS LAB">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="contact-wrap">
                        <div class="sec-title pb-3">
                            <h2 class="title pb-3">
                                Industries We Serve
                            </h2>
                            <p class="desc m-0 font-16 text-justify">
                                We develop software for industries that require robust management systems for quality assurance and lab management. 
                                Our solutions are designed for sectors such as manufacturing, pharmaceuticals, healthcare, food safety, and oil & gas, 
                                where maintaining high standards is critical. By providing tailored software solutions, 
                                we help organizations ensure compliance, improve operational efficiency and achieve excellence in quality management.
                            </p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- About Us - End -->

    <!-- About Us - Start -->
    <div class="qia-about pt-5 pb-120 bg-E7F1FB md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-2">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/homepage/QIA.jpg') }}" alt="QISS LAB">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="contact-wrap">
                        <div class="sec-title pb-3">
                            <h2 class="title pb-3">
                                About Us
                            </h2>
                            <p class="desc m-0 font-16 text-justify">
                                Founded in 1994 in Houston, Texas, the Quality Institute of America (QIA) originally 
                                focused on consulting, auditing and training for quality assurance. Today, we specialize 
                                in software development to help clients improve profitability through effective management 
                                systems. Our QISS products automate workflows to ensure compliance and efficiency across various 
                                management systems and global regulations.
                            </p>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- About Us - End -->

    <!-- Why Us - Start -->
    <div class="qia-about pt-5 pb-120 bg-FFF md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-12 order-lg-1">
                    <div class="contact-wrap">
                        <div class="sec-title text-center">
                            <h2 class="title pb-3">
                                Why Choose Us?
                            </h2>
                            {{-- <p class="desc m-0 font-16">
                                The Quality Institute of America (QIA), located in Houston, Texas, is dedicated to enhancing client profitability through effective management systems. Our flagship product, QISS QMS software, automates Quality Management Systems to streamline processes and improve efficiency. In addition to our software solutions, we offer traditional consulting, training, and auditing services for various Management System standards. At QIA, we empower organizations to achieve higher quality standards and drive sustainable growth.
                            </p> --}}
                        </div>
                        <div class="aboutUs-grid" style="margin-top: 30px;">
                            <!-- Industry Items will go here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Us - End -->

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
                <div class="col-xl-12 col-lg-12 col-md-12" style="margin-top: 35px;">
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
    <!-- Testimonial Section -->

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30" style="background: url({{ asset('storage/qiss-qms/banners/Banners-2.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                Automate Your Management Process
                            </h2>
                        </div>
                        <p class="m-0 font-16" style="font-weight: 400;color: #ffffff;">
                            Speed up your management process with our QISS software.
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
        const lazyLoadAboutUs = () => {
            const gridContainer = document.querySelector('.aboutUs-grid');

            const itemsList = [
                {
                    title: "Experience",
                    text: "30+ years of experience driving excellence and innovation in quality management",
                    img: "{{ asset('storage/homepage/usp-icons/usp-30-years.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "ISO Trainer",
                    text: "Expert-led ISO training to build your team's skills and ensure compliance with ISO standards.",
                    img: "{{ asset('storage/homepage/usp-icons/usp-iso-trainer.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "ISO Consultants",
                    text: "We provide expert guidance for ISO certification and compliance strategies.",
                    img: "{{ asset('storage/homepage/usp-icons/usp-iso-consultants.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Internal ISO Auditor",
                    text: "We conduct impartial audits to ensure compliance and continuous quality improvement.",
                    img: "{{ asset('storage/homepage/usp-icons/usp-iso-auditor.svg') }}",
                    url: "javascript:;"
                },
                {
                    title: "Customer Support",
                    text: "Exceptional customer support to improve client satisfaction and success.",
                    img: "{{ asset('storage/homepage/usp-icons/usp-customer-support.svg') }}",
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
                        <p class="desc m-0 font-16">
                            ${item.text}
                        </p>
                    </div>
                `;
                gridContainer.appendChild(industryElement);
            });
        }

        const loadServices = () => {
            const defaultIcon = "{{ asset('img/shape.png') }}";
            const servicesList = [
                {
                    "title": "Quality Management",
                    "description": "Ensures your products meet standards through continuous improvement, customer satisfaction, and automated workflows.",
                    "img": "{{ asset('storage/qiss-qms/features/Audit.svg') }}"
                }, {
                    "title": "HSE Compliance",
                    "description": "Ensures health, safety, and environmental regulations are followed to protect your employees and resources.",
                    "img": "{{ asset('storage/qiss-qms/features/HSE.svg') }}"
                }, {
                    "title": "Risk Management ",
                    "description": "Identify, assess, and mitigate potential threats to minimize impact on your organizational objectives.",
                    "img": "{{ asset('storage/qiss-qms/features/Risk.svg') }}"
                }, {
                    "title": "Document Control",
                    "description": "Ensures organized management of documents to maintain version integrity and facilitate compliance.",
                    "img": "{{ asset('storage/qiss-qms/features/Document.svg') }}"
                }, {
                    "title": "Training Management",
                    "description": "Ensures employees meet competency requirements for their roles through regular evaluations.",
                    "img": "{{ asset('storage/qiss-qms/features/Training.svg') }}"
                }, {
                    "title": "CAPA Management",
                    "description": "Systematically identifies and resolves issues, implementing corrective and preventive actions to improve overall quality.",
                    "img": "{{ asset('storage/qiss-qms/features/CAPA.svg') }}"
                }, {
                    "title": "Lab Testing Management",
                    "description": "Manage testing procedures to maintain accuracy, compliance, and timely reporting of results.",
                    "img": "{{ asset('storage/qiss-lab/test.svg') }}"
                }, {
                    "title": "Marine Survey & Inspection",
                    "description": "Evaluate vessel conditions to maintain compliance with regulations and safety standards at sea.",
                    "img": "{{ asset('storage/qiss-qms/features/Calibration.svg') }}"
                }, {
                    "title": "Sample Management",
                    "description": "Coordinate sample collection, tracking, and analysis to ensure data integrity and accuracy.",
                    "img": "{{ asset('storage/qiss-lab/sample.svg') }}"
                },
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

        window.onload = function() {
            loadServices();
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
