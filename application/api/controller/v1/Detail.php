<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/3
 * Time: 5:33
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\DetailMissException;
use app\api\model\Detail as modelDetail;

class Detail
{
    public function getDetail($id) {

        (new IDMustBePostiveInt()) -> goCheck();

        $detail = modelDetail::getDetailByProductID($id);

        if(!$detail) {
            throw new DetailMissException();
        }
        return $detail;
    }
}