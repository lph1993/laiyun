<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/7
 * Time: 20:21
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    // HTTP 状态码错误
    public $code = 400;
    // 具体的错误信息
    public $msg = '参数错误';
    // 自定义错误码
    public $errorCode = 10000;

    public function __construct($params = []){
        if(!is_array($params)){
            throw new Exception('参数必须是数组');
        }
        //判断关联数组（$params）有没有选项
        if(array_key_exists('code', $params)) {
            $this->code = $params['code'];
        }

        if(array_key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }

        if(array_key_exists('errorCode', $params)) {
            $this->errorCode = $params['errorCode'];
        }
    }
}