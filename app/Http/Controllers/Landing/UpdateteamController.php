<?php

namespace App\Http\Controllers\Landing;

use App\Models\team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UpdateteamController extends Controller
{
    public function index()
    {   
        // mengambil data dari table pegawai
    	$team = DB::table('team')->simplepaginate(5);

        return view('landing.updateteam',['team' => $team]);
    }

    public function tambah()
    {
 
	// memanggil view tambah
	return view('landing.tambahteam');
    }

    public function store(Request $request)

    {
        $validator = $request -> validate([
            'name' => 'required',
            'title' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "name.required" => "Please enter name",
            "title.required" => "Please enter title",
            "linkedin.required" => "Please enter linkedin",
            "facebook.required" => "Please enter facebook",
            "twitter.required" => "Please enter twitter",
        ]);


        $team = new Team;
        $team->name= $request->input('name');
        $team->title= $request->input('title');
        $team->facebook= $request->input('facebook');
        $team->twitter= $request->input('twitter');
        $team->linkedin= $request->input('linkedin');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/team/',$filename);
            $team->image = $filename;
        }
       
        $team->save();

        return redirect('/updateteam') -> with('success', "Data berhasil ditambahkan!");
    }

    // method untuk edit data team
    public function edit($id)
    {
         $team =  Team:: find($id);

        return view('landing.editteam', [
            'method'=> "PUT",
            'action'=> "/updateteam/edit/{id}'",
            'team'=> $team
        ]);
    }

    // update data team
    public function update(Request $request,$id)
    {
        $team = Team::find($id); 
            
        $validator = $request -> validate([
        'name' => 'required',
        'title' => 'required',
        'facebook' => 'required',
        'twitter' => 'required',
        'linkedin' => 'required',
        'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ],
        [
            "name.required" => "Please enter name",
            "title.required" => "Please enter title",
            "linkedin.required" => "Please enter linkedin",
            "facebook.required" => "Please enter facebook",
            "twitter.required" => "Please enter twitter",
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|file|max:2048,jpeg,png,jpg',
              ]);
            Storage::delete($team->image);
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/team/',$filename);
            $team->image = $filename;
        }


        $team->title = $request->title;
        $team->name = $request->name;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->save();

        return redirect('updateteam')->with('toast_success','Data Telah Diupdate');
    }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
        $team = Team::find($id);
        $path = 'storage/image/team/'.$team->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $team->delete();
        
        return back() -> with('info', "Data berhasil dihapus!");
    }
}
