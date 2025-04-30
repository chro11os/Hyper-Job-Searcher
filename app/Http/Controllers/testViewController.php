<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class testViewController extends Controller
{
    public function showPage() {
        return view('testView');
    }

    public function pullData() {
        $results = DB::select('select * from test_job_id where id = ?', [1]);
    }
}
