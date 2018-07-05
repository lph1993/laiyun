<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/7
 * Time: 20:09
 */

namespace app\api\model;


use app\api\model\BaseModel;

class Banner extends BaseModel
{
    protected $hidden = ['delete_time','update_time'];
    public function items() {

        // BannerItem =>关联模型的名称
        // banner_id =>关联外键
        // id=> 主模型的主键
        return $this -> hasMany('BannerItem','banner_id','id');
    }

    public static function getBannerByID($id){

        $banner = self::with(['items','items.img'])->find($id);

        return $banner;
//        $result = Db::table('banner_item')
//        ->where(function ($query) use ($id){
//            $query->where('banner_id','=',$id);
//        })
//        ->select();
//
//        return $result;
    }
}