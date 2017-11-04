@extends('layout') 

@section('title', $tales['title'])

@section('content')
<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
		<?php 
          $img = "img/".$tales['img'];
          $url = url("tales-of-joy")."/".$tales['url'];
          $name = $tales['name'];
          $title = $tales['title'];
          $content = $tales['content'];
        ?>
    	<h2>Congratulations, {{$name}}! </h2>
    	<h3>$1,000,000.00</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6  wow fadeInUp delay-02s">
            	<img src="{{$img}}" alt=""><br>
            </div>
        	<div class="col-lg-8 col-sm-6 wow fadeInLeft delay-05s">
        	   <h2>{{$title}}</h2>
            	{!! $content !!}
            </div>                   
        </div>
	</div>
</section><!--main-section-end-->
@stop