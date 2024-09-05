<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blogs::get();
        return view('backend.blog.index', [
            'blog' => $blog
        ]);
    }
    public function tambah()
    {
        return view('backend.blog.tambah');
    }
    public function aksi_tambah(Request $request)
    {
       Blogs::insert([
        'title'=>$request->title,
        'slug'=>Str::slug($request->title),
        'description'=>$request->description,
        'file'=>'',
        'created_by'=>auth()->user()->id
       ]);
       return redirect()->route('backend.blog');
    }
}
