<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    //
    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    //黑名单
    protected $guarded = [];

    //白名单
    protected $fillable = ['mid', 'step_order', 'detail'];
}
