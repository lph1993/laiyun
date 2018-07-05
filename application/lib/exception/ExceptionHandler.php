<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/7
 * Time: 20:27
 */

namespace app\lib\exception;


use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(\Exception $e){
        if($e instanceof BaseException) {
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else {
            if(config('app_debug')){
                return parent::render($e);
            }else{
                $this->code = 500;
                $this->msg = '内部服务器出错，不想告诉你';
                $this->errorCode = 999;

                $this->reocrdErrorLog($e);
            }
        }

        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'errorCode' => $this->errorCode,
            'request_url' => $request->url()
        ];
        return json($result,$this->code);
    }

    private function reocrdErrorLog(\Exception $ex) {
        // 日志初始化
        Log::init([
           'type' => 'File',
           'path' => LOG_PATH,
            'level' => ['error']
        ]);

        Log::record($ex->getMessage(), 'error');
    }
}