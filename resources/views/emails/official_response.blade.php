@extends('layout') 

@section('title', "Official Response")

@section('content')      
<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
		<h2>Send Official Message</h2>
		@if(Session::has("official-response-status") && Session::get("official-response-status") == "success") 
		<div class="alert alert-success">Message sent successfully!</div>
		@endif 
		<div class="row">
			<div class="col-md-12">
					<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ['errors'=>$errors])
                     @endif
            
            <form action="{{url('official-response')}}" method="post" name="contact-form" id="main-contact-form">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">         
                                 <div class="form-group">
                                       	<input type="text" name="name" placeholder="Contact name" class="form-control" value ="{{old('name')}}" required>
                                </div>   
                                <div class="form-group">
                                       	<input type="text" name="email" placeholder="Contact email" class="form-control" value ="{{old('email')}}" required>
                                </div>   
                                <div class="form-group">
                                       	<input type="text" name="subject" placeholder="Message subject" class="form-control" value ="{{old('subject')}}" required>
                                </div>   
                                <div class="form-group">
                                    <textarea required name="message" placeholder="Message goes here" rows="8" value ="{{old('message')}}" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">SUBMIT </button>
                            </form>
            </div>
        </div>
	</div>
</section>
@stop