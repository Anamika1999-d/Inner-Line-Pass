@extends('layouts.app')

@section('content')
<style>
.column{
    color:#fff;
    background:black;
}
.search{
    margin:5px;
    /* display:flex; */

}
.back{
  text-align:right;
  color:red;
}

</style>

<div class="list">
    <div class="search">
        <form action="/view" method="get">
           <input type="text" placeholder="Applicant Name" name="name">
           <button type="submit" class="btn btn-success" >Search<i class="fas fa-search"></i></button>
        </form>
        <div class="back">
          <a href="/Homepage"><i class="fas fa-sign-out-alt"></i>Back To HomePage</a>
        </div>
    </div>
    
    <table class="table table-striped " style='width:100%'>
      <thead class="column">
        <tr>
          <th >S.No.</th>
          <th >Inner Line Pass No</th>
          <th >Applicant Name</th>
          <th >Issued Date</th>
          <th >Certificate</th>
          <th >VIEW</th>
        </tr>
      </thead>
      <tbody >
        @foreach($data as $details)
        <tr >
          <th scope="row" id="row">{{$loop->index+1}}</th>
          <td> {{$details->Pass_No}}</td>
          <td>{{$details->Applicant_Name}}</td>
          <td>{{$details->Officer_UpdatedAt}}</td>
          <td>
            @if($details->ILP_Downloaded=="downloaded")
            <button class="btn btn-success" disabled> Download</button>
            @else
            <button class="btn btn-success"><a href="/ilp1/{{$details->id}}"> Download</a></button>
            @endif
          </td>
          <td><a href="/ApplicationDetails/{{$details->id}}">View Details</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

</div>
@endsection