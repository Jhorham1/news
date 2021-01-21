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
            <legend class="text-center header">Enter The News</legend>
            <a href="{{ url('/index')}}"><button  class="left btn btn-primary btn-lg ">Back</button></a>
        </div>

        <div class="card-body">
            <form action="/create" method="POST">
                {!! csrf_field() !!}
                <fieldset>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" placeholder="Enter Title..." class="form-control"
                                   required="required">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="author">Author</label>
                            <input type="text" id="author" name="author" placeholder="Enter Author..."
                                   class="form-control" required="required">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="source">Source</label>
                            <input type="text" id="source" name="source" placeholder="Enter Source..."
                                   class="form-control" required="required">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="url">Url</label>
                            <input type="text" id="url" name="url" placeholder="Enter Url..." class="form-control" required="required">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="url_image">Url Image</label>
                            <input type="text" id="url_image" name="url_image" placeholder="Enter Url image..."
                                   class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="published_at">Date</label>
                            <input id="published_at" type="date" name="published_at"  required value="{{old('fecha_hora')}}" placeholder="Enter Date..."
                                   class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input id="description" name="description" placeholder="Enter Description..."
                                  class="form-control" required="required">

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" placeholder="Enter your News "
                                  rows="7" required="required"></textarea>
                    </div>

                    <div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Upload News</button>
                        </div>
                    </div>

                </fieldset>
                <legend class="text-sm-right">AppIson</legend>
            </form>
        </div>
        <legend class="text-sm-right">AppIson</legend>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
@endsection
