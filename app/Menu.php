<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //作者
    public function author(){
        return $this->belongsTo('User', 'uid');
    }

    //分类
    public function category(){
        $this->belongsTo('Category', 'cid');
    }

    //难度
    public function level(){
        $this->belongsTo('Level', 'lid');
    }

    //配料表
    public function foods(){
        $this->hasMany('Food', 'mid');
    }

    //步骤表
    public function steps(){
        $this->hasMany('Sttep', 'mid');
    }
}
