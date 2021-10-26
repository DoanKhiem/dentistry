<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('created_at','DESC')->paginate(8);

        return view('user.blog', compact('blogs'));
    }

    public function blogDetail($id){
        $blog = Blog::find($id);
        return view('user.blogDetail', compact('blog'));
    }
}
