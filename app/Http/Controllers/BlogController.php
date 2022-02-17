<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    public function index() {
        $posts = Blog::all();
        return view('users.blog', compact('posts'));
    }


    public function currentPost(Request $request, $slug) {

        $blogpost = DB::table('blogs')->where('slug', '=', $slug)->get();

        return view('users.blogpost', compact('blogpost'));
    }


}
