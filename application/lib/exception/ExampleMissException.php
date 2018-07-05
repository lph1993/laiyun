<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 9:47
 */

namespace app\lib\exception;


class ExampleMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的example不存在';
    public $errorCode = 40000;
}
{

}