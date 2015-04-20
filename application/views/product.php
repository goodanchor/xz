<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
        <base href = "<?php echo base_url();?>"/>
    <script type="text/javascript"> window.URL = "<?php echo base_url();?>"; </script>
    <link rel="stylesheet" href="./public/styles/main.css">
    <link rel="stylesheet" href="./public/styles/content.css">
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
            <div class="product">
                <div class="inline-block img-bar">
                    <img src="img/example.jpg" class="big">
                    <img src="img/example.jpg" class="big">
                    <img src="img/example.jpg" class="big">
                </div>
                <div class="product-info inline-block f14">
                    <h2>捷安特11成新自行车阿鲁</h2>
                    <div class="margin">
                        <span class="gr">期待交换</span>
                        <span>图书</span>
                        <span>耳机</span>
                        <span>自行车</span>
                    </div>
                    <div class="margin">
                        <span class="gr">物件主人</span>
                        彭糠醇
                    </div>
                    <div class="margin">
                        <span class="gr">联系方式</span>
                        12333333333
                    </div>
                    <div class="margin">
                        <Span class="gr">发布时间</Span>
                        2012-1-5
                    </div>
                    <div class="margin collect-bar">
                        <a class="inline-block btn red-btn" data-collect="false">
                            <span class="inline-block collect-bac collecting"></span><span>收藏商品</span>
                        </a>
                    </div>
                </div>
                <div class="img-btn">
                    <img class="small active" src="img/example.jpg">
                    <img class="small" src="img/example.jpg">
                    <img class="small" src="img/example.jpg">
                </div>
                <div class="to110">
                    <a class="gr f14">举报商品</a>
                </div>
                <div class="product-intro f14">
                    <p>借款分类登记萨拉非健康路第三奋斗睡觉奥浪费登录</p>
                    <img src="img/example.jpg">
                </div>
            </div>
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
<script src="js/main.js"></script>
</body>
</html>