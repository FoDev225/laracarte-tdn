@extends('layouts.menu', ['title' => 'Contacts'])

@section('container')
    
    <div class="row">
    	<div class="col-md-2 col-sm-1"></div>
    	<div class="col-md-8 col-sm-10">
    		<h2>Get In Touch</h2>
    		<p class="text-muted">If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a>.</p>

    		<form action="{{ route('contact_path') }}" method="POST">
    			{{ csrf_field() }}

    			<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    				<label for="name" class="control-label">Name</label>
    				<input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
    				{!! $errors->first('name', '<span class="alert-danger">:message</span>') !!}
    			</div>
    			<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    				<label for="email" class="control-label">E-mail</label>
    				<input type="text" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
    				{!! $errors->first('email', '<span class="alert-danger">:message</span>') !!}
    			</div>
    			<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    				<label for="message" class="control-label">Message</label>
			  		<textarea class="form-control" name="message" id="message" rows="7" required="required">{{ old('message') }}</textarea>
			  		{!! $errors->first('message', '<span class="alert-danger">:message</span>') !!}
    			</div>
    			<div class="form-group">
    				<button type="submit" class="btn btn-secondary btn-block">Submit Enquiry &raquo;</button>
    			</div>
    		</form>
    	</div>
    	<div class="col-md-2 col-sm-1"></div>
    </div>
    
@stop