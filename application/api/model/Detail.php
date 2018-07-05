<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/3
 * Time: 5:49
 */

namespace app\api\model;


class Detail extends BaseModel
{
    protected $hidden = ['delete_time','update_time','img_id'];
    public function img(){
        return $this -> belongsTo('Image','img_id','id');
    }

    public static function getDetailByProductID($id){
        $detail = self::where("detail_id",'=',$id)->with(['img'])->select();

        return $detail;
    }
}