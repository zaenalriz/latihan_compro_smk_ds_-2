<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::get();
        $blog_terbaru = Blogs::orderBy('id', 'desc')->limit(3)->get();
        return view('blog', [
            'blogs' => $blogs,
            'blog_terbaru' => $blog_terbaru
        ]);
    }
    public function detail($slug)
    {
        $blog=Blogs::where('slug',$slug)->first();
        return view('blog_detail',[
            'blog'=>$blog
        ]);
    }
}
