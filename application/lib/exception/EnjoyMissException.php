<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 14:12
 */

namespace app\lib\exception;


class EnjoyMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的enjoy不存在';
    public $errorCode = 40000;
}