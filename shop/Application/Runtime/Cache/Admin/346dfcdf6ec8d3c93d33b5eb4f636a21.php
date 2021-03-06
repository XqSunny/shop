<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>
            X-admin v1.0
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/Public/Admin/./css/x-admin.css" media="all">
    </head>
    
    <body>
        <div class="x-body">
            <form class="layui-form" action="<?php echo U('Goods/doadd');?>" method="post" enctype="multipart/form-data">
                
                <div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>产品类型
                    </label>
                    <div class="layui-input-inline">
                        <select name="cat_id">
							<?php if(is_array($res)): foreach($res as $key=>$v): ?><option value="<?php echo ($v["cat_id"]); ?>"><?php echo ($v["cat_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>商品码
                    </label>
                    <div class="layui-input-inline">
                       <input type="text" id="cname" name="goods_sn" required="" lay-verify="required"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>商品名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="goods_name" required="" lay-verify="required"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>品牌
                    </label>
                    <div class="layui-input-inline">
                        <select name="brand_id">
							<?php if(is_array($res1)): foreach($res1 as $key=>$v1): ?><option value="<?php echo ($v1["brand_id"]); ?>"><?php echo ($v1["brand_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>产品数量
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="goods_number" class="layui-input">
						
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>产品重量
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="goods_weight" checked class="layui-input">
						
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>市场价
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="market_price" checked class="layui-input">
						
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>售价
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="shop_price" checked class="layui-input">
						
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>报警数
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="warn_number" checked class="layui-input">
						
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>关键字
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="keywords" checked class="layui-input">
						
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>简短描述
                    </label>
                    <div class="layui-input-inline">
                        <textarea type="text" id="cname" name="goods_brief" checked class="layui-input"></textarea>
						
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>详细描述
                    </label>
                    <div class="layui-input-inline">
                        <textarea type="text" id="cname" name="goods_desc" checked class="layui-input"></textarea>
						
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>图片
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" name="goods_img">
                    </div>
                </div>
				
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>是否开售
                    </label>
                    <div class="layui-input-inline">
                        <input type="radio" id="cname" name="is_on_sale" value="0" checked class="layui-input">开始
						<input type="radio" id="cname" name="is_on_sale" value="1" class="layui-input">不开始
					
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>是否包邮
                    <div class="layui-input-inline">
                        <input type="radio" id="cname" name="is_shipping" value="0" checked class="layui-input">包邮
						<input type="radio" id="cname" name="is_shipping" value="1" class="layui-input">不包邮
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>是否精品
                    <div class="layui-input-inline">
                        <input type="radio" id="cname" name="is_best" value="0" checked class="layui-input">是
						<input type="radio" id="cname" name="is_best" value="1" class="layui-input">不是
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>是否新品
                    <div class="layui-input-inline">
                        <input type="radio" id="cname" name="is_new" value="0" checked class="layui-input">是
						<input type="radio" id="cname" name="is_new" value="1" class="layui-input">不是
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>是否热销
                    <div class="layui-input-inline">
                        <input type="radio" id="cname" name="is_hot" value="0" checked class="layui-input">是
						<input type="radio" id="cname" name="is_hot" value="1" class="layui-input">不是
                    </div>
                </div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>是否促销
                    <div class="layui-input-inline">
                        <input type="radio" id="cname" name="is_promote" value="0" onchange="gai(this)" class="layui-input">是
						<input type="radio" id="cname" name="is_promote" value="1" checked  class="layui-input">不是
                    </div>
                </div>
				
              <div id="cu"></div>
				<div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>排序
                    </label>
                    <div class="layui-input-inline">
						<input type="text" id="cname" name="sort" checked class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" >
                        保存
                    </button>
                </div>
            </form>
        </div>
        <script src="/Public/Admin/lib/layui/layui.js" charset="utf-8">
        </script>
        <script src="/Public/Admin/js/x-layui.js" charset="utf-8">
        </script>
		<script src="/Public/Admin/js/jquery.min.js" charset="utf-8">
        </script>
        <script>
		function gai(obj){
			if($(obj).checked==true){
				$("#cu").html("<div class='layui-form-item'><label for='cname' class='layui-form-label'><span class='x-red'>*</span>促销价</label><div class='layui-input-inline'><input type='text' id='cname' name='promote_price'class='layui-input'></div><label for='cname' class='layui-form-label'><span class='x-red'>*</span>促销开始时间</label><div class='layui-input-inline'><input type='text' id='cname' name='promote_start_date' class='layui-input'></div><label for='cname' class='layui-form-label'><span class='x-red'>*</span>促销结束时间</label><div class='layui-input-inline'><input type='text' id='cname' name='promote_end_date' class='layui-input'></div></div>");
			}else{
				$("#cu").html("");
			}
		}
		$(function(){
			$("#pic").change(function(){
			var path = pic.value;
			var objUrl = getObjectURL(this.files[0]);
			if(objUrl){
				$("#img").attr("src",objUrl);
			}
			})
		})
		function getObjectURL(file){
			var url = null;
			if(window.createObjectURL != undefined){
				url = window.createObjectURL(file);
			}else if(window.URL != undefined){
				url = window.URL.createObjectURL(file);
			}else if(window.webkitURL != undefined){
				url = window.webkitURL.createObjectURL(file);
			}
			return url;
		}
		
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;
            

              //监听提交
              form.on('submit(save)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("保存成功", {icon: 6},function () {
                    // 获得frame索引
                    var index = parent.layer.getFrameIndex(window.name);
                    //关闭当前frame
                    parent.layer.close(index);
                });
                return false;
              });
              
              
            });
        </script>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>

</html>