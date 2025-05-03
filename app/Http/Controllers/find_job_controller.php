<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class find_job_controller extends Controller
{
    public function show_page() {
        return view('find-jobs');
    }
}
