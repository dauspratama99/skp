<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class RankGroup extends Model
{
    protected $fillable = ['name', 'group'];
    public $incrementing = false;

    public function skps_rated_rankgroup()
    {
        return $this->hasMany(Skps::class, 'rated_rankgroup_id', 'id');
    }

    public function skps_evaluator_rankgroup()
    {
        return $this->hasMany(Skps::class, 'evaluator_rankgroup_id', 'id');
    }
}
