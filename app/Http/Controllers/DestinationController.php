<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Pagination\Paginator;

class DestinationController extends Controller
{
    public function index()
    {
        $posts = post::paginate(5);
        return view('destinasi', ['post'=>$posts]);
    }

}
