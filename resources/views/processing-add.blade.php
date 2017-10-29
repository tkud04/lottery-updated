<section class="main-section" id="service"><!--main-section-start-->
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
              @if($roll == "yes") {?>         
              <div class="alert alert-info">
              	<?php
                    $u = "processing/?grepo=".$grepo."&win=yup";
                    $wu = url($u);
                  ?>
              	<input type="hidden" id="wu" value="{{$wu}}">
                 <h2 id="loadingResponse">Verifying your information...</h2>
                 <img src="{{asset('img/loading.gif')}}">
              </div>
              <br><br><strong>WARNING: Do not close this page until it loads completely..</strong>
             @elseif($roll == "win") {?>         
              <div class="alert alert-success">
                 <h2 id="">Congratulations!!!</h2>
                <center> <h3 style="color: #FFC900;">you just won $1000000!<h3></center>
                 <p>We just sent you an email containing your reference number and other important information. <br><br>Please contact your agent to claim your win!</p>
              </div>
              <br><br><strong>WARNING: Do not disclose your reference number or other information to ANYBODY. Only your agent will ask you for your reference number to verify your details.</strong>
              @endif
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
     
     	
   
</section><!--main-section-end-->