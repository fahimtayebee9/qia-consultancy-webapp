@extends('layouts.frontend')
@section('content')


<!-- Banner Section Start -->
<div class="qia-banner main-home pt-60 pb-100  md-pt-80 md-pb-80"
    style="background: url(https://www.qi-a.com/storage/logo/S3ZdRpZLMeBBBatgVEZOHVFJfikmX052a6NtjUlh.bin); padding-bottom: 32px;"
    alt="QIA">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 pr-140 md-mb-70 md-pr-15">
                <div class="content-wrap">
                    <div class="">
                    </div>
                    <h1 class="it-title title" style="font-size: 38px;">Marine Cargo Inspection and Laboratory Testing Software</h1>
                    <div class="description title-small">
                        <p class="desc">
                            Designed for businesses providing field services including inspections, gauging, sampling, and chemical testing.
                        </p>
                        <div id="get_demo_alert_area">
                        </div>
                    </div>

                    <div class="qia-contact main-media" style="margin-top: -25px; margin-left: 10px;">
                        <div class="video-item"
                            style="background: url(https://www.qi-a.com/storage/logo/VgwboiiQMdtDp7yYhXqjguz8i0e0ReUkDJleMx5x.bin);"
                            alt="QIA">
                            <div class="qia-videos">
                                <div class="animate-border main-home style2">
                                    <a class="popup-border content_management"
                                        data-url="https://www.qi-a.com/show-banner-video?action=1" href="javascript:;">

                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="col-lg-5 col-md-12 pl-70 md-pl-15" style=" padding-left: 10px; ">-->
            <!--    <div class="qia-contact mod1">-->
            <!--        <div class="contact-wrap">-->
            <!--            <div class="content-part mb-25">-->
            <!--                <h2 class="title mb-15">Schedule Appointment</h2>-->
                            <!--<p class="desc">We here to help you 24/7 with experts</p>-->
            <!--            </div>-->
            <!--            <div id="appointment-messages"></div>-->
            <!--            <form id="appointment-form" method="post" class="ajax_form"-->
            <!--                action="https://www.qi-a.com/schedule-appointment" novalidate="">-->
            <!--                <input type="hidden" name="_token" value="8YN1rbQQ3FHZ8V7EhUuPZY4tVf3YCKPwVFS0uM4j"> <input-->
            <!--                    type="hidden" name="origin" value="https://www.qi-a.com/ncr-management">-->
            <!--                <fieldset>-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-lg-12 mb-15">-->
            <!--                            <input class="from-control" type="text" id="appointment_name"-->
            <!--                                name="appointment_name" placeholder="Name" required="">-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-12 mb-15">-->
            <!--                            <input class="from-control" type="email" id="appointment_email"-->
            <!--                                name="appointment_email" placeholder="E-Mail" required="">-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-12 mb-15">-->
            <!--                            <input class="from-control" type="text" id="appointment_designation"-->
            <!--                                name="appointment_designation" placeholder="Designation" required="">-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-12 mb-25">-->
            <!--                            <input class="from-control" type="text" id="appointment_company"-->
            <!--                                name="appointment_company" placeholder="Company" required="">-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-12 mb-25">-->
            <!--                            <textarea name="message" id="message" class="form-control"-->
            <!--                                placeholder="Message"></textarea>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="form-group mb-0">-->
            <!--                        <input class="submit-btn orange-btn" type="submit" value="Submit Now" id="submit">-->
            <!--                        <input style="display:none;" class="submit-btn orange-btn" disabled="" type="button"-->
            <!--                            value="Processing" id="submitting">-->
            <!--                    </div>-->
            <!--                </fieldset>-->
            <!--            </form>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-xl-5 col-lg-5">
                <div class="qia-contact mod1">
                    <div class="contact-wrap">
                        <div class="content-part mb-25">
                            <h2 class="title mb-15">Request For Demo</h2>
                            <!--<p class="desc">We here to help you 24/7 with experts</p>-->
                        </div>
                        <div id="appointment-messages"></div>
                        <form id="appointment-form" method="post" class="ajax_form"
                            action="{{ route('schedule-appointment') }}">
                            @csrf
                            <input type="hidden" name="origin" value="{{ url()->full() }}">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="appointment_name"
                                            name="appointment_name" placeholder="Name" required="">
                                    </div>
									<div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="appointment_designation"
                                            name="appointment_designation" placeholder="Job Title" required="">
                                    </div>
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="email" id="appointment_email"
                                            name="appointment_email" placeholder="E-Mail" required="">
                                    </div>
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="appointment_designation"
                                            name="appointment_designation" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-12 mb-25">
                                        <input class="from-control" type="text" id="appointment_company"
                                            name="appointment_company" placeholder="Company" required="">
                                    </div>
                                    <div class="col-lg-12 mb-25">
                                        <textarea name="message" id="message" class="form-control"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="submit-btn orange-btn" type="submit" value="Submit" id="submit">
                                    <input style="display:none;" class="submit-btn orange-btn" disabled type="button"
                                        value="Processing" id="submitting">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            <!-- About Section Start -->
            <div class="qia-about style3 pt-120 pb-120 md-pt-75 md-pb-80">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-7 md-pt-40">
                            <div class="qia-animation-image">
                                <div class="pattern-img">
                                   <img src="https://www.servicenow.com/content/dam/servicenow-assets/public/en-us/images/ds-backgrounds/fsm-intro.sm.jpg" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="sec-title2 mb-30">
                                <div class="sub-text" style="font-weight: 600;">The Iron Dome</div>
                                <h2 class=" title title3 pb-20">
                                    All-in-One Testing & Inspection Solution
                                </h2>
                                <div class="desc desc2">
                                    <p><span style="color:#ff0000"><strong>Are inefficiencies and errors holding your business back?</strong></span> Imagine a solution that seamlessly manages your entire testing and inspection process, protecting you from waste, errors, and customer complaints like an Iron Dome. QISS LAB is your ultimate defense. Experience unparalleled precision, peace of mind, and efficiency as our software becomes your trusted partner in driving your business&rsquo; success. Elevate your business effortlessly with QISS LAB!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section Start -->
            <div class="qia-services style4 gray-color pt-20 pb-120 md-pt-75 md-pb-80">
                <div class="container">
                    <div class="sec-title1 text-center mb-45">
                        <h2 class="title">
                            What Does QISS LAB Offer?
                        </h2>
                        <div class="desc desc-text">
                            <p>Discover how QISS LAB enhances every step of your inspection, survey, gauging, and testing processes, from sample intake to scheduling all field and laboratory activities, final report generation, and sample disposal.
QISS LAB is a comprehensive solution for managing the entire lifecycle of samples, from initial inspection to final retention. Some refer to this cycle as a Cradle to Grave control of all samples. QISS LAB takes customer orders to inspect the source, take samples, securely transport them to your lab, perform lab analysis, and comprehensively manage retains. Together with our QISS QMS software, you will have your operations under an Iron Dome. The integration with QISS QMS provides a robust framework for quality management, ensuring that every process step is meticulously controlled and documented. This “Iron Dome” approach offers significant peace of mind to our clients, knowing their operations are efficient and compliant.
QISS LAB offers a seamless and integrated approach to managing the entire chemical inspection, sampling, and analysis workflow. Combining these three distinct platforms ensures that every stage—from order initiation to final reporting—is efficiently managed and interconnected. QISS LAB controls the steps from initiating the order while performing the required work, conducting laboratory analysis, and reporting to the customer the in-process results of tests and data. This integration enhances accuracy, traceability, and overall productivity.
</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style4/1.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="https://www.qi-a.com/customer-orders-and-invoicing">Customer Orders and Invoicing</a></h2>
                                    <p class="desc">
                                        Manages customer orders from entry to invoicing, tracking, and billing costs through your accounting software.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-item active">
                                <div class="services-icon">
                                    <img src="assets/images/services/style4/2.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="https://www.qi-a.com/scheduling-laboratory-activities">Scheduling Field and Customer Service Activities</a></h2>
                                    <p class="desc">
                                        It schedules your laboratory chemists and equipment for tests based on test data urgency.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style4/3.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="https://www.qi-a.com/laboratory-equipment-management">Scheduling Laboratory Activities</a></h2>
                                    <p class="desc">
                                        It schedules your laboratory chemists and equipment for tests based on test data urgency.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style4/1.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="https://www.qi-a.com/reagent-and-chemical-management">Equipment, Reagent, and Chemical Management</a></h2>
                                    <p class="desc">
                                        It manages lab reagents, chemicals, solutions, and supplies, including inventory, grading, and certificates of analysis for these materials.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-item active">
                                <div class="services-icon">
                                    <img src="assets/images/services/style4/2.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="https://www.qi-a.com/sample-handling">Sample Handling</a></h2>
                                    <p class="desc">
                                        QISS LAB assigns competent individuals to perform tests, tracks sample shelf life, and ensures safe disposal to meet regulatory requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="services-item active">
                                <div class="services-icon">
                                    <img src="assets/images/services/style4/2.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="https://www.qi-a.com/shipping-management">Document Control and Training</a></h2>
                                    <p class="desc">
                                        Lab chemists receive Standard Operating Procedures, safety data sheets, and training materials from QISS LAB, with system-controlled revisions to ensure up-to-date information.
                                    </p>
                                </div>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style4/1.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="https://www.qi-a.com/retention-management">Customer-Specific Analysis Sheets & Reports</a></h2>
                                    <p class="desc">
                                        Provides tailored analysis sheets, remote sample approval, and auto-generated certificates.

                                    </p>
                                </div>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="services-item active">
                                <div class="services-icon">
                                    <img src="assets/images/services/style4/2.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="https://www.qi-a.com/field-service-management">QISS QMS Integration</a></h2>
                                    <p class="desc">
                                        QISS LAB software is integrated with QIA’s QISS QMS software. It is part of the comprehensive QISS QMS suite, which offers document control, training, calibration, risk management, and ISO compliance tools.
                                    </p>
                                </div>
                            </div>
                        </div>
						 <div class="col-md-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style4/1.png" alt="">
                                </div>
                                <div class="services-content">
                                    <h2 class="title"><a href="https://www.qi-a.com/work-order-management">Advanced Data Security</a></h2>
                                    <p class="desc">
                                        Ensures data protection with encryption, user controls, and compliance, safeguarding sensitive information and maintaining confidentiality and integrity.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <div class="qia-about style3 pt-120 pb-120 md-pt-75 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-title2 mb-30">
                                <h2><span style="color:#ff0000"><span style="font-size:42px"><strong>TRANSFORM</strong></span></span></h2>
                                <h2 class=" title title4 pb-20">
                                    Maximize your Field Productivity with QISS LAB
                                </h2>
                                <div class="desc desc2">
                                     For companies providing field-related services, such as Marine Transportation & Logistic Services, QISS LAB is the software that automates and eliminates the drudgery, waste, errors, and accidents associated with manual processes. As an end-to-end platform, QISS LAB empowers your employees to perform their jobs more efficiently and consistently.<br> <br>
                                </div>
                                <div class="btn-part mt-40">
                                    <a class="readon learn-more" href="contact.html">See How It Works</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 md-pt-40">
                            <div class="rs-animation-image">
                                <div class="pattern-img">
                                   <img src="https://www.servicenow.com/content/dam/servicenow-assets/public/en-us/images/ds-customers/customer-quote-xerox.sm.jpg" style="border-radius: 15px;width: 594px;" alt=""> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="qia-about style3 pt-120 pb-120 md-pt-75 md-pb-80">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-7 md-pt-40">
                            <div class="rs-animation-image">
                                <div class="pattern-img">
                                   <img src="https://www.servicenow.com/content/dam/servicenow-assets/public/en-us/images/ds-backgrounds/platform-1.sm.jpg" style="border-radius: 15px;" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="sec-title2 mb-30">
                                <div class="sub-text" style="font-weight: 600;">PROTECTION OF THE IRON DOME</div>
                                <h2 class=" title title3 pb-20">
                                    One Platform for Enterprise Automation
                                </h2>
                                <div class="desc desc2">
                                    QISS Lab comes from an extensive and powerful family of business enabling software. The central infrastructure is the QISS QMS software. This is offered as an umbrella for you to choose from a list of thirty modules. A handful of modules that will go well with QISS LAB are: 
                                </div>
                                <div class="btn-part mt-40">
                                    <a class="readon learn-more" href="contact.html">Explore QISS QMS Modules</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="qia-about style3 pt-120 pb-120 md-pt-75 md-pb-80">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-7 md-pt-40">
                            <div class="rs-animation-image">
                                <div class="pattern-img">
                                   <img src="https://www.servicenow.com/content/dam/servicenow-assets/public/en-us/images/ds-users/users-dispatchers.sm.jpg" style="border-radius: 15px;WIDTH: 768PX;;" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="sec-title2 mb-30">
                                <h2 class=" title title3 pb-20">
                                    Put AI to work for people
                                </h2>
                                <div class="desc desc2">
                                    Empower your people with business-ready AI from ServiceNow. From the front office to the back office and all in between, our intelligent platform harnesses AI to put smart answers at your employees’ fingertips, letting you translate that intelligence into action.
                                </div>
                                <div class="btn-part mt-40">
                                    <a class="readon learn-more" href="contact.html">Get Ebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

<div class="col-lg-8 md-pb-40 mx-auto" style=" margin-top: 20px; ">

    <div class="row">
        <div class="col-md-5">
            <div class="col-md-12">
                <div class="sec-title mb-20">
                    <div class="sub-text style4-bg">QISS LAB</div>
                    <h3 class="title pb-20">
                        Why QISS LAB is a Game Changer for Your Company?
                    </h3>

                </div>
            </div>


        </div>

        <div class="col-md-6" style="
    margin-top: 55px;
">
            <div class="desc">
                <p>Everything you wished for your Testing and Inspection<br />
Company&mdash;but didn&rsquo;t know you could actually have.</p>
            </div>
        </div>


    </div>
</div>
<div class="container">
    <div class="row pt-5 m-auto">

        <div class="col-md-6 col-lg-4 pb-3">
            <div class="card card-custom">
                <div class="card-custom-img" style="background-image: url(https://www.qi-a.com/storage/home-page-content/gradient-blog-background.jpg);" alt="QIA"></div>
                <div class="card-custom-avatar">
                    <img class="img-fluid" src="https://www.qi-a.com/storage/upload/NCR-Actionable-Insights.jpg" alt="Avatar">
                </div>
                <div class="card-body" style="overflow-y: auto">
                    <h5 class="custom-head-su">Streamline Your Workflow</h5>
                    <p class="card-text">QISS LAB automates and integrates key laboratory processes, from order management to equipment maintenance. This results in faster operations, eliminates manual work, and significantly boosts overall productivity, efficiency, and accuracy.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 pb-3">
            <div class="card card-custom">
                <div class="card-custom-img" style="background-image: url(https://www.qi-a.com/storage/home-page-content/gradient-blog-background.jpg);" alt="QIA"></div>
                <div class="card-custom-avatar">
                    <img class="img-fluid" src="https://www.qi-a.com/storage/upload/NCR-Guided-Workflows.jpg" alt="Avatar">
                </div>
                <div class="card-body" style="overflow-y: auto">
                    <h5 class="custom-head-su">Tailor-Made for Your Needs</h5>
                    <p class="card-text">QISS LAB provides customizable analysis sheets and flexible features that adapt to your specific requirements. Whether you need unique test protocols or specialized reporting, our software offers the versatility to match your lab's exact needs.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 pb-3">
            <div class="card card-custom">
                <div class="card-custom-img" style="background-image: url(https://www.qi-a.com/storage/home-page-content/gradient-blog-background.jpg);" alt="QIA"></div>
                <div class="card-custom-avatar">
                    <img class="img-fluid" src="https://www.qi-a.com/storage/upload/NCR-Effortless-Capture-Reporting.jpg" alt="Avatar">
                </div>
                <div class="card-body" style="overflow-y: auto">
                    <h5 class="custom-head-su">Stay Ahead with Integration</h5>
                    <p class="card-text">Our software seamlessly integrates with QISS QMS, featuring robust tools to help your laboratory meet industry standards like ISO 9001 and ISO 17025. Simplify your regulatory management and focus on delivering high-quality results with confidence.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="qia-cta static-demo style1 bg7 pt-30 pb-30"
    style="background: url({{ asset('storage/logo/'. get_option('get_demo_background_picture')) }});" alt="QIA">
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
                        <a class="readon learn-more"
                            {{ get_option('get_demo_open_another_tab') == 1 ? 'target="_blank"' : '' }}
                            href="{{ get_option('get_demo_button_url') }}">{{ get_option('get_demo_button_text') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Our satisfied customer --}}
<div class="col-lg-7 mt-5 mx-auto md-mb-40">
                <div id="solution_content">
                    <div class="process-wrap bg3" style="padding:20px 40px 16px 20px">
                        <div class="sec-title mb-30" style="text-align:center">
                            <div class="sub-text new">Proven Result</div>
                            <h5 class="title white-color" style="text-align:center">
                                QISS LAB's Value Addition for Companies
                            </h5>
                            <p class="white-color mt-4" style="text-align:center">QISS LAB has been a game-changer for many respected and established marine inspection and testing companies. In use for over 15 years, this software has effectively managed all their operation. Our tailored and cutting-edge solution have significantly increased efficiency and accuracy, revolutionizing their analysis and inspection procedures.</p>
                        </div>
                    </div>
                </div>
            </div>

<!--{{-- BENEFITS OF QISS-QMS --}}-->
<!-- Get Demo Section Start -->

<!-- Case Study Section -->

{{-- Blog --}}
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
        <div class="qia-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
            data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
            data-md-device-dots="false">
            @php
            $blogs = App\Blog::select('slug', 'cover_photo', 'created_at', 'category_id', 'author_id',
            'header')->get()->random(4);
            @endphp
            @foreach ($blogs as $blog)
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="{{ $blog->slug }}">
                        <img style="width:370px;height:250px;" src="{{ asset('storage/blog/'. $blog->cover_photo) }}"
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
                    <div class="blog-button"><a class="text-muted" href="{{ $blog->slug }}">Details..</a></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

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
<link rel="stylesheet" href="{{asset('/css/parsley.css')}}">
<script src="{{ asset('js/parsley.min.js') }}"></script>
<script>
    $(document).on('click', '.event-category', function () {
        let id = $(this).data('id');
        let url = '{{ URL::to("get-event-category") }}'
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
            success: function (html) {
                $('#trainings_details_area').html(html);
            }
        })
    })

    $(document).on('click', '.book_event', function () {
        let url = $(this).data("url");
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'HTML',
            cache: false,
            success: function (html) {
                $('#book_modal_remote').modal('show');
                $('#book_remote_modal_content').html(html);
                _modalFormValidation();
            }
        })
    })

    $(document).on('click', '.content_management', function () {
        let url = $(this).data("url");
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'HTML',
            cache: false,
            success: function (html) {
                $('#modal_remote').modal('show');
                $('#remote_modal_content').html(html);
            }
        })
    })

    document.addEventListener('click', function (e) {
        if (e.target.className === 'modal') {} else {
            $('#remote_modal_content').html("");
        }
    }, false);


    $(document).on('click', '.solution_content', function () {
        let id = $(this).data('id');
        $.ajax({
            type: 'GET',
            url: '{{ route("get_solution_details") }}',
            data: {
                id: id
            },
            dataType: 'HTML',
            cache: false,
            success: function (html) {
                $('#solution_content').html(html);
            }
        })
    })

    var _modalFormValidation = function () {
        if ($('#content_form').length > 0) {
            $('#content_form').parsley().on('field:validated', function () {
                var ok = $('.parsley-error').length === 0;
                $('.bs-callout-info').toggleClass('hidden', !ok);
                $('.bs-callout-warning').toggleClass('hidden', ok);
            });
        }
        $('#content_form').on('submit', function (e) {
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
                success: function (data) {
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
                error: function (data) {
                    var jsonValue = data.responseJSON;
                    const errors = jsonValue.errors;
                    if (errors) {
                        var i = 0;
                        $.each(errors, function (key, value) {
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

    var _classFormValidation = function () {
        $(".ajax_form").parsley();

        $(".ajax_form").on('submit', function (event) {
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
                    success: function (data) {
                        if (data.status == "danger") {
                            toastr.error(data.message);

                            $('#submit').show();
                            $('#submitting').hide();

                        } else {
                            toastr.success(data.message);

                            $('#submit').show();
                            $('#submitting').hide();

                            setTimeout(() => {
                                window.location.href = "";
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