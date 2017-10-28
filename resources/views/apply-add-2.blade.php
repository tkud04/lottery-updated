<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>We exist to change lives</h2>
    	<h6>Apply today to stand a chance of winning $1 million!</h6>        
    <!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ["errors" => $errors])
                     @endif          
        	    <form method="post" action="{{url('apply')}}" id="submitForm">   
                      {{ csrf_field() }}          
                       <input type="hidden" name="grepo" value="2" required>   
                       <input type="hidden" name="grapo" value="{{$grapo}}" required>   
                       <div class="alert alert-info">Final Step</div>    
                        <div class="row">   
                        <div class="col-lg-12 col-sm-12">   	
                	   <h4>How much do you earn per month($) <span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="salary" value="{{old('salary')}}" required>   
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
                       <p>By signing up you verify that you have read the <a href="#">WARNING</a> and also agree to the <a href="#" class="text-info small">Terms and Conditions</a> and <a href="#" class="text-info small">Privacy Policy</a>.</p>
                	   </div>
                      </div>         

                    <br><br>
                    <button id="finalFormSubmit" class="btn btn-success">Submit</button>
                </form>
            
        
        </div>
    <!--Modal box-->
    <div class="modal fade" id="loadingModal" role="dialog">
      <div class="modal-dialog modal-sm">
      
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">WorldLottoUSA</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg" id="modalTitle">Verifying Your Information</p>
              <div class="alert alert-info"><i class="fa fa-cogs"></i><span id="response">Verifying your information and processing your application.. Please wait.. </span><br><strong>WARNING: Do not close this page until it loads completely..</strong></div>
              
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
</section><!--main-section-end-->