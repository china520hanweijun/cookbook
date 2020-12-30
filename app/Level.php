<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    public function menus(){
        $this->hasMany('Menu', 'lid');
    }
    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;
}
