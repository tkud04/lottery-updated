<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>We exist to change lives</h2>
    	<h6>Apply today to stand a chance of winning $1 million!</h6>        
    <!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ["errors" => $errors])
                     @endif          
        	    <form method="post" action="{{url('apply')}}" id="submitForm" enctype="multipart/form-data">   
                      {{ csrf_field() }}          
                       <input type="hidden" name="grepo" value="2" required>   
                       <input type="hidden" name="grapo" value="{{$grapo}}" required>   
                       <div class="alert alert-info">Final Step</div>    
                        <div class="row">   
                        <div class="col-lg-6 col-sm-6">   	
                	   <h4>Weekly or monthly income($)<span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="salary" value="{{old('salary')}}" required>   
                	   </div>
                       <div class="col-lg-6 col-sm-6">
                        	<h4><strong>Your agent's email address <span style="color:red;">*</span></strong></h4>
                	   <input type="text" class="form-control" name="agent" value="{{old('agent')}}" required>   
                	   </div>
                      </div>
                	  <br>
                      
                       <div class="row">   
                        <div class="col-lg-6 col-sm-6">
                	   <h4>Upload means of identification (Driver's License OR International Passport) <span style="color:red;">*</span></h4>
                	   <input type="file" name="means-id" class="form-control">
                	   </div>
                       <div class="col-lg-6 col-sm-6">
                	   <h4>And Finally.. <span style="color:red;">*</span></h4>
                       <p><input type="checkbox" name="terms">By signing up you verify that you agree to the <a href="{{url('terms')}}" target="_blank" class="text-info small">Terms and Conditions</a> and <a href="{{url('terms')}}" target="_blank"  class="text-info small">Privacy Policy</a>.</p>
                	   </div>
                      </div>         

                    <br><br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            
        
        </div>
</section><!--main-section-end-->