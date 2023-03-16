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
            <div class='region'>
                @foreach ($regions as $region)
                    {{--Sweetインスタンスのプロパティとして地域名を参照--}}
                    <div class='region'>
                       <a href="/regions/{{$region->id}}">{{ $region->name }}</a>
                    </div>
                @endforeach
                <div class="footer">
                    <a href="/home">Back</a>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>
