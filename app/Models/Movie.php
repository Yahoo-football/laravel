<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Movie extends Model
{
    public function index()
    {
        $movies= DB::table('movies')->get();
        return $movies;
    }
}
