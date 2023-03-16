<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Sweet;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use Cloudinary;


class CommentController extends Controller
{
   public function index(Comment $comment)
   //Comment.phppからインポートしたCommentをインスタンス化した$commentとして使用
   {
      return view('comments/index') ->with(['comments' => $comment->getPaginateByComment()]);
      //commentsフォルダ内のindex.blade.phpを表示
      //bladeファイル内変数を'comments'と設定、'comments'の中身にインスタンス化した$commentを代入
      //getPaginateByCommentの中身はSweet関数を参照
   }
   
   public function create(Sweet $sweet)
   {
      return view('comments/create')->with(['sweets' => $sweet->get()]);
        //create.blade.phpを表示;
   }

   public function store(CommentRequest $request, Comment $comment)
    //Requests(CommentRequest.php),Model(Comment.php)からインポートしたCommentRequest,Commentをインスタンス化した$request,$sweetとして使用
    //Comment中身の$commentは空
   {
      $input = $request['comment'];
      //commentをキーに持つリクエストパラメータ(HTMLのFormタグ内で定義したname属性)を取得し、$inputに代入
      
      $image = $request->hasFile('image') ? $request->file('image') : "";
      //ファイルの有無確認
        
      $image_url = $image ? Cloudinary::upload($request->file('image')->getRealPath(), ['folder' => 'images' , 'width' =>250,'height' =>250,])->getSecurePath() : "";
      //ファイルが存在する場合、リサイズしてcloudinaryへ画像を送信（アップロード）し、'images'フォルダーに挿入。
      //画像のURLを$image_urlに代入
      //dd($image_url);
        
      $input += ['image_url' => $image_url];
      //連想配列としimage_urlを$inputに追加

      $comment['user_id'] = Auth::id();
      //ログイン済みユーザーidを取得し、$commentのuser_idカラムに値を挿入
      
      $comment->fill($input)->save();
      //インスタンスの各プロパティを上書き
      //保存処理を実行

      return redirect('/comments');
      //保存したcommnetのidを含んだURLにリダイレクト
      
   }
   
   public function delete(Comment $comment)
   {
      $comment->delete();
      return redirect('/comments');
   }
   
}
