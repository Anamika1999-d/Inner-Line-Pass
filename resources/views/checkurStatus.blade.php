@extends('layouts.app')

@section('content') 
<head>
<link rel="stylesheet" href="/STYLE/check.css">
</head>
<body>
<div class="ticks">

<!-- <div class="tick"><i class="fas fa-circle"></i></div> -->

<div class="tick"><i class="fas fa-check-circle"></i></div>

@if($data->ACK_Downloaded=="Downloaded")
<div class="tick"><i class="fas fa-check-circle"></i></div>
@else
<div class="tick"><i class="far fa-circle"></i></div>
@endif

@if($data->Remarks_from_Forwarder=="NULL")
<div class="tick"><i class="far fa-circle"></i></div>
@elseif($data->Remarks_from_Forwarder=="Accepted")
<div class="tick"><i class="fas fa-check-circle"></i></div>
@else
<div class="tick"><i class="fas fa-times-circle"></i></div>
@endif

@if($data->Remarks_from_Officer=="NULL")
<div class="tick"><i class="far fa-circle"></i></div>
@elseif($data->Remarks_from_Officer=="Accepted")
<div class="tick"><i class="fas fa-check-circle"></i></div>
@else
<div class="tick"><i class="fas fa-times-circle"></i></div>
@endif

@if($data->DigitalSign=="Signed")
<div class="tick"><i class="fas fa-check-circle"></i></div>
@else
<div class="tick"><i class="far fa-circle"></i></div>
@endif

@if($data->ILP_Downloaded=="downloaded")
<div class="tick"><i class="fas fa-check-circle"></i></div>
@else
<div class="tick"><i class="far fa-circle"></i></div>
@endif

</div>

<div class="bars">
   <div class="bar" id="bar1">Application Form Submitted</div>
   <div class="bar" id="bar2">Acknowledgement recived</div>
   <div class="bar" id="bar3">forwarder Status</div>
   <div class="bar" id="bar4">ADC Status</div>
   <div class="bar" id="bar5">ILP Certificate Generated</div>
   <div class="bar" id="bar6">ILP Certificate downloaded</div>
</div>
<h2> Application no:{{$data->Application_No}}</h2>
<div class="checkpage">

   <div class="downloadsection">
       <p>Acknowledgement</p>
       @if($data->ACK_Downloaded=="Downloaded")
       <button class="btn btn-outline-success"disabled>Download</button>
       @else
       <button class="btn btn-outline-success"><a href="/page/{{$data->id}}"> Download</a></button>
       @endif
       <br>
       <br>
       <p>Inner Line pass certificate</p>
       @if($data->ILP_Downloaded=="downloaded")
       
       <button class="btn btn-outline-success" disabled> Download</button>
       @else
       <button class="btn btn-outline-success"><a href="/ilp/{{$data->id}}"> Download</a></button>
       @endif
   </div>
   <div class="details">
      
      <fieldset>
      <legend>PERSONAL DETAILS</legend>
      Application date : {{$data->Application_date}}
      <br>Applicant Name*: {{$data->Applicant_Name}}
      <br>EPIC / UID No.* :{{$data->EPIC_UID_No}}
      <br>Date of Birth* :{{$data->DOB}}
      <br>Gender* :{{$data->gender}}
      <br>Age* :{{$data->Age}}
      <br>Religion* :{{$data->Religion}}
      <br>Occupation* :{{$data->Occupation}}
      <br>Education* :{{$data->Education}}
      <br>Identification Mark :{{$data->IdentificationMark}}
      <br>Email :{{$data->Email}}
      <br>Contact No* :{{$data->Contact_No}}
      <br>Father’s Name* :{{$data->Fathers_Name}}
      </fieldset>
      <fieldset>
      <legend>PRESENT ADDRESS</legend>
      House no.* :{{$data->Present_Address_Hno}}
      <br>Sub locality 1* :{{$data->Present_Address_Sub_locality1}}
      <br>Sub locality 2 :{{$data->Present_Address_Sub_locality2}}
      <br>Location* :{{$data->Present_Address_Location}}
      <br>Sub District* :{{$data->Present_Address_Sub_District}}
      <br>District* :{{$data->Present_Address_District}}
      <br>State* :{{$data->Present_Address_State}}
      <br>Pin code* :{{$data->Present_Address_pin_code}}
      <br>Country* :{{$data->Present_Address_Country}}
      <br>Police Station* :{{$data->Present_Address_Police_Station}}
      <br>Post office* :{{$data->Present_Address_Post_office}}
      </fieldset>
      <fieldset>
      <legend>PERMANENT ADDRESS</legend>
      House no.* :{{$data->Permanent_Address_Hno}}
      <br>Sub_locality1 :{{$data->Permanent_Address_Sub_locality1}}
      <br>Sub locality 2 :{{$data->Permanent_Address_Sub_locality2}}
      <br>Location* :{{$data->Permanent_Address_Location}}
      <br>Sub District* : {{$data->Permanent_Address_Sub_District}}
      <br>District* :{{$data->Permanent_Address_District}}
      <br>State* :{{$data->Permanent_Address_State}}
      <br>Pin code* : {{$data->Permanent_Address_pin_code}}
      <br>Country* :{{$data->Permanent_Address_Country}}
      <br>Police Station* :{{$data->Permanent_Address_Police_Station}}
      <br>Post office* :{{$data->Permanent_Address_Post_office}}
      </fieldset>
      <fieldset>
      <legend>SPONSOR ADDRESS</legend>
      E/Roll Sl.No: {{$data->E_Roll_SlNo}}
      <br>Part No:{{$data->Part_No}}
      <br>Constituency: {{$data->Constituency}}
      <br>Sponsor Name :{{$data->Sponsor_Name}}
      <br>Father name of sponsor :{{$data->Sponsors_Father_name}}
      <br>EPIC/UID No. of Sponsor (copy enclosed):{{$data->Sponsors_EPIC_UID_No}}
      <br>No. of Non Mizos Presently Sponsored: {{$data->No_of_Non_Mizos_Presently_Sponsored}}
      <br>Provisional Pass No.(Copy enclosed) :{{$data->Provisional_Pass_No}}
      <br>House no.* : {{$data->sponsor_address_Hno}}
      <br>Sub locality 1* : {{$data->sponsor_address_Sub_locality1}}
      <br>Sub locality 2 : {{$data->sponsor_address_Sub_locality2}}
      <br>Sub District* : {{$data->sponsor_address_Sub_District}}
      <br>District* :{{$data->sponsor_address_District}}
      <br>State* : {{$data->sponsor_address_State}}
      <br>Pin code* :{{$data->sponsor_address_pin_code}}
      <br>Police Station* :{{$data->sponsor_address_Police_Station}}
      <br>Post office* :{{$data->sponsor_address_Post_office}}
      </fieldset>
      <fieldset>
      <legend>OTHER DETAILS</legend>
      Purpose of stay : {{$data->Purpose_of_stay}}
      <br>Need for labour :{{$data->Need_for_labour}}
      <br>Regd.No. (in case of Workshop/Industries, etc.) :{{$data->Regd_No}}
      <br>L.S.C No. (in case of Construction works) :{{$data->LSC_No}}
      <br>Skilled/Semi-Skilled/Unskilled :{{$data->Skilled_SemiSkilled_Unskilled}}
      <br>Validity Period :{{$data->Validaty_Period}}
      <br>Remarks :{{$data->Remark}}
      </fieldset>
   </div>
</div>
</body>
@endsection