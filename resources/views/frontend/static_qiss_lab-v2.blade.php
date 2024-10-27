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

        .btn-demo:hover {
            background: #a50031;
            color: #E7F1FB;
            box-shadow: 0 0 5px 0 #a50031;
        }
        
        .accdordion-title{
            font-size: 18px;
            font-weight: 500;
            text-decoration: none!important;
            color: #181818;
        }
        .industry-title{
            font-size: 18px;
            font-weight: 500;
            color: #181818;
            margin-top: 15px;
            display: block;
        }
    </style>

    <!-- Banner Section Start -->
    <div class="qia-banner main-home pt-100 pb-100  md-pt-80 md-pb-80"
        style="background: url({{ asset('storage/qiss-lab/hero-bg.jpg') }});" alt="QIA">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 pr-30 md-mb-70 md-pr-15">
                    <div class="content-wrap">
                        <h1 class="it-title" style="font-size: 44px!important;">
                            QISS LAB - A Laboratory Workflow Management Software
                        </h1>
                        <div class="description">
                            <p class="desc" style="text-align: justify">
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

                <div class="col-lg-5 col-md-12 pl-30 md-pl-15 align-middle">
                    <img src="{{ asset('storage/qiss-lab/lab-manager-is-talking-with-chemist-about-the-report.jpg') }}" alt="Automate Your Lab Management System">
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
                        data-smart-speed="1000" data-hoverpause="false" data-nav-speed="true" data-autoplay-timeout="2500">
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
            <div class="qia-help row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-1">
                    <div class="contact-wrap">
                        <div class="sec-title mb-0">
                            <h3 class="title pb-5">
                                Automate Your Lab Management System
                            </h3>
                            <p class="desc pb-0 m-0" style="text-align: justify">
                                Automating your lab management system can significantly improve efficiency and accuracy. By
                                integrating QISS LAB software, you can simplify processes such as sample tracking, inventory
                                management, and data analysis. Automation reduces human error, ensuring reliable results and
                                better compliance with regulatory standards.
                            </p>
                        </div>
                        {{-- <div class="btn-part">
                            <a class="readon learn-more"
                                {{ get_option('home_about_btn_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('home_about_btn_url') }}">{{ get_option('home_about_btn_text') }}</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/qiss-lab/automate-lab-workflow.jpg') }}"
                            alt="Automate Your Lab Management System">
                    </div>
                </div>
            </div>
            <div class="qia-help row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-2">
                    <div class="contact-wrap">
                        <div class="sec-title mb-0">
                            <h3 class="title pb-5">
                                Increase Productivity & Save Time
                            </h3>
                            <p class="desc pb-0 m-0" style="text-align: justify">
                                Lab management software improves productivity and saves time by automating routine tasks.
                                With simplified workflows, researchers can focus on critical activities rather than
                                administrative burdens. Real-time data access enables quick decision-making, while automated
                                reporting features minimize manual documentation. By optimizing resource allocation,
                                laboratory software creates a more efficient environment, ultimately leading to faster
                                research outcomes and improved overall performance.
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
                        <img src="{{ asset('storage/qiss-lab/improve-productivity.jpeg') }}"
                            alt="Increase Productivity & Save Time">
                    </div>
                </div>
            </div>
            <div class="qia-help row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-1">
                    <div class="contact-wrap">
                        <div class="sec-title mb-0">
                            <h3 class="title pb-5">
                                Reducing Risk of Errors
                            </h3>
                            <p class="desc pb-0 m-0" style="text-align: justify">
                                Our software can significantly reduce the risk of errors by automating data entry and
                                standardizing processes. By minimizing manual tasks, it decreases the likelihood of human
                                mistakes, ensuring more accurate results. Real-time data validation alerts users to
                                discrepancies, enhancing data integrity. Implementing a lab management software fosters a
                                more reliable environment, allowing researchers to focus on quality and precision in their
                                work.
                            </p>
                        </div>
                        {{-- <div class="btn-part">
                            <a class="readon learn-more"
                                {{ get_option('home_about_btn_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                                href="{{ get_option('home_about_btn_url') }}">{{ get_option('home_about_btn_text') }}</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/qiss-lab/risk-of-error.jpg') }}" alt="Reducing Risk of Errors">
                    </div>
                </div>
            </div>
            <div class="qia-help row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-2">
                    <div class="contact-wrap">
                        <div class="sec-title mb-0">
                            <h3 class="title pb-5">
                                Prevent Raw Data Loss
                            </h3>
                            <p class="desc pb-0 m-0" style="text-align: justify">
                                Preventing data loss is crucial in lab management, and our specialized QISS LAB software
                                offers robust solutions. Automated backups ensure that critical research data is securely
                                stored and easily retrievable. Real-time monitoring alerts users to potential issues, while
                                user access controls safeguard sensitive information. By centralizing data management,
                                laboratory management software minimizes risks, improving both compliance and research
                                integrity.
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
                        <img src="{{ asset('storage/qiss-lab/prevent-lab-data-loss.jpg') }}" alt="Prevent Raw Data Loss">
                    </div>
                </div>
            </div>
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
            <div class="row">
                <div class="col-lg-4 col-md-4 mb-3">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="#">
                                    <img src="{{ asset('storage/qiss-lab/Data-Management.svg') }}" alt="Data Management"
                                        style="width: 70px!important; height:70px!important;">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Data Management
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    You can organize, store, and retrieve lab data efficiently to ensure accurate analysis and
                                    reporting.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-3">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="#">
                                    <img src="{{ asset('storage/qiss-lab/inventory-management.svg') }}"
                                        alt="Inventory Management" style="width: 70px!important; height:70px!important;">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Inventory Management
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    You can track supplies, reagents, and equipment to prevent shortages and reduce waste
                                    with QISS LAB software.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-3">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="#">
                                    <img src="{{ asset('storage/qiss-lab/order.svg') }}" alt="Order & Invoicing"
                                        style="width: 70px!important; height:70px!important;">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Order & Invoicing
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Maintain financial efficiency in labs by tracking orders from suppliers and generating
                                    invoices for services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-3">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="#">
                                    <img src="{{ asset('storage/qiss-lab/Inspection.svg') }}" alt="Inspection"
                                        style="width: 70px!important; height:70px!important;">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Inspection
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Assess equipment, procedures and practices to identify potential hazards and areas for
                                    improvement.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-3">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="#">
                                    <img src="{{ asset('storage/qiss-lab/sample.svg') }}" alt="Sample Management"
                                        style="width: 70px!important; height:70px!important;">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Sample Management
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Easily track, retain, and analyze samples with our software, ensuring proper
                                    documentation during the research process.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-3">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="#">
                                    <img src="{{ asset('storage/qiss-lab/Scheduling.svg') }}" alt="Scheduling"
                                        style="width: 70px!important; height:70px!important;">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Scheduling
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Efficiently manage lab schedules to ensure optimal resource allocation and minimizing
                                    conflicts to improve productivity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-3">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="#">
                                    <img src="{{ asset('storage/qiss-lab/test.svg') }}" alt="Testing"
                                        style="width: 70px!important; height:70px!important;">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Testing
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    QISS Lab streamlines testing processes, ensuring accuracy and efficiency in managing lab
                                    tests and results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-3">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="#">
                                    <img src="{{ asset('storage/qiss-lab/Report.svg') }}" alt="Reporting"
                                        style="width: 70px!important; height:70px!important;">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Reporting
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Generate comprehensive reports with ease, allowing for quick insights and informed
                                    decision-making.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mb-3">
                    <div class="services-item">
                        <div class="services-icon">
                            <div class="image-part">
                                <a href="#">
                                    <img src="{{ asset('storage/qiss-lab/Document-control.svg') }}"
                                        alt="Document Control" style="width: 70px!important; height:70px!important;">
                                </a>
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Document Control
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Maintain organized, secure and easily accessible documents, ensuring compliance and
                                    facilitating collaboration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <a class="readon btn-demo" {{ get_option('get_demo_open_another_tab') == 1 ? 'target="_blank"' : '' }} href="{{ get_option('get_demo_button_url') }}">Contact Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get Demo Section End -->

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
                    <div class="qia-carousel owl-carousel" data-autoplay="true" data-loop="true" data-items="4"
                        data-smart-speed="1000" data-hoverpause="false" data-nav-speed="true"
                        data-autoplay-timeout="2500">
                        <div class="partner-item">
                            <div class="logo-img text-center">
                                <a href="javascript:;" style="width: 175px;">
                                    <img src="{{ asset('storage/qiss-lab/Chemical-Industry.svg') }}"
                                        alt="Chemical Industry">
                                    <span class="industry-title">
                                        Chemical Industry
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item">
                            <div class="logo-img text-center">
                                <a href="javascript:;" style="width: 175px;">
                                    <img src="{{ asset('storage/qiss-lab/Oil-Gas-Industry.svg') }}"
                                        alt="Oil & Gas Industry">
                                    <span class="industry-title">
                                        Oil & Gas Industry
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item">
                            <div class="logo-img text-center">
                                <a href="javascript:;" style="width: 175px;">
                                    <img src="{{ asset('storage/qiss-lab/Research-Industry.svg') }}"
                                        alt="Research Industry">
                                    <span class="industry-title">Research Industry</span>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item">
                            <div class="logo-img text-center">
                                <a href="javascript:;" style="width: 175px;">
                                    <img src="{{ asset('storage/qiss-lab/Water-Industry.svg') }}"
                                        alt="Water Industry">
                                    <span class="industry-title">Water Industry</span>
                                </a>
                            </div>
                        </div>

                        <div class="partner-item">
                            <div class="logo-img text-center">
                                <a href="javascript:;" style="width: 175px;">
                                    <img src="{{ asset('storage/qiss-lab/Marine-Industry.svg') }}"
                                        alt="Marine Industry">
                                    <span class="industry-title">Marine Industry</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Partner Section End -->

    <!-- How We can Help - Start -->
    <div class="qia-about pt-5 pb-120 bg13  md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center pt-50 pb-50">
                <div class="col-lg-6 order-lg-1 pl-60 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title">
                            <h2 class="title pb-3 m-0">
                                Why Choose QISS LAB Software To Manage Your Laboratory?
                            </h2>
                            <p class="desc pb-5 m-0" style="font-size: 16px;text-align:justify;">
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
                                href="{{ get_option('home_about_btn_url') }}">{{ get_option('home_about_btn_text') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="home8-about z-index-1">
                        <img src="{{ asset('storage/qiss-lab/Why-Choose-QISS-LAB.jpg') }}" alt="Why Choose QISS LAB">
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
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="testimonial-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                        data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                        data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                        data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
                        data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                        data-md-device="2" data-md-device-nav="false" data-md-device-dots="true">

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
                <div class="col-xl-4 col-lg-4 col-md-12">
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
                </div>
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
                        <div class="sec-title pb-5">
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
                    <div id="accordion">
                        <div class="card mb-2">
                            <div class="card-header" id="headingOne">
                                <h5 class="m-0">
                                    <button class="btn btn-link accdordion-title" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        What is lab management software​?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    It is a software that can streamline lab workflows by organizing data, tracking
                                    inventory, and managing samples efficiently.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header" id="headingTwo">
                                <h5 class="m-0">
                                    <button class="btn btn-link collapsed accdordion-title" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Why should I use it?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    You should use it to automate lab workflows and reduce miscommunications between field
                                    staff and lab technicians.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="m-0">
                                    <button class="btn btn-link collapsed accdordion-title" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How can it help lab managers?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    It will allow lab managers to assign a task, see the results and approve any task
                                    remotely.
                                </div>
                            </div>
                        </div>
                    </div>
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
                    $blogs = App\Blog::select('slug', 'cover_photo', 'created_at', 'category_id', 'author_id', 'header')->whereIn('id', [75,83,84])->get();
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
    <script>
        $(document).on('click', '.event-category', function() {
            let id = $(this).data('id');
            let url = '{{ URL::to('get-event-category') }}'
            $('.event-category').removeClass('event-active');
            $(this).addClass('event-active');
            $.ajax({
                type: 'GET',
                url: url,
                data: {
                    id: id
                },
                dataType: 'HTML',
                cache: false,
                success: function(html) {
                    $('#trainings_details_area').html(html);
                }
            })
        });

        const validateEmail = (email) => {
            return String(email)
                .toLowerCase()
                .match(
                    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
        };

        $(document).on('keyup', '#get_demo_email', function() {
            let value = $(this).val();
            if (validateEmail(value)) {
                $('#get_demo_content_box').fadeIn();
                $('#get_demo_request_one').hide();
                animateWidth($('#get_demo_form_area'), 480, 200);
            } else {
                $('#get_demo_content_box').fadeOut();
                $('#get_demo_request_one').fadeIn();
            }
        });

        function animateWidth(element, newWidth, duration) {
            const startWidth = $(element).width();
            const widthChange = newWidth - startWidth;
            const steps = duration / 10; // Update every 10ms
            const stepSize = widthChange / steps;
            let currentStep = 0;

            const interval = setInterval(function() {
                currentStep++;
                const newWidth = startWidth + stepSize * currentStep;
                $(element).css('width', newWidth + 'px');

                if (currentStep >= steps) {
                    clearInterval(interval);
                    $(element).css('width', newWidth + 'px'); // Ensure exact final width
                }
            }, 10); // Update every 10ms
        }

        $(document).on('keyup', '#get_demo_content', function() {
            let value = $(this).val();
            if (value.trim() != '') {
                $('#get_demo_request').fadeIn();
            } else {
                $('#get_demo_request').fadeOut();
            }
        })

        $(document).on('click', '.book_event', function() {
            let url = $(this).data("url");
            $.ajax({
                type: 'GET',
                url: url,
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
                type: 'GET',
                url: url,
                dataType: 'HTML',
                cache: false,
                success: function(html) {
                    $('#modal_remote').modal('show');
                    $('#remote_modal_content').html(html);
                }
            })
        })

        document.addEventListener('click', function(e) {
            if (e.target.className === 'modal') {} else {
                $('#remote_modal_content').html("");
            }
        }, false);


        $(document).on('click', '.solution_content', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'GET',
                url: '{{ route('get_solution_details') }}',
                data: {
                    id: id
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
                                window.location.href = "";
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
    </script>
@endpush
