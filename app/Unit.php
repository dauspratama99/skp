<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Unit extends Model
{
    protected $fillable = ['id', 'parent_id', 'name'];
    protected $primaryKey = 'id';
    // public $incrementing = false;
    public function parent()
    {
        return $this->hasone(Unit::class, 'id', 'parent_id');
    }

    public function skps_rated_unit()
    {
        return $this->hasMany(Skps::class, 'rated_unit_id', 'id');
    }

    public function skps_evaluator_unit()
    {
        return $this->hasMany(Skps::class, 'evaluator_unit_id', 'id');
    }
}
