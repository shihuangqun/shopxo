<?php
// +----------------------------------------------------------------------
// | ShopXO 国内领先企业级B2C免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011~2019 http://shopxo.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Devil
// +----------------------------------------------------------------------
namespace app\api\controller;

use app\service\GoodsService;
use app\service\BannerService;
use app\service\AppNavService;
use think\Db;

/**
 * 首页
 * @author   Devil
 * @blog     http://gong.gg/
 * @version  0.0.1
 * @datetime 2016-12-01T21:51:08+0800
 */
class Index extends Common
{
	/**
	 * [__construct 构造方法]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-03T12:39:08+0800
	 */
	public function __construct()
    {
		// 调用父类前置方法
		parent::__construct();
	}

	/**
	 * [Index 入口]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  1.0.0
	 * @datetime 2018-05-25T11:03:59+0800
	 */
	public function Index()
	{
	    $sid = input('sid','');
	    $sid = explode(',',$sid);
	    array_push($sid,'0');
//	    dump($sid);
		$result = [
			'navigation'					=> AppNavService::AppHomeNav(),
			'banner_list'					=> BannerService::Banner(),
			'data_list'						=> GoodsService::HomeFloorList($sid),
			'common_shop_notice'			=> MyC('common_shop_notice', null, true),
			'common_app_is_enable_search'	=> (int) MyC('common_app_is_enable_search', 1),
			'common_app_is_enable_answer'	=> (int) MyC('common_app_is_enable_answer', 1),
		];

//		$browse = Db::name('goods_browse')
//            ->group('goods_id,user_id')
//            ->field('count(goods_id) as browse_num,goods_id,user_id')
//            ->order('browse_num desc')
//            ->select();
//		dump($browse);
//		dump($result['data_list'][0]['goods']);
		// 返回数据
		return DataReturn('success', 0, $result);
	}
}
?>