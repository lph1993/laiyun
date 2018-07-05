<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 9:42
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\BannerMissException;
use app\api\model\Example as modelExample;
use app\lib\exception\ExampleMissException;
use think\Exception;

class Example
{

    public function getExample($id) {

        (new IDMustBePostiveInt()) -> goCheck();

        $example = modelExample::getExampleByID($id);

        if(!$example) {
            throw new ExampleMissException();
        }
        return $example;
    }
}