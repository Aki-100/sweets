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
            {{--編集画面ここから--}}
            <h1 class="title">Editing screen</h1>
            <div class="content">
                <form action="/sweets/{{ $sweet->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="content__name">
                        <h>Name of sweet</h2><br>
                        <input type="text" name="sweet[name]" value="{{ $sweet->name }}"/>
                        <p class="name__error" style="color:red">{{ $errors->first('sweet.name') }}</p>
                    </div>
                    <div class="content__description">
                        <h2>Description</h2>
                        <textarea name="sweet[description]">{{ $sweet->description }}</textarea>
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
                                @if($region->id == $sweet->region_id)
                                <option value="{{ $region->id }}" selected>{{ $region->name }}</option>
                                @else
                                <option value="{{ $region->id }}" >{{ $region->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    {{--都道府県選択ここから--}}
                    <div class="prefecture">
                        <h2>Prefecture</h2>
                        <select name="sweet[prefecture_id]">
                            @foreach($prefectures as $prefecture)
                                @if($prefecture->id == $sweet->prefecture_id)
                                <option value="{{ $prefecture->id}}" selected>{{ $prefecture->name }}</option>
                                @else
                                <option value="{{ $prefecture->id }}" >{{ $prefecture->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    {{--登録ボタン表示ここから--}}
                    <input type="submit" value="Update"/>
                </form>
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
