<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
//商品分类
class CategoryController extends BaseController {
    public function index(){
		$res = M('category')->select();
		$res1 = M('category')->where("parent_id=0")->select();
		$arr = array();
		foreach($res1 as $v){
			$id = $v['cat_id'];
			$name = $v['cat_name'];
			$arr[$id] = $name;
			//1=>衣服,2=>鞋子,3=>食物
		}
		$this->assign('res',$res);
		$this->assign('arr',$arr);
		$this->display('list');
	}
	public function add(){
		$res = M('category')->where("parent_id=0")->select();
		$this->assign('res',$res);
		$this->display();
	}
	public function doadd(){
		$post = I("post.");
		$res = M('category')->add($post);
		if($res){
			$this->success('添加成功',index);
		}else{
			$this->error('添加失败');
		}
	}
}