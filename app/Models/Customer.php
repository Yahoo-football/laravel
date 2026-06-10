<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'gender',
        'phone',
        'created_date',
        'updated_date',
    ];
    public function index()
    {
        $list = DB::table('customers')->get();
        return $list;
    }

}
