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
            <div class="region">
                {{--投稿画面へのリンク--}}
                <a href='/sweets/create'>register sweet</a>
                {{--タイムライン表示ここから--}}
                <div class='sweets'>
                    @foreach ($sweets as $sweet)
                        <div class='name'>
                        <p>＜Name of sweet＞</p>
                        <p class='name'><a href="/sweets/{{ $sweet->id }}">{{ $sweet->name }}</a></p>
                        </div>
                        {{--画像表示ここから--}}
                        @if($sweet->image_url)
                            <div class="image">
                                <h1>＜Image＞</h1>
                                <img src="{{ $sweet->image_url }}" alt="Image can't load."/>
                            </div>
                        @endif
                        <div class='description'>＜Description＞</div>
                        <p class='description'>{{ $sweet->description }}</p>
                        {{--Sweetインスタンスのプロパティとして地域名、都道府県名を参照--}}
                        <div class='region'>
                            <h2>＜Region＞</Region></h2>
                            <a href="/regions/{{ $sweet->region->id }}">{{ $sweet->region->name }}</a>
                        </div>
                        <div class='Prefecture'>
                            <h2>＜Prefecture＞</h2>
                        <a href="/prefectures/{{ $sweet->prefecture->id }}">{{ $sweet->prefecture->name }}</a>
                        </div>
                        
                        {{--いいねボタンここから--}}
                        <span>
                            <img src="{{ asset('images/likebutton.png') }}" width="30px">
                            @if(auth()->user()->islike($sweet->id))
                            {{--もし$likeがあれば=ログインユーザーが「いいね」をしていたら--}}
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
                            
                        {{--投稿削除機能表示ここから--}}
                        <form action="/sweets/{{ $sweet->id }}" id="form_{{ $sweet->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deleteSweet({{ $sweet->id }})">Delete</button>
                        </form>
                    @endforeach
                </div>
                {{--ペジネーションここから--}}
                <div class='paginate'>
                    {{ $sweets->links() }}
                </div>
                <div class="footer">
                    <a href="/home">Back</a>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>
