<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>We exist to change lives</h2>
    	<h6>Apply today to stand a chance of winning $1 million!</h6>        
        	    <form method="post" action="{{url('apply')}}">   
                      {{ csrf_field() }}          
                       <input type="hidden" name="grepo" value="2" required>   
                       <input type="hidden" name="grapo" value="{{$grapo}}" required>   
                       <div class="alert alert-info">Final Step</div>    
                        <div class="row">   
                        <div class="col-lg-12 col-sm-12">   	
                	   <h4>How much do you earn per month<span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="salary" required>   
                	   </div>
                      </div>
                	  <br>
                      
                       <div class="row">   
                        <div class="col-lg-6 col-sm-6">
                	   <h4>Upload means of identification (Driver's License OR International Passport) <span style="color:red;">*</span></h4>
                	   <input type="file" name="means-id" class="form-control">
                	   </div>
                       <div class="col-lg-6 col-sm-6">
                	   <h4>Enter your date of birth <span style="color:red;">*</span></h4>

                	   </div>
                      </div>         

                    <br><br>
                    <button type="submit" class="btn btn-success">Next</button>
                </form>
            
        
        </div>
</section><!--main-section-end-->