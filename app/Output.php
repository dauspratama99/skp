<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    protected $fillable = ['id','name'];
    protected $primaryKey = 'id';
    public $incrementing = false;
   
}
