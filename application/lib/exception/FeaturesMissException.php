<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 14:11
 */

namespace app\lib\exception;


class FeaturesMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的features不存在';
    public $errorCode = 40000;
}