<x-app-layout>
    <x-slot name="header">
        Find Japanese regional sweets！
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sweets</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
        <body>
                {{--投稿画面へのリンク--}}
                <a href='/sweets/create'>register sweet</a>
                {{--タイムライン表示ここから--}}
                <div class='sweets'>
                    @foreach ($sweets as $sweet)
                        <div class='sweet'>
                            <h2 class='name'><a href="/sweets/{{ $sweet->id }}">{{ $sweet->name }}</a>
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
                        </div>
                    @endforeach
                </div>
                <div class='error'>
                {{--ペジネーションここから--}}
                <div class='paginate'>
                    {{ $sweets->links() }}
                </div>
                {{--ユーザー名の表示ここから--}}
                <div class='username'>
                    {{ Auth::user()->name}}
                </div>
        </body>
    </html>
</x-app-layout>
