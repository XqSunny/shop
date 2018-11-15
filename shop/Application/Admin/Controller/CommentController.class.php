<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
class CommentController extends BaseController {
    //列表页
	public function index(){
		$this->display('list');
	}
	//修改页
	public function edit(){
		$this->display();
	}
	//添加页
	public function add(){
		$this->display();
	}
	//会员意见页
	public function feed(){
		$this->display();
	}
}