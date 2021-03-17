<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = ['name','gender','age','disease','email','course','demand','demand_nec'];

    //利用者メンバーに対応するトレーナーを取得
    public function trainer()
    {
        return $this->belongsTo('App\Trainer');
    }

    
}
