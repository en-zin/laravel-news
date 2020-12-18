<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <h1>
        <p>
            <a href="{{ route('main_route') }}">
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

    @foreach($details as $value)
    <p>
        {{$value['title']}}
    </p>
    <p>
        {{$value['text']}}
    </p>
    @endforeach

    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="post_container_comment">

                <label for="comment">
                    <p>
                        コメント：
                    </p>
                </label>
                <textarea name="comment" id="comment" cols="30" rows="10">
                </textarea>
            </div>
            <input type="hidden" name="id" value="{{$id}}">
            <div class="post_container_btn">
                <input type="submit" value="送信">
            </div>
        </form>
    </div>


    <div class="container">

        @if(!empty($comment))
            @foreach($comment as $value)
            <!-- actionでルーティング処理をするとget要素になりパラメータが増えバグる -->
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                        <p>
                            {{$value['comment']}}
                        </p>
                    <input type="hidden" name="comment_id" value="{{$value['comment_id']}}">
                    <input type="submit" value="消去">
                </form>
            @endforeach
        @endif
    </div>



</body>

</html>
