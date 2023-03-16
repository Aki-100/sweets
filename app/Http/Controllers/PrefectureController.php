<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;

class PrefectureController extends Controller
{
   public function index0(Prefecture $prefecture)
   //Model(Region.php)からインポートしたRegionをインスタンス化した$regionとして使用
   {
      return view('prefectures/index0') ->with(['prefectures' => $prefecture->get()]);
      //index0.blade.phpを表示
      //bladeファイル内変数を'regions'と設定、'regions'の中身にインスタンス化した$sweetを代入
   }
   
   public function index(Prefecture $prefecture)
   //Model(Prefecture.php)からインポートしたPrefectureをインスタンス化した$prefectureとして使用
   {
       return view('prefectures.index')->with(['sweets' => $prefecture->getByPrefecture()]);
       //prefecturesフォルダ内のindex.blade.phpを表示
       //bladeファイル内変数を'sweets'と設定し、インスタンス化した$prefectureを代入
       //$prefectureはPrefectureモデル内のgetByRegion関数を参照
   }
   
   
   
}
