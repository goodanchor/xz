<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
        <base href = "<?php echo base_url();?>"/>
    <script type="text/javascript"> window.URL = "<?php echo base_url();?>"; </script>
    <link rel="stylesheet" href="./public/styles/main.css">
    <link rel="stylesheet" href="./public/styles/content.css">
    <link rel="stylesheet" href="./public/styles/uploadify.css">
    <title>换趣网</title>
</head>
<body>
<div id="wrapper">
    <div id="header" class="clearfix">
        <a class="logo-bar"><img src="img/logo.png" class="img"></a>
        <form class="search-bar clearfix">
            <input type="text" class="search">
            <a id="search-submit"></a>
            <div class="gr f12">热门：雨伞 看片神器 皮卡丘</div>
        </form>
        <div class="basic-bar">
            <img class="img inline-block" src="img/head.jpg">
            <p class="f14 inline-block">昵称就是这么长<br>
                <span class="gr">你好!</span>
            </p>
        </div>
    </div>
    <div id="content" class="clearfix">
        <div class="left-bar">
            <ul>
                <li><a class="nav f14">电车</a></li>
                <li><a class="nav f14">目录二</a></li>
                <li><a class="nav f14">天了噜</a></li>
                <li><a class="nav f14">玩具</a></li>
                <li><a class="nav f14">目录一</a></li>
            </ul>
        </div>
        <div class="main">
            <form action="" id="publish-form">
                <h2 class="gr">发布商品</h2>
                <div class="file-wrapper">
                        <input type="file" name="uploadify" id="uploadify" />
                </div>
                <div class="margin">
                    <label for="name">商品名称</label>
                    <input type="text" class="input-text" id="name">
                </div>
                <div class="margin">
                    <label for="category">商品分类</label>
                    <select id="category" class="input-text">
                        <option>分类一</option>
                    </select>
                </div>
                <div class="margin">
                    <label for="want">期望交换类别</label>
                    <select id="want" class="input-text">
                        <option>分类三</option>
                    </select>
                </div>
                <p class="gr-text margin">联系方式（至少一项）：</p>
                <div class="margin">
                    <label for="qnum">QQ号</label>
                    <input type="text" class="input-text" id="qnum">
                </div>
                <div class="margin">
                    <label for="tel">手机号</label>
                    <input type="text" class="input-text" id="tel">
                </div>
            </form>
        </div>
        <div class="right-bar">
            <a class="publish" href="#">我要发布</a>
            <ul class="like-list">
                <li class="title f14 clearfix">猜你喜欢<a class="change f12">换一组</a></li>
                <li>
                    <a class="pro-item">
                        <img src="img/example.jpg" class="img">
                        <div class="basic-bar">
                            <p class="f14 inline-block">正红色长丙三<br>
                                <span class="gr f12">hello kitty</span>
                            </p>
                        </div>
                        <span class="tag f12">交换：书籍</span>
                    </a>
                </li>
                <li>
                    <a class="pro-item">
                        <img src="img/example.jpg" class="img">
                        <div class="basic-bar">
                            <p class="f14 inline-block">正红色长丙三<br>
                                <span class="gr f12">hello kitty</span>
                            </p>
                        </div>
                        <span class="tag f12">交换：书籍</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery.uploadify.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>