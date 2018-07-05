<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 14:05
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\FeaturesMissException;
use app\api\model\Features as modelFeatures;

class Features
{
    public function getFeatures($id) {

        (new IDMustBePostiveInt()) -> goCheck();

        $features = modelFeatures::getFeaturesByID($id);

        if(!$features) {
            throw new FeaturesMissException();
        }
        return $features;
    }
}