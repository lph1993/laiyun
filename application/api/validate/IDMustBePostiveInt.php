<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/7
 * Time: 9:35
 */

namespace app\api\validate;

use app\api\validate\BaseValidate;

// ID验证规则
class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositeInteger'
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];


}