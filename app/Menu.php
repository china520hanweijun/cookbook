<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //作者
    public function author(){
        return $this->belongsTo('App\User', 'uid');
    }

    //分类
    public function category(){
        return $this->belongsTo('App\Category', 'cid');
    }

    //难度
    public function level(){
        return $this->belongsTo('App\Level', 'lid');
    }

    //配料表
    public function foods(){
        return $this->hasMany('App\Food', 'mid');
    }

    //步骤表
    public function steps(){
        return $this->hasMany('App\Step', 'mid')->orderBy('step_order');
    }
}
