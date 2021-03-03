@extends('layouts.app')

@section('content') 
<head>
<link rel="stylesheet" href="/STYLE/AF_Forworder.css">
  
</head>
<body>
<h2>LIST OF APPLICATION FORM </h2>
<br>
<table class="table table-striped table-dark" style='width:100%'>
  <thead class="column">
    <tr>
      <th >S.No.</th>
      <th >Application No</th>
      <th >Application Date</th>
      <th >Target Period</th>
      <th >Remarks From the ADC</th>
    </tr>
  </thead>
  <tbody >
    @foreach($application_forms as $application_form)
    
    <tr >
      <th scope="row" id="row">{{$loop->index+1}}</th>
      <td><a href="/Detail/{{$application_form->id}}"> {{$application_form->Application_No}}</a></td>
      <td>{{$application_form->Application_date}}</td>
      <td>1day</td>
      <td>{{$application_form->Remarks_from_Officer}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<br><br>



</body>

@endsection