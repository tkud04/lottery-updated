@extends('layout') 

@section('title', "About Us")

@section('content')
<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>We exist to change lives</h2>
    	<h6>Apply today to stand a chance of winning $1 million!</h6>
        <div class="row">
        	<div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="text-success">
                	<h3>Thank you for your interest in this year's <strong>WorldLotteryUSA</strong>.</h3><br>
                	<h3>Founded in 2016, The WorldLotteryUSA Enterprises Limited and its associated brands operate an independent lottery service and are neither affiliated with nor endorsed by official Lottery organizations.</h3>
                    <h3>WorldLotteryUSA holds yearly draws by picking 50 people at random based on the lucky numbers they pick! Each person picked stands a chance to win $1 million as Guaranteed Prize, should he/she choose to accept and apply for the draw.</h3>
                    <h3>Selected people who refuse to contact their assigned Agents to claim their winnings within 14 days will have their winnings donated to a charity organization of our choosing.</h3><br>
                	
                    <h2>Don't miss your chance to be a millionaire - apply online today and be one of the next lottery winners.</h2><br>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
               <figure class="text-right wow fadeInUp delay-02s">
            	<img src="img/money-1.jpg" alt="">
                 <h4>Each year $50 million will be issued as lottery winnings to people from all over the world. The draw will take place through random computer generated lottery draw.</h4><br>
               </figure>
               @include("ads")
            </div>
        </div>
	</div>
</section><!--main-section-end-->



<section class="main-section alabaster"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="img/lottery-1.jpg" alt="">
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>we pick winners at random</h2>
            	<h3 class="padding-b">We use a computer generated random system to randomly select lottery winners based on their <strong>lucky numbers</strong>.<br><br>If you have been selected, we will send an email to the address you provided informing you of your selection and how much you stand to win if you apply.</h3><br>
            	<div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic text-success"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3 style="font-weight: bold;">magic of changing lives</h3>
                        <p style="font-size: 80%; font-weight: bold;">We give out these lottery wins to various people from around the world because we value changing people's lives</p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift text-success"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3 style="font-weight: bold;">charitable cause</h3>
                        <p>Each year we provide $50,000,000 as lottery winnings for 50 lucky people all around the world! We also donate huge sums to charity organizations of our choosing.</p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard text-success"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3 style="font-weight: bold;">100% Support</h3>
                        <p>Our agents will guide you from applying for the lottery to collecting your jackpot! </p>
                    </div>    
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->
@stop