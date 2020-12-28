<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="site_title_wrappper">
                @yield('site_title')
            </div>

            <div class="post_wrapper">
                @yield('post')
            </div>
        </div>

        <div class="container">
            <div class="article_wrapper">
                @yield('article')
            </div>
        </div>
    </main>
</body>

</html>
