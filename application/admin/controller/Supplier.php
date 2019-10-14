<?php
namespace app\admin\controller;
use think\Db;
use think\Validate;

class Supplier extends Common{

    public function index(){

        $data = Db::name('supplier')->select();
        $this->assign([
           'data' => $data
        ]);
        return $this->fetch();
    }

    /**
     * 供应商审核
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function examine(){
        $data = Db::name('admin')->where('status',0)->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    /**
     * 供应商审核 状态更新
     */
    public function estatus(){
        if(!IS_AJAX) return $this->error('非法访问');
        $this->IsLogin();
        $this->IsPower();
        $params = input('id/a');
        $ids = implode(',',$params);
//        dump($ids);
        $data = Db::name('admin')->where('id','in',$ids)->update(['status' => 1]);

        if($data) return DataReturn('审核通过',0);
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
        if($params) $info = Db::name('supplier')->find($params['id']);

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
        $params['addtime'] = time();

        if(!isset($params['id']) || $params['id'] != $this->admin['id'])
        {
            // 权限校验
            $this->IsPower();
        }
        $rule = [
            'phone|手机号' => 'require|length:11'
        ];
        $validate = new Validate($rule);

        if(!$validate->check($params)) return DataReturn($validate->getError(),'-100');

        if(empty($params['id'])){
            $data = Db::name('supplier')->insert($params);
        }else{
            $data = Db::name('supplier')->update($params);
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
        $data = Db::name('supplier')->delete($params);

        if($data) return DataReturn('成功',0);
    }

    /**
     * 批量邀请注册
     */
    public function batch(){

        if(!IS_AJAX) return $this->error('非法访问');
        $this->IsLogin();

        $params = input('id');
        $ids = implode(',',$params);

        $data = Db::name('supplier')->where('id','in',$ids)->field('phone')->select();

//        require '../extend/aliyun-dysms-php-sdk/api_demo/SmsDemo.php';

        //注册链接
        $host = \think\facade\Request::instance()->domain().'/admin.php?s=/supplier/register';
//        $a = 2;
        foreach($data as $v){
//            $a++;
//            dump($a);
//            dump($v['phone']);
            $code = GetNumberCode(6);
//            $sms = new \SmsDemo();
//            $sms->sendSms($v['phone'],$code,MyC('home_sms_supplier_invitation'));
            $sms = new \base\Sms();
            $aa = $sms->SendCode($v['phone'],$code,MyC('home_sms_supplier_invitation'));

        }
    }

    /**
     * 供应商注册页面渲染
     * @return mixed
     */
    public function register(){

        return $this->fetch();
    }
    /**
     * 供应商注册
     */
    public function registerAdd(){

        $params = input('post.');
        // 添加账号
        $salt = GetNumberCode(6);
        $params['login_salt'] = $salt;
        $params['add_time'] = time();
        //供应商添加  默认禁用
        $params['status'] = 0;
        //默认为供应商
        $params['role_id'] = 14;
        $params['login_pwd'] = LoginPwdEncryption($params['login_pwd'],$salt);

        $data = Db::name('admin')->insert($params);
        if($data) return DataReturn('注册成功，请等待管理员审核通过...',0);

        return DataReturn('注册失败，请稍后再试');
    }
//    public function aa(){
//        require '../extend/aliyun-dysms-php-sdk/api_demo/SmsDemo.php';
//        $sms = new \SmsDemo();
//        $sms->sendSms();
//    }
}