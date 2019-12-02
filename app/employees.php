<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table = "employees";

    protected $fillable = ['username','fullname','nik','email'];
}