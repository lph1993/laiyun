<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/13
 * Time: 9:21
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期，或无效的Token';
    public $errorCode = 100001;
}