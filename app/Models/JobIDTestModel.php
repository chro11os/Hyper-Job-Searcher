<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobIDTestModel extends Model
{
    use HasFactory;
    protected $table = "test_job_id";
    protected $fillable = ['location', 'job_type', 'job_id', 'job_name','job_link'];
}
