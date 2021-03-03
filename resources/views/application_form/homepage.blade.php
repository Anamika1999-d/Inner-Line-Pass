@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="/STYLE/homepage.css">
</head>
<body>
<div class="home_page">
    <div class="navbar__icon">
        <div class="navbar__item">
            <h2>Home Page</h2>
        </div>
    </div>
    
    <div class="home__item">
        <div class="new__application">
            <h3> <a href="/Homepage/ApplicationForm" class="form">New Applicant</a></h3>
        </div>
        <div class="new__application">
            <h3> <a href="/LIST" class="form">Already issued Inner Line Pass</a></h3>
        </div>
        <div class="exiting__applicant">
            <div class="nav__userid">
                <div class="navbar">Existing Applicant</div>
                <div class="item_applicant">
                    <form action="/search" method="get">
                        <div class="input-group">
                            <p class="user-id">Application No. :
                            <input type="search" name="Search" class="form-control" placeholder="APPLICATION NO." ></p>
                            <span class="input-group-prepend">
                                <button type="submit" class="btn-search" >Search <i class="fas fa-search"></i></button>
                            </span>
                            
                            
                        </div>
                        @if(Session::has('message'))
                            <p class="alert alert-danger">{{ Session::get('message') }}</p>
                        @endif
                    </form>
                </div>
            </div>
        </div> 
        
    </div>
</div>
<footer>
  <center>
  CSC E-Governance Services India Limited <br>
Ministry of Electronics & Information Technology <br>
Government of India <br>

Helpline: 1800 121 3468 <br>
E-Mail: support@csc.gov.in <br>
FAQ <br>
  </center>
</footer>
</body>
@endsection