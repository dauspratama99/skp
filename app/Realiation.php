<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Realiation extends Model
{
    protected $fillable = ['id', 'quantity', 'credit_number', 'mutu', 'cost', 'time'];
    protected $primaryKey = 'id';
    public $incrementing = false;

    public static function realisasi()
    {
        return  DB::table('realiations')
            ->select(
                DB::raw("(SELECT mutu as mututarget FROM targets WHERE id= realiations.id) as mututarget"),
                DB::raw("(SELECT time as timetarget FROM targets WHERE id= realiations.id) as timetarget"),
                DB::raw("(SELECT cost as costtarget FROM targets WHERE id= realiations.id) as costtarget"),
                'realiations.*'
            )
            ->get();
    }
}
