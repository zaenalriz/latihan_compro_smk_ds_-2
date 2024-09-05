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
      $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        'file'=>'required|file|mimes:jpeg,png|max:2048'
      ]);
      $data=[
        'title'=>$request->title,
        'slug'=>Str::slug($request->title),
        'description'=>$request->description,
        'created_by'=>auth()->user()->id
      ];
      if($request->hasFile('file')){
        $file=$request->file('file');
        // 939393929.png
        $filename=time().'.'.$file->getClientOriginalExtension();
        // pindahkan->ke folder public->folder blog
        $file->move(public_path('blogs'),$filename);
        $data['file']='blogs/'.$filename;
    }
       Blogs::insert($data);
       return redirect()->route('backend.blog');
    }
    public function aksi_hapus($id){
      $ambilDataBlog=Blogs::where('id',$id)->first();
      Blogs::where('id',$id)->delete();
      $this->hapus_gambar($ambilDataBlog->file);
      return redirect()->back();
    }
    protected function hapus_gambar($gambar){
      if(file_exists($gambar)){
        unlink($gambar);
      }
    }
}
   
