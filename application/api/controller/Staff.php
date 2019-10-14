<?php
namespace app\api\controller;

use think\Db;

class Staff extends Common{

    public function __construct()
    {
        // 调用父类前置方法
        parent::__construct();
    }
    //员工登录处理
    public function login(){

        $param = input();

        $data = Db::name('staff')->where('username',$param['username'])->find();

        if(!$data) return DataReturn('该用户不存在','400');
        if(md5($param['password']) !== $data['password']) return DataReturn('密码输入错误，请重新输入！','400');

        return DataReturn('登录成功','200',$data);
    }

    //获取会员信息
    public function getUserInfo(){
//        $id = input('id');
        $id = 1;
        $gender = array('保密','女','男');

        $data = [];
        $info = Db::name('user')->find($id);//会员信息
        $info['gender'] = $gender[intval($info['gender'])];
        $browse = Db::name('user_browse')//当前会员浏览记录
            ->alias('u')
            ->join('goods g','g.id = u.goods_id')
            ->where('user_id',$id)
            ->order('u.createtime desc')
            ->field('u.createtime,g.title,count(goods_id) as y,g.images,g.price')
            ->group('u.createtime,g.title,g.images,g.price')
            ->select();
//        dump($browse);
        $data = [
            'info' => $info,
            'browse' => $browse
        ];

        return DataReturn('success',200,$data);
    }


    //获取店铺以及员工信息
    public function getStaff(){
        $id = input('id');
        $info = Db::name('staff')
            ->alias('s')
            ->join('store_location sl','sl.id = s.store_id')
            ->field('s.*,sl.name as store_name')
            ->find($id);

        return DataReturn('success',200,$info);
    }

    //获取商品列表
    public function getGoods(){
        $store_id = input('store_id');
        $data = Db::name('goods')->where('store_id',$store_id)->select();

        return DataReturn('success',200,$data);
    }

    //浏览记录添加
    public function browse(){

        $param = input('');
        $param['createtime'] = time();

        $data = Db::name('user_browse')->insert($param);

        if($data) return DataReturn('添加成功','200');
    }
}