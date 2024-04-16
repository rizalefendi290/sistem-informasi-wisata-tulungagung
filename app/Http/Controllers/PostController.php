<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = post::latest()->paginate(5);
        return view('destinasi', compact('post'));
    }

    public function show($id){
        $posts = Post::findOrFail($id);
        return view('detail',['post' => $posts]);
    }
    public function search(Request $request){
        $posts = post::where('nama_tempat','LIKE','%'.$request->search.'%')->orWhere('lokasi_tempat','LIKE','%'.$request->search.'%');
        return view('destinasi-cari',['post'=>$posts]);
    }
}
