<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 14:47
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\IntroductionMissException;
use app\api\model\Introduction as modelIntroduction;

class Introduction
{
    public function getIntroduction($id){

        (new IDMustBePostiveInt()) -> goCheck();

        $introduction = modelIntroduction::getIntroductionByID($id);

        if(!$introduction) {
            throw new IntroductionMissException();
        }
        return $introduction;
    }
}