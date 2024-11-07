<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('Posts.index');
    }
    
    public function create(){
        return view('Posts.create');
    }
    
    public function show($post){
        return view('Posts.show', compact('post'));
    }
}
