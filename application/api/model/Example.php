<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 9:52
 */

namespace app\api\model;


class Example extends BaseModel
{
    protected $hidden = ['delete_time','update_time'];
    public function items() {

        return $this -> hasMany('ExampleItem','example_id','id');
    }

    public static function getExampleByID($id){

        $example = self::with(['items','items.img'])->find($id);

        return $example;

    }
}