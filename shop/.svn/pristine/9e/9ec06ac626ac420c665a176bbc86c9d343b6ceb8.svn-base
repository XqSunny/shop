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
            <form class="layui-form" action="<?php echo U('Type/doadd');?>" method="post" enctype="multipart/form-data">
                
                <div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>类型名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="type_name" required="" lay-verify="required"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
				
                <div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>类型分组
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cname" name="attr_group" required="" lay-verify="required"
                        autocomplete="off" class="layui-input">已有分组不可用
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