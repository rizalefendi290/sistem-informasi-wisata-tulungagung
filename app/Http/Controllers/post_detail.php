<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class post_detail extends Controller
{
    public function detail(Request $request)
    {
        return redirect()->route('detail');
    }
}
