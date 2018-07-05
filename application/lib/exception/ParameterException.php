<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/7
 * Time: 23:16
 */

namespace app\lib\exception;

use app\lib\exception\BaseException;

class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}