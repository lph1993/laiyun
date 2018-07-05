<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 22:55
 */

namespace app\lib\exception;


class ProductMissException
{
    public $code = 404;
    public $msg = '请求的product不存在';
    public $errorCode = 40000;
}