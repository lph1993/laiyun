<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/12
 * Time: 13:32
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
      '$code' => 'require|isEmpty'
    ];

    protected $message = [
        '$code' => '没有code还想获取Token，做梦哦'
    ];
}