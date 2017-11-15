@extends('layout') 

@section('title', "Apply Now")

@section('content')
@if($com == "1")
@include("apply-add")
@elseif($com == "2")
@include("apply-add-2")
@endif

@stop 