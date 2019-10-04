<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Roll No</th>
            <th>Type</th>
            <th>Floor</th>
            <th>Price</th>
        </tr>
        @foreach($list as $item)
            <tr>
                <td>{{$item['rollNo']}}</td>
                <td>{{$item['type']}}</td>
                <td>{{$item['floor']}}</td>
                <td>{{$item['price']}}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
