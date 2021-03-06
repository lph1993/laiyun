<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/12
 * Time: 13:29
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{
    public function getToken($code=''){
        (new TokenGet()) -> goCheck();

        $ut = new UserToken();
        $token = $ut ->get($code);
        return [
          'token' => $token
        ];
    }
}