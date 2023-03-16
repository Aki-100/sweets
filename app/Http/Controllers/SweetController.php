<?php

namespace App\Http\Controllers;

use App\Models\Sweet;
use App\Models\Like;
use App\Models\Region;
use App\Models\Prefecture;
use App\Models\Comment;
use App\Models\user;
use App\Http\Requests\PostRequest;
use Cloudinary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class SweetController extends Controller
{
    public function ranking()
    {
        $ranking = Sweet::withCount('likes')->orderBy('likes_count', 'desc')->paginate(5);
        //$rankingに「いいね」が多い順に５件ずつ取得し代入
        return view('home', ['sweets' => $ranking]);
    }
    
    public function index(Sweet $sweet, Request $request)
    //Model(Sweet.php,Like.php)からインポートしたSweet,Likeをインスタンス化して$sweet,$likeとして使用
    {
        $search = $request->input('search');
        //$searchにビューのname="search"から受けとった値を代入
        
        $sweets = $sweet;
        
        if(!empty($search)) {
            //もし$searchが空でないならば、
            $sweets->where('name', 'LIKE', "%{$search}%");
            //nameカラム内において、LIKE検索を用いて、部分一致する文字を含むデータを$rankingに代入
        }
        
        $sweet_search = $sweets->getPaginateByLimit();
                
        return view('sweets/index', ['sweets' => $sweet_search]);
        //index.blade.phpを表示
        //bladeファイル内変数を'sweets'と設定、'sweets'の中身にインスタンス化した$sweetを代入
    }
    
    public function show(Sweet $sweet, Comment $comment)
    //Model(Sweet.php)からインポートしたSweetをインスタンス化して$sweetとして使用
    {
        
        return view('sweets/show')->with(['sweet'=> $sweet, 'comments'=> $comment->getPaginateByComment()]);
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
        //sweetをキーに持つリクエストパラメータ(HTMLのFormタグ内で定義したname属性)を取得し、$inputに代入
        
        $image = $request->hasFile('image') ? $request->file('image') : "";
        //ファイルの有無確認
        
        $image_url = $image ? Cloudinary::upload($request->file('image')->getRealPath(), ['folder' => 'images' , 'width' =>250,'height' =>250,])->getSecurePath() : "";
        //ファイルが存在する場合、リサイズしてcloudinaryへ画像を送信（アップロード）し、'images'フォルダーに挿入。
        //画像のURLを$image_urlに代入
        //dd($image_url);
        
        $input += ['image_url' => $image_url];
        //連想配列としimage_urlを$inputに追加
        
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
    
    public function update(PostRequest $request, Sweet $sweet)
    {
        $input = $request['sweet'];
        //sweetをキーに持つリクエストパラメーターを取得
        
        $image = $request->hasFile('image') ? $request->file('image') : "";
        //ファイルの有無確認
        
        $image_url = $image ? Cloudinary::upload($request->file('image')->getRealPath(), ['folder' => 'images' , 'width' =>250, 'height' =>250,])->getSecurePath() : "";
        //ファイルが存在する場合、リサイズしてcloudinaryへ画像を送信（アップロード）し、'images'フォルダーに挿入。
        //画像のURLを$image_urlに代入
        //dd($image_url);
        
        $input += ['image_url' => $image_url];
        //連想配列とし$inputに追加
        
        $sweet->fill($input)->save();
        //データに差分がある場合のみ更新
        
        return redirect('/sweets/' . $sweet->id);
        //保存したsweetのidを含んだURLにリダイレクト

    }
    
    public function delete(Sweet $sweet)
    {
        $sweet->delete();
        return redirect('/home');
    }
    
}