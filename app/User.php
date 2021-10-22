<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Eloquent;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['nip', 'name', 'position_id', 'rank_id', 'unit_id', 'email', 'password', 'role_id'];
    protected $primaryKey = 'nip';
    public $incrementing = false;

    //yg semua model bikin yg line 13 14 15 ni sesuai isi nya field nya kn dir?
    //yg protected $fillable isi sama field nya di database, bikin berurut
    //protected primary key sesuikan aja sama primary key nya
    //untuk $fillable kan di database ada tu updated at sama created at, ngak usah di bikin ke dalam array nya

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function unit()
    {
        return $this->hasOne(Unit::class, 'id', 'unit_id');
    }

    public function position()
    {
        return $this->hasOne(Position::class, 'id', 'position_id');
    }

    public function rank()
    {
        return $this->hasOne(RankGroup::class, 'id', 'rank_id');
    }

    public function skps_nip_rated()
    {
        return $this->hasMany(Skps::class, 'nip_rated', 'nip');
    }

    public function skps_nip_evaluator()
    {
        return $this->hasMany(Skps::class, 'nip_evaluator', 'nip');
    }

    public function unitTugas()
    {
        $hasil = [];
        $unit_id = $this->unit_id;
        $connection = config('database.default');
        if ($connection == 'mysql') {
            $units = DB::select(DB::RAW(
                "select id
                from    (select * from units order by parent_id, id) unit,
                (select @pv := '$unit_id') initialisation
                where (find_in_set(parent_id, @pv) > 0
                and @pv := concat(@pv, ',', id)) or id = $unit_id"
            ));
        } else {
            $units = [];
            $hasil = [];
        }

        foreach ($units as $unit) {
            array_push($hasil, $unit->id);
        }

        return $hasil;
    }

    public function bawahan()
    {
        $hasil = [];
        $position_id = $this->position_id;
        $connection = config('database.default');
        if ($connection == 'mysql') {
            $units = DB::select(DB::RAW(
                "select id
                from    (select * from positions order by parent_id, id) unit,
                (select @pv := '$position_id') initialisation
                where (find_in_set(parent_id, @pv) > 0
                and @pv := concat(@pv, ',', id)) or id = $position_id"
            ));
        } else {
            $units = [];
            $hasil = [];
        }

        foreach ($units as $unit) {
            array_push($hasil, $unit->id);
        }

        return $hasil;
    }
}
