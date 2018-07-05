<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/10
 * Time: 21:18
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected function prefixImgUrl($value, $data){
        $finaUrl = $value;
        if($data['from'] == 1) {
            $finaUrl = config('setting.img_prefix').$value;
        }
        return $finaUrl;
    }
}