@extends('layouts.app')

@section('content')

<script src="{{url('tinymce/js/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{url('tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script>tinymce.init({ selector:'#description' });</script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Occasion</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @include('flash-message')

                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/backend/occasions/update/'.$occasion->id) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Occasion Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $occasion->name) }}" autofocus>

								@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
                            </div>

                        </div>



						<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="slug" class="col-md-4 control-label">Slug</label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug', $occasion->slug) }}" readonly="readonly">

								@if ($errors->has('slug'))
									<span class="help-block">
										<strong>{{ $errors->first('slug') }}</strong>
									</span>
								@endif
                            </div>

                        </div>


						<div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
                            <label for="heading" class="col-md-4 control-label">Heading (H1)</label>

                            <div class="col-md-6">
                                <input id="heading" type="text" class="form-control" name="heading" value="{{ old('heading', $occasion->heading) }}">

								@if ($errors->has('heading'))
									<span class="help-block">
										<strong>{{ $errors->first('heading') }}</strong>
									</span>
								@endif
                            </div>

                        </div>



						<div class="form-group{{ $errors->has('sub_heading') ? ' has-error' : '' }}">
                            <label for="sub_heading" class="col-md-4 control-label">Sub Heading (H2)</label>

                            <div class="col-md-6">
                                <input id="sub_heading" type="text" class="form-control" name="sub_heading" value="{{ old('sub_heading', $occasion->sub_heading) }}">

								@if ($errors->has('sub_heading'))
									<span class="help-block">
										<strong>{{ $errors->first('sub_heading') }}</strong>
									</span>
								@endif
                            </div>

                        </div>



						<div class="form-group{{ $errors->has('sub_heading_1') ? ' has-error' : '' }}">
                            <label for="sub_heading_1" class="col-md-4 control-label">Sub Heading (H2)</label>

                            <div class="col-md-6">
                                <input id="sub_heading_1" type="text" class="form-control" name="sub_heading_1" value="{{ old('sub_heading_1', $occasion->sub_heading_1) }}">

								@if ($errors->has('sub_heading_1'))
									<span class="help-block">
										<strong>{{ $errors->first('sub_heading_1') }}</strong>
									</span>
								@endif
                            </div>

                        </div>

						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="business_name" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" id="description" rows="10">{{ old('description', $occasion->description) }}</textarea>

								@if ($errors->has('description'))
									<span class="help-block">
										<strong>{{ $errors->first('description') }}</strong>
									</span>
								@endif
                            </div>

                        </div>




						<div class="form-group{{ $errors->has('meta_title') ? ' has-error' : '' }}">
                            <label for="meta_title" class="col-md-4 control-label">Meta Title</label>

                            <div class="col-md-6">
                                <input id="meta_title" type="text" class="form-control" name="meta_title" value="{{ old('meta_title', $occasion->meta_title) }}" autofocus>

								@if ($errors->has('meta_title'))
									<span class="help-block">
										<strong>{{ $errors->first('meta_title') }}</strong>
									</span>
								@endif
                            </div>

                        </div>




						<div class="form-group{{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
                            <label for="meta_keywords" class="col-md-4 control-label">Meta Keywords</label>

                            <div class="col-md-6">
                                <input id="meta_keywords" type="text" class="form-control" name="meta_keywords" value="{{ old('name', $occasion->name) }}" autofocus>

								@if ($errors->has('meta_keywords'))
									<span class="help-block">
										<strong>{{ $errors->first('meta_keywords') }}</strong>
									</span>
								@endif
                            </div>

                        </div>


						<div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
                            <label for="business_name" class="col-md-4 control-label">Meta Description</label>

                            <div class="col-md-6">
                                <textarea id="meta_description" type="text" class="form-control" name="meta_description" rows="5">{{ old('meta_description', $occasion->meta_description) }}</textarea>

								@if ($errors->has('meta_description'))
									<span class="help-block">
										<strong>{{ $errors->first('meta_description') }}</strong>
									</span>
								@endif
                            </div>

                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
