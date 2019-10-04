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
    <div class="panel panel-primary">
        <div class="panel-heading">PRODUCT FORM</div>
        <div class="panel-body">
            <form action="{{route('bt645-add-product')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">NAME</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="Input...">
                </div>
                <div class="form-group">
                    <label for="">URL IMAGE</label>
                    <input type="text" class="form-control" name="image" id="" placeholder="Input...">
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
                    <label for="">DESCRIPTION</label>
                    <input type="text" class="form-control" name="description" id="" placeholder="Input...">
                </div>
                <button type="submit" class="btn btn-success">ADD</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
