@extends('layouts.menu', ['title' => 'Contacts'])

@section('container')
    
    <div class="row">
    	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
    		<h2>Get In Touch</h2>
    		<p class="text-muted">If you having trouble with this service, please <a href="mailto:nanourgopierrefo@gmail.com">ask for help</a>.</p>

    		<form action="#" method="POST">
    			<div class="form-group">
    				<label for="name" class="label-control">Name</label>
    				<input type="text" name="name" id="name" class="form-control" required="required">
    			</div>
    			<div class="form-group">
    				<label for="email" class="label-control">E-mail</label>
    				<input type="email" name="email" id="email" class="form-control" required="required">
    			</div>
    			<div class="form-group">
    				<label for="message" class="label-control">Message</label>
			  		<textarea class="form-control" name="message" id="message" rows="7" required="required"></textarea>
    			</div>
    			<div class="form-group">
    				<button class="btn btn-secondary btn-block">Submit Enquiry &raquo;</button>
    			</div>
    		</form>
    	</div>
    </div>
    
@stop