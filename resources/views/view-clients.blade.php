@extends('layout') 

@section('title', "View Clients")

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
       <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
<thead>
<tr>
<th>SN</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Agent</th>
<th>Gender</th>
<th>Salary</th>
<th>Address</th>
<th>City</th>
<th>Region</th>
<th>Country</th>
<th>Marital</th>
<th>Kids</th>
</tr>
</thead>
<tbody>
@if($clients != null)
@foreach($clients as $c)
<tr>
<td>{{$c['id']}}</td>
<td>{{$c['full_name']}}</td>
<td>{{$c['email']}}</td>
<td>{{$c['phone']}}</td>
<td>{{$c['agent']}}</td>
<td>{{$c['gender']}}</td>
<td>{{$c['salary']}}</td>
<td>{{$c['address']}}</td>
<td>{{$c['city']}}</td>
<td>{{$c['region']}}</td>
<td>{{$c['postal']}}</td>
<td>{{$c['country']}}</td>
<td>{{$c['marital']}}</td>
<td>{{$c['kids']}}</td>
</tr>
@endforeach
@endif
</tbody>
</table>
    </div>
  </div>
</div>

@stop 