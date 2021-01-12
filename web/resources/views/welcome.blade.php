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
<div class="container">
    <div class="card">
        <div class= "card-header">
            <div class= "card-body">
                <div class="card">
                    <form class="form" method="post">
                        <fieldset>
                            <legend class="text-center header">Enter The News</legend>
                            <div class="card-body">
                                <div class= "card-header">
                                    <input type="text" name="title" placeholder="Title" class="form-control">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class= "card-header">
                                    <input type="text" name="author" placeholder="Title" class="form-control">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class= "card-header">
                                    <input type="text" name="source" placeholder="Title" class="form-control">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class= "card-header">
                                    <input type="text" name="url" placeholder="Title" class="form-control">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class= "card-header">
                                    <input type="text" name="url_image" placeholder="Title" class="form-control">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class= "card-header">
                                    <input type="text" name="description" placeholder="Title" class="form-control">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class= "card-header">
                                    <input type="text" name="content" placeholder="Title" class="form-control">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class= "card-header">
                                    <input type="text" name="published_at" placeholder="Title" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" placeholder="Content" class="form-control">
                                </div>
                            </div>

                            <div class="card-group">
                                <div class="card-header">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="message" name="message" placeholder="Enter your News " rows="7"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Upload News</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
