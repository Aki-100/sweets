<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sweet;
use App\Models\Like;

class LikeController extends Controller
{
    public function like(Request $request, Sweet $sweet)
    {
        $like=New Like();
        $like->sweet_id=$sweet->id;
        $like->user_id=Auth::id();
        $like->save();
        return back();
    }
    
    public function unlike(Request $request, Sweet $sweet)
    {
        $user=Auth::id();
        $like=Like::where('sweet_id', $sweet->id)->where('user_id', $user)->first();
        $like->delete();
        return back();
    }
}
