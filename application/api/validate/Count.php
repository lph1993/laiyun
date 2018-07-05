<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/12
 * Time: 7:41
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
      'count' => 'isPositeInteger|between:1,15'
    ];

}