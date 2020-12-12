<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="laravel-news\resources\css\style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="container">
            <h1>
                Laravel-news
            </h1>
        </div>
        <div class="container">
            <h2>
                さぁ、最新のニュースをシェアしましょう
            </h2>
            <form action="" method="POST">
                @csrf
                <div class="post_container_title">
                    <label for="title">
                        <p>
                            title:
                        </p>
                    </label>
                    <input type="text" name="title" id="title">
                </div>
                <!-- post_container_title終了 -->
                <div class="post_container_text">
                    <label for="contents">
                        <p>
                            記事：
                        </p>
                    </label>
                    <textarea name="text" id="" cols="30" rows="10"></textarea>
                </div>
                <!-- post_container_contents終了 -->
                <div class="post_container_btn">
                    <input type="submit" value="送信">
                </div>
                <!-- post_container_btn終了 -->
            </form>
        </div>
        <div class="container">
            <div class="result">
                @if(!empty($article))
                    @foreach($article as $value)
                        <hr>
                        <p>
                            {{$value['title']}}
                        </p>
                        <p>
                            {{$value['text']}}
                        </p>
                        <p>
                            <a href="{url{details}}">
                                明細情報
                            </a>
                        </p>
                    @endforeach
                @endif
            </div>
        </div>
    </main>
</body>

</html>
