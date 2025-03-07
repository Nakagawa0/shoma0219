<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        // return $post->get();
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
        /**
         * 特定のIDのpostを表示する
         * 
         * @parms Object Post // 引数の$postはid=1のPostインスタンス
         * @return Reposnes post view
         */
        public function show(Post $post)
        {
            return view('posts.show')->with(['post' => $post]);
            // 'post'はbladeファイルで使う変数。中身は$postはid=1の
        }
        public function create()
        {
            return view('posts.create');
        }
        public function store(Post $post, PostRequest $request)
        {
            $input = $request['post'];

            $post->fill($input)->save();
            return redirect('/posts/' . $post->id);
        }
}

