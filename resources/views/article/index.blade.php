@extends('layout')

@section('title','記事一覧')

@section('site_title')
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
@endsection

@section('post')

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
        <div class="post_container_text">
            <label for="contents">
                <p>
                    記事：
                </p>
            </label>
            <textarea name="text" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="post_container_btn">
            <input type="submit" value="送信">
        </div>

    </form>
@endsection

@section('article')


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
            <a href="{{ route('details_route', $value['id']) }}">
                明細情報
            </a>
        </p>
        <div class="edit_container">
            <p>
                <a href="{{route('edit_route',$value['id'])}}">
                    編集
                </a>
            </p>
        </div>
        @endforeach
@endif

@endsection
