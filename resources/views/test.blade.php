<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>
@include('sweet::alert')
    <form action="/test" method="post">
    @csrf
    <label for="name">name</label><input type="text" name="name">
    <label for="number">number</label><input type="text" name="number">
    <input type="submit" value="Submit">
    </form>
</body>
</html>