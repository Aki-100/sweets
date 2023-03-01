<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
   public function index(Region $region)
   //Model(Region.php)からインポートしたRegionをインスタンス化した$regionとして使用
   {
       return view('regions/index')->with(['sweets' => $region->getByRegion()]);
       //regionsフォルダ内のindex.blade.phpを表示
       //bladeファイル内変数を'sweets'と設定し、インスタンス化した$regionを代入
       //$regionはRegionモデル内のgetByRegion関数を参照
   }
}
