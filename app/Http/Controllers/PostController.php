<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $table = Post::all();
        return view('landingpageinformation', ['index'=>$table]);
    }
}
