<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Upload;
class BrandController extends BaseController {
    public function index(){
		$res = M('brand')->select();
		$this->assign('res',$res);
		$this->display('list');
	}
	public function add(){
		$this->display();
	}
	public function upload(){
		$up = new Upload();
		$up->savePath=""; //保存路径
		$up->rootPath ="./Public/Uploads/"; //上传路径
		$res = $up->upload();
		if(!$res){
			$this->error($up->getError());
		}else{
			return $res;
		}
	}
	public function doadd(){
		$post = I('post.');
		//上传图片
		$pic = $this->upload();
		$post['brand_logo'] = $pic['brand_logo']['savepath'].$pic['brand_logo']['savename'];
		$res = M('brand')->add($post);
		if($res){
			$this->success('添加成功',index);
		}else{
			$tis->error('添加失败');
		}
	}
}