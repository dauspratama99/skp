<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Periode extends Model
{
    protected $fillable = ['id', 'start_date', 'finish_date'];
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;

    public function periode_skps()
    {
        return $this->hasMany(Skps::class, 'periode_id', 'id');
    }
}
