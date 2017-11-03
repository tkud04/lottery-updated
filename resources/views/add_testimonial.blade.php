@extends('layout') 

@section('title', "Add Testimonials")

@section('content')      
<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
		<h2>Add New Testimonial</h2>
		@if(Session::has("add-testimonial-status") && Session::get("add-testimonial-status") == "success") 
		<div class="alert alert-success">Testimonial added successfully!</div>
		@endif 
		<div class="row">
			<div class="col-md-12">
					<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ['errors'=>$errors])
                     @endif
            
            <form action="{{url('add-testimonial')}}" method="post" name="contact-form" id="main-contact-form">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">         
                                <div class="form-group">
                                       	<input type="text" name="name" placeholder="Winner name" class="form-control" value ="{{old('name')}}" required>
                                </div>
                                 <div class="form-group">
                                       	<input type="text" name="title" placeholder="Title" class="form-control" value ="{{old('title')}}" required>
                                </div>
                                 <div class="form-group">
                                       	<input type="text" name="img" placeholder="Winner image" class="form-control" value ="{{old('img')}}" required>
                                </div>
                                <div class="form-group">
                                       	<input type="text" name="url" placeholder="Testimonial URL" class="form-control" value ="{{old('url')}}" required>
                                </div>                                
                                <div class="form-group">
                                    <textarea required name="content" placeholder="News goes here, make it as long as you need!" rows="8" value ="{{old('content')}}" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="country" placeholder="Country" value ="{{old('short_text')}}" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">SUBMIT </button>
                            </form>
            </div>
        </div>
	</div>
</section>
@stop