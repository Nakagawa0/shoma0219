<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
/*
 *Post一覧を表示する
 *  
 * @parm Post Postモデル
 * @return array Postモデルリスト 
 */    
    public function index(Post $post)
    {
        return $post ->get();
    }
}
