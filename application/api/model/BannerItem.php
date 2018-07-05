<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/9
 * Time: 17:43
 */

namespace app\api\model;


use app\api\model\BaseModel;

class BannerItem extends BaseModel
{
    protected $hidden = ['img_id','delete_time','update_time'];
    public function img(){
        return $this -> belongsTo('Image','img_id','id');
    }
}