<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 10:38
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\EnjoyMissException;
use app\api\model\Enjoy as modelEnjoy;

class Enjoy
{
    public function getEnjoy($id){

        (new IDMustBePostiveInt()) -> goCheck();

        $enjoy = modelEnjoy::getEnjoyByID($id);

        if(!$enjoy) {
            throw new EnjoyMissException();
        }
        return $enjoy;
    }
}