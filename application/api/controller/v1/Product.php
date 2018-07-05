<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/7/2
 * Time: 22:53
 */

namespace app\api\controller\v1;

use app\lib\exception\ProductMissException;
use app\api\model\Product as modelProduct;

class Product
{
    public function getProduct(){

        $product = modelProduct::all([],['iconImg','img']);
        if(!$product) {
            throw new ProdcutMissException();
        }
        return $product;
    }
}