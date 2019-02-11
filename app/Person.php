<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends Model
{
    //
    protected function peopleAll()
    {
        $items = DB::table('people')->get();
        return $items;
    }
}
