<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogdetailController extends Controller
{
    public function index()
    {
        return view('landing.blogdetail');
    }
    public function blogDetail($id){
        return $id;
     }
}
