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
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Source</th>
            <th>Published At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($News as $NewsItem)
        <tr @if($loop->iteration % 2 == 0)class="bg-gray-200"@endif>
            <td class="py-4">{{ $newsItem->title }}</td>
            <td class="py-4">{{ $newsItem->author }}</td>
            <td class="py-4">{{ $newsItem->source }}</td>
            <td class="py-4">{{ Carbon\Carbon::parse($newsItem->published_at)->setTimezone($newsItem->timeZone->name)->format('d-m-Y H:i').' UTC'.$newsItem->timeZone->offset }}</td>
            <td class="px-2 py-4">
                <a class="px-4 py-2 bg-blue-400 rounded" href="{{ route('admin.news.edit', $newsItem) }}">
                    Edit
                </a>
            </td>
            <td class="px-2 py-4">
                <form action="{{ route('admin.news.destroy', $newsItem) }}" class="delete-form-validation" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-400 rounded">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
