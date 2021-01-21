@extends('layouts.app')

@section('content')
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
            <a href="{{ url('/news/create')}}" ><button  class="btn btn-primary btn-lg">Create News</button></a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <th>id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Source</th>

                <th class="text-center">Options</th>
                @foreach($news as $row)
                    <tr>
                        <th>{{$row['id']}}</th>
                        <th>{{$row['title']}}</th>
                        <th>{{$row['author']}}</th>
                        <th>{{$row['source']}}</th>

                        <th style="vertical-align: middle">
                            <a href="{{route('show', $row->id)}}" class=" btn btn-primary btn-lg " >Show</a>
                            <a href="{{route('destroy', $row->id)}}" class=" btn btn-primary btn-lg btn-danger" >Delete</a>

                        </th>
                    </tr>


                @endforeach

            </table>
            @if($q==0)


            @elseif($q==20)
                <tr>
                    <a class="text" value=$q ></a>
                    <a href="{{route('page', 'next')}}" >Next</a>
                </tr>
            @else
            @endif

            <legend class="text-sm-right">AppIson</legend>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
@endsection
