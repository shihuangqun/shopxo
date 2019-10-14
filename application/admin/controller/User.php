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
namespace app\admin\controller;

use app\service\IntegralService;
use app\service\RegionService;
use app\service\UserService;
use think\Db;
use think\facade\Request;

/**
 * 用户管理
 * @author   Devil
 * @blog     http://gong.gg/
 * @version  0.0.1
 * @datetime 2016-12-01T21:51:08+0800
 */
class User extends Common
{
	/**
	 * 构造方法
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-03T12:39:08+0800
	 */
	public function __construct()
	{
		// 调用父类前置方法
		parent::__construct();

		// 登录校验
		$this->IsLogin();

		// 权限校验
		$this->IsPower();
	}

	/**
     * [Index 用户列表]
     * @author   Devil
     * @blog     http://gong.gg/
     * @version  0.0.1
     * @datetime 2016-12-06T21:31:53+0800
     */
	public function Index()
	{
		// 参数
		$params = input();

		// 条件
		$where = UserService::UserListWhere($params);

		// 总数
		$total = UserService::UserTotal($where);

		// 分页
		$number = MyC('admin_page_number', 10, true);
		$page_params = array(
				'number'	=>	$number,
				'total'		=>	$total,
				'where'		=>	$params,
				'page'		=>	isset($params['page']) ? intval($params['page']) : 1,
				'url'		=>	MyUrl('admin/user/index'),
			);
		$page = new \base\Page($page_params);

		// 获取管理员列表
		$data_params = [
			'where'		=> $where,
			'm'			=> $page->GetPageStarNumber(),
			'n'			=> $number,
		];
		$data = UserService::UserList($data_params);


		// 性别
		$this->assign('common_gender_list', lang('common_gender_list'));

		// 用户状态
		$this->assign('common_user_status_list', lang('common_user_status_list'));


		// Excel地址
		$this->assign('excel_url', MyUrl('admin/user/excelexport', $params));

		$this->assign('params', $params);
		$this->assign('page_html', $page->GetPageHtml());
		$this->assign('data_list', $data['data']);
		return $this->fetch();

	}

	/**
	 * [ExcelExport excel文件导出]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2017-01-10T15:46:00+0800
	 */
	public function ExcelExport()
	{
		// 条件
		$where = UserService::UserListWhere(input('post.'));

		$data_params = [
			'where'		=> $where,
			'm'			=> 0,
			'n'			=> 100000,
		];
		$data = UserService::UserList($data_params);

		// Excel驱动导出数据
		$excel = new \base\Excel(array('filename'=>'user', 'title'=>lang('excel_user_title_list'), 'data'=>$data['data'], 'msg'=>'没有相关数据'));
		return $excel->Export();
	}

	/**
	 * [SaveInfo 用户添加/编辑页面]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-14T21:37:02+0800
	 */
	public function SaveInfo()
	{
		// 参数
		$params = input();


		// 用户编辑
		$data = [];
		if(!empty($params['id']))
		{
			$data_params = [
				'where'		=> ['id'=>$params['id']],
				'm'			=> 0,
				'n'			=> 1,
			];
			$ret = UserService::UserList($data_params);
			if(empty($ret['data'][0]))
			{
				return $this->error('用户信息不存在', MyUrl('admin/user/index'));
			}

			// 生日
			$ret['data'][0]['birthday_text'] = empty($ret['data'][0]['birthday']) ? '' : date('Y-m-d', $ret['data'][0]['birthday']);
			
			$data = $ret['data'][0];
		}
		$this->assign('data', $data);

		// 性别
		$this->assign('common_gender_list', lang('common_gender_list'));
        $member = Db::name('member')->select();//会员等级
        $this->assign('member', $member);

		// 参数
		$this->assign('params', $params);

		return $this->fetch();
	}


	/**
	 * [Save 用户添加/编辑]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-14T21:37:02+0800
	 */
	public function Save()
	{
		// 是否ajax
		if(!IS_AJAX)
		{
			return $this->error('非法访问');
		}

		// 开始操作
		$params = input('post.');

		$params['admin'] = $this->admin;
		return UserService::UserSave($params);
	}

	/**
	 * [Delete 用户删除]
	 * @author   Devil
	 * @blog     http://gong.gg/
	 * @version  0.0.1
	 * @datetime 2016-12-15T11:03:30+0800
	 */
	public function Delete()
	{
		// 是否ajax
		if(!IS_AJAX)
		{
			return $this->error('非法访问');
		}

		// 开始操作
		$params = input('post.');
		$params['admin'] = $this->admin;
		return UserService::UserDelete($params);
	}

	//浏览记录
	public function browse(){
        $id = input('id');

        $data_list = Db::name('user_browse')
            ->alias('u')
            ->where('user_id',$id)
            ->join('goods g','g.id = u.goods_id')
            ->order('createtime desc')
            ->paginate('10',false,['query' => Request::instance()->request()]);

        $this->assign([
            'data_list' => $data_list,
            'id' => $id,

        ]);
	    return $this->fetch();
    }

    //查看商品排名

    public function ranking(){
        $id = input('id');
//        $data_list = Db::name('user_browse')
//            ->where('user_id',$id)
//            ->alias('u')
//            ->join('goods g','g.id = u.goods_id')
//            ->group('user_id')
//            ->field('u.*,title,images,u.user_id,count(goods_id) as browse_num')
//            ->order('browse_num desc')
//            ->select();
        $data_list = Db::name('user_browse')
            ->where('user_id',$id)
            ->alias('u')
            ->join('goods g','g.id = u.goods_id')
            ->field('g.title,province,city,district,goods_id,images,count(goods_id) as browse_num')
            ->group('g.title,province,city,district,goods_id,images')
//            ->having('goods_id')

            ->order('browse_num desc')
            ->select();
//        dump($data_list);
        $this->assign([
            'data_list' => $data_list
        ]);
        return $this->fetch();
    }

    //用户收藏商品记录
    public function collection(){
        $id = input('id');

        $data_list = Db::name('goods_favor')
            ->where('gf.user_id',$id)
            ->alias('gf')
            ->join('goods g','g.id = gf.goods_id')
            ->order('gf.add_time desc')
            ->select();
        $this->assign([
            'data_list' => $data_list,
            'id' => $id
        ]);
        return $this->fetch();
    }

    //购买记录
    public function buy(){
        $id = input('id');

        $data_list = Db::name('order')
            ->where('o.user_id',$id)
            ->alias('o')
            ->join('order_detail od','od.order_id = o.id')
            ->select();
//        dump($data_list);
        $this->assign([
            'data_list' => $data_list,
            'id' => $id
        ]);

        return $this->fetch();
    }
    //订单信息
    public function buyinfo(){
        $id = input('id');

        $data_list = Db::name('order')
            ->where('o.id',$id)
            ->alias('o')
            ->join('order_detail od','od.order_id = o.id')
            ->find();


        //收货地址编译
        $data_list['receive_province_name'] = RegionService::RegionName($data_list['receive_province']);
        $data_list['receive_city_name'] = RegionService::RegionName($data_list['receive_city']);
        $data_list['receive_county_name'] = RegionService::RegionName($data_list['receive_county']);
        //订单状态
        $order_status_list = lang('common_order_user_status');
        $order_pay_status = lang('common_order_pay_status');
        $data_list['status_name'] = $order_status_list[$data_list['status']]['name'];
        $data_list['pay_status_name'] = $order_pay_status[$data_list['pay_status']]['name'];
//        dump($data_list);
        $this->assign([
            'data' => $data_list
        ]);
	    return $this->fetch();
    }

    /**
     * 浏览记录统计图
     * @param int   id  用户ID
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function browseCount(){

        $id = input('id');
	    $data = Db::name('user_browse')
            ->where('user_id',$id)
            ->alias('u')
            ->join('goods g','g.id = u.goods_id')
            ->group('g.title')
            ->field('g.title as name,count(g.title) as y')
            ->select();
//	    dump($data);

        $count = 0;
        foreach($data as $k => $v){
            $count += $v['y'];
        }

        $datas = [];
        foreach($data as $key => $val){
            $val['y'] = round($val['y'] / $count,'3');
            $val['y'] = round($val['y'] * 100,3);
            $datas[] = $val;
        }

        return json_encode($datas);
    }

    /**
     * 收藏统计
     */
    public function collectionCount(){
        $id = input('id');

        $data = Db::name('goods_favor')
            ->where('user_id',$id)
            ->alias('gf')
            ->join('goods g','g.id = gf.goods_id')
            ->group('name')
            ->field('g.title as name,gf.user_id,count(g.title) as y')
            ->select();


        $count = 0;
        foreach($data as $k => $v){
            $count += $v['y'];
        }

        $datas = [];
        foreach($data as $key => $val){
            $val['y'] = round($val['y'] / $count,'3');
            $val['y'] = round($val['y'] * 100,3);
            $datas[] = $val;
        }
//        dump($data);
        return json_encode($datas);
    }

    /**
     * 购买统计
     */
    public function buyCount(){
        $id = input('id');

        $data = Db::name('order')
            ->where('o.user_id',$id)
            ->alias('o')
            ->join('order_detail od','od.order_id = o.id')
            ->group('name,o.user_id')
            ->field('od.title as name,o.user_id,count(od.goods_id) as y')
            ->select();

        $count = 0;
        foreach($data as $k => $v){
            $count += $v['y'];
        }

        $datas = [];
        foreach($data as $key => $val){
            $val['y'] = round($val['y'] / $count,'3');
            $val['y'] = round($val['y'] * 100,3);
            $datas[] = $val;
        }
//        dump($data);
        return json_encode($datas);
    }

    /**
     * 定位统计
     * @return false|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function positionCount(){
        $id = input('id');

        $data = Db::name('order')
            ->where('o.user_id',$id)
            ->alias('o')
            ->join('order_detail od','od.order_id = o.id')
            ->group('name,o.user_id')
            ->field('od.title as name,o.user_id,count(od.goods_id) as y')
            ->select();

        $count = 0;
        foreach($data as $k => $v){
            $count += $v['y'];
        }

        $datas = [];
        foreach($data as $key => $val){
            $val['y'] = round($val['y'] / $count,'3');
            $val['y'] = round($val['y'] * 100,3);
            $datas[] = $val;
        }
//        dump($data);
        return json_encode($datas);
    }

}
?>