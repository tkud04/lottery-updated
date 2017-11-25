@extends('layout') 

@section('title', "Reply To Contact Messages")

@section('content')        
<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Reply to messages se t through Contact Us</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-12 col-sm-12 wow fadeInUp delay-05s">
            	<div class="form">
            	@if(Session::has("web-reply-status") && Session::get("web-reply-status") == "success") 
		          <div class="alert alert-success">Reply sent!</div>
		       @endif 
                    <form action="{{url('web-reply')}}" method="post" role="form" class="contactForm">
                    	 {{ csrf_field() }}      
                        <div class="form-group">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control input-text text-area" name="message" rows="9" data-rule="required" data-msg="Please write something for us" placeholder="Enter message here, make it as long as you need"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
                    </form>
                </div>	
            </div>
        </div>
</section>
</div>
@stop