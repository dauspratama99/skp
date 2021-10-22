<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skp extends Model
{
    protected $fillable = ['nip_rated','periode_id','rated_unit_id','rated_position_id','rated_rankgroup_id','commitment','discipline','cooperation','leadership','integrity','service_oriented','objection_rated','response_evaluator','superior_ decision','recommendation','date_given_to_superiors','evaluator_rankgroup_id','nip_evaluator','evaluator_unit_id' 
    ,'evaluator_position_id']; 
    protected $primaryKey = 'id';
    public $incrementing = false;



}
