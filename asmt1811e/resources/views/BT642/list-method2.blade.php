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
    <div class="panel panel-default">
        <div class="panel-heading">
            PRODUCT LIST
        </div>
        <div class="panel-body">
            <?php $index =1;?>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>TITLE</th>
                    <th>PRICE</th>
                    <th>DISCOUNT</th>
                    <th width="100px">IMAGE</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($list as $item)
                        <tr>
                            <td>{{$index++}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->discount}}</td>
                            <td><img src="{{$item->url_img}}" width="130px"></td>
                        </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
