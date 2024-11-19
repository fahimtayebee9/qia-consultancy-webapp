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
                        <h1 class="it-title" style="font-size: 36px!important;">
                            QISS LAB - A Laboratory Workflow Management Software
                        </h1>
                        <div class="description">
                            <p class="desc" style="text-align: justify;">
                                QISS LAB is a comprehensive lab workflow management software designed to address common
                                challenges in laboratory operations. Many labs struggle with disorganized data, inefficient
                                resource allocation, and compliance issues, leading to wasted time and increased costs. Our
                                easy-to-use lab software offers a seamless solution that provides powerful features. With
                                QISS LAB, you can streamline workflows, improve productivity, and ensure accurate reporting,
                                all while maintaining compliance and facilitating collaboration.
                            </p>
                        </div>
                        <a class="readon btn-demo" href="https://www.qi-a.com/contact">Get A Free Demo</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 pl-30 md-pl-15 align-middle">
                    <img src="{{ asset('storage/qiss-lab/lab-manager-is-talking-with-chemist-about-the-report.jpg') }}"
                        alt="Automate Your Lab Management System">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- INDUSTRY Section Start -->
    <div class="qia-partner style4 pb-20" style="background-color: #ffff;">
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
    </div>
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
                                Make Lab Manager's Life Easier with QISS LAB
                            </h2>
                        </div>
                        <p class="m-0" style="font-size: 17px!important; font-weight: 400; color: #ffffff;">
                            Laboratory management software reduces paperwork and speeds progress by automating tasks,
                            enabling digital documentation, providing real-time access, and streamlining reporting and
                            compliance management.
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
                    What QISS LAB Can Do?
                </h2>
                <div class="services-desc">
                    <p>
                        A Software To Help You Manage A Laboratory
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
                            Contact our team to learn more about our product and how it can help your laboratory staff.
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
                                Why Choose QISS LAB Software To Manage Your Laboratory?
                            </h2>
                            <p class="desc pb-2 m-0" style="font-size: 16px;text-align:justify;">
                                QISS LAB offers an easy-to-use platform designed to streamline laboratory workflow
                                management. With customizable reports, users can tailor data presentation to meet specific
                                needs. The integrated approval system ensures compliance with industry standards, while
                                web-based access allows for convenient management from any location. Users can easily attach
                                photos for documentation, improving record accuracy. Additionally, QISS LAB seamlessly
                                integrates with QISS QMS, providing a comprehensive solution for maintaining quality and
                                compliance in laboratory operations.
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
    <!-- How We can Help - End -->

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
                {{-- <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="qia-contact mod1">
                        <div class="contact-wrap" style="padding: 0;;" id="testimonial_content">
                            <img src="storage/home-page-content/EeOtq5mPasiYvpjBryAVxFL5paxVjnFQOgoS38g5.png"
                                alt="">
                            <div class="qia-videos">
                                <div class="animate-border main-home">
                                    <h4 class="testimonial-h4">{{ $testimonialName }}</h4>
                                    <h5 class="testimonial-h6">{{ $testimonialDesignation }}</h5>
                                    <a style="left: 50%;top: 30%;" class="popup-border popup-videos content_management"
                                        href="javascript:;"
                                        data-url="{{ url('show-banner-video?id=' . $testimonialLink) }}">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Testimonial Section -->

    <!-- About Us - Start -->
    <div class="qia-about pt-5 pb-120 bg13  md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-2">
                    <div class="contact-wrap">
                        <div class="sec-title pb-3">
                            <h2 class="title pb-3">
                                About QIA
                            </h2>
                            <p class="desc m-0">
                                Quality Institute of America is a software company based in Houston, Texas. We are dedicated
                                to improving our client’s profitability through effective management systems. Our flagship
                                product is QISS QMS software which automates Quality Management Systems by streamlining
                                processes for greater efficiency. We are excited to introduce QISS LAB, our latest software
                                designed to further support labs in optimizing their operations.
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
                        <img src="{{ asset('storage/qiss-lab/6_11zon.jpg') }}" alt="QISS LAB">
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
        let isShowingMore = false; // Initial state: showing only 4 industries

        const toggleIndustries = () => {
            const industriesGrid = document.querySelector('.industries-grid');
            const button = document.querySelector('.see-more-btn button');
            const spinner = document.querySelector('.loading-spinner');

            // Industry items
            const industries = [{
                    title: "Chemical Industry",
                    img: "{{ asset('storage/qiss-lab/Chemical-Industry.svg') }}",
                    url: ""
                },
                {
                    title: "Oil & Gas Industry",
                    img: "{{ asset('storage/qiss-lab/Oil-Gas-Industry.svg') }}",
                    url: ""
                },
                {
                    title: "Marine Industry",
                    img: "{{ asset('storage/qiss-lab/Marine-Industry.svg') }}",
                    url: "{{ route('qiss-lab-marine') }}"
                },
                {
                    title: "Water Industry",
                    img: "{{ asset('storage/qiss-lab/Water-Industry.svg') }}",
                    url: ""
                },
                {
                    title: "Research Industry",
                    img: "{{ asset('storage/qiss-lab/Research-Industry.svg') }}",
                    url: ""
                },
                // Add more industries as needed
            ];

            const initialVisibleCount = 4;

            // Show loading spinner
            spinner.style.display = 'flex';

            setTimeout(() => {
                spinner.style.display = 'none'; // Hide loading spinner

                // Clear any existing industries
                industriesGrid.innerHTML = '';

                if (isShowingMore) {
                    // Show all industries when "See Less" is clicked
                    industries.forEach(industry => {
                        let industryElement = document.createElement('div');
                        industryElement.classList.add('industry-card');

                        // Populate industry data
                        industryElement.innerHTML = `
                            <div class="logo-img text-center">
                                <a href="${ industry.url ?? 'javascript:;' }">
                                    <img src="${industry.img}" style="width: 100px; margin: auto;" alt="${industry.title}">
                                    <span class="industry-title">${industry.title}</span>
                                </a>
                            </div>
                        `;
                        industriesGrid.appendChild(industryElement);
                    });
                    button.innerText = 'See Less';
                } else {
                    // Show only the first 4 industries initially
                    industries.slice(0, initialVisibleCount).forEach(industry => {
                        let industryElement = document.createElement('div');
                        industryElement.classList.add('industry-card');

                        // Populate industry data
                        industryElement.innerHTML = `
                            <div class="logo-img text-center">
                                <a href="javascript:;">
                                    <img src="${industry.img}" style="width: 100px; margin: auto;" alt="${industry.title}">
                                    <span class="industry-title">${industry.title}</span>
                                </a>
                            </div>
                        `;
                        industriesGrid.appendChild(industryElement);
                    });
                    button.innerText = 'See More';
                }

                // Toggle the state
                isShowingMore = !isShowingMore;

            }, 500); // Delay for loading effect
        }

        const loadServices = () => {
            const defaultIcon = "{{ asset('img/shape.png') }}";
            const servicesList = [{
                "title": "Data Management",
                "description": "You can organize, store, and retrieve lab data efficiently to ensure accurate analysis and reporting.",
                "img": "{{ asset('storage/qiss-lab/Data-Management.svg') }}"
            }, {
                "title": "Inventory Management",
                "description": "You can track supplies, reagents, and equipment to prevent shortages and reduce waste with QISS LAB software.",
                "img": "{{ asset('storage/qiss-lab/inventory-management.svg') }}"
            }, {
                "title": "Order & Invoicing",
                "description": "Maintain financial efficiency in labs by tracking orders from suppliers and generating invoices for services.",
                "img": "{{ asset('storage/qiss-lab/order.svg') }}"
            }, {
                "title": "Inspection",
                "description": "Assess equipment, procedures and practices to identify potential hazards and areas for improvement.",
                "img": "{{ asset('storage/qiss-lab/Inspection.svg') }}"
            }, {
                "title": "Sample Management",
                "description": "Easily track, retain, and analyze samples with our software, ensuring proper documentation during the research process.",
                "img": "{{ asset('storage/qiss-lab/sample.svg') }}"
            }, {
                "title": "Scheduling",
                "description": "Efficiently manage lab schedules to ensure optimal resource allocation and minimizing conflicts to improve productivity.",
                "img": "{{ asset('storage/qiss-lab/Scheduling.svg') }}"
            }, {
                "title": "Testing",
                "description": "QISS Lab streamlines testing processes, ensuring accuracy and efficiency in managing lab tests and results.",
                "img": "{{ asset('storage/qiss-lab/test.svg') }}"
            }, {
                "title": "Reporting",
                "description": "Generate comprehensive reports with ease, allowing for quick insights and informed decision-making.",
                "img": "{{ asset('storage/qiss-lab/Report.svg') }}"
            }, {
                "title": "Document Control",
                "description": "Maintain organized, secure and easily accessible documents, ensuring compliance and facilitating collaboration.",
                "img": "{{ asset('storage/qiss-lab/Document-control.svg') }}"
            }];

            // Assuming servicesList is already populated with data
            servicesList.forEach(service => {
                let serviceElement = document.createElement('div');
                serviceElement.classList.add('col-lg-4', 'col-md-4', 'mb-3');

                // Populate service data
                serviceElement.innerHTML = `
                    <div class="services-item">
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
                "title": "What is lab management software?",
                "description": "It is a software that can streamline lab workflows by organizing data, tracking inventory, and managing samples efficiently.",
            }, {
                "title": "Why should I use it?",
                "description": "You should use it to automate lab workflows and reduce miscommunications between field staff and lab technicians.",
            }, {
                "title": "How can it help lab managers?",
                "description": "It will allow lab managers to assign a task, see the results and approve any task remotely.",
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
                    "title": "Automate Your Lab Management System",
                    "description": "Automating your lab management system can significantly improve efficiency and accuracy. By integrating QISS LAB software, you can simplify processes such as sample tracking, inventory management, and data analysis. Automation reduces human error, ensuring reliable results and better compliance with regulatory standards.",
                    "img": "{{ asset('storage/qiss-lab/automate-lab-workflow.jpg') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }, {
                    "title": "Increase Productivity & Save Time",
                    "description": "Lab management software improves productivity and saves time by automating routine tasks. With simplified workflows, researchers can focus on critical activities rather than administrative burdens. Real-time data access enables quick decision-making, while automated reporting features minimize manual documentation. By optimizing resource allocation, laboratory software creates a more efficient environment, ultimately leading to faster research outcomes and improved overall performance.",
                    "img": "{{ asset('storage/qiss-lab/improve-productivity.jpeg') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }, {
                    "title": "Reducing Risk of Errors",
                    "description": "Our software can significantly reduce the risk of errors by automating data entry and standardizing processes. By minimizing manual tasks, it decreases the likelihood of human mistakes, ensuring more accurate results. Real-time data validation alerts users to discrepancies, enhancing data integrity. Implementing a lab management software fosters a more reliable environment, allowing researchers to focus on quality and precision in their work.",
                    "img": "{{ asset('storage/qiss-lab/risk-of-error.jpg') }}",
                    "hasButton": false,
                    "buttonUrl": null,
                    "buttonText": null
                }, {
                    "title": "Prevent Raw Data Loss",
                    "description": "Preventing data loss is crucial in lab management, and our specialized QISS LAB software offers robust solutions. Automated backups ensure that critical research data is securely stored and easily retrievable. Real-time monitoring alerts users to potential issues, while user access controls safeguard sensitive information. By centralizing data management, laboratory management software minimizes risks, improving both compliance and research integrity.",
                    "img": "{{ asset('storage/qiss-lab/prevent-lab-data-loss.jpg') }}",
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
            toggleIndustries();
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
