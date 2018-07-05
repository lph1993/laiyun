<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 14:49
 */

namespace app\lib\exception;


class IntroductionMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的introduction不存在';
    public $errorCode = 40000;
}