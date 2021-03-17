<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table = 'trainers';
    protected $fillable = ['name','idea','purpose','demand_nec'];

    //トレーナーに対する利用者メンバー達を取得
    public function members()
    {
        return $this->hasMany('App\Member');
    }
}
