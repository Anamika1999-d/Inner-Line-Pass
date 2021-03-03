@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="/STYLE/remarks.css">
</head>
<div class="remarks_page">
    <div class="navbar_remarks">
        <h2>REMARKS </h2>
    </div>
    <form action="/Detail/{{$application_forms->id}}" method="post">
    @csrf
    <div class="remarks_body">
        <textarea name="Remarks_from_Officer" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="Submit" value="Submit">
    </form>
</div>
@endsection