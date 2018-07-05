<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/9
 * Time: 19:24
 */

namespace app\api\model;


use app\api\model\BaseModel;

class Image extends BaseModel
{
    protected $hidden = ['id','delete_time','update_time'];

    public function getUrlAttr($value, $data) {
        return $this -> prefixImgUrl($value, $data);
    }
}