<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getPosts($count) {
        $result = Post::all()->take($count);
        return $result;
    }
    public function newPost(Request $request) {

//        $file = $request->file('photo');
//        $fileName = $file->getClientOriginalName();
//
//        $post = new Post;
//        $post->theme = $request->theme;
//        $post->title = $request->title;
//        $post->text = $request->text;
//        $post->photo = $fileName;
//        $post->save();
//
//        $file->move(public_path() . '/img/blogPostPhotos', $fileName);
//        return redirect('/home');
        return $request->photo;
    }
}
