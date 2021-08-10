<?php


namespace App\Http\Models;


use Hao\Model;

class Channel extends Model
{
    protected $table = 'users';

    public function goods()
    {
        return $this->hasMany(Good::class,'goods_name','name');
    }

    public function names()
    {
        return $this->hasOne(Good::class,'goods_name','name');
    }
}