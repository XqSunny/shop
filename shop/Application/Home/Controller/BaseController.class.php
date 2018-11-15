<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function __construct(){
		parent::__construct();
		if(session('admin')){
			$this->success('',U('Index/index'));
		}else{
			$this->success('',U('Login/login'));
		}
	}
}