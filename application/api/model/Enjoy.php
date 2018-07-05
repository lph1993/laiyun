<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 10:51
 */

namespace app\api\model;


class Enjoy extends BaseModel
{
    protected $hidden = ['delete_time','update_time'];
    public function items() {

        return $this -> hasMany('EnjoyItem','enjoy_id','id');
    }
    public static function getEnjoyByID($id){

        $enjoy = self::with(['items','items.img'])->find($id);

        return $enjoy;

    }
}