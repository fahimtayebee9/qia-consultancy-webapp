@extends('layouts.frontend')
@section('content')

    <style>
        html {
            font-size: 14px;
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

        .qia-industries .industries-row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .industries-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }


        .industry-card {
            width: calc(20% - 10px);
            /* 20% width for 5 items per row */
            margin-bottom: 20px;
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
    <div class="qia-banner main-home pt-100 pb-100  md-pt-80 md-pb-80"
        style="background: url({{ asset('storage/qiss-lab/Hero-section-Background.jpg') }});" alt="QIA">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 pr-30 md-mb-70 md-pr-15 d-flex align-items-center">
                    <div class="content-wrap">
                        <h1 class="it-title" style="font-size: 38px!important; padding-bottom: 5px;">
                            Marine Survey Management Software
                        </h1>
                        <div class="description">
                            <p class="desc" style="text-align: justify; padding-bottom: 20px; font-size: 20px!important;">
                                Streamline Inspections, Lab Testing, and Documentation for Maximum Efficiency
                            </p>
                            <p class="desc" style="text-align: justify;">
                                Our Marine Survey Management Software is designed to optimize every step of the inspection process, 
                                from cargo assessments to lab testing and documentation. By automating workflows, integrating real-time 
                                data, and ensuring seamless communication across teams, the software reduces manual effort, minimizes 
                                errors, and accelerates decision-making. With easy access to historical inspection reports, lab results, 
                                and compliance data, you can ensure faster, more accurate inspections while maintaining high standards of quality and safety.
                            </p>
                        </div>
                        <a class="readon btn-demo" href="https://www.qi-a.com/contact">Get A Free Demo</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 pl-30 md-pl-15 align-middle">
                    <img src="{{ asset('storage/qiss-lab-marine/2048.png') }}"
                        alt="Automate Your Lab Management System">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Client Partner Section Start -->
    <div class="qia-partner style4 pb-20" style="background-color: #ffff;">
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

    <!-- INDUSTRY Section Start -->
    {{-- <div class="qia-partner style4 pb-20" style="background-color: #ffff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center pb-3">
                    <h2 style="font-size: 32px!important;font-weight: bold;" class="m-0 text-capitalize">
                        QISS LAB for Your Industries
                    </h2>
                    <p style="font-size: 18px!important;font-weight: bold;" class="m-0">A specialized software for your
                        needs</p>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="qia-industries">
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
    </div> --}}
    <!-- INDUSTRY Section End -->

    <!-- How We can Help - Start -->
    <div class="qia-about pb-120 md-pt-80 md-pb-80" style="padding-top: 40px;background: #E7F1FB">
        <div class="container">
            <div class="row" style="padding-bottom: 40px;">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="title text-center mb-0 mt-0 font-weight-bold text-capitalize"
                        style="font-size: 30px !important;">
                        How Can Our Laboratory Management Software Help You?
                    </h2>
                </div>
            </div>
            <div id="our-helps"></div>
        </div>
    </div>
    <!-- How We can Help - End -->

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30" style="background: url({{ asset('storage/qiss-lab/Banner-image-1.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                A Software for Marine Surveyor
                            </h2>
                        </div>
                        <p class="m-0" style="font-size: 17px!important; font-weight: 400; color: #ffffff;">
                            Marine management software helps surveyors streamline inspections, ensure regulatory compliance, 
                            manage data efficiently, and improve collaboration for faster, accurate reports.
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
                <h2 class="title title2" style="max-width: fit-content!important;">
                    What QISS LAB Can Do for Marine Industry?
                </h2>
                <div class="services-desc">
                    <p style="font-size: 18px;">
                        A Specialized Software to Solve Your Management Problem
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
    <div class="qia-cta style1 bg7 pt-30 pb-30"style="background: url({{ asset('storage/qiss-lab/Banner-image-1.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                Would You Like To Know More About Our QISS LAB?
                            </h2>
                        </div>
                        <p class="m-0" style="font-size: 17px!important; font-weight: 400;color: #ffffff;">
                            Contact our team to learn more about our product and how it can help you.
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

    <!-- How We can Help - Start -->
    <div class="qia-about pt-5 pb-120 bg13  md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-1 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title">
                            <h2 class="title pb-3 m-0">
                                Why Marine Surveyors Should Use QISS LAB?
                            </h2>
                            <p class="desc pb-2 m-0" style="font-size: 16px;text-align:justify;">
                                Marine surveyors should use QISS LAB for its all-in-one solution for cargo inspection and lab testing, 
                                ensuring accurate, reliable results. The web-based platform offers flexibility, while the approval system 
                                ensures transparency and accountability. Customizable to fit specific needs, QISS LAB is easy to use, 
                                streamlining tasks and reducing errors. With QISS LAB, surveyors can efficiently 
                                manage inspections, improve compliance, and enhance overall productivity.
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
                        <img src="{{ asset('storage/qiss-lab/Why-choose-QISS-LAB.png') }}" alt="Why Choose QISS LAB">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="qia-about pt-5 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-md-6">
                    <div class="process-wrap bg3" style="padding: 30px; background: #E7F1FB;margin: 0px;">
                        <div class="home8-about z-index-1" style="margin-bottom: 20px;">
                            <img src="{{ asset('storage/qiss-lab-marine/2048X1170.png') }}" alt="Collaboration &amp; Communication Challenges">
                        </div>
                        <div class="sec-title">
                            <h3 class="title" style="margin-bottom: 10px;">
                                Marine Inspection
                            </h3>
                            <p class="" style="font-size: 17px;margin: 0px;text-align: justify;">
                                Our software allows you to create detailed inspection tasks with customizable checklists, 
                                ensuring all critical areas are covered. You can easily schedule inspections, track progress 
                                in real-time, and ensure timely completion. Additionally, you can access previous inspection 
                                reports to review the cargo's history, helping to identify recurring issues, track maintenance, 
                                and ensure consistency. This seamless integration of 
                                historical data improves decision-making and enhances overall inspection efficiency.    
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="process-wrap bg3" style="padding: 30px; background: #E7F1FB;margin: 0px;">
                        <div class="home8-about z-index-1" style="margin-bottom: 20px;">
                            <img src="{{ asset('storage/qiss-lab-marine/2048X1170.png') }}" alt="Collaboration &amp; Communication Challenges">
                        </div>
                        <div class="sec-title">
                            <h3 class="title" style="margin-bottom: 10px;">
                                Marine Lab Testing
                            </h3>
                            <p class="" style="font-size: 17px;margin: 0px;text-align: justify;">
                                Surveyors can easily send samples for lab testing to assess cargo quality and compliance. The software 
                                automatically alerts lab technicians when a sample is submitted, ensuring timely processing. Surveyors 
                                can access real-time lab results directly within the platform, allowing for quicker quality control decisions. 
                                This streamlined process enhances coordination between inspectors and lab staff, reduces delays, and ensures 
                                that cargo quality is continuously monitored, improving overall efficiency and compliance.   
                            </p>
                        </div>
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
                                        {{-- <div class="img-part">
                                        <img src="assets/images/testimonial/style2/3.jpg" alt="Images">
                                    </div> --}}
                                        <div class="testi-content pl-0">
                                            <div class="testi-name">{{ $testimonial->name }}</div>
                                            <span class="testi-title">{{ $testimonial->designation }}</span>
                                        </div>
                                    </div>

                                    <span><img src="{{ asset('storage/home-page-content/' . $testimonial->rating) }}"
                                            alt="Rating Images"></span>
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

    <!-- About Us - Start -->
    <div class="qia-about pt-5 pb-120 bg13  md-pt-80 md-pb-80" style="background: #2A368F;">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-2">
                    <div class="contact-wrap">
                        <div class="sec-title pb-3">
                            <h2 class="title pb-3 white-color">
                                About QIA
                            </h2>
                            <p class="desc m-0 white-color" style="text-align: justify;">
                                Quality Institute of America, based in Houston, Texas, is committed to enhancing client profitability 
                                through efficient management systems. Our flagship product, QISS QMS software, automates Quality Management 
                                Systems, streamlining processes for improved efficiency. We are proud to introduce QISS LAB, our newest software solution, 
                                designed to help businesses optimize their operations and further elevate productivity and accuracy.
                            </p>
                        </div>
                        <div class="btn-part">
                            <a class="readon learn-more"
                                {{ get_option('home_about_btn_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('home_about_btn_url') }}">{{ get_option('home_about_btn_text') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/qiss-lab-marine/2048X1170.png') }}" alt="QISS LAB">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us - End -->

    <!-- FAQ Section -->
    <div class="qia-testimonial style8 pt-30 pb-50 md-pt-80 md-pb-80">
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
                        ->whereIn('id', [75, 83, 84])
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

    <script>
        const loadServices = () => {
            const defaultIcon = "{{ asset('img/shape.png') }}";
            const servicesList = [{
                "title": "Workflow Automation",
                "description": "Streamline tasks with automated workflows, reducing manual errors and increasing operational efficiency.",
                "img": "{{ asset('storage/qiss-lab-marine/landscape-placeholder.svg') }}"
            }, {
                "title": "Inspections",
                "description": "Conduct thorough, real-time inspections of vessels and cargo, ensuring compliance and safety with checklists and detailed work instructions.",
                "img": "{{ asset('storage/qiss-lab-marine/landscape-placeholder.svg') }}"
            }, {
                "title": "Lab Testing",
                "description": "Ensuring accurate cargo quality control by integrating lab test results seamlessly into inspection workflows.",
                "img": "{{ asset('storage/qiss-lab-marine/landscape-placeholder.svg') }}"
            }, {
                "title": "Reporting",
                "description": "Generate detailed reports on vessel conditions, cargo inspections, and compliance status.",
                "img": "{{ asset('storage/qiss-lab-marine/landscape-placeholder.svg') }}"
            }, {
                "title": "Data Management",
                "description": "Centralize and secure vast amounts of inspection data, ensuring easy access and analysis across the marine supply chain.",
                "img": "{{ asset('storage/qiss-lab-marine/landscape-placeholder.svg') }}"
            }, {
                "title": "Documentation",
                "description": "Standardize inspection reports, certificates, and compliance documentation, ensuring accuracy and document control across all marine operations.",
                "img": "{{ asset('storage/qiss-lab-marine/landscape-placeholder.svg') }}"
            }, {
                "title": "Scheduling",
                "description": "Optimize inspection and survey schedules with calendar management to ensure timely completion of all marine operations.",
                "img": "{{ asset('storage/qiss-lab-marine/landscape-placeholder.svg') }}"
            }, {
                "title": "Collaboration",
                "description": "Improve teamwork and communication across surveyors, inspectors, and stakeholders by sharing real-time updates.",
                "img": "{{ asset('storage/qiss-lab-marine/landscape-placeholder.svg') }}"
            }, {
                "title": "Integration",
                "description": "Integrating with existing systems or QISS QMS improves efficiency, supports HSE, training, and quality management across departments.",
                "img": "{{ asset('storage/qiss-lab-marine/landscape-placeholder.svg') }}"
            }];

            // Assuming servicesList is already populated with data
            servicesList.forEach(service => {
                let serviceElement = document.createElement('div');
                serviceElement.classList.add('col-lg-4', 'col-md-4', 'mb-3');

                // Populate service data
                serviceElement.innerHTML = `
                    <div class="services-item" style="min-height:345px;">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="javascript:;">
                                    <img src="${service.img}" alt="${service.title}" style="width: 70px!important; height:70px!important;">
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
                                <p>${service.description}</p>
                            </div>
                        </div>
                    </div>
                `;

                // Append the new service element to the container (e.g., #services-grid)
                document.querySelector('#services-grid').appendChild(serviceElement);
            });
        }

        const loadFaq = () => {
            const questionsList = [{
                "title": "What does a marine surveyor do​?",
                "description": "A marine surveyor inspects ships, cargo, and equipment to ensure safety, compliance, and condition. They specifically inspect cargo tanks and holds for the acceptability of cleaning from prior cargo before new cargo is loaded, particularly for sensitive chemical cargo. Marine surveyors also witness cargo loading, perform cargo sampling, and oversee cargo tank sealing to ensure proper handling and compliance with regulatory standards.",
            }, {
                "title": "What specialized knowledge is required for cargo surveying?",
                "description": "Understanding of cargo loading, stowage, securing practices, and international regulations related to cargo handling. Surveyors also investigate cargo damage claims and develop loss prevention strategies.",
            }];

            // Assuming servicesList is already populated with data
            questionsList.forEach((faqItem, index) => {
                let questionElement = document.createElement('div');
                questionElement.classList.add('card');

                // Generate dynamic IDs
                const collapseId = `collapse-${index}`;
                const targetId = `collapseTarget-${index}`;
                const headingId = `heading-${index}`;

                const collapseClass = index === 0 ? 'collapse show' : 'collapse';

                // Populate FAQ data
                questionElement.innerHTML = `
                    <div id="${headingId}" class="bg-white shadow-sm border-0">
                        <h2 class="m-0" style="line-height: 0;">
                            <button type="button" data-toggle="collapse" data-target="#${collapseId}"
                                aria-expanded="true" aria-controls="${collapseId}" style="padding: 25px;"
                                class="card-header btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">
                                ${faqItem.title}
                            </button>
                        </h2>
                    </div>
                    <div id="${collapseId}" aria-labelledby="${headingId}" data-parent="#accordionExample"
                        class="${collapseClass}">
                        <div class="card-body" style="padding: 25px;">
                            <p class="font-weight-light m-0" style="font-size: 16px;">
                                ${faqItem.description}
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
                    "title": "Regulatory Compliance & Documentation Challenges",
                    "description": "Marine survey management software can automate and streamline regulatory compliance by integrating the latest industry regulations into its platform. This software can help you to ensure that inspections, documentation, and reporting align with global standards like IMO, SOLAS, and MARPOL. By digitizing paperwork and reducing manual data entry, it eliminates the risk of human error while ensuring accurate and timely documentation. Real-time updates help inspectors stay on top of evolving regulations, reducing the risk of non-compliance and shipment delays.",
                    "img": "{{ asset('storage/qiss-lab-marine/2048X1170.png') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }, {
                    "title": "Operational & Workflow Efficiency Challenges",
                    "description": "Our software can improve operational efficiency by standardizing inspection procedures and workflows. The platform allows marine inspectors to follow a consistent process regardless of location, ensuring accuracy and reducing errors. Scheduling and reporting features help inspectors manage multiple tasks, prioritize inspections, and meet tight deadlines. Access to historical data provides valuable insights into vessel performance, reducing delays and boosting the overall efficiency of cargo inspections and management.",
                    "img": "{{ asset('storage/qiss-lab-marine/2048X1170.png') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }, {
                    "title": "Data Management & Tracking Challenges",
                    "description": "This software can centralize all inspection data, making it easier to track cargo conditions, inspection results, and historical performance. With cloud-based solutions and real-time data entry, inspectors can access up-to-date information from anywhere, improving data accuracy and reducing the risk of lost or incomplete records. Automated integration with lab testing results ensure that sensitive or perishable cargo is constantly monitored, while detailed cargo histories allow for comprehensive analysis and better decision-making across the entire supply chain.",
                    "img": "{{ asset('storage/qiss-lab-marine/2048X1170.png') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }, {
                    "title": "Collaboration & Communication Challenges",
                    "description": "Our marine survey management system fosters seamless collaboration among all stakeholders—port authorities, shipping companies, customs, inspectors, and lab technicians. By providing a centralized platform for data sharing, emailing, and task assignment, the software ensures that everyone is on the same page. Real-time updates and instant access to inspection reports help eliminate communication gaps and minimize delays. This streamlined communication process improves inspection speed and accuracy, ensuring cargo can be cleared quickly, safely, and without unnecessary holdups.",
                    "img": "{{ asset('storage/qiss-lab-marine/2048X1170.png') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }
            ];

            // Assuming servicesList is already populated with data
            helpsList.forEach((helpItem, index) => {
                let helpElement = document.createElement('div');
                helpElement.classList.add('qia-help', 'row', 'align-items-center', 'pt-50', 'pb-50');
                const orderTextClass = index % 2 === 0 ? 'order-lg-1' : 'order-lg-2';
                const orderImgClass = index % 2 === 0 ? 'order-lg-2' : 'order-lg-1';

                // Populate service data
                helpElement.innerHTML = `
                    <div class="col-lg-6 ${orderTextClass}">
                        <div class="contact-wrap">
                            <div class="sec-title mb-0">
                                <h3 class="title pb-3">${helpItem.title}</h3>
                                <p class="desc pb-0 m-0" style="text-align: justify">${helpItem.description}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ${orderImgClass}">
                        <div class="home8-about z-index-1">
                            <img src="${helpItem.img}" alt="${helpItem.title}">
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
            loadServices();
            loadFaq();
            loadHelpSection();
        }
    </script>

@stop

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('/css/parsley.css') }}">
    <script src="{{ asset('js/parsley.min.js') }}"></script>
@endpush