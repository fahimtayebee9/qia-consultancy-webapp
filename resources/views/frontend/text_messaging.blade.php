@extends('layouts.frontend')
@section('content')
    <!-- Breadcrumbs Start -->
    <div class="qia-breadcrumbs img1" style="background-image: url({{ asset('storage/about/'. get_option('about_bg')) }})">
        <div class="breadcrumbs-inner text-center" style="padding: 50px 0px;">
            <h1 class="page-title">{{ get_option('text_messageing_main_title') }}</h1>
            <ul>
                <li title="QIA">
                    <a class="active" href="{{ URL::to('/') }}">Home</a>
                </li>
                <li>{{ get_option('text_messageing_main_title') }}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="qia-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 pl-60 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <form action="{{ URL::to('submit-text-messaging-form')}}" method="POST" id="content_form">
                                @csrf
                                <div class="desc">

                                    <div class="row">
                                        <div class="col-md-12" id="contact_alert_area"></div>
                                    </div>

                                    {!! get_option('text_messageing_before_input_field_content') !!}
    
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="phone" id="phone" class="form-control" required>
                                        </div>
                                    </div>
    
                                    {!! get_option('text_messageing_after_input_field_content') !!}
    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="option" id="flexRadioDefault1" checked value="yes">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{ get_option('text_messageing_one_content') }}
                                        </label>
                                    </div>
    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="option" id="flexRadioDefault2" value="no">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            {{ get_option('text_messageing_two_content') }}
                                        </label>
                                    </div>
    
                                    <div class="mt-3">
                                        <button id="submit" class="readon learn-more submit" type="submit">
                                            {{ get_option('text_messageing_button_text') }}
                                        </button>
                                        <input class="readon learn-more submit" disabled id="submiting" style="display: none;" type="button" value="Submitting...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection

@push('scripts')
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var _formValidation = function() {
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
                            $('#contact_alert_area').html('<div class="alert alert-danger custom-alert alert-dismissible fade show" role="alert"><strong>Warning! !</strong> '+ data.message +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                        } else {
                            $('#contact_alert_area').html('<div class="alert alert-success custom-alert alert-dismissible fade show" role="alert">'+ data.message +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');

                            setInterval(() => {
                                window.location.href="";
                            }, 3500);
                        }

                        setTimeout(() => {
                            $('.custom-alert').fadeOut();
                        }, 2500);

                        $('#submit').show();
                        $('#submiting').hide();
                    }
                });
            });
        };

        _formValidation();
    </script>
@endpush