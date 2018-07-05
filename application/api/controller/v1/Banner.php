<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/6/6
 * Time: 8:38
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\BannerMissException;
use app\api\model\Banner as modelBanner;
use think\Exception;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     */
    public function getBanner($id) {

        (new IDMustBePostiveInt()) -> goCheck();

        $banner = modelBanner::getBannerByID($id);

        if(!$banner) {
            throw new BannerMissException();
        }
        return $banner;
    }


}