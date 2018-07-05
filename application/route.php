<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::get('api/:version/banner/:id', 'api/:version.Banner/getBanner');
Route::get('api/:version/example/:id', 'api/:version.Example/getExample');
Route::get('api/:version/enjoy/:id', 'api/:version.Enjoy/getEnjoy');
Route::get('api/:version/features/:id', 'api/:version.Features/getFeatures');
Route::get('api/:version/introduction/:id', 'api/:version.Introduction/getIntroduction');
Route::get('api/:version/product', 'api/:version.Product/getProduct');
Route::get('api/:version/detail/:id', 'api/:version.Detail/getDetail');