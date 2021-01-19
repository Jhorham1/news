<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container-md">

    <div class="card">
        <div class="card-header">
            <legend class="text-center header">Display News</legend>
            <a href="{{ url('/news/create')}}" ><button  class="btn btn-primary btn-lg">Create News</button>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <th>id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Source</th>
                <th>Options</th>
                @foreach($news as $row)
                    <tr>
                        <th>{{$row['id']}}</th>
                        <th>{{$row['title']}}</th>
                        <th>{{$row['author']}}</th>
                        <th>{{$row['source']}}</th>
                        <th>
                            <button type="submit" formaction="{{url('/news/update')}}" class="btn btn-primary btn-lg">edit</button>
                            <button type="submit" formaction="{{url('/news/delete')}}" class="btn btn-primary btn-lg">delete</button>
                        </th>
                    </tr>


                @endforeach
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
