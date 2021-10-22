<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use Illuminate\Support\Facades\DB;

class Target extends Model
{
    protected $fillable = [
        'id',
        'activities', 'ak', 'credit_number', 'quantity', 'output_id', 'mutu', 'time', 'cost', 'nip_rated', 'periode_id', 'type',
        'Parent_id'
    ];
    protected $primaryKey = 'id';
    // public $incrementing = false;
    public function parent()
    {
        return $this->hasone(Unit::class, 'id', 'parent_id');
    }

    public static function target()
    {
        return  DB::table('targets')
            ->select(
                DB::raw("(SELECT name as dinilai FROM users WHERE nip= targets.nip_rated) as dinilai"),
                DB::raw("(SELECT start_date as tgl_mulai FROM periodes WHERE id=targets.periode_id) as tgl_mulai"),
                DB::raw("(SELECT finish_date as tgl_selesai FROM periodes WHERE id=targets.periode_id) as tgl_selesai"),
                'targets.*'
            )
            ->get();
    }
}
