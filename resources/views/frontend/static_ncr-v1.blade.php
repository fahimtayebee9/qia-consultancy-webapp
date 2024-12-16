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

        .process-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-gap: 20px;
        }

        .process-card {
            text-align: center;
        }

        .logo-img img {
            display: block;
            margin: 0 auto;
        }

        /* Position the last 3 items on the third row, leaving first and last cells empty */
        .process-card:nth-child(11) {
            grid-column: 2 / span 1;
        }

        .process-card:nth-child(12) {
            grid-column: 3 / span 1;
        }

        .process-card:nth-child(13) {
            grid-column: 4 / span 1;
        }

        /* Media query for smaller screens if needed */
        @media (max-width: 1200px) {
            .process-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .process-card:nth-child(11), .process-card:nth-child(12), .process-card:nth-child(13) {
                grid-column: span 1;
            }
        }

        @media (max-width: 768px) {
            .process-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .process-card:nth-child(11), .process-card:nth-child(12), .process-card:nth-child(13) {
                grid-column: span 1;
            }
        }

        @media (max-width: 576px) {
            .process-grid {
                grid-template-columns: 1fr;
            }

            .process-card:nth-child(11), .process-card:nth-child(12), .process-card:nth-child(13) {
                grid-column: span 1;
            }
        }


    </style>

    <!-- Banner Section Start -->
    <div class="qia-banner main-home pt-100 pb-100  md-pt-80 md-pb-80" style="background: url({{ asset('storage/qiss-qms/banners/Hero-Background.jpg') }});" alt="QIA">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 pr-30 md-mb-70 md-pr-15 d-flex align-items-center">
                    <div class="content-wrap">
                        <h1 class="it-title" style="font-size: 36px!important;">
                            Non-conformance Management Software
                        </h1>
                        <div class="description">
                            <p class="desc font-16" style="text-align: justify;">
                                Non-conformance issues can arise in any stage of production, from internal processes to supplier 
                                and customer interactions. Managing these issues efficiently is critical to ensuring product quality, 
                                maintaining compliance, and minimizing downtime. With our Non-Conformance Management Software, you can 
                                quickly identify, track, and resolve non-conformance events across your organization, 
                                ensuring smoother operations, higher quality standards, and improved regulatory compliance.
                            </p>
                        </div>
                        <a class="readon btn-demo" href="https://www.qi-a.com/contact">Get A Free Demo</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 pl-30 md-pl-15 align-middle">
                    <img src="{{ asset('storage/ncr-content/ncr-hero-image.jpg') }}" alt="Quality Control Management Software">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Ratings Section Start -->
    <div class="qia-partner style4 gray-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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

    {{-- SERVICES SECTION START --}}
    <div class="qia-services bg-FFF main-home style2" style="padding: 80px 0px;">
        <div class="container">
            <div class="sec-title text-center">
                <h2 class="title">
                    Benefits of Our Non-Conformance Management Software
                </h2>
                <div class="services-desc">
                    <p class="font-16">
                        A Specialized Software To Help You Manage Non-Conformance
                    </p>
                </div>
            </div>
            <div class="row" id="services-grid" style="margin-top: 50px;">
                {{-- DYNAMIC CONTENT --}}
            </div>
        </div>
    </div>
    {{-- SERVICES SECTION END --}}

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30" style="background: url({{ asset('storage/qiss-qms/banners/Banners.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                QISS QMS Ensure Your System Comply with Industry Standards
                            </h2>
                        </div>
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

    <!-- Who Can Use This Software - Start -->
    <div class="qia-about pt-5 pb-120 bg-E7F1FB md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-1 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title">
                            <h2 class="title pb-3 m-0">
                                Who Can Use This Software?
                            </h2>
                            <p class="desc pb-2 m-0 font-16" style="text-align:justify;">
                                Our Non-Conformance Management Software is built to meet the needs of key personnel in quality management and production teams:
                            </p>
                        </div>
                        <div class="sec-content">
                            <ul style="list-style: none; margin: 0; padding: 0;">
                                <li style="margin-bottom: 15px;">
                                    <p class="desc m-0 font-16" style="text-align:justify;">
                                        <span style="font-weight: bold;">Quality Managers: </span>
                                        Take control of your organization's non-conformance events and drive compliance with regulatory requirements.
                                    </p>
                                </li>
                                <li style="margin-bottom: 15px;">
                                    <p class="desc m-0 font-16" style="text-align:justify;">
                                        <span style="font-weight: bold;">Production Managers: </span>
                                        Track and resolve quality issues in production quickly to minimize delays and maintain operational efficiency.
                                    </p>
                                </li>
                                <li style="margin-bottom: 15px;">
                                    <p class="desc m-0 font-16" style="text-align:justify;">
                                        <span style="font-weight: bold;">QC/QA Technicians: </span>
                                        Log non-conformance events accurately and provide essential data for root cause analysis and corrective actions.
                                    </p>
                                </li>
                                <li style="margin-bottom: 15px;">
                                    <p class="desc m-0 font-16" style="text-align:justify;">
                                        <span style="font-weight: bold;">Root Cause Analysis Specialists: </span>
                                        Identify, analyze, and eliminate the causes of non-conformances to prevent future issues.
                                    </p>
                                </li>
                                <li style="margin-bottom: 15px;">
                                    <p class="desc m-0 font-16" style="text-align:justify;">
                                        <span style="font-weight: bold;">CAPA Coordinators: </span>
                                        Ensure that corrective and preventive actions are defined, tracked, and closed out effectively.
                                    </p>
                                </li>
                                <li style="margin-bottom: 15px;">
                                    <p class="desc m-0 font-16" style="text-align:justify;">
                                        <span style="font-weight: bold;">Regulatory Affairs Managers: </span>
                                        Ensure that your company is meeting all industry regulations and standards, keeping your organization audit-ready at all times.
                                    </p>
                                </li>
                                <li style="margin-bottom: 15px;">
                                    <p class="desc m-0 font-16" style="text-align:justify;">
                                        <span style="font-weight: bold;">For Everyone Committed to Quality: </span>
                                        You don’t need a specific job title to benefit from this software. If you wish to improve quality, productivity and profitability, 
                                        you should use this Non-Conformance Management Software to ensure that you follow best industry practices.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/ncr-content/Homepage Hero Image-1.png') }}" alt="Why Choose QISS QMS">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Who Can Use This Software - End -->

    <!-- Key Features - Start -->
    <div class="qia-about pt-5 pb-120 bg-FFF md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-12 order-lg-1">
                    <div class="contact-wrap">
                        <div class="sec-title text-center" style="max-width: 900px; margin: auto">
                            <h2 class="title pb-3">
                                Key Features of Our Non-Conformance Management Software
                            </h2>
                            <p class="desc m-0 font-16">
                                Our Non-Conformance Management System is more than just a tracking tool—it's a robust, configurable solution designed to improve your quality management processes, ensure compliance, and provide deeper insights into your operations.
                            </p>
                        </div>
                        <div id="keyFeatures-grid" style="margin-top: 30px;display: grid; grid-template-columns: repeat(2, 1fr); column-gap: 30px; row-gap: 15px;">
                            <!-- key Features Items will go here in two columns 7 on each column total 14 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us - End -->

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30"style="background: url({{ asset('storage/qiss-qms/banners/Banners.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                Resolve Issues Before They Escalate With Automated Workflow
                            </h2>
                        </div>
                        <p class="m-0 font-16" style="font-weight: 400;color: #ffffff;">
                            Our Non-Conformance management system will help you proactively identify and address issues with automated workflows. So you can ensure timely corrective actions and prevent escalation to improve operational efficiency and compliance.
                        </p>
                    </div>
                    <div class="col-md-4" style="text-align: right;">
                        <div class="button-wrap" style="margin-top: 25px;">
                            <a class="readon btn-demo"
                                {{ get_option('get_demo_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('get_demo_button_url') }}">Learn More About QISS QMS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get Demo Section End -->

    <!-- Process Section Start -->
    <div class="qia-partner style4 pb-20 bg-E7F1FB">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center pb-3">
                    <h2 style="font-size: 32px!important;font-weight: bold;" class="m-0 text-capitalize">
                        How Does Our Non-Conformance System Work?
                    </h2>
                    <div class="sec-title" style="">
                        <img src="{{ asset('storage/ncr-content/QISS-Logo.png') }}" alt="QISS" style="width: 160px; margin-top: 25px;display: block; margin: auto; text-align: center;">
                        <h3 class="title" style="margin-bottom: 10px;border-bottom: 2px solid #004c94;display: inline-block;">
                            Nonconformance Management Software Workflow
                        </h3>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="process-grid">
                        <!-- Industry Items will go here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Section End -->

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30" style="background: url({{ asset('storage/qiss-qms/banners/Banners-2.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                Non-Conformance System for Your Industry
                            </h2>
                        </div>
                        <p class="m-0 font-16" style="font-weight: 400;color: #ffffff;">
                            Contact our team if you don't see your industry
                        </p>
                        <div class="button-wrap" style="margin-top: 30px;">
                            <a class="readon btn-demo" {{ get_option('get_demo_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('get_demo_button_url') }}">Contact Our Team</a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right col-md-12">
                        <img src="{{ asset('storage/ncr-content/Industry.jpg') }}" alt="Non-Conformance System for Your Industry">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get Demo Section End -->

    <!-- 4 Cards - Start -->
    <div class="qia-about pt-5 pb-120 bg-FFF md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-md-6">
                    <div class="process-wrap bg3" style="padding: 30px; background: #E7F1FB;margin: 0px;">
                        <div class="home8-about z-index-1" style="margin-bottom: 20px;">
                            <img src="{{ asset('storage/ncr-content/two-manufacturing-staffs-working-togather.jpg') }}" alt="Collaboration &amp; Communication Challenges">
                        </div>
                        <div class="sec-title">
                            <h3 class="title" style="margin-bottom: 10px;">
                                For Manufacturing
                            </h3>
                            <p class="" style="font-size: 17px;margin: 0px;text-align: justify;">
                                Nonconformance management software in manufacturing helps track product and process deviations by automating reports, assigning corrective actions, and ensuring timely resolution. It centralizes data, improves traceability, and improves decision-making by providing real-time insights into quality issues. This reduces downtime, waste, and ensures consistent product quality, boosting efficiency.   
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="process-wrap bg3" style="padding: 30px; background: #E7F1FB;margin: 0px;">
                        <div class="home8-about z-index-1" style="margin-bottom: 20px;">
                            <img src="{{ asset('storage/ncr-content/tablet-and-capsul-from-pharmaceutical-company.jpg') }}" alt="Collaboration &amp; Communication Challenges">
                        </div>
                        <div class="sec-title">
                            <h3 class="title" style="margin-bottom: 10px;">
                                For Pharmaceutical Industry
                            </h3>
                            <p class="" style="font-size: 17px;margin: 0px;text-align: justify;">
                                In the pharmaceutical industry, nonconformance management software ensures compliance with regulatory requirements (e.g. FDA, GMP). It helps track deviations, document investigations, and monitor corrective actions. By automating workflows and providing audit trails, the software reduces the risk of non-compliance, prevents costly recalls, and improves product quality and regulatory readiness.   
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="process-wrap bg3" style="padding: 30px; background: #E7F1FB;margin: 0px;">
                        <div class="home8-about z-index-1" style="margin-bottom: 20px;">
                            <img src="{{ asset('storage/ncr-content/lab-technician-working-with-dna-structure.jpg') }}" alt="Collaboration &amp; Communication Challenges">
                        </div>
                        <div class="sec-title">
                            <h3 class="title" style="margin-bottom: 10px;">
                                For Biologics Industry
                            </h3>
                            <p class="" style="font-size: 17px;margin: 0px;text-align: justify;">
                                For biologics, nonconformance management software tracks deviations from production to final product release. It streamlines root cause analysis, automates corrective actions, and supports regulatory documentation. This software enhances product safety, ensures batch consistency, and reduces the risk of regulatory non-compliance, improving overall efficiency.  
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="process-wrap bg3" style="padding: 30px; background: #E7F1FB;margin: 0px;">
                        <div class="home8-about z-index-1" style="margin-bottom: 20px;">
                            <img src="{{ asset('storage/ncr-content/2-chemists-are-working-togather.jpg') }}" alt="Collaboration &amp; Communication Challenges">
                        </div>
                        <div class="sec-title">
                            <h3 class="title" style="margin-bottom: 10px;">
                                For Chemical Industry
                            </h3>
                            <p class="" style="font-size: 17px;margin: 0px;text-align: justify;">
                                This software manages non-conformances in raw materials, production, and testing in the chemical industries by automating reporting, root cause analysis, and corrective actions. It helps ensure compliance with environmental, safety, and regulatory standards (e.g. REACH, EPA), reduces risks, and ensures product integrity, thereby enhancing quality control and operational efficiency.   
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 4 Cards - End -->

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
                                Founded in 1994 in Houston, Texas, the Quality Institute of America (QIA) originally focused on consulting, auditing and training for quality management based on ISO standards and requirements. Today, we specialize in software development to help clients improve profitability through effective management systems. Our QISS products automate workflows to ensure compliance and efficiency across various management systems and global regulations.
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

    <!-- Get Demo Section Start -->
    <div class="qia-cta style1 bg7 pt-30 pb-30" style="background: url({{ asset('storage/qiss-qms/banners/Banners-2.jpg') }});"
        alt="QIA">
        <div class="container">
            <div class="cta-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-right col-md-12">
                        <img src="{{ asset('storage/ncr-content/ncr-module-image.png') }}" alt="Non-Conformance System for Your Industry">
                    </div>
                    <div class="col-lg-7 col-md-12 md-mb-30">
                        <div class="title-wrap">
                            <h2 class="epx-title" style="font-size: 30px!important;">
                                Customized  Non-Conformance Management Solutions
                            </h2>
                        </div>
                        <p class="m-0 font-16" style="font-weight: 400;color: #ffffff;">
                            Get tailored NCR software designed to meet your unique needs. Unsure? Request a demo and see it in action!y
                        </p>
                        <div class="button-wrap" style="margin-top: 30px;">
                            <a class="readon btn-demo" {{ get_option('get_demo_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('get_demo_button_url') }}">Get A Demo Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get Demo Section End -->

    <!-- FAQ Section -->
    <div class="qia-testimonial style8 pt-30 pb-50 md-pt-80 md-pb-80 bg-FFF">
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

    <script>
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
                    "title": "Centralized Tracking",
                    "description": "Track and manage non-conformance events across your organization in one unified system. Whether the non-conformance is internal, from a customer, or from a supplier, our software gives you complete visibility.",
                    "img": "{{ asset('storage/ncr-content/icons/Centralized-Tracking.png') }}"
                }, {
                    "title": "Automated Workflow",
                    "description": "Automate key processes such as notifications, approvals, and task assignments. Email alerts keep everyone informed of critical developments, ensuring swift resolution of issues.",
                    "img": "{{ asset('storage/ncr-content/icons/Automated-workflow.png') }}"
                }, {
                    "title": "Root Cause Analysis",
                    "description": "Identify the root causes of non-conformances with built-in tools for performing root cause analysis. By addressing the underlying causes, you can prevent future issues and improve overall product quality.",
                    "img": "{{ asset('storage/ncr-content/icons/Root-cause-analysis.png') }}"
                }, {
                    "title": "CAPA Management",
                    "description": "Ensure both corrective and preventive actions are taken when non-conformances occur. Track the effectiveness of CAPAs over time and close the loop on problem-solving.",
                    "img": "{{ asset('storage/ncr-content/icons/CAPA-management.png') }}"
                }, {
                    "title": "Non-Conformance Reporting & Tracking",
                    "description": "The NCR system simplifies reporting, tracking, and resolving non-conformances, ensuring compliance, accountability, and timely corrective actions with automated notifications.",
                    "img": "{{ asset('storage/ncr-content/icons/Non-conformance-Reporting-&-tracking.png') }}"
                }, {
                    "title": "Compliance Tracking",
                    "description": "Stay on top of your regulatory obligations with built-in compliance tracking features. The software helps you maintain adherence to standards like ISO, FDA, GMP, and more, through automated audit trails and compliance reporting.",
                    "img": "{{ asset('storage/ncr-content/icons/Compliance-tracking.png') }}"
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

            ensureEqualHeight();
        }

        const ensureEqualHeight = () => {
            const serviceItems = document.querySelectorAll('.services-item');

            let maxHeight = 0;
            serviceItems.forEach(item => {
                const itemHeight = item.offsetHeight;
                if (itemHeight > maxHeight) {
                    maxHeight = itemHeight;
                }
            });

            serviceItems.forEach(item => {
                item.style.minHeight = `${maxHeight}px`;
            });
        };

        const loadFaq = () => {
            const questionsList = [
                {
                    "title": "What is an NCR report?",
                    "description": "A document recording deviations from quality standards or specifications in products, processes, or services.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                }, {
                    "title": "What is the difference between non-compliance and non-conformance?",
                    "description": "Non-compliance is legal/ regulatory failure; non-conformance is technical or operational failure to meet standards.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                }, {
                    "title": "What is the non-conformance management process?",
                    "description": "The non-conformance management process involves a systematic approach to identify, document, analyze, and resolve instances where products, processes, or services deviate from established standards or requirements.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "What are the types of non-conformance?",
                    "description": "Non-conformances can be categorized in various ways. But common types include product, process, design, supplier, documentation, system, and safety non-conformance.",
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

        const loadKeyFeatures = () => {
            const featureList = [
                {
                    "title": "Permission-Based Access for Better Control",
                    "description": "Our non-conformance software is built with role-based permissions to ensure that only authorized users can perform specific activities. This enhances security, reduces the risk of errors, and ensures that critical tasks are performed by the right people. Module managers or authorized personnel control who can initiate, approve, or edit non-conformance records (NCRs), ensuring clear accountability.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                }, {
                    "title": "Categorize and Analyze Non-Conformance Events",
                    "description": "Easily associate each <b>NCR</b> with a <b>category</b> and <b>failure mode</b>. Disposition types are defined by category, ensuring each non-conformance is categorized properly for analysis. This streamlines the investigation process and ensures that corrective actions are targeted and effective. Plus, you can reference and link multiple NCRs to track related events and their resolutions.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                }, {
                    "title": "Flexible NCR Origins and Customization",
                    "description": "Our system allows you to initiate <b>NCRs from multiple origins</b>—whether internal, customer-related, or supplier-driven. This flexibility ensures that you can capture non-conformance events from all areas of your business, improving oversight. Additionally, the Non-Conformance system offers <b>customization options</b> so you can tailor the software to your specific needs, from default settings to workflow processes.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Configurable Email Alerts for Timely Action",
                    "description": "Stay on top of every non-conformance with <b>customizable email notifications</b>. Receive alerts whenever an action is taken or an assignment is made, and get notified when tasks are past due. You can configure messages, recipients, delays, and frequencies to ensure the right people are always informed at the right time, reducing delays in resolution.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Custom Fields for More Detailed Tracking",
                    "description": "Easily <b>add custom fields</b> to NCRs to track additional information specific to your organization’s processes. In addition to standard fields like title, department, category, and failure mode, you can capture the unique data you need to improve quality control and enhance reporting.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Involve Suppliers and Customers Directly",
                    "description": "Our software allows <b>supplier representatives</b> to be assigned as responsible persons for NCRs related to their site, ensuring that non-conformance events are addressed at the source. Similarly, <b>customer representatives</b> can also initiate NCRs related to their organization, ensuring all stakeholders have a voice in the quality management process.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Initiate and Track CAPA Actions",
                    "description": "Easily initiate <b>CAPAs directly from NCRs</b>. The details from the NCR are automatically transferred to the CAPA module, making it simple to create a corrective or preventive action plan without duplicating data entry. This seamless integration accelerates issue resolution and helps you maintain comprehensive records for compliance.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "NCR Dashboard for Real-Time Visibility",
                    "description": "Our intuitive <b>NCR dashboard</b> provides a real-time snapshot of all open NCRs. Track the current status of each NCR, see the required actions, due dates, and who is responsible for the next steps. This dashboard ensures that no issue falls through the cracks and that every NCR is managed efficiently and effectively.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Send NCRs to the Material Review Board (MRB)",
                    "description": "If necessary, you can send NCRs to the <b>Material Review Board (MRB)</b> for further review. The responsible person can assign selective members of the MRB to review the NCR and provide feedback, ensuring thorough evaluation before disposition.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Disposition Actions with Multiple Reviewers",
                    "description": "Disposition actions are critical to closing NCRs, and our system allows multiple users to provide input. Each NCR can have <b>different disposition types</b>, sent to various users for review and approval, ensuring that the final resolution is thoroughly vetted before closure.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Advanced Search & Analytics",
                    "description": "Our software offers <b>advanced search capabilities</b> that allow you to retrieve NCRs based on specific criteria. Whether you’re looking for trends, performance issues, or root causes, you can drill down into your data and generate <b>customizable charts and reports</b> for in-depth analysis and continuous improvement.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Collaborate with Discussion Notes and Attachments",
                    "description": "Keep all relevant information in one place by adding <b>discussion notes</b> and <b>attachments</b> to NCRs. Authorized users can document additional context or insights that can aid in the resolution process, ensuring that all relevant information is captured for future reference.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Efficient Data Sharing & Reporting",
                    "description": "Easily share <b>NCR records</b> with internal and external stakeholders via email. The system automatically includes any attachments, ensuring that everyone involved in the resolution process has access to the most up-to-date information.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                },{
                    "title": "Edit Capabilities for Ongoing Adjustments",
                    "description": "Authorized users can make changes to NCR records as needed. Whether it's correcting data, updating statuses, or modifying resolution plans, the system’s <b>edit capabilities</b> ensure that your team can adapt to changing circumstances and keep all records accurate and up to date.",
                    "hasLink": false,
                    "link": null,
                    "replace": null
                }
            ];

            featureList.forEach((faqItem, index) => {
                let featureElement = document.createElement('div');
                featureElement.classList.add('card');
                featureElement.style.border="none";

                // Generate dynamic IDs
                const collapseId = `collapseKf-${index}`;
                const headingId = `headingKf-${index}`;

                const collapseClass = 'collapse';
                const areaExpanded = false;

                let description = faqItem.description;
                if (faqItem.hasLink) {
                    description = description.replace(
                        faqItem.replace, 
                        `<a href="${faqItem.link}" class="text-primary">${faqItem.replace}</a>`
                    );
                }

                featureElement.innerHTML = `
                    <div id="${headingId}" class="bg-white shadow-sm border-0">
                        <h3 class="m-0" style="line-height: 0;">
                            <button type="button" data-toggle="collapse" data-target="#${collapseId}"
                                aria-expanded="${areaExpanded}" aria-controls="${collapseId}" style="padding: 25px; border-bottom: none;"
                                class="card-header btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">
                                ${faqItem.title}
                            </button>
                        </h3>
                    </div>
                    <div id="${collapseId}" aria-labelledby="${headingId}"
                        class="${collapseClass}">
                        <div class="card-body" style="padding: 25px; border: 1px solid rgba(0, 0, 0, .125);border-radius: .25rem;border-top: 0;border-top-left-radius: 0;border-top-right-radius: 0;">
                            <p class="font-weight-light m-0 font-16">
                                ${description}
                            </p>
                        </div>
                    </div>
                `;

                document.querySelector('#keyFeatures-grid').appendChild(featureElement);
            });
        }

        const loadProcess = () => {
            const gridContainer = document.querySelector('.process-grid');

            const itemsList = [
                {
                    title: "Initiate NCR",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S1.png') }}",
                    bgColor: "#ef4136"
                },
                {
                    title: "Send For Approval",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S2.png') }}",
                    bgColor: "#00a79d"
                },
                {
                    title: "Assign Responsible Person",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S3.png') }}",
                    bgColor: "#ee2a7b"
                },
                {
                    title: "Send For MRB",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S4.png') }}",
                    bgColor: "#6ca642"
                },
                {
                    title: "Complete MRB",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S5.png') }}",
                    bgColor: "#f7941d"
                },

                {
                    title: "Approval For MRB",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S6.png') }}",
                    bgColor: "#2b3990"
                },
                {
                    title: "Back To Responsible Person",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S7.png') }}",
                    bgColor: "#009444"
                },
                {
                    title: "Send For Disposition",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S8.png') }}",
                    bgColor: "#603913"
                },
                {
                    title: "Approval On Completed Disposition",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S9.png') }}",
                    bgColor: "#f15a29"
                },
                {
                    title: "Send To Determine & Complete Disposition",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S10.png') }}",
                    bgColor: "#9e1f63"
                },

                {
                    title: "Close Disposition",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S11.png') }}",
                    bgColor: "#f15a29"
                },
                {
                    title: "Approve Disposition",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S12.png') }}",
                    bgColor: "#1c75bc"
                },
                {
                    title: "Approve & Close",
                    img: "{{ asset('storage/ncr-content/ncr-workflow/S13.png') }}",
                    bgColor: "#da1c5c"
                }
            ];

            itemsList.forEach((item, index) => {
                let processItem = document.createElement('div');
                processItem.classList.add('process-card');
                processItem.style.backgroundColor = "#FFF";
                processItem.style.borderRadius = "10px";
                processItem.style.border = "2px solid #F0F3FF";
                processItem.style.boxShadow = "rgb(44 44 44 / 7%) 0px 6px 5px 0px";
                const title = item.title ? `<span class="industry-title font-15" style="font-family: 'Poppins', sans-serif;">${item.title}</span>` : '';

                // Populate industry data
                processItem.innerHTML = `
                    <div class="process-count" style="font-family: 'Britannic Bold', sans-serif;padding: 5px 10px;border-top-left-radius:10px;border-top-right-radius:10px; background: ${item.bgColor}; color: #fff; text-align: right;font-size: 20px; font-weight: bold;">
                        <span>${index+1}</span>
                    </div>
                    <div class="logo-img text-center" style="padding: 25px;">
                        <img src="${item.img}" style="width: 130px; margin: auto;height: 130px; padding: 20px;border-radius: 100px;border: 10px solid ${item.bgColor};" alt="${item.title}" loading="lazy">
                        ${title}
                    </div>
                `;
                gridContainer.appendChild(processItem);
            });
        }


        window.onload = function() {
            loadServices();
            loadKeyFeatures();
            loadFaq();
            lazyLoadAboutUs();
            loadProcess();
        }
    </script>
@stop

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/parsley.css') }}">
    <script src="{{ asset('js/parsley.min.js') }}"></script>
@endpush
