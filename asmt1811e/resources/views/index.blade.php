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
    <h1>LIST HOTEL</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>LIST ROOM IN HOTEL</th>
            <th>HOTEL NAME</th>
            <th>ADDRESS</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $item)
            <tr>
                <td>
                    @foreach($list2 as $r)
                        <span>{{$r['rollNo']}}</span>&nbsp;
                    @endforeach
                </td>
                <td>{{$item['name']}}</td>
                <td>{{$item['address']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
