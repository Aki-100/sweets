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
        <body>
            <div class="show">
                <h1 class="name">
                    ＜Name of sweet＞<br>
                    {{ $sweet->name }}<br>
                </h1>
                {{--画像表示ここから--}}
                @if($sweet->image_url)
                <div class="image">
                    <h2>＜Image＞</h2>
                    <img src="{{ $sweet->image_url }}" alt="Image can't load."/>
                </div>
                @endif
                <div class="description">
                    <h3>＜Description＞</h3>
                    <p>{{ $sweet->description }}</p>               
                </div>
                
                {{--Sweetインスタンスのプロパティとして地域名、都道府県名を参照--}}
                <div class='region'>
                    <h2>＜Region＞</h2>
                    <a href="/regions/{{ $sweet->region->id }}">{{ $sweet->region->name }}</a>
                </div>
                <div class='prefecture'>
                    <h2>＜Prefecture＞</h2>
                <a href="/prefectures/{{ $sweet->prefecture->id }}">{{ $sweet->prefecture->name }}</a>
                </div>
                
                {{--編集画面へのリンクここから--}}
                <div class="edit">
                    <a href="/sweets/{{ $sweet->id }}/edit">Edit</a>
                </div>
                
                {{--いいねボタンここから--}}
                <span>
                    <img src="{{ asset('images/likebutton.png')}}" width="30px">
                    @if(auth()->user()->islike($sweet->id))
                    {{--もし$likeがあれば=ユーザーが「いいね」をしていたら--}}
                        <a href="{{ route('unlikes', $sweet) }}" class="btn_store">
                        {{--「いいね」取り消し用ボタンを表示--}}    
                            Good
                            <span class="badge">
                                {{ $sweet->likes->count() }}
                                {{--「いいね」数表示--}}
                            </span>
                        </a>
                    @else
                        {{--まだユーザーが「いいね」をしていなければ--}}
                        <a href="{{ route('likes', $sweet) }}"　class="btn_destroy">
                        {{--「いいね」ボタンを表示--}}
                            Good
                            <span class="badge">
                                {{ $sweet->likes->count() }}
                                {{--「いいね」数表示--}}
                            </span>
                        </a>
                    @endif
                    </span>
                
                {{--コメントのタイムラインここから--}}
                <div class="comment">
                @foreach ($comments as $comment)
                    @if($comment->image_url)
                    <div class="image">
                        <h1>＜Image＞</h1><br>
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
        </body>
    </html>
</x-app-layout>
