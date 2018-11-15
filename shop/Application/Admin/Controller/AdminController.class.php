<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
class AdminController extends BaseController {
    //管理员列表页
	public function index(){
		$this->display('list');
	}
	//管理员修改页
	public function edit(){
		$this->display();
	}
	//管理员添加页
	public function add(){
		$this->display('add_admin');
	}
	//
}