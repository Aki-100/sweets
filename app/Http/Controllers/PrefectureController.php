<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;

class PrefectureController extends Controller
{
       public function index(Prefecture $prefecture)
   //Model(Prefecture.php)からインポートしたPrefectureをインスタンス化した$prefectureとして使用
   {
       return view('prefectures.index')->with(['sweets' => $prefecture->getByPrefecture()]);
       //prefecturesフォルダ内のindex.blade.phpを表示
       //bladeファイル内変数を'sweets'と設定し、インスタンス化した$prefectureを代入
       //$prefectureはPrefectureモデル内のgetByRegion関数を参照
   }
}
