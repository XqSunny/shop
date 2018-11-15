<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
		$this->display();
	}
	public function dolog(){
		$name=I('post.username');
		$pwd = md5(I('post.password'));
		$res=M("users")->where("user_name='$name' and password='$pwd'")->find();
		if($res){
			session("user",$res);
			if(cookie('car')){
				$car = cookie('car');
				foreach($car as $k=>$v){
					$x = substr($v,6);
					$arr = json_decode($x,true);
					$arr['user_id'] = $res['user_id'];
					
					$res1=M('cart')->add($arr);
					cookie("$k","");
				}
			}
			$this->success('登录成功',U('Index/index'));
		}else{
			$this->error("用户名或密码不存在");
		}
	}
}