<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testViewController extends Controller
{
    public function showPage() {
        return view('testView');
    }

}
