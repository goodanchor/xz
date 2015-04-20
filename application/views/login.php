<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
     <base href = "<?php echo base_url();?>"/>
    <script type="text/javascript"> window.URL = "<?php echo base_url();?>"; </script>
    <link rel="stylesheet" href="./public/styles/main.css">
    <link rel="stylesheet" href="./public/styles/form.css">
    <title>换趣网</title>
</head>
<body>
<div id="wrapper">
    <div class="login-bar">
        <div class="left-bar inline-block">
            <img class="img" src="./public/img/login.jpg">
            <p class="f14"><span class="strong">换</span>客就比较明显的发挥了网络这一强大的资源共享平台所凝聚的作用，通过网络关系建立强大的人脉和物资资源网，你不需要的东西肯能在互联网的另一端是别人特别想找到的，网络给人类带来了切切实实的便利——怒蛙网络评论机构评论换客这一现象</p>
        </div>
        <div class="right-bar inline-block">
            <div class="nav-bar">
                <a class="nav" href="#">新用户注册</a>
                <a class="nav active" href="#">登录</a>
                <a class="nav" href="#">QQ登录</a>
            </div>
            <form class="login-form">
                <div class="row">
                    <label for="mailbox">邮箱</label>
                    <input type="text" class="input-text" id="mailbox">
                </div>
                <div class="row">
                    <label for="password">密码</label>
                    <input type="text" class="input-text" id="password">
                </div>
                <div class="margin">
                    <a class="forget f12">忘记密码</a>
                </div>
                <div class="margin">
                    <input class="inline-block btn login-btn" type="submit" value="登录">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>