@extends('layouts.app')

@section('content') 
<head>
  <link rel="stylesheet" href="/STYLE/style.css">
</head>
<body>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {
  vertical-align: middle;
  }

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.image{
  width:800px;
  height:350px;
  z-index:7;
}
</style>
</head>
<body>
<div class="slideshow-container">
  <div class="mySlides fade">
    <img class="image" src="/photo/pic1.jpeg" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img class="image" src="/photo/pic2.jpg" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img class="image" src="/photo/pic3.jpg" style="width:100%">
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
    <br>
    <div class="index_page">
      <div class="search-icon">
        <h2>Check Your ILP Status</h2>
        <form action="/check" method="get">
             <input type="text" placeholder="Email" name="Email"class="search">
             <input type="text" placeholder="Application No." name="ApplicationNo"class="search">
             <button type="Submit" class="btn btn-secondary btn-lg">Search</button>
             @if(Session::has('message'))
                <p class="alert alert-danger">{{ Session::get('message') }}</p>
             @endif
        </form>
      </div>
      <div class="index">
        <h2>INNER LINE PASS For MIZORAM</h2>
        <h3> Entry Formalities for Domestic Tourists :</h3>
        
        Inner Line Pass is required for entry into Mizoram and can be obtained from Liaison Officer, Government of Mizoram from the following cities- Kolkata, Silchar, Shillong, Guwahati and New Delhi. Government employees travelling for official purposes are exempted from obtaining ILP but are required to carry a photo identification card with them at all times. <br>
        
        Tourists arriving by air can obtain passes from the Security Officer on arrival at Lengpui Airport, Aizawl. <br>
        
        <b>Two types of ILP can be issued :</b>  <br>
        
        1.<u> <b>Temporary</b> </u>: 15 days at a time which can be renewed once for another 15 days. <br>
        
        Fees to be paid : <br>
        
        Rs.20 Application Form <br>
        Rs.100 Processing Fee <br>
        Rs.20 Renewal Fee <br>
        Requirements : 4 passport size photo and a photo ID (Driving License/Voter ID/Department ID) <br>
        
        2. <u> <b>Regular</u> </b>: 6 months at a time which can be renewed twice for another 6 months each. However, sponsorship from a local resident or a Government Department is required. <br>
        
        <b>Fees to be paid :</b> <br>
        
        Rs.20 Application Form <br>
        Rs.200 Processing Fee <br>
        Rs.100 Renewal Fee <br>
        <b>Requirements :</b> 4 passport size photo and a photo ID , 2 passport size photo of the sponsor <br>
        
        <i>* Renewal for both Temporary and Regular ILP can be done at District Commissioner’s Office located at Treasury Square, Aizawl <br>
        
        * For tourists originating from Cachar, Hailakandi and Karimganj Districts of Assam State, Electoral Roll details are required due to porous international boundary with Bangladesh and so is the case with persons coming from the state of Tripura. <br>
        
        * Tourists entering from Bairabi and Vairengte can obtain ILP from Sub-Deputy Commissioner, Bairabi and Sub-Divisional Officer Vairengte respectively. <br>
        
        * ILP cannot be issued at Check gates upon entering the State. </i><br>
        
        <br>
        <h3><b>Foreign Tourists : </b></h3>
        
        All foreign nationals have to register themselves at the office of Superintendent of Police (CID/SB) Mizoram who is the designated Foreigners Registration Officer (FRO) of the State within 24 hours of arrival. <br>
        
        Citizens of Afghanistan, China and Pakistan and foreign nationals having their origin in these countries would continue to require prior approval of the Ministry of Home Affairs before entering the state. <br>
        <br>
        <b> The addresses of Mizoram House:</b>
        <table class="table table-striped" style='width:100%'>
          <thead >
            <tr>
              <th >Sno</th>
              <th >Place</th>
              <th >Address</th>
              <th >contact Info</th>
            </tr>
          </thead>
          <tbody >
            <tr >
              <th scope="row" >1</th>
              <td>at Lengpui Airport</td>
              <td>Officer in charge Anti Hijacking Security Civil Aerodrome ,Lengpui</td>
              <td></td>
            </tr>
            <tr >
              <th scope="row" >2</th>
              <td>at Shillong</td>
              <td>Liaison Officer Government of Mizoram ,Nongrim Hills, Shillong</td>
              <td>Ph : 0364-2230149(O) 2225058(R)</td>
            </tr>
            <tr >
              <th scope="row" >3</th>
              <td>at Guwahati</td>
              <td>Liaison Officer MIZORAM HOUSE ,Christian Basti. ,G.S.Road ,Guwahati - 781 005</td>
              <td>Ph: 0361- 2529 448 Reception : 529 411 Fax:  2529448</td>
            </tr>
            <tr >
              <th scope="row" >4</th>
              <td>at Silchar</td>
              <td>Liaison Officer, Mizoram Run,Sonai Road, Silchar -788 005</td>
              <td>Ph No: 03842-25655(O), 25419 (R of LO)</td>
            </tr>
            <tr >
              <th scope="row" >5</th>
              <td>at Kolkota</td>
              <td>Liaison Officer, Government of Mizoram, Mizoram House; 24, Old Ballygunge Road, Calcutta, 700 019</td>
              <td>Phone: 033-4756430/4757887/4757064, Fax: 033-4757034</td>
            </tr>
            <tr >
              <th scope="row" >6</th>
              <td>at New. Delhi</td>
              <td>Resident Commissioner, Government of Mizoram, MIZORAM HOUSE, Circular Road, Chankyapuri, New Delhi 110 021</td>
              <td>Ph(R.C):011-3016408(O) 6440954 (R) (Dy R.C.) - 3010548 ,Reception: 3016101, PABX: 3012331, Fax : 011-3012331</td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>
    
    <footer>
    <Center> Ministry of Communication & Information Technology <br>
    National Informatics Centre, Mizoram State Centre <br>
    Room No 109, Block C, Mizoram Secretariat , Aizawl - 796001 <br></Center>
    </footer>
</body>
@endsection
