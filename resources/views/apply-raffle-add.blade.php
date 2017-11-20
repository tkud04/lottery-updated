<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Apply For WorldLotteryUSA Grand Prize Raffle Draw</h2>
    	<h6>Submit Your Email And Stand A Chance Of Being Selected To Win Grand Prize Of $1,000,000!!</h6>
        @if(Session::has("apply-raffle-status") && Session::get("apply-raffle-status") == "success") 
		<div class="alert alert-success">Application successful! If you are among the lucky 50 to be selected, you will receive an email from us. Good luck!</div>
		@endif 
        	    <form method="post" action="{{url('apply-raffle')}}">   
        	         {{ csrf_field() }}
                       <input type="hidden" name="grepo" value="{{$grepo}}">
                	   <h4>Enter your email address <span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="email" required>   
                	<em style="color: red;"><strong>Note:</strong> Clicking Submit below will add your email address to our email ballot system for <strong>random selection</strong>. If the system selects your email, you will get a congratulatory message from us with instructions on how to apply for your lottery. We do not store your email addresses.</em>
                    <br><br>
                    <center><button type="submit" class="btn btn-success btn-lg">Submit</button></center>
                </form>
            
        
        </div>
</section><!--main-section-end-->