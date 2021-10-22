<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Position extends Model
{
    protected $fillable = ['id', 'parent_id', 'name'];
    protected $primaryKey = 'id';
    // public $incrementing = false;
    public function parent()
    {
        return $this->hasone(Position::class, 'id', 'parent_id');
    }

    public function skps_rated_position()
    {
        return $this->hasMany(Skps::class, 'rated_position_id', 'id');
    }

    public function skps_evaluator_position()
    {
        return $this->hasMany(Skps::class, 'evaluator_position_id', 'id');
    }
}
