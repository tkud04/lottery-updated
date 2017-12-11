@extends('layout') 

@section('title', "Tales of Joy")

@section('content')
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>more tales of joy</h2>
        <h6>Take a closer look into what you stand to gain.</h6>
        @if($tales != null && count($tales) > 0)
        <div class="team-leader-block clearfix">
        @foreach($tales as $t)
        <?php 
          $img = "img/".$t['img'];
          $url = url("tales-of-joy")."/".$t['url'];
        ?>        
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="{{$img}}" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Congratulations, {{$t['name']}}!</h3>
                <span class="wow fadeInDown delay-09s">{{$t['country']}}!</span>
                <h3 class="wow fadeInDown delay-03s"> $1,000,000</h3>
                <a href="{{$url}}" class="btn btn-danger">Read more</a>
              </div>         
            @endforeach
            </div>
            @endif         
       <br>
       <div class="col-md-12">
       	<table class="table table-responsive">
       	  <tr style="background: #000; color: #fff;">
       	    <th>Date</th>
               <th>Winner</th>
               <th>Prize</th>
               <th>Location</th>
             </tr>
           </table>
       </div>
    </div>
</section><!--main-section team-end-->
@stop