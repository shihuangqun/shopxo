<?php
namespace app\admin\controller;
use think\Db;
use think\Validate;

class Staff extends Common{

    public function index(){


        $data = Db::name('staff')
            ->alias('s')
            ->join('store_location sl','sl.id = s.store_id')
            ->field('s.*,sl.name as store_name')
            ->select();

        $this->assign([
            'data' => $data
        ]);
        return $this->fetch();
    }


    public function SaveInfo(){

        // 登录校验
        $this->IsLogin();

        // 参数
        $params = input();
//        dump($params);

        // 不是操作自己的情况下
        if(!isset($params['id']) || $params['id'] != $this->admin['id'])
        {
            // 权限校验
            $this->IsPower();
        }
        $info = [];
        if($params) $info = Db::name('staff')->find($params['id']);

        $this->assign([
            'data' => $info
        ]);

        return $this->fetch();
    }

    public function Save(){

        if(!IS_AJAX){
            return $this->error('非法访问');
        }

        $this->IsLogin();

        $params = input('post.');
        $params['createtime'] = time();
        $params['password'] = md5($params['password']);
        $params['store_id'] = session('admin')['id'];
        if(!isset($params['id']) || $params['id'] != $this->admin['id'])
        {
            // 权限校验
            $this->IsPower();
        }
//        $rule = [
//            'phone|手机号' => 'require|length:11'
//        ];
//        $validate = new Validate($rule);
//
//        if(!$validate->check($params)) return DataReturn($validate->getError(),'-100');

        if(empty($params['id'])){
            $data = Db::name('staff')->insert($params);
        }else{
            $data = Db::name('staff')->update($params);
        }

        if($data){
            return DataReturn('成功','0');
        }else{
            return DataReturn('error','-100');
        }
    }

    public function delete(){
        if(!IS_AJAX) return $this->error('非法访问');

        $this->IsLogin();
        $this->IsPower();

        $params = input('id');
        $data = Db::name('staff')->delete($params);

        if($data) return DataReturn('成功',0);
    }
    public function Status()
    {
        // 是否ajax
        if(!IS_AJAX)
        {
            return $this->error('非法访问');
        }

        // 开始操作
        $params = input('post.');
        $params['admin'] = $this->admin;
        $params['field'] = 'status';
        return $this->StatusUpdate($params);
    }

    public static function StatusUpdate($params = [])
    {
        // 请求参数
        $p = [
            [
                'checked_type'      => 'empty',
                'key_name'          => 'id',
                'error_msg'         => '操作id有误',
            ],
            [
                'checked_type'      => 'empty',
                'key_name'          => 'field',
                'error_msg'         => '未指定操作字段',
            ],
            [
                'checked_type'      => 'in',
                'key_name'          => 'state',
                'checked_data'      => [0,1],
                'error_msg'         => '状态有误',
            ],
        ];
        $ret = ParamsChecked($params, $p);
        if($ret !== true)
        {
            return DataReturn($ret, -1);
        }

        // 数据更新
        if(Db::name('staff')->where(['id'=>intval($params['id'])])->update([$params['field']=>intval($params['state'])]))
        {
            return DataReturn('更新状态成功');
        }
        return DataReturn('操作失败', -100);
    }




}