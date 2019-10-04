<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">ADD PRODUCT</div>
        <div class="panel-body">
            <form action="{{route('add-product')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">TITLE</label>
                    <input type="text" class="form-control" name="title" id="" placeholder="Input...">
                </div>
                <div class="form-group">
                    <label for="">PRICE</label>
                    <input type="text" class="form-control" name="price" id="" placeholder="Input...">
                </div>
                <div class="form-group">
                    <label for="">DISCOUNT</label>
                    <input type="text" class="form-control" name="discount" id="" placeholder="Input...">
                </div>
                <div class="form-group">
                    <label for="">URL IMG</label>
                    <input type="text" class="form-control" name="url_img" id="" placeholder="Input...">
                </div>
                <button type="submit" class="btn btn-primary">ADD</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
