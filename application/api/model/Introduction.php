<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 14:50
 */

namespace app\api\model;


class Introduction extends BaseModel
{
    protected $hidden = ['delete_time','update_time'];
    public static function getIntroductionByID($id){

        $introduction = self::find($id);

        return $introduction;

    }
}