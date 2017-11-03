@extends('layout') 

@section('title', "Welcome")

@section('header') 
@include("header")
@stop
@section('content')        

@include("services_short")
@include("client")
@include("logos")

@stop