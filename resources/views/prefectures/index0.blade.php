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
            <div class='prefecture'>
                @foreach ($prefectures as $prefecture)
                    {{--Sweetインスタンスのプロパティとして都道府県名を参照--}}
                    <div class='prefecture'>
                       <a href="/prefectures/{{$prefecture->id}}">{{ $prefecture->name }}</a>
                    </div>
                @endforeach
            <div class="footer">
                <a href="/home">Back</a>
            </div>
            </div>
        </body>
    </html>
</x-app-layout>
