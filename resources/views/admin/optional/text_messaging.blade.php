@extends('layouts.app', ['title' => _lang('Text Messaging Information')])
@section('page.header')
<div class="page-header page-header-light border-bottom-success rounded-top-0">
	<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
		<div class="d-flex">
			<div class="breadcrumb">
				<a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> {{ _lang('Home') }}</a>
				<span class="breadcrumb-item active">{{ _lang('Text Messaging Information') }}</span>
			</div>
			<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
		</div>
	</div>
</div>
@stop
@section('content')
<div class="col-md-8 mx-auto">
    <div class="card border-top-success rounded-top-0" id="table_card">
        <div class="card-header header-elements-inline bg-light border-grey-300" >
            <h5 class="card-title">{{ _lang('Text Messaging Information') }} </h5>
        </div>
        <div class="card-body">
            <form class="form-validate-jquery" id="content_form" action="{{ route('admin.submit-terms-and-condition') }}" method="POST" enctype="multipart/form-data">

                <div class="row">

                    <div class="col-md-12 form-group">
                        <label for="text_messageing_title">Title </label>
                        <input type="text" name="text_messageing_title" id="text_messageing_title" class="form-control" value="{{ get_option('text_messageing_title') }}">
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <label for="text_messageing_main_title">Main Title </label>
                        <input type="text" name="text_messageing_main_title" id="text_messageing_main_title" class="form-control" value="{{ get_option('text_messageing_main_title') }}">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="text_messageing_site_title">Site Title </label>
                        <input type="text" name="text_messageing_site_title" id="text_messageing_site_title" class="form-control" value="{{ get_option('text_messageing_site_title') }}">
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <label for="text_messageing_meta_title">Meta Title </label>
                        <input type="text" name="text_messageing_meta_title" id="text_messageing_meta_title" class="form-control" value="{{ get_option('text_messageing_meta_title') }}">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="text_messageing_meta_keyword">Meta Keyword </label>
                        <textarea name="text_messageing_meta_keyword" id="text_messageing_meta_keyword" cols="30" rows="3" class="form-control">{{ get_option('text_messageing_meta_keyword') }}</textarea>
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <label for="text_messageing_meta_description">Meta Description </label>
                        <textarea name="text_messageing_meta_description" id="text_messageing_meta_description" cols="30" rows="3" class="form-control">{{ get_option('text_messageing_meta_description') }}</textarea>
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <label for="text_messageing_article_article">Meta Article </label>
                        <textarea name="text_messageing_article_article" id="text_messageing_article_article" cols="30" rows="3" class="form-control">{{ get_option('text_messageing_article_article') }}</textarea>
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <label for="text_messageing_before_input_field_content">Before Input field content </label>
                        <textarea id="text_messageing_before_input_field_content" cols="30" rows="3" class="form-control">{{ get_option('text_messageing_before_input_field_content') }}</textarea>
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <label for="text_messageing_after_input_field_content">After Input field content </label>
                        <textarea id="text_messageing_after_input_field_content" cols="30" rows="3" class="form-control">{{ get_option('text_messageing_after_input_field_content') }}</textarea>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="text_messageing_one_content">Checkbox One content </label>
                        <input type="text" name="text_messageing_one_content" id="text_messageing_one_content" class="form-control" value="{{ get_option('text_messageing_one_content') }}">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="text_messageing_two_content">Checkbox Two content </label>
                        <input type="text" name="text_messageing_two_content" id="text_messageing_two_content" class="form-control" value="{{ get_option('text_messageing_two_content') }}">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="text_messageing_button_text">Button Text </label>
                        <input type="text" name="text_messageing_button_text" id="text_messageing_button_text" class="form-control" value="{{ get_option('text_messageing_button_text') }}">
                    </div>
                    
                </div>

                <div class="col-md-6 mx-auto">
                    <button type="submit" class="btn btn-sm btn-block btn-outline-success" id="submit" >{{ _lang('Submit') }}</button>
        
                    <button type="button" class="btn btn-sm btn-block btn-outline-primary" id="submiting" style="display: none;" disabled="">{{ _lang('Submiting') }} <img src="{{ asset('asset/ajaxloader.gif') }}"></button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
@push('scripts')
    <link rel="stylesheet" href="{{ asset('asset/assets/css/dropify.min.css') }}">
    <script src="https://cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script src="{{ asset('asset/assets/js/dropify.js') }}"></script>
    <script>
        CKEDITOR.replace( "text_messageing_before_input_field_content" );
        CKEDITOR.replace( "text_messageing_after_input_field_content" );
        
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
            formData.append('text_messageing_after_input_field_content', CKEDITOR.instances['text_messageing_after_input_field_content'].getData());
            formData.append('text_messageing_before_input_field_content', CKEDITOR.instances['text_messageing_before_input_field_content'].getData());

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
                        new PNotify({
                            title: 'Error',
                            text: data.message,
                            type: 'error',
                            addclass: 'alert alert-danger alert-styled-left',
                        });

                    } else {
                        new PNotify({
                            title: 'Success',
                            text: data.message,
                            type: 'success',
                            addclass: 'alert alert-styled-left',
                        });
                        $('#submit').show();
                        $('#submiting').hide();
                        if (data.goto) {
                            setTimeout(function() {

                                window.location.href = data.goto;
                            }, 2500);
                        }
                        if (data.window) {
                            window.open(data.window, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=auto,left=auto,width=700,height=400");
                            setTimeout(function() {
                                window.location.href = '';
                            }, 1000);
                        }
                    }
                },
                error: function(data) {
                    var jsonValue = $.parseJSON(data.responseText);
                    const errors = jsonValue.errors;
                    if (errors) {
                        var i = 0;
                        $.each(errors, function(key, value) {
                            const first_item = Object.keys(errors)[i]
                            const message = errors[first_item][0];
                            $('#' + first_item).parsley().removeError('required', {
                                updateClass: true
                            });
                            $('#' + first_item).parsley().addError('required', {
                                message: value,
                                updateClass: true
                            });
                            // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                            new PNotify({
                                title: 'Error',
                                text: value,
                                type: 'error',
                                addclass: 'alert alert-danger alert-styled-left',
                            });
                            i++;
                        });
                    } else {
                        new PNotify({
                            title: 'Something Wrong!',
                            text: jsonValue.message,
                            type: 'error',
                            addclass: 'alert alert-danger alert-styled-left',
                        });
                    }
                    _componentSelect2Normal();
                    $('#submit').show();
                    $('#submiting').hide();
                }
            });
        });
    </script>
@endpush