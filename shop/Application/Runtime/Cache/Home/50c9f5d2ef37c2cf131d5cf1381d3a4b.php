<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0096)file:///C:/Users/Administrator/Desktop/%E7%99%BB%E5%BD%95%20-%20%E7%BE%8E%E4%B8%BD%E8%AF%B4.html -->
<html><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>登录 - Beautify</title>
    <meta name="description" content="Beautify，专注时尚新款发布。海量新款每日上新，每周五新款大促火热进行中！旗下海淘品牌“HIGO”挑选全球时尚好货，满足你全方位的时尚购物体验！">
    <meta name="keywords" content="Beautify,higo,衣服,鞋子,包包,配饰,家居,美妆,搭配,团购,Beautifyhigo">
    <link rel="dns-prefetch" href="/Public/Home/http://static.meilishuo.net/">
    <link rel="dns-prefetch" href="/Public/Home//">
    <link rel="dns-prefetch" href="/Public/Home//">
    <link rel="dns-prefetch" href="/Public/Home/http://s10.mogucdn.com/">
    <link rel="dns-prefetch" href="/Public/Home/http://d01.res.meilishuo.net/">
    <link rel="dns-prefetch" href="/Public/Home//">
    <link rel="dns-prefetch" href="/Public/Home//">
    <link rel="dns-prefetch" href="/Public/Home/http://d04.res.meilishuo.net/">
    <link rel="dns-prefetch" href="/Public/Home/http://d05.res.meilishuo.net/">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" type="text/css" href="/Public/Home//login/base.css">
    <link rel="icon" href="/Public/Home//login/7d026282ff00a259b6a7b90eee6d_48_48.c5.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/Public/Home//login/login.css">
    <script type="text/javascript" src="/Public/Home//login/fml.js"></script>
    <script>    fml.setOptions({
        'sversion': '1702101808.25',
        'defer': true,
        'modulebase': 'http://static.meilishuo.net/pc/jsmin/'
    });
    var Meilishuo = {
        "config": {
            "nt": "1yQyN1tU7ssTVQ5GeZ16w4veVnyVK1iqpfGrjRWNhQSmvH91nedG8u38L779faT7",
            "main_site_domain": "http://www.meilishuo.com/",
            "controller": "user-login",
            "isLogin": false,
            "userInfo": {}
        },
        "global": {}
    };
    </script>
    <style type="text/css">.im-frame-container {
        width: 580px;
        height: 430px;
        position: fixed;
        z-index: 1000;
        display: none;
        left: 10px;
        top: 10px;
    }

    .im-frame-container .im-frame-box {
        width: 100%;
        height: 100%;
        border: none;
    }

    .im-frame-container .im-frame-drag {
        width: 470px;
        height: 32px;
        position: absolute;
        z-index: 3;
        left: 75px;
        top: 24px;
    }

    .im-frame-container .im-frame-btn {
        width: 32px;
        height: 32px;
        position: absolute;
        right: 0;
        top: 24px;
        z-index: 2;
        cursor: pointer;
        opacity: 0;
        background-color: rgba(255, 102, 153, 0);
    }
    </style>
    <style type="text/css">.im-frame-container {
        width: 580px;
        height: 430px;
        position: fixed;
        z-index: 1000;
        display: none;
        left: 10px;
        top: 10px;
    }

    .im-frame-container .im-frame-box {
        width: 100%;
        height: 100%;
        border: none;
    }

    .im-frame-container .im-frame-drag {
        width: 470px;
        height: 32px;
        position: absolute;
        z-index: 3;
        left: 75px;
        top: 24px;
    }

    .im-frame-container .im-frame-btn {
        width: 32px;
        height: 32px;
        position: absolute;
        right: 0;
        top: 24px;
        z-index: 2;
        cursor: pointer;
        opacity: 0;
        background-color: rgba(255, 102, 153, 0);
    }
    </style>
</head>
<body>
<div class="page"><h1><a href="/Public/Home/http://www.meilishuo.com/"> <img
        src="/Public/Home//login/735e2614e3911e621f0446e54597_204_52.c5.png" alt="Beautify"> </a></h1>
    <div class="content">
        <div class="left-box"><img src="/Public/Home//login/idid_ifrgmmjqmnsgmmbvmizdambqmeyde_370x353.jpg"
                                   alt=""></div>
        <div class="right-box"><p class="title"> 登录Beautify <a href="/Public/Home//index/user/register" class="register">新用户注册</a>
        </p>
            <form method="post" action="<?php echo U('Login/dolog');?>">
                <div action="/index/user/login" class="form"><p class="error-tips" id="errorTip"></p>
                    <div class="item"><input type="text" id="phone" name="username" class="ui-input phone"
                                             placeholder="手机号/邮箱/用户名"></div>
                    <div class="item"><input type="password" id="password" class="ui-input password" name="password"
                                             placeholder="密码"></div>
                    <!-- <div class="img-code" id="imgCode">	<p>		请点击下方图片，将它们翻转到正确方向		<a href="/Public/Home/javascript:;" id="imgCodeChange">换一组</a>	</p>	<ul>		<li class="one" data-value="0"></li>		<li class="two" data-value="0"></li>		<li class="three" data-value="0"></li>		<li class="four" data-value="0"></li>	</ul></div>	 -->
                    <li class="frame_style form_error"><label class="Codes_icon"></label>
                        <!-- <i style="font-size:14px;font-weight:blod;font-style:normal;">验证码:</i> --><input
                                name="code" type="text" placeholder="验证码" id="Codes_text"
                                style="width:100px;height:25px;margin-top:15px;margin-bottom:10px;"/>
                        <div class="Codes_region"
                             style="width:20px;width:120px;float:right;margin-right:30px;margin-top:10px;"><img
                                id="verify_img" src="/Public/Home/" alt="验证码" onclick="refreshVerify()"/></div>
                    </li>
                    <script>
                        function refreshVerify() {
                            var ts = Date.parse(new Date()) / 1000;
                            $('#verify_img').attr("src", "/captcha?id=" + ts);
                        }
                    </script>
                    <div class="item"><input type="submit" id="submit" value="立即登录" class="submit"></div>
                    <div class="item"><label> <input type="checkbox" value="1" name="read" class="check" id="remenber"
                                                     checked="checked"> 记住我 </label> <a target="_blank"
                                                                                        href="/Public/Home/http://www.meilishuo.com/account/findPwd"
                                                                                        class="forget">忘记密码</a></div>
                </div>
            </form>
            <div class="fast_login"><h3>无需注册，即可登录</h3>
                <div class="fast_way"><a href="/Public/Home/http://www.meilishuo.com/user/connect/qq" class="qq_way"></a> <a
                        href="/Public/Home/http://www.meilishuo.com/user/connect/sina" class="sina_way"></a> <a
                        href="/Public/Home/http://www.meilishuo.com/user/connect/weixin" class="weixin_way"></a></div>
            </div>
        </div>
    </div>
</div>
<script type="text/html" id="popupTpl">
    <div class="popup-wrap" id="popupWrap">
        <div class="box"><p class="title"><a href="/Public/Home/javascript:;" id="close">关闭</a></p>
            <p class="tips"></p>
            <div class="btn-box"><a href="/Public/Home/javascript:;" class="btn-pink btn"></a></div>
        </div>
        <i></i></div></script>

<script type="text/javascript" src="/Public/Home//login/jquery.js"></script>
<script src="/Public/Home//login/openIm.js"></script>
<script src="/Public/Home//login/login-step1+base"></script>

</body>
</html>