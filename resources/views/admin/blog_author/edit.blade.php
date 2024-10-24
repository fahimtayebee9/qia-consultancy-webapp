@php
    $route = 'admin.blog-author.';
@endphp

@extends('layouts.app', ['title' => _lang('Author'), 'modal' => 'lg'])
@php
    $route = 'admin.blog-author.';
@endphp
@section('page.header')
<div class="page-header page-header-light border-bottom-success rounded-top-0">
	<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
		<div class="d-flex">
			<div class="breadcrumb">
				<a href="{{ route('home') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> {{ _lang('Home') }}</a>
				<span class="breadcrumb-item active">{{ _lang('Auuthor') }}</span>
			</div>
			<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
		</div>
	</div>
</div>
@stop
@section('content')
<div class="card border-top-success rounded-top-0" id="table_card">
	<div class="card-header header-elements-inline bg-light border-grey-300" >
		<h5 class="card-title">{{ _lang('Create new Author') }}
		    
		</h5>
		<div class="header-elements">
            <a href="{{ route($route.'index') }}" class="btn btn-outline alpha-info text-info-800 border-info-600 rounded-round"> <i class="icon-stack-plus mr-1"></i> Back</a>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
            <div class="col-md-12">
                <fieldset class="mb-3">
                    <form class="form-validate-jquery" id="content_form" action="{{ route('admin.blog-author.update', $model->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <img src="{{ asset('storage/blog/author/'. $model->bg_photo) }}" alt="Background Photo" style="width:250px;">
                                <label for="bg_photo">Background Picture <span class="text-danger">*</span></label>
                                <input type="file" name="bg_photo" id="bg_photo" class="form-control dropify">
                                <span class="text-danger">Use <code>webp</code> Format Icon for Best Speed. Icon Size: <b>1920 X 500</b> pixel</span>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="picture">Picture <span class="text-danger">*</span></label>
                                <img src="{{asset('storage/author/'. $model->picture)}}" style="width:50px;" alt="Icon">
                                <input type="file" name="picture" id="picture" class="form-control dropify" data-default-file="{{ asset('storage/author/'. $model->picture) }}">
                                <span class="text-danger">Use <code>png</code> Format Icon for Best Speed. Icon Size: <b>60 X 60</b> pixel</span>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Author Name" required value="{{ $model->name }}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="slug">Slug <span class="text-danger">*</span></label>
                                <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Slug" required value="{{ $model->slug }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="designation">Designation <span class="text-danger">*</span></label>
                                <input type="text" name="designation" required id="designation" class="form-control" value="{{ $model->designation }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control select" data-placeholder="Select One" required>
                                    <option value="">Select One</option>
                                    <option {{ $model->status == 1 ? 'selected' : '' }} value="1">Yes</option>
                                    <option {{ $model->status == 0 ? 'selected' : '' }} value="0">No</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="content">Content </label>
                                <textarea name="content" id="content" cols="30" rows="3" class="form-control">{{ $model->content }}</textarea>
                            </div>
                
                            <div class="col-md-6 form-group">
                                <label for="meta_title">Meta Title </label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ $model->meta_title }}">
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="site_title">Site Title </label>
                                <input type="text" name="site_title" id="site_title" class="form-control" value="{{ $model->site_title }}">
                            </div>
                
                            <div class="col-md-6 form-group">
                                <label for="meta_keyword">Meta Keyword </label>
                                <textarea name="meta_keyword" id="meta_keyword" cols="30" rows="3" class="form-control">{{ $model->meta_keyword }}</textarea>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="meta_description">Meta Description </label>
                                <textarea name="meta_description" id="meta_description" cols="30" rows="3" class="form-control">{{ $model->meta_description }}</textarea>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="meta_article_tag">Meta Article </label>
                                <textarea name="meta_article_tag" id="meta_article_tag" cols="30" rows="3" class="form-control">{{ $model->meta_article_tag }}</textarea>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="meta_script">Meta Script </label>
                                <textarea name="meta_script" id="meta_script" cols="30" rows="3" class="form-control">{{ $model->meta_script }}</textarea>
                            </div>
                
                            <div class="col-md-6 mx-auto">
                                <button type="submit" class="btn btn-sm btn-block btn-outline-success" id="submit" >{{ _lang('Submit') }}</button>
                    
                                <button type="button" class="btn btn-sm btn-block btn-outline-primary" id="submiting" style="display: none;" disabled="">{{ _lang('Submiting') }} <img src="{{ asset('asset/ajaxloader.gif') }}"></button>
                    
                            </div>
                        </div>
                       
                    </form>
                </fieldset>
            </div>
        </div>
	</div>
</div>
<!-- /basic initialization -->
@stop
@push('scripts')
    <link rel="stylesheet" href="{{ asset('asset/assets/css/dropify.min.css') }}">
    <script src="https://cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script src="{{ asset('asset/assets/js/dropify.js') }}"></script>
    <script>

        CKEDITOR.replace('content', {   
            filebrowserUploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token() ]) }}",
            filebrowserUploadMethod: 'form'
        });

        $('.dropify').dropify();
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
            formData.append('content', CKEDITOR.instances['content'].getData());
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