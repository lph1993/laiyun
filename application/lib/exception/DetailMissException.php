<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/3
 * Time: 5:35
 */

namespace app\lib\exception;


class DetailMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的商品详情不存在，请检查参数';
    public $errorCode = 50000;
}