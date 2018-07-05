<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 14:13
 */

namespace app\api\model;


class Features extends BaseModel
{
    protected $hidden = ['delete_time','update_time'];
    public function items() {

        return $this -> hasMany('FeaturesItem','features_id','id');
    }
    public static function getFeaturesByID($id){

        $features = self::with(['items'])->find($id);

        return $features;

    }
}