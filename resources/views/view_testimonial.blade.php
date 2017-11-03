@extends('layout') 

@section('title', $title)

@section('content')
@if($type == "all") 
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>more tales of joy</h2>
        <h6>Take a closer look into what you stand to gain.</h6>
        @if($tales != null && count($tales) > 0)
        @foreach($tales as $t)
        <?php 
          $img = public_path()."/img/".$t['img'];
          $url = url("tales-of-joy")."/".$t['url'];
        ?>
        <div class="team-leader-block clearfix">
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
            @endif

    </div>
</section><!--main-section team-end-->
	
@elseif($type == "single")
<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
		<?php 
          $img = public_path()."/img/".$tales['img'];
          $url = url("tales-of-joy")."/".$tales['url'];
          $name = $tales['name'];
          $title = $tales['title'];
          $content = $tales['content'];
        ?>
    	<h2>Congratulations, {{$name}}! </h2>
    	<h3>$1,000,000.00</h6>
        <div class="row">
        	<figure class="col-lg-4 col-sm-6  wow fadeInUp delay-02s">
            	<img src="{{$img}}" alt=""><br>
            </figure>
        	<div class="col-lg-8 col-sm-6 wow fadeInLeft delay-05s">
        	   <h2>{{$title}}</h2>
            	{{$content}}
            </div>                   
        </div>
	</div>
</section><!--main-section-end-->
@endif
@stop