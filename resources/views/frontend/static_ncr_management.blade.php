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
                    <h1 class="it-title title">
                        Nonconformance Management Software</h1>
                    <div class="description title-small">
                        <p class="desc">
                            Transform Issues into Improvements: Simplify NCR Management with QISS and Achieve Quality
                            Excellence.
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
                                        <input class="from-control" type="email" id="appointment_email"
                                            name="appointment_email" placeholder="E-Mail" required="">
                                    </div>
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="appointment_designation"
                                            name="appointment_designation" placeholder="Job Title" required="">
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
<div class="col-lg-8 md-pb-40 mx-auto" style=" margin-top: 20px; ">

    <div class="row">
        <div class="col-md-6">
            <div class="col-md-12">
                <div class="sec-title mb-20">
                    <div class="sub-text style4-bg">QISS</div>
                    <h3 class="title pb-20">
                        Top-Rated for Easy Quality Control
                    </h3>
                    <div class="desc">
                        Say goodbye to quality issues with QISS. Our simple yet powerful Nonconformance reporting tools
                        make compliance easy.
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p><span data-metadata=">"></span>
                    <span style="color: #031723; font-size: 1.2em;"><br><img
                            src="https://www.qi-a.com/storage/upload/capterra-qiss-qms.webp"><br></span><span
                        style="color: #031723; font-size: 1.2em;"><br></span></p>
                <p><img src="https://www.qi-a.com/storage/upload/getapp-qiss-qms.webp"></p><span
                    style="color: #031723; font-size: 1.2em;"><br><img
                        src="https://www.qi-a.com/storage/upload/software-advice-qiss-qms.webp"><br></span>
                <p></p>
            </div>

        </div>

        <div class="col-md-6">
            <div class="static qia-contact mod1">
                <div class="contact-wrap" style="text-align: center;padding: 0;background:transparent;"
                    id="testimonial_content">
                    <img style="width:380px;height:280px;"
                        src="storage/home-page-content/EeOtq5mPasiYvpjBryAVxFL5paxVjnFQOgoS38g5.png" alt="">
                    <div class="qia-videos">
                        <div class="animate-border main-home">
                            <h4 class="testimonial-h4"></h4>
                            <h5 class="testimonial-h6"></h5>
                            <a style="left: 50%;top: 15%;" class="popup-border popup-videos content_management"
                                href="javascript:;" data-url="https://www.qi-a.com/show-banner-video?id=2">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qia-quote" style="
    max-height: 280px;
    overflow-y: hidden;
">
                <div class="row">
                    <div class="col-md-12 mb-4 qia-quote-card" style="
    margin-top: -47px;
">
                        <h3>Rick Detwiler</h3>
                        <h5 style=" margin-top: -8px; ">Vice President, Chem Coast, Inc.</h5>
                        <div>
                            <img src="https://www.qi-a.com/storage/home-page-content/AkO4NhCIVbgJFkZPBpA41GSi8L8jWdkcRe6U4FSx.png"
                                alt="Rating Image">
                        </div>
                        <div>
                            <i class="fa fa-quote-left" style="color:#C91F59;" aria-hidden="true"></i>
                        </div>
                        <p>“QIA is a very customer-focused business. QIA is a very good company, good people, and I
                            encourage people to look into them for their businesses.”</p>
                    </div>



                </div>
            </div>
        </div>


    </div>
</div>
<div class="col-lg-8 md-pb-40 mx-auto" style=" margin-top: 20px; ">

    <div class="row">
        <div class="col-md-5">
            <div class="col-md-12">
                <div class="sec-title mb-20">
                    <div class="sub-text style4-bg">QISS</div>
                    <h3 class="title pb-20">
                        Why Choose QISS for Nonconformance Reporting?
                    </h3>

                </div>
            </div>


        </div>

        <div class="col-md-6" style="
    margin-top: 55px;
">
            <div class="desc">
                Turn Nonconformances into lessons learned. Identify root causes and implement effective corrective
                actions to foster a culture of quality.
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
                    <h5 class="custom-head-su">Effortless Capture &amp; Reporting</h5>
                    <p class="card-text">Eliminate the paperwork and say goodbye to wasted time. Quickly and easily
                        record Nonconformances and generate detailed reports with a few clicks.</p>
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
                    <h5 class="custom-head-su">Guided Workflows</h5>
                    <p class="card-text">No more confusion or missed steps! Our intuitive workflow system guides you
                        through the entire NCR process, ensuring every step is documented consistently for a clear audit
                        trail.</p>
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
                    <h5 class="custom-head-su">Actionable Insights</h5>
                    <p class="card-text">Gain valuable insights from pre-configured reports and advanced search
                        capabilities. Identify trends, make data-driven decisions, and prevent future issues before they
                        arise.</p>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- Our satisfied customer --}}
<div class="qia-partner style4 pb-20" style="background-color: #ffff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center pt-3">
                <h3 style="font-size: 28px !important;font-weight: bold;margin-top: -5px;margin-bottom: 22px;">
                    {{ get_option('banner_client_partner_text') }}</h3>
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
                                <img src="{{ asset('storage/home-page-content/'. $clientPartner->picture) }}"
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
<!--{{-- BENEFITS OF QISS-QMS --}}-->
<!-- Get Demo Section Start -->
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

<div class="qia-why-choose pt-120 pb-120 md-pt-75 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 md-pb-60">
                <div class="sec-title mb-40">
                    <div class="sub-text style4-bg">QISS</div>
                    <h3 class="title pb-20">
                        Achieve Top Quality with Our Effortless NCR Solutions
                    </h3>
                    <div class="desc">
                        Discover how our advanced NCR solutions enhance your quality management system, providing the
                        tools you need to efficiently manage Nonconformances and improve overall business performance.
                    </div>
                </div>
                <div class="services-wrap mb-25">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/1.png') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="">Easy NCR Reporting</a></h3>
                        <p class="services-txt">Imagine capturing NCRs with a few clicks on your phone, no more chasing
                            down paperwork!
                            Simplify the process of identifying, documenting, and resolving Nonconformances with our
                            intuitive software.</p>
                    </div>
                </div>
                <div class="services-wrap mb-25">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/2.png') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="">Stay Compliant</a></h3>
                        <p class="services-txt">Receive automatic alerts for any Nonconformance, ensuring timely
                            corrective actions.
                            Ensure adherence to quality standards and regulatory requirements with automated NCR
                            management tools, reducing the risk of non-compliance.</p>
                    </div>
                </div>
                <div class="services-wrap">
                    <div class="services-icon">
                        <img src="{{ asset('static/assets/images/choose/icons/3.png') }}" alt="">
                    </div>
                    <div class="services-text">
                        <h3 class="title"><a href="">Boost Quality</a></h3>
                        <p class="services-txt">Use detailed reports to identify and address recurring issues, leading
                            to better product quality and customer satisfaction.
                            Drive continuous improvement and elevate overall business performance by analyzing
                            Nonconformance data and implementing effective resolutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-part">
                    <img src="{{ asset('storage/upload/ncr-workflow-QIA.png') }}" alt="">
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


<!-- Get Demo Section End -->

<!--Testimonial Section -->
<div class="qia-testimonial style8 gray-color pt-30 pb-50 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <h2 class="testimonial-header"><b>WHY SHOULD YOU <br><span style="color:#C81B56;">CHOOSE US?</span></b>
                </h2>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div style="background:#424171;padding: 0px 10px;margin-top: -25px;" class="qia-title">
                            <h5 style="color:#fff;">1. DECADES OF INDUSTRY EXPERIENCE:</h5>
                        </div>
                        <div class="qia-body">
                            With over 29 years of industry experience, QIA brings a rich history of expertise to the
                            table. Our in-depth knowledge of quality management, consulting, training, and auditing
                            services ensures that your business benefits from tried-and-tested best practices.
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div style="background:#424171;padding: 0px 10px;margin-top: -25px;" class="qia-title">
                            <h5 style="color:#fff;">2. PROFESSIONAL APPROACH:</h5>
                        </div>
                        <div class="qia-body">
                            QIA is known for its professional approach to quality management. Our commitment to high
                            standards of professionalism ensures that your business receives top-notch service and
                            support.
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div style="background:#424171;padding: 0px 10px;margin-top: -25px;" class="qia-title">
                            <h5 style="color:#fff;">3. PROVEN SUCCESS AND SATISFIED CLIENTS:</h5>
                        </div>
                        <div class="qia-body">
                            Our track record speaks for itself. Countless satisfied clients have experienced the
                            benefits of partnering with QIA for their quality management needs. Join the ranks of
                            businesses that have achieved excellence with us.
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div style="background:#424171;padding: 0px 10px;margin-top: -25px;" class="qia-title">
                            <h5 style="color:#fff;">4. CUSTOMIZED SOLUTIONS:</h5>
                        </div>
                        <div class="qia-body">
                            At QIA, we understand that one size does not fit all. We specialize in tailoring our
                            solutions to meet the unique needs of your business, ensuring that you get a solution that
                            aligns perfectly with your goals and objectives.
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div style="background:#424171;padding: 0px 10px;margin-top: -25px;" class="qia-title">
                            <h5 style="color:#fff;">5. CUTTING-EDGE EXPERTISE:</h5>
                        </div>
                        <div class="qia-body">
                            Our team stays ahead of industry advancements, providing you with the latest strategies and
                            tools for quality management.
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div style="background:#424171;padding: 0px 10px;margin-top: -25px;" class="qia-title">
                            <h5 style="color:#fff;">6. COMMITMENT TO EXCELLENCE:</h5>
                        </div>
                        <div class="qia-body">
                            At the heart of QIA's mission is a commitment to excellence in quality management. We are
                            dedicated to helping your business achieve the highest standards in quality, health, safety,
                            and environment management.
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div style="background:#424171;padding: 0px 10px;margin-top: -25px;" class="qia-title">
                            <h5 style="color:#fff;">7. COMPETITIVE PRICING:</h5>
                        </div>
                        <div class="qia-body">
                            At QIA, we believe in providing top-notch quality management solutions at competitive
                            prices. We understand the importance of cost-effectiveness in today's business landscape,
                            and our pricing reflects that commitment.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="qia-quote" style="max-height: none;overflow-y:hidden;">
                    <div class="row">
                        <div class="col-md-12 mb-4 qia-quote-card">
                            <h3>Bashir Iqbal</h3>
                            <h5>Director, Global QA at RPI</h5>
                            <div>
                                <img src="https://www.qi-a.com/storage/home-page-content/AkO4NhCIVbgJFkZPBpA41GSi8L8jWdkcRe6U4FSx.png"
                                    alt="Rating Image">
                            </div>
                            <div>
                                <i class="fa fa-quote-left" style="color:#C91F59;" aria-hidden="true"></i>
                            </div>
                            <p>“Great, have used almost all features and modules, has made my life easy as software does
                                most of the management functions and keep a track of planned activities with automatic
                                notifications.”</p>
                            <div>
                                <i class="fa fa-quote-right" style="color:#C91F59;" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4 qia-quote-card">
                            <h3>J. R. KUZNIAR</h3>
                            <h5>Quality Manager at EagleBurgmann</h5>
                            <div>
                                <img src="https://www.qi-a.com/storage/home-page-content/59465PJkv40C2GRmxldc5dWAI8nc4Gu350s8Qogs.png"
                                    alt="Rating Image">
                            </div>
                            <div>
                                <i class="fa fa-quote-left" style="color:#C91F59;" aria-hidden="true"></i>
                            </div>
                            <p>"Since 1995, EagleBurgmann has used QIA services including QISS-QMS software. We
                                recommend QIA to anyone who might need such services without any reservations."</p>
                            <div>
                                <i class="fa fa-quote-right" style="color:#C91F59;" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4 qia-quote-card">
                            <h3>Douglas F. Bogenrief</h3>
                            <h5>Chief, Manpower &amp; Organization</h5>
                            <div>
                                <img src="https://www.qi-a.com/storage/home-page-content/mFmufJ3o6jHnCCdiPS429g9XgmCSDPWwsJ6iK6QV.png"
                                    alt="Rating Image">
                            </div>
                            <div>
                                <i class="fa fa-quote-left" style="color:#C91F59;" aria-hidden="true"></i>
                            </div>
                            <p>"I wish to congratulate QIA on the great job they did for Sheppard US Air Force Base in
                                Wichita Falls TX and the Manpower Office the past 9 months."</p>
                            <div>
                                <i class="fa fa-quote-right" style="color:#C91F59;" aria-hidden="true"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Our satisfied customer --}}

<!-- Learn More -->
<!-- Learn More -->

{{-- Get Expert Advice --}}
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
                        Let's schedule a time to talk about your QMS needs. We'll help you find the best QMS solution
                        for your business.
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
                                        <input class="from-control" type="email" id="appointment_email"
                                            name="appointment_email" placeholder="E-Mail" required="">
                                    </div>
                                    <div class="col-lg-12 mb-15">
                                        <input class="from-control" type="text" id="appointment_designation"
                                            name="appointment_designation" placeholder="Job Title" required="">
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
    <div class="line-inner">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>

<!-- <div class="col-lg-4 col-md-4 mb-3">
    <div class="services-item">
        <div class="services-icon">
            <div class="image-part">
                <a href="">
                    <img src="" alt="Icon Image">
                </a>
            </div>
        </div>
        <div class="shape-part">
            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="">
        </div>
        <div class="services-content">
            <div class="services-text">
                <h3 class="services-title">
                    <a href="">
                        hello world
                    </a>
                </h3>
            </div>
            <div class="services-desc">
                <p>
                    Adopt your own risk-based on thinking. Centrelize to prevent and mitigate your risk
                </p>
            </div>
        </div>
    </div>
</div> -->

{{-- Explore our other Modules --}}
<div class="qia-services gray-color main-home style2 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <h2 class="title title2">
                Explore our other Modules
            </h2>
        </div>
        <div class="row">
            
            <!-- Risk Management -->
            <div class="col-lg-4 col-md-4 mb-3">
                <div class="services-item">
                    <a href="https://www.qi-a.com/risk-management">
                        <div class="services-icon">
                            <div class="image-part">
                               <img src="https://www.qi-a.com/storage/home-page-content/y9eJUSJh1ICuzowm26FZ6NzlTUfMmBVsQMfDIye1.png" alt="Icon Image">
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="Risk Management">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Risk Management
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Adopt your own risk-based on thinking. Centrelize to prevent and mitigate your risk
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Management of Change -->
            <div class="col-lg-4 col-md-4 mb-3">
                <div class="services-item">
                    <a href="https://www.qi-a.com/management-of-change-moc">
                        <div class="services-icon">
                            <div class="image-part">
                               <img src="https://www.qi-a.com/storage/home-page-content/zuSazO7CtcOCfnMSsey3DbXHEAwAJXVxnYO5XAOk.png" alt="Management of Change">
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="Risk Management">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Management of Change
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Standarize workflow helps you stay in control of change in your organization.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Training -->
            <div class="col-lg-4 col-md-4 mb-3">
                <div class="services-item">
                    <a href="https://www.qi-a.com/training-management-software">
                        <div class="services-icon">
                            <div class="image-part">
                               <img src="https://www.qi-a.com/storage/home-page-content/7nKboAD7vV1xO21Zfh2HxV87FKtJYDmxz0X56Tcy.png" alt="Training">
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="Training">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Training
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Individualized training to achieve optimum competence in people.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Document Management -->
            <div class="col-lg-4 col-md-4 mb-3">
                <div class="services-item">
                    <a href="https://www.qi-a.com/document-control">
                        <div class="services-icon">
                            <div class="image-part">
                               <img src="https://www.qi-a.com/storage/home-page-content/bZt2ogftnU2IzTQrHHxwwpYtERiKss44HNUUyjeI.png" alt="Document Management">
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="Document Management">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Document Management
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Build a paperless document management system with numerous additional benefits.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- CAPA -->
            <div class="col-lg-4 col-md-4 mb-3">
                <div class="services-item">
                    <a href="https://www.qi-a.com/capa-management-software">
                        <div class="services-icon">
                            <div class="image-part">
                               <img src="https://www.qi-a.com/storage/home-page-content/268862UPD6T0oIHP82LuaJfYgb3822jqRdjmhWdD.png" alt="CAPA">
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="CAPA">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    CAPA
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Build the system with effectiveness, complience and traceability in mind.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Audit -->
            <div class="col-lg-4 col-md-4 mb-3">
                <div class="services-item">
                    <a href="https://www.qi-a.com/nonconformance-management-software">
                        <div class="services-icon">
                            <div class="image-part">
                               <img src="https://www.qi-a.com/storage/home-page-content/YD8C1xokLJO2ngxqm5UoQn4tau2F0kTKdNB5Vzg3.png" alt="Audit">
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="Audit">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Audit
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Seamless audit processes with comprehensive oversight and compliance.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Customer Management -->
            <div class="col-lg-4 col-md-4 mb-3">
                <div class="services-item">
                    <a href="https://www.qi-a.com/customer-survey">
                        <div class="services-icon">
                            <div class="image-part">
                               <img src="https://www.qi-a.com/storage/home-page-content/QlKLDVQDQnGtdiGhy09xRWBpCTk2Hkx4TpQD2lQh.png" alt="Customer Management">
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="Customer Management">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Customer Management
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Build an integrated process based on automating complaince. <br><br>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Supplier Management -->
            <div class="col-lg-4 col-md-4 mb-3">
                <div class="services-item">
                    <a href="https://www.qi-a.com/supplier-management-software">
                        <div class="services-icon">
                            <div class="image-part">
                               <img src="https://www.qi-a.com/storage/home-page-content/vmmi0RqJAqQvBbIawtKZaGG2GIIfs3Vc5QLqClJl.png" alt="Supplier Management">
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="Supplier Management">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    Supplier Management
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Categorize suppliers by products. Create a comprehensive database of your suppliers.
                                <br><br>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- HSE -->
            <div class="col-lg-4 col-md-4 mb-3">
                <div class="services-item">
                    <a href="https://www.qi-a.com/health-safety-and-environment-hse-reporting">
                        <div class="services-icon">
                            <div class="image-part">
                               <img src="https://www.qi-a.com/storage/home-page-content/dnMsbD0VzPoxcY1RFPnm1elyoG1pgMPbRNiBESmr.png" alt="HSE">
                            </div>
                        </div>
                        <div class="shape-part">
                            <img class="move-y" src="{{ asset('img/shape.png') }}" alt="HSE">
                        </div>
                        <div class="services-content">
                            <div class="services-text">
                                <h3 class="services-title">
                                    HSE
                                </h3>
                            </div>
                            <div class="services-desc">
                                <p>
                                    Control your health, safety and environmental issues so as it to deal with any negetive
                                effects.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- About Section -->

<!-- Case Study Section -->
<div class="qia-case-study primary-background">
    <div class="row margin-0 align-items-center">
        <div class="col-lg-4 padding-0">
            <div class="case-study bg12 mod"
                style="background: url({{ asset('storage/logo/'. get_option('case_study_bg_picture')) }});" alt="QIA">
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
                    <div class="qia-carousel owl-carousel" data-loop="false" data-items="4" data-margin="30"
                        data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                        data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                        data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                        data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false"
                        data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                        data-md-device="4" data-md-device-nav="true" data-md-device-dots="false">
                        @php
                        $caseStudies = App\CaseStudy::get();
                        @endphp
                        @foreach ($caseStudies as $caseStudy)
                        <div class="project-item">
                            <div class="project-img">
                                <a href="{{ $caseStudy->link }}"
                                    {{ $caseStudy->open_another_tab == 1 ? 'target="_blank"' : '' }}><img
                                        src="{{ asset('storage/home-page-content/'. $caseStudy->picture) }}"
                                        alt="{{ $caseStudy->alt_tag }}"></a>
                            </div>
                            <div class="project-content">
                                <div class="portfolio-inner">
                                    <h3 class="title"><a href="{{ $caseStudy->link }}"
                                            {{ $caseStudy->open_another_tab == 1 ? 'target="_blank"' : '' }}>{{ $caseStudy->header }}</a>
                                    </h3>
                                    <span class="category"><a href="{{ $caseStudy->link }}"
                                            {{ $caseStudy->open_another_tab == 1 ? 'target="_blank"' : '' }}>{{ $caseStudy->title }}</a></span>
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