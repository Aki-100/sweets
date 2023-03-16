<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
   public function index0(Region $region)
   //Model(Region.php)からインポートしたRegionをインスタンス化した$regionとして使用
   {
      return view('regions/index0') ->with(['regions' => $region->get()]);
      //index0.blade.phpを表示
      //bladeファイル内変数を'regions'と設定、'regions'の中身にインスタンス化した$sweetを代入
   }
   
   
   public function index(Region $region)
   //Model(Region.php)からインポートしたRegionをインスタンス化した$regionとして使用
   {
       return view('regions/index')->with(['sweets' => $region->getByRegion()]);
       //regionsフォルダ内のindex.blade.phpを表示
       //bladeファイル内変数を'sweets'と設定し、インスタンス化した$regionを代入
       //$regionはRegionモデル内のgetByRegion関数を使用
   }
}
