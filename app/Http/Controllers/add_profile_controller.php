<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add_profile_controller extends Controller
{
    public function show_page() {
        return view('add-profile');
    }
}
