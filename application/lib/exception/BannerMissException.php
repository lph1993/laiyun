<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/7
 * Time: 20:23
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的banner不存在';
    public $errorCode = 40000;
}