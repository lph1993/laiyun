<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 22:46
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = ['delete_time','update_time'];
    public function iconImg(){
        return $this -> belongsTo('Image','icon_img_id','id');
    }
    public function img(){
        return $this -> belongsTo('Image','img_id','id');
    }

    public static function getDetailByProductID($id){
        $detail = self::where("detail_id",'=',$id)->select();

        return $detail;
    }
}