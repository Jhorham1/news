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
            <legend class="text-center header">Show new</legend>
            <a href="{{ url('/index')}}"><button  class="left btn btn-primary btn-lg ">Back</button></a>
        </div>
        <div class="card-body">
            <form action="/create" method="POST">
                {!! csrf_field() !!}
                <fieldset id="new">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input name="title" class="form-control" type="text" value="{{ $new->title }}" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="author">Author</label>
                            <input name="author" class="form-control" type="text" value="{{ $new->author }}" readonly>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="source">Source</label>
                            <input name="source" class="form-control" type="text" value="{{ $new->source }}" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="url">Url</label>
                            <input name="url" class="form-control" type="text" value="{{ $new->url }}" readonly>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="url_image"> Url Image </label>
                            <<input name="url_image" class="form-control" type="text" value="{{ $new->url_image }}" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="published_at">Date</label>
                            <input name="published_at" class="form-control" type="text" value="{{ $new->published_at }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input name="description" class="form-control" type="text" value="{{ $new->description }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="message" name="content" placeholder="{{ $new->content }}"
                                  rows="7" readonly></textarea>
                    </div>




                </fieldset>

                <legend class="text-sm-right">AppIson</legend>
            </form>
        </div>

    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
@endsection
