<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog=Blogs::get();
        return view('backend.blog.index',[
            'blog'=>$blog
        ]);
    }
    public function tambah(){
        return view('backend.blog.tambah');
    }
}
