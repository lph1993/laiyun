<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 10:54
 */

namespace app\api\model;


class EnjoyItem extends BaseModel
{
    protected $hidden = ['img_id','delete_time','update_time'];
    public function img(){
        return $this -> belongsTo('Image','img_id','id');
    }
}