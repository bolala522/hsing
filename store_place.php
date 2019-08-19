<?php
include('conn/conn_local.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1,
          shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
<div id="top_bg"></div>
<div id="navbar" class="navbar navbar-light navbar-expand-md navbar-light bg-white">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="img/index_logo.png">
        </a>

        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#top_nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="top_nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">首页</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link nav-link-none">关于兴城</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="brand.html" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        品牌分类
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="brand1.html">世代相传</a>
                        <a class="dropdown-item" href="brand2.html">世代崇尚</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="culture.php" class="nav-link nav-link-none">红木文化</a>
                </li>
                <li class="nav-item">
                    <a href="news.php" class="nav-link">企业动态</a>
                </li>
                <li class="nav-item">
                    <a href="store_place.php" class="nav-link">全国连锁</a>
                </li>
                <li class="nav-item">
                    <a href="process.html" class="nav-link">加盟流程</a>
                </li>
                <li class="nav-item">
                    <a href="award.html" class="nav-link">企业荣誉</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="case.html" id="navbarDropdown1" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        顾客案例
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="case1.html">世代相传</a>
                        <a class="dropdown-item" href="case2.html">世代崇尚</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="invite.html" class="nav-link nav-link-none">人才招聘</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="top_banner" class="container-fluid">
    <img class="my_fade" src="img/process_banner.gif" alt="">
</div>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="lf_tit">联系我们</div>
                <div class="lf_con">
                    <ul>
                        <li>电 话：（＋86）0769 - 8553 9163</li>
                        <li>微信号：shidaixiangchuan2014</li>
                        <li>网 址： www.hkhsing.net</li>
                        <li>地 址： 广东省东莞市长安镇新安社区新岗路</li>
                    </ul>
                </div>
                <div class="lf_tit">旗下品牌</div>
                <div class="lf_con">
                    <a href="brand1.html"> <img src="img/brand1.gif" alt=""></a>
                    <a href="brand2.html"><img src="img/brand2.gif" alt=""></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 place">
                <div class="rt_tit">全国连锁</div>
                <div class="rt_con ">
                    <ul class="place_list">
                        <li><a href="store_place.php?id=1">北京市</a></li>
                        <li><a href="store_place.php?id=2">上海市</a></li>
                        <li><a href="store_place.php?id=3">广东省</a></li>
                        <li><a href="store_place.php?id=4">安徽省</a></li>
                        <li><a href="store_place.php?id=5">湖北省</a></li>
                        <li><a href="store_place.php?id=6">广西省</a></li>
                        <li><a href="store_place.php?id=7">贵州省</a></li>
                        <li><a href="store_place.php?id=8">河北省</a></li>
                        <li><a href="store_place.php?id=9">河南省</a></li>
                        <li><a href="store_place.php?id=10">甘肃省</a></li>
                        <li><a href="store_place.php?id=11">重庆市</a></li>
                        <li><a href="store_place.php?id=12">湖南省</a></li>
                        <li><a href="store_place.php?id=13">海南省</a></li>
                        <li><a href="store_place.php?id=14">吉林省</a></li>
                        <li><a href="store_place.php?id=15">江苏省</a></li>
                        <li><a href="store_place.php?id=16">江西省</a></li>
                        <li><a href="store_place.php?id=17">辽宁省</a></li>
                        <li><a href="store_place.php?id=18">内蒙古</a></li>
                        <li><a href="store_place.php?id=19">宁夏省</a></li>
                        <li><a href="store_place.php?id=20">青海省</a></li>
                        <li><a href="store_place.php?id=21">山东省</a></li>
                        <li><a href="store_place.php?id=22">山西省</a></li>
                        <li><a href="store_place.php?id=23">陕西省</a></li>
                        <li><a href="store_place.php?id=24">新疆省</a></li>
                        <li><a href="store_place.php?id=25">云南省</a></li>
                        <li><a href="store_place.php?id=26">浙江省</a></li>
                    </ul>
                    <?php
                    $sql = "SELECT * FROM place";
                    $arrary = mysqli_query($conn, $sql);
                    if (isset($_GET['id']) and !empty($_GET['id'])){
                        $id=$_GET['id'];
                        $sql = "SELECT * FROM place WHERE place_id='$id'";
                        $arrary = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($arrary)) {
                            echo "
                            <div class=\"place_deti\">
                            <h4>$row[place_province]:</h4>
                            <span>世代相传/世代崇尚</span>
                            <p>$row[place_content]</p>
                    </div>";
                        }
                        $sql = "SELECT * FROM place WHERE place_id!='$id'";
                        $arrary = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($arrary)) {
                            echo "
                            <div class=\"place_deti\">
                            <h4>$row[place_province]:</h4>
                            <span>世代相传/世代崇尚</span>
                            <p>$row[place_content]</p>
                    </div>";
                        }

                    }else{
                        $sql = "SELECT * FROM place ";
                        $arrary = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($arrary)) {
                            echo "
                            <div class=\"place_deti\">
                            <h4>$row[place_province]:</h4>
                            <span>世代相传/世代崇尚</span>
                            <p>$row[place_content]</p>
                    </div>";
                        }
                    }

                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
<div id="pcfoot">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img class="my_fade" src="img/bn_01.png" alt="">
                <ul>
                    <li>2005年4月荣获《中国名优产品</li>
                    <li>2005年4月荣获《中国绿色环保产品</li>
                    <li>2005年4月全国产品质量监督抽查合格</li>
                    <li>所有系列ISO9001:2000检测合格</li>
                </ul>
            </div>
            <div class="col-3">
                <img class="my_fade" src="img/bn_02.png" alt="">
                <ul>
                    <li>加入我们</li>
                </ul>
            </div>
            <div class="col-3">
                <img class="my_fade" src="img/bn_03.png" alt="">
                <ul>
                    <li>联系我们</li>
                    <li>广东省东莞市长安镇新安社区新岗路</li>
                    <li>Tel:（＋86）0769-85539163</li>
                </ul>
            </div>
            <div class="col-3">
                <img class="my_fade" src="img/bn_04.png" alt="">
                <ul>
                    <li>微信公众号</li>
                </ul>
                <img class="weixin my_fade" src="img/weixin.gif">
            </div>
        </div>
    </div>
    <div class="reg">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <span> Copyright © 2011 - 2016 HSING. All Rights Reserved</span>
                </div>
                <div class="col-6">
                    <span class="float-right">兴城家私（东莞长安奥城家具厂） 粤ICP备11083371号</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mfoot" class="d-none">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="img/bn_04.png" alt="">
                <ul>
                    <li>微信公众号</li>
                </ul>
                <img class="weixin" src="img/weixin.gif">
            </div>
        </div>
    </div>
    <div class="reg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <span class="text-center d-block">兴城家私（东莞长安奥城家具厂） 粤ICP备11083371号</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>