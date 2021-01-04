<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function menus(){
        return $this->hasMany('App\Menu', 'cid');
    }
    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;

//一般传进三个参数。默认P_id=0；
    public function getTree($data,$field_name,$field_id='id',$field_pid='pid',$pid=0)
    {
        $arr = array();
        foreach ($data as $k=>$v){
            if($v->$field_pid==$pid){
                $data[$k]["_".$field_name] = $data[$k][$field_name];
                $arr[] = $data[$k];
                foreach ($data as $m=>$n){
                    if($n->$field_pid == $v->$field_id){
                        $data[$m]["_".$field_name] = '├─ '.$data[$m][$field_name];
                        $arr[] = $data[$m];
                    }
                }
            }
        }
        return $arr;
    }




}
