<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>
            <p>
                <a href="{{route('main_route') }}">
                    Laravel-News
                </a>
            </p>
        </h1>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $err )
            <li>
                {{$err}}
            </li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="container">
        <h2>
            編集画面
        </h2>
        @foreach($article as $value)
            <form action="" method="POST">
                @csrf
                <div class="post_container_title">
                    <label for="title">
                        <p>
                            title:
                        </p>
                    </label>
                    <input type="text" name="title" id="title" value="{{$value['title']}}">
                </div>
                <!-- post_container_title終了 -->
                <div class="post_container_text">
                    <label for="contents">
                        <p>
                            記事：
                        </p>
                    </label>
                    <textarea name="text" id="">
                        {{$value['text']}}
                    </textarea>
                </div>
                <!-- post_container_contents終了 -->
                <div class="post_container_btn">
                    <input type="submit" value="送信">
                </div>
                <!-- post_container_btn終了 -->
            </form>
        @endforeach
    </div>
</body>

</html>
