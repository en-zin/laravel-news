<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category }}</title>
</head>
<body>
    <h1>{{$category}}</h1>

    @if($category === 'news')
        <p>本日のニュースをお伝えします。</p>
    @endif
</body>
</html>
