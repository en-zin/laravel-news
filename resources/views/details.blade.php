<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <p>
        {{$details['title']}}
    </p>
    <p>
        {{$details['text']}}
    </p>
    <p>
        {{$id}}
    </p>
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




</body>

</html>
