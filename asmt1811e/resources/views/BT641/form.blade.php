<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T1811E Laravel Framework</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        function deleteStudent(id) {
            $.post('{{ route('delete-student') }}', {
                "_token": "{{ csrf_token() }}",
                id: id
            }, function() {
                location.reload();
            });
        }
    </script>
</head>
<body>
<div class="container">
    @if ($list ?? '' !=null)
        <div class="panel panel-primary">
            <div class="panel-heading">
                Table Student Infomation
            </div>
            <div class="panel-body">
                <div class="row">
                    <table class="table table-bordered">
                        <tr>
                            <th>STT</th>
                            <th>NAME</th>
                            <th>AGE</th>
                            <th>ADDRESS</th>
                            <th width="30px"></th>
                        </tr>
                        @foreach($list ?? '' ?? '' as $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$item->fullname}}</td>
                                <td>{{$item->age}}</td>
                                <td>{{$item->address}}</td>
                                <td><button class="btn btn-danger" onclick="deleteStudent({{$item->id}})">DELETE</button></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Student Form
            </div>
            <div class="panel-body">
                <form action="{{route('post-student')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">NAME</label>
                        <input type="text" class="form-control" name="fullname" id="" placeholder="Input...">
                    </div>
                    <div class="form-group">
                        <label for="">AGE</label>
                        <input type="text" class="form-control" name="age" id="" placeholder="Input...">
                    </div>
                    <div class="form-group">
                        <label for="">ADDRESS</label>
                        <input type="text" class="form-control" name="address" id="" placeholder="Input...">
                    </div>
                    <button type="submit" class="btn btn-success">SAVE</button>
                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>
