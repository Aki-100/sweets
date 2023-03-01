<?php

namespace App\Http\Controllers;

use App\Models\Sweet;
use App\Models\Region;
use App\Models\Prefecture;
use App\Models\user;
use App\Http\Requests\PostRequest;
use Cloudinary;
use Illuminate\Support\Facades\Auth;

class SweetController extends Controller
{

    public function index(Sweet $sweet)
    //Model(Sweet.php)からインポートしたSweetをインスタンス化して$sweetとして使用
    {
        return view('sweets/index')->with(['sweets' => $sweet->getPaginateByLimit()]);
        //index.blade.phpを表示
        //bladeファイル内変数を'sweets'と設定、'sweets'の中身にインスタンス化した$sweetを代入
    }
    
    public function show(Sweet $sweet)
    //Model(Sweet.php)からインポートしたSweetをインスタンス化して$sweetとして使用
    {
        return view('sweets/show')->with(['sweet'=> $sweet]);
        //show.blade.phpを表示
        //bladeファイル内変数を'sweet'と設定
        //中身の$sweetは指定のidのインスタンス
    }
    
    public function create(Region $region, Prefecture $prefecture)
    //Model(Region.php, Prefecture.php)からインポートしたRegion,Prefectureをインスタンス化して$region,$prefectureとして使用
    {
        return view('sweets/create')->with(['regions' => $region->get(),'prefectures' => $prefecture->get()]);
        //create.blade.phpを表示
        ///bladeファイル内変数を'regions','prefectures'と設定
    }
    
    public function store(PostRequest $request, Sweet $sweet)
    //Requests(PostRequest.php),Model(Sweet.php)からインポートしたPostRequest,Sweetをインスタンス化した$request,$sweetとして使用
    //Sweet中身の$sweetは空
    {   
        $input = $request['sweet'];
        //sweetをキーに持つリクエストパラメータを取得し、$inputに代入
        
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入
        
        $input += ['image_url' => $image_url];
        //連想配列とし$inputに追加
        
        $sweet['user_id'] = Auth::id();
        //ログイン済みユーザーidを取得し、$sweetのuser_idカラムに値を挿入
        
        $sweet->fill($input)->save();
        //インスタンスの各プロパティを上書き
        //保存処理を実行
        
        return redirect('/sweets/' . $sweet->id);
        //保存したsweetのidを含んだURLにリダイレクト
    }
    
    public function edit(Sweet $sweet, Region $region, Prefecture $prefecture)
    //Model(Sweet.php,Region.php,Prefecture.phpからインポートしたSweet,Region,Prefectureをインスタンス化して$sweet,$region,$prefectureとして使用
    {
        $regions=$region->get();
        $prefectures=$prefecture->get();
        //dd($regions);
        return view('sweets/edit')->with(['sweet' => $sweet, 'regions' => $regions, 'prefectures' => $prefectures]);
        //edit.blade.phpを表示
        //bladeファイル内変数を'sweet''regions''prefectures'と設定
        //中身の$sweet,$region,$prefectureは指定のidのインスタンス
    }
    
    public function delete(Sweet $sweet)
    {
        $sweet->delete();
        return redirect('/');
    }
    
}