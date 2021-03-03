<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLE/Acknowledgement.css">
    <title>Acknowledgement</title>
</head>
<body>

<div class="Acknowledgementpage">
<div class="Acknowledgement">
    <h3 class='title'><u> Acknowledgement</u> </h3>
    <p class> This is to acknowledge the receipt <b><u> InnerLinePass(Regular)</u></b> with Application No. <b><u>{{$application_forms->Application_No}}</u></b> date on<b> <u>{{$application_forms->Application_date}}</u></b> to the <b><u> BDO</u> </b> has been <b><u> SUBMITTED </u></b></p>
    <b>Place: Aizawl </b><br>
    <b>Date: {{$application_forms->updated_at}}</b><br>
     ACCEPTED <br>
    Authority Signature
    
</div>

</div>
</body>
</html>
<button><a href="/page/{{$application_forms->id}}"> Download</a></button>
<button><a href="/Homepage"> Back To Home page</a></button>