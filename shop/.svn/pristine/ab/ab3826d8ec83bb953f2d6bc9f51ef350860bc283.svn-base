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
            <form class="layui-form" action="<?php echo U('Goods/doaddattr');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="goods_id" value="<?php echo ($goods_id); ?>">
                <div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>商品类型
                    </label>
                    <div class="layui-input-inline">
                        <select name="goods_type_id" id="id" style="display:block"  onchange="gai();" >
						<option value="0">请选择</option>
							<?php if(is_array($res)): foreach($res as $key=>$v): ?><option value="<?php echo ($v["goods_type_id"]); ?>"><?php echo ($v["type_name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                </div>
				<div id="xie">
				
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
		function gai(){
			var val = $("#id").val();
			$.post("<?php echo U('Goods/shu');?>","goods_type_id="+val,function (res){
				$("#xie").html(res);
			});
		}
		
		
        </script>
        
    </body>

</html>