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
            <div class="create">
            {{--投稿機能ここから--}}
            <form action="/sweets" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="name">
                    <h>Name of sweet</h2><br>
                    <input type="text" name="sweet[name]" placeholder="name of sweet" value="{{ old('sweet.name') }}"/>
                    <p class="name__error" style="color:red">{{ $errors->first('sweet.name') }}</p>
                </div>
                <div class="description">
                    <h2>Description</h2>
                    <textarea name="sweet[description]" placeholder="This is a chocolate sweet.">{{ old('sweet.description') }}</textarea>
                    <p class="description__error" style="color:red">{{ $errors->first('sweet.description') }}</p>
                </div>
                {{--画像ファイル選択ボタン表示ここから--}}
                <div class="image">
                    <input type="file" name="image">
                </div>
                {{--地域選択ここから--}}
                <div class="region">
                    <h2>Region</h2>
                    <select name="sweet[region_id]">
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{--都道府県選択ここから--}}
                <div class="prefecture">
                    <h2>Prefecture</h2>
                    <select name="sweet[prefecture_id]">
                        @foreach($prefectures as $prefecture)
                            <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{--登録ボタン表示ここから--}}
                <input type="submit" value="Register"/>
            </form>
            <div class="footer">
                <a href="/">Back</a>
            </div>
            </div>
        </body>
    </html>
</x-app-layout>
