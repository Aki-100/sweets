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
            <h1 class="name">
                {{ $sweet->name }}
            </h1>
            <div class="content">
                <div class="content__sweet">
                    <h3>Description</h3>
                    <p>{{ $sweet->description }}</p>
                </div>
            </div>
            <div>
                <img src="{{ $sweet->image_url }}" alt="Image can't load."/>
            </div>
            {{--Sweetインスタンスのプロパティとして地域名、都道府県名を参照--}}
            <div class='region'>
                <h2>＜Region＞</Region></h2>
                <a href="/regions/{{ $sweet->region->id }}">{{ $sweet->region->name }}</a>
            </div>
            <div class='Prefecture'>
                <h2>＜Prefecture＞</h2>
            <a href="/prefectures/{{ $sweet->prefecture->id }}">{{ $sweet->prefecture->name }}</a>
            </div>
            <div class="edit">
                <a href="/sweets/{{ $sweet->id }}/edit">Edit</a>
            </div>
            <div class="footer">
                <a href="/">Back</a>
            </div>
                {{--ユーザー名の表示ここから--}}
                <div class='username'>
                    {{ Auth::user()->name}}
                </div>
        </body>
    </html>
</x-app-layout>
