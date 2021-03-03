@extends('layouts.app')

@section('content') 
<head>
<link rel="stylesheet" href="/STYLE/AF_forworder.css">
  
</head>
<body>
<h2>LIST OF APPLICATION FORM </h2>
<br>
<table class="table" style='width:100%'>
  <thead class="column">
    <tr>
      <th >S.No.</th>
      <th >Application No</th>
      <th >Application Date</th>
      <th >Date Accepted by the forworder</th>
      <th >Period</th>
    </tr>
  </thead>
  <tbody >
    @foreach($application_forms as $application_form)
    <tr >
      <th scope="row">{{$loop->index+1}}</th>
      <td><a href="/List/{{$application_form->id}}"> {{$application_form->Application_No}}</a></td>
      <td>{{$application_form->Application_date}}</td>
      <td>{{$application_form->Forwarder_UpdatedAt}}</td>
      <td>1day</td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>

@endsection