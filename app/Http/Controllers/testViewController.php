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


    public function getData() {
        $getJobId = DB::table('test_job_id')->select('id', 'job_name', 'job_company', 'job_id')->get();
        return response()->json($getJobId);
    }
}
