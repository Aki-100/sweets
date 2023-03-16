<x-app-layout>
    <x-slot name="header">
        Find Japanese regional sweets！
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Comments</title>
        <!--cssの読み込み-->
        <link rel="stylesheet" href="/css/stylesheet.css">        
    </head>
        <div class="comment">
            <body>
                {{--投稿画面へのリンク--}}
                <a href='/comments/create'>Let's comment !</a>
                {{--タイムライン表示ここから--}}
                <div class='comments'>
                    @foreach ($comments as $comment)
                    {{--お菓子名表示ここから--}}
                    <div class='name'>
                        <h2>＜Name of sweet＞</h2>
                        <h2 class='name'>
                            <a href="/sweets/{{ $comment->sweet->id }}">{{ $comment->sweet->name }}</a>
                        </h2>
                    </div>
                    {{--画像表示ここから--}}
                    @if($comment->image_url)
                    <div class="image">
                        <h1>＜Image＞</h1>
                        <img src="{{ $comment->image_url }}" alt="Image can't load."/>
                    </div>
                    @endif
                    {{--コメント表示ここから--}}
                    <p class='comment'>{{ $comment->comment }}</p>
                    {{--コメント削除機能ここから--}}
                    <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteComment({{ $comment->id }})">Delete</button>
                    </form>
                    @endforeach
                </div>
                {{--ペジネーションここから--}}
                <div class='paginate'>
                    {{ $comments->links() }}
                </div>
                <div class="footer">
                    <a href="/home">Back</a>
                </div>
            </div>
            <script>
                function deleteComment(id){
                    'use strict'
                    
                    if (confirm('Once deleted, it cannot be recovered. \nDo you really want to delete this?')){
                       document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </html>
</x-app-layout>
