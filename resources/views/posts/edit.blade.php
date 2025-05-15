<!DOCTYPE HTML>

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<!-- body内だけを表示しています。 -->
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <textarea type='text' name='post[body]'> {{$post->body}}</textarea>
                    <p class="body__error" style="color:red">{{$errors->first('post.body')}}</p>
                </div>
                <input type="submit" value="保存">
            </form>
        </div>

        <div class = "footer">
            <a href="/posts/{{$post->id}}">戻る</a>
        </div>


    </body>

</html>