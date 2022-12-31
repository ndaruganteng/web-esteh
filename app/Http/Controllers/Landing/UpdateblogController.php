<?php

namespace App\Http\Controllers\Landing;

use App\Models\blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UpdateblogController extends Controller
{
    public function index()
    {   
        // mengambil data dari table pegawai
    	$blog = DB::table('blog')->simplepaginate(5);

        return view('landing.updateblog',['blog' => $blog]);
    }

    public function tambah()
    {
 
	// memanggil view tambah
	return view('landing.tambahblog');
    }

    public function store(Request $request)
    {
        $validator = $request -> validate([
            'title' => 'required',
            'jobs' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "name.required" => "Please enter activity name",
            "date.required" => "Please enter date",
            "description.required" => "Please enter description",
        ]);


        $blog = new Blog;
        $blog->title= $request->input('title');
        $blog->jobs= $request->input('jobs');
        $blog['slug'] = Str::slug($request->title);
        $blog['date']= Carbon::now($request->date);
        $blog->description= $request->input('description');
        $blog['except']= Str::limit(strip_tags($request->description,10));
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->jobs.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/blog/',$filename);
            $blog->image = $filename;
        }
       
        $blog->save();

        return redirect('/updateblog') -> with('success', "Data berhasil ditambahkan!");
    }

    // method untuk edit data pegawai
    public function edit($id)
    {

        $blog =  Blog:: find($id);

        return view('landing.editblog', [
            'method'=> "PUT",
            'action'=> "/updateblog/edit/{id}'",
            'blog'=> $blog
        ]);
        
    }

    // update data pegawai
    public function update(Request $request,$id)
    {
        $blog = Blog::find($id); 
               
        $validator = $request -> validate([
            'title' => 'required',
            'jobs' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "name.required" => "Please enter activity name",
            "date.required" => "Please enter date",
            "description.required" => "Please enter description",
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|file|max:2048,jpeg,png,jpg',
              ]);
            Storage::delete($blog->image);
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->jobs.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/blog/',$filename);
            $blog->image = $filename;
        }


        $blog->title = $request->title;
        $blog->jobs = $request->jobs;
        $blog['slug'] = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->save();

        return redirect('updateblog')->with('toast_success','Data Telah Diupdate');
        
    }

        // method untuk hapus data pegawai
    public function hapus($id)
    {
        $blog = Blog::find($id);
        $path = 'storage/image/blog/'.$blog->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $blog->delete();
        
        return back() -> with('toast_info', "Data berhasil dihapus!");
    }

    public function show($id){

        return $id;
    }
}
