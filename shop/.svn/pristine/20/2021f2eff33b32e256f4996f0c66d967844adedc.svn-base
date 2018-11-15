<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Upload;
class TypeController extends BaseController {
	//类型管理
	public function index(){
		$res = M('goods_type')->select();
		$this->assign('res',$res);
		$this->display("list");
	}
	public function add(){
		$this->display();
	}
	public function doadd(){
		//接收数据
	
		$post = I('post.');
		$res1 = M('goods_type')->add($post);
		if($res1){
			$this->success('添加成功',index);
		}else{
			$this->error('添加失败');
		}	
	}
	//类型属性
	function attribute(){
		$res = M('attribute')->alias('a')->join("ds_goods_type b on a.goods_type_id=b.goods_type_id")->select();
		$this->assign('res',$res);
		$this->display();
	}
	//添加属性页面
	function addattr(){
		$res = M('goods_type')->select();
		$this->assign('res',$res);
		$this->display();	
	}
	//执行添加
	function doaddattr(){
		$post=I("post.");
		$res = M('attribute')->add($post);
		if($res){
			$this->success('添加成功',attribute);
		}else{
			$this->error('添加失败');
		}
	}
}
















