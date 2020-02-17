@extends('layouts.app')

@section('content')

<script src="{{url('tinymce/js/tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{url('tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script>tinymce.init({ selector:'#description' });</script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Occasion Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @include('flash-message')

                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/backend/occasionDetails/update/'.$occasionDetail->id) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


						<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $occasionDetail->title) }}" autofocus>

								@if ($errors->has('title'))
									<span class="help-block">
										<strong>{{ $errors->first('title') }}</strong>
									</span>
								@endif
                            </div>

                        </div>



						<div class="form-group{{ $errors->has('sub_title') ? ' has-error' : '' }}">
                            <label for="sub_title" class="col-md-4 control-label">Sub Title</label>

                            <div class="col-md-6">
                                <input id="sub_title" type="text" class="form-control" name="sub_title" value="{{ old('sub_title', $occasionDetail->sub_title) }}">

								@if ($errors->has('sub_title'))
									<span class="help-block">
										<strong>{{ $errors->first('sub_title') }}</strong>
									</span>
								@endif
                            </div>

                        </div>



						<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label for="photo_alt_text" class="col-md-4 control-label">Upload Photo</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control" name="photo" value="">

								@if ($errors->has('photo'))
									<span class="help-block">
										<strong>{{ $errors->first('photo') }}</strong>
									</span>
								@endif
                            </div><br />
                            @if(isset($occasionDetail->photo) && $occasionDetail->photo != '')
                                <img src="{{ url(env('OCCASIONS_PIC_MAX').$occasionDetail->photo) }}" class="img-thumbnail" style="width:100px;" />
                            @endif

                        </div>



						<div class="form-group{{ $errors->has('photo_alt_text') ? ' has-error' : '' }}">
                            <label for="photo_alt_text" class="col-md-4 control-label">Photo Alt Text</label>

                            <div class="col-md-6">
                                <input id="photo_alt_text" type="text" class="form-control" name="photo_alt_text" value="{{ old('photo_alt_text', $occasionDetail->photo_alt_text) }}">

								@if ($errors->has('photo_alt_text'))
									<span class="help-block">
										<strong>{{ $errors->first('photo_alt_text') }}</strong>
									</span>
								@endif
                            </div>

                        </div>

						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" id="description" rows="10">{{ old('description', $occasionDetail->description) }}</textarea>

								@if ($errors->has('description'))
									<span class="help-block">
										<strong>{{ $errors->first('description') }}</strong>
									</span>
								@endif
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="active" class="col-md-4 control-label">Active</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="active" value="1"{{ ($occasionDetail->active === '1') ? " checked=checked" : "" }}>
                                @if ($errors->has('active'))
                                <span class="help-block">
                                <strong>{{ $errors->first('active') }}</strong>
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
