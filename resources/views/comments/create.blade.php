<x-app-layout>
    <x-slot name="header">
        Find Japanese regional sweets！
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sweets</title>
        <!--cssの読み込み-->
        <link rel="stylesheet" href="/css/stylesheet.css">        
    </head>
        <div class="create">
            <body>
                {{--投稿機能ここから--}}
                <form action="/comments" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{--お菓子名選択ここから--}}
                    <div class="name">
                        <h>Name of sweet</h2>
                        <p>
                            <select name="comment[sweet_id]">
                            @foreach($sweets as $sweet)
                                <option value="{{ $sweet->id }}">{{ $sweet->name }}</option>
                            @endforeach
                            </select>
                        </p>    
                    </div>
                    {{--画像ファイル選択表示ここから--}}
                    <div class="image">
                        <input type="file" name="image">
                    </div>
                    {{--コメント入力ここから--}}
                    <div class="comment">
                        <h2>Comment</h2>
                        <textarea name="comment[comment]" placeholder="This sweet is very delicious!!!.">{{ old('comment.comment') }}</textarea>
                        <p class="text__error" style="color:red">{{ $errors->first('comment.comment') }}</p>
                    </div>
                    {{--書き込みボタン表示ここから--}}
                    <input type="submit" value="Comment"/>
                </form>
                <div class="footer">
                    <a href="/">Back</a>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>
