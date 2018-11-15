<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Upload;
class GoodsController extends BaseController {
	function index(){
		$res = M('goods')->where('is_delete=0')->select();
		//查所有产品分类
		$res2 = M('category')->select();
		$arr = $this->arr($res2,"cat_id","cat_name");
		//查所有品牌
		$res1 = M('brand')->select();
		$arr1 = $this->arr($res1,"brand_id","brand_name");
		$this->assign('arr',$arr);
		$this->assign('arr1',$arr1);
		$this->assign('res',$res);
		$this->display('list');
	}
	function arr($res,$id,$name){
		$arr = array();
		foreach($res as $v){
			$arr[$v[$id]] = $v[$name];
		}
		return $arr;
			
	}
	//添加属性
	function addsttr(){
		//接收产品id
		$goods_id = I("get.goods_id");
		//查出所有商品类型
		$res = M("goods_type")->select();
		$this->assign('res',$res);
		$this->assign('goods_id',$goods_id);
		$this->display();
	}
	//
	function shu(){
		//接收商品类型
		$goods_type_id = I("post.goods_type_id");
		$res = M("attribute")->where("goods_type_id='$goods_type_id'")->select();
		var_dump($res);
		$str = "";
		foreach($res as $v){
			$str .="<div>".$v['attr_name'].":";
			if($v['index_type']==0){
				//手工录入
				$str .= "<input type='text' name='attr_value[".$v['attr_id']."]'/>";
			}elseif($v['index_type']==1){
				$arr = explode(",",$v['attr_values']);
				foreach($arr as $v1){
					//单选
				$str .= "<input style='display:block' type='radio' name='attr_value[".$v['attr_id']."]' value='$v1' />$v1   ";
				}
				
				
			}elseif($v['index_type']==2){
				//多行文本
				$str .= "<textarea name='attr_value".$v['attr_id']."'></textarea>";
				
			}
			$str .= "价钱：<input type='text' name='attr_price[".$v['attr_id']."]'/>";
			$str .="</div>";
		}
		echo $str;
	}
	function doaddattr(){	
		//商品id
		$goods_id = I('post.goods_id');
		//获取属性id  属性值 属性价格
		$attr_value = I('post.attr_value');
		$attr_price = I('post.attr_price');
		foreach($attr_value as $k=>$v){
			//$k  属性id
			//属性值 $v
			//价钱
			$res1 = M('goods_attr')->where("attr_value='$v'")->find();
			if(empty($v) || $res1){
				//break 终止循环  continue 跳出本次循环
				continue;
			}
			$money = $attr_price[$k];
			$arr = array(
				'goods_id' => $goods_id,
				'attr_id' => $k,
				'attr_value' => $v,
				'attr_price' => $money
			);
			$res = M('goods_attr')->add($arr);
			
		}
		if($res){
			$this->success('添加成功');
		}else{
			$this->error('添加失败');
		}
	}
	//商品具体属性列表
	function attr(){
		//接收商品id
		$goods_id = I('get.goods_id');
		$res = M('goods_attr')->alias('a')->join("ds_attribute b on a.attr_id=b.attr_id")->where("goods_id=$goods_id")->order("a.attr_id")->select();
		$this->assign('res',$res);
		$this->display();
	}
	//添加产品
	function add(){
		//查所有产品分类
		$res = M('category')->select();
		//查所有品牌
		$res1 = M('brand')->select();
		$this->assign('res',$res);
		$this->assign('res1',$res1);
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
	//缩略图
	function thum($pic){
		$tu = "./Public/Uploads/".$pic['savepath'].$pic['savename'];
		$newpath = "./Public/Uploads/".$pic['savepath'].'s'.$pic['savename'];
		
		$image = new \Think\Image(); 
		$image->open($tu);
		$res = $image->thumb(150, 150)->save($newpath);
		if(!$res){
			$this->error($image->getError());
		}else{
			return $pic['savepath'].'s'.$pic['savename'];
		}
	}
	//执行添加
	function doadd(){
		$post = I('post.');
		$up = $this->upload();
		$post['goods_img'] = $up['goods_img']['savepath'].$up['goods_img']['savename'];
		$thum = $this->thum($up['goods_img']);
		$post['goods_thumb'] = $thum;
		$post['add_time'] = date("Y-m-d H:i:s");
		$post['last_update'] = date("Y-m-d H:i:s");
		$res = M('goods')->add($post);
		if($res){
			$this->success("添加成功",index);	
		}else{
			$this->error("添加失败");
		}
		
	}
	//货品列表
	function products(){
		$goods_id = I('get.goods_id');
		//查询所有货品
		$res = M('products')->where("goods_id=$goods_id")->select();
		$this->assign('res',$res);
		$this->assign('goods_id',$goods_id);
		$this->display();
	}
	//添加货品
	function addpro(){
		$goods_id = I('get.goods_id');
		//当前商品所具有的属性
		$res = M('goods_attr')->alias('a')->join("ds_attribute b on a.attr_id=b.attr_id")->where("goods_id=$goods_id")->order("a.attr_id")->select();
		//获取属性
		$res1 = M('goods_attr')->alias('a')->join("ds_attribute b on a.attr_id=b.attr_id")->field('a.attr_id,b.attr_name')->where("goods_id=$goods_id")->group("a.attr_id")->select();
		$this->assign('res',$res);
		$this->assign('goods_id',$goods_id);
		$this->assign('res1',$res1);
		$this->display();
		
	}
	//执行添加货品
	function doaddpro(){
		$goods_id = I('post.goods_id');
		$attr_list = I('post.attr_list');
		$product_sn = I('post.product_sn');
		$sku = I('post.sku');
		//售价
		$money = 0;
		//属性
		$str = "";
		foreach($attr_list as $k=>$v){
			//$k  attr_id   $v attr_value
			$res = M('goods_attr')->where("attr_id='$k' and attr_value='$v'")->find();
			$str .= $v.",";
			$money += $res['attr_price'];
		}
		$str = rtrim($str,",");
		$arr = array(
			'goods_id'=>$goods_id,
			'product_sn' => $product_sn,
			'attr_list' => $str,
			'sku' => $sku,
			'goods_price' => $money
		);
		$res1 = M('products')->add($arr);
		if($res1){
			$this->success("添加成功",U('Goods/products',"goods_id=$goods_id"));	
		}else{
			$this->error('添加失败');
		}
	}
	//相册列表
	function gallery(){
		$goods_id = I("get.goods_id");
		//查询所有图片
		$res = M('goods_gallery')->where("goods_id=$goods_id")->select();
		$this->assign('goods_id',$goods_id);
		$this->assign('res',$res);
		$this->display();
	}
	//添加照片
	function addgallery(){
		$goods_id = I("get.goods_id");
		$this->assign('goods_id',$goods_id);
		$this->display();
	}
	//执行添加
	function doaddtu(){
		$post = I("post.");
		//调用图片上传方法
		$tu = $this->upload();
		$post['original_img'] = $tu['tu']['savepath'].$tu['tu']['savename'];
		//调用缩略图方法
		$post['thumb_img'] = $this->thum($tu['tu']);
		//执行添加
		$res = M('goods_gallery')->add($post);
		if($res){
			$this->success("添加成功",U('Goods/gallery',"goods_id=$goods_id"));	
		}else{
			$this->error('添加失败');
		}
	}
	
	
	
	
	
	
	
}