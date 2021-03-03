@extends('layouts.app')

@section('content')
<div class="application_form">
        <div class="nav_form">
            <h3 class="navbar">Inner Line Pass No. :{{$data->Pass_No}}</h3>
        </div>
        <table width="70%" class="table table-striped">
            <tr>
                <th>Application date : </th>
                <td>{{$data->Application_date}}</td>
            </tr>
            <tr>
                <th>Applicant Name*: </th>
                <td>{{$data->Applicant_Name}}</td>
            </tr>
            <tr>
                <th>EPIC / UID No.* :</th>
                <td>{{$data->EPIC_UID_No}}</td>
            </tr>
            <tr>
                <th>Date of Birth* :</th>
                <td>{{$data->DOB}}</td>
            </tr>
            <tr>
                <th>Gender* :</th>
                <td>{{$data->gender}}</td>
            </tr>
            <tr>
                <th>Age* :</th>
                <td>{{$data->Age}}</td>
            </tr>
            <tr>
                <th>Religion* :</th>
                <td>{{$data->Religion}}</td>
            </tr>
            <tr>
                <th>Occupation* :</th>
                <td>{{$data->Occupation}}</td>
            </tr>
            <tr>
                <th>Education* :</th>
                <td>{{$data->Education}}</td>
            </tr>
            <tr>
                <th>Identification Mark :</th>
                <td>{{$data->IdentificationMark}}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{$data->Email}}</td>
            </tr>
            <tr>
                <th>Contact No* :</th>
                <td>{{$data->Contact_No}}</td>
            </tr>
            <tr>
                <th>Father’s Name* :</th>
                <td>{{$data->Fathers_Name}}</td>
            </tr>
            <tr>
                <th>House no.* :</th>
                <td>{{$data->Present_Address_Hno}}</td>
            </tr>
            <tr>
                <th>Sub locality 1* :</th>
                <td>{{$data->Present_Address_Sub_locality1}}</td>
            </tr>
            <tr>
                <th>Sub locality 2 :</th>
                <td>{{$data->Present_Address_Sub_locality2}}</td>
            </tr>
            <tr>
                <th>Location* :</th>
                <td>{{$data->Present_Address_Location}}</td>
            </tr>
            <tr>
                <th>Sub District* :</th>
                <td>{{$data->Present_Address_Sub_District}}</td>
            </tr>
            <tr>
                <th>District* :</th>
                <td>{{$data->Present_Address_District}}</td>
            </tr>
            <tr>
                <th>State* :</th>
                <td>{{$data->Present_Address_State}}</td>
            </tr>
            <tr>
                <th>Pin code* :</th>
                <td>{{$data->Present_Address_pin_code}}</td>
            </tr>
            <tr>
                <th>Country* :</th>
                <td>{{$data->Present_Address_Country}}</td>
            </tr>
            <tr>
                <th>Police Station* :</th>
                <td>{{$data->Present_Address_Police_Station}}</td>
            </tr>
            <tr>
                <th>Post office* :</th>
                <td>{{$data->Present_Address_Post_office}}</td>
            </tr>
            <tr>
                <th>House no.* :</th>
                <td>{{$data->Permanent_Address_Hno}}</td>
            </tr>
            <tr>
                <th>Sub_locality1 :</th>
                <td>{{$data->Permanent_Address_Sub_locality1}}</td>
            </tr>
            <tr>
                <th>Sub locality 2 :</th>
                <td>{{$data->Permanent_Address_Sub_locality2}}</td>
            </tr>
            <tr>
                <th>Location* :</th>
                <td>{{$data->Permanent_Address_Location}}</td>
            </tr>
            <tr>
                <th>Sub District* : </th>
                <td>{{$data->Permanent_Address_Sub_District}}</td>
            </tr>
            <tr>
                <th>District* :</th>
                <td>{{$data->Permanent_Address_District}}</td>
            </tr>
            <tr>
                <th>State* :</th>
                <td>{{$data->Permanent_Address_State}}</td>
            </tr>
            <tr>
                <th>Pin code* : </th>
                <td>{{$data->Permanent_Address_pin_code}}</td>
            </tr>
            <tr>
                <th>Country* :</th>
                <td>{{$data->Permanent_Address_Country}}</td>
            </tr>
            <tr>
                <th>Police Station* :</th>
                <td>{{$data->Permanent_Address_Police_Station}}</td>
            </tr>
            <tr>
                <th>Post office* :</th>
                <td>{{$data->Permanent_Address_Post_office}}</td>
            </tr>
            <tr>
                <th>E/Roll Sl.No: </th>
                <td>{{$data->E_Roll_SlNo}}</td>
            </tr>
            <tr>
                <th>Part No:</th>
                <td>{{$data->Part_No}}</td>
            </tr>
            <tr>
                <th>Constituency: </th>
                <td>{{$data->Constituency}}</td>
            </tr>
            <tr>
                <th>Sponsor Name :</th>
                <td>{{$data->Sponsor_Name}}</td>
            </tr>
            <tr>
                <th>Father name of sponsor :</th>
                <td>{{$data->Sponsors_Father_name}}</td>
            </tr>
            <tr>
                <th>EPIC/UID No. of Sponsor (copy enclosed):</th>
                <td>{{$data->Sponsors_EPIC_UID_No}}</td>
            </tr>
            <tr>
                <th>>No. of Non Mizos Presently Sponsored: </th>
                <td>{{$data->No_of_Non_Mizos_Presently_Sponsored}}</td>
            </tr>
            <tr>
                <th>Provisional Pass No.(Copy enclosed) :</th>
                <td>{{$data->Provisional_Pass_No}}</td>
            </tr>
            <tr>
                <th>House no.* : </th>
                <td>{{$data->sponsor_address_Hno}}</td>
            </tr>
            <tr>
                <th>Sub locality 1* : </th>
                <td>{{$data->sponsor_address_Sub_locality1}}</td>
            </tr>
            <tr>
                <th>Sub locality 2 : </th>
                <td>{{$data->sponsor_address_Sub_locality2}}</td>
            </tr>
            <tr>
                <th>Sub District* : </th>
                <td>{{$data->sponsor_address_Sub_District}}</td>
            </tr>
            <tr>
                <th>District* :</th>
                <td>{{$data->sponsor_address_District}}</td>
            </tr>
            <tr>
                <th>State* : </th>
                <td>{{$data->sponsor_address_State}}</td>
            </tr>
            <tr>
                <th>Pin code* :</th>
                <td>{{$data->sponsor_address_pin_code}}</td>
            </tr>

            <tr>
                <th>Police Station* :</th>
                <td>{{$data->sponsor_address_Police_Station}}</td>
            </tr>
            <tr>
                <th>Post office* :</th>
                <td>{{$data->sponsor_address_Post_office}}</td>
            </tr>
            <tr>
                <th>Purpose of stay : </th>
                <td>{{$data->Purpose_of_stay}}</td>
            </tr>
            <tr>
                <th>Need for labour :</th>
                <td>{{$data->Need_for_labour}}</td>
            </tr>
            <tr>
                <th>Regd.No. (in case of Workshop/Industries, etc.) :</th>
                <td>{{$data->Regd_No}}</td>
            </tr>
            <tr>
                <th>L.S.C No. (in case of Construction works) :</th>
                <td>{{$data->LSC_No}}</td>
            </tr>
            <tr>
                <th>Skilled/Semi-Skilled/Unskilled :</th>
                <td>{{$data->Skilled_SemiSkilled_Unskilled}}</td>
            </tr>
            <tr>
                <th>Validity Period :</th>
                <td>{{$data->Validaty_Period}}</td>
            </tr>
            <tr>
                <th>Remarks :</th>
                <td>{{$data->Remark}}</td>
            </tr>
            <tr>
                <th><h3>List of Scanned supporting Documents :</h3></th>
                <td></td>
            </tr>
            <tr>
                <th>EPIC/UID No. of Sponsor :</th>
                <td><button class="btn btn-primary"><a href="/storage/public/documents/{{$data->doc1}}"target="_blank"> Click here to view</a></button>
                <button  class="btn btn-success"> <a href="/download1/{{$data->id}}"> Download Here</a></button></td>
            </tr>
            <tr>
                <th>Provisional Pass No:</th>
                <td><button href="/storage/public/documents/{{$data->doc2}}" target="_blank" class="btn btn-primary"><a href="/storage/public/documents/{{$data->doc2}}" target="_blank">Click here to view</a></button>
                 <button class="btn btn-success"><a href="/download2/{{$data->id}}"> Download Here</a></button></td>
            </tr>
            
        </table>
@endsection