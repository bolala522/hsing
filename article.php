<?php
include('conn/conn_local.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM article WHERE article_id='$id'";
    $arrary = mysqli_query($conn, $sql);
    $list = mysqli_fetch_array($arrary);
};
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
<?php include('header.html') ?>
<div id="top_banner" class="container-fluid">
    <img class="my_fade" src="img/about_top_banner.gif" alt="">
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
            <?php echo
            "<div class=\"col-sm-12 col-md-8\">
                <div class=\"rt_tit\">企业动态</div>
                <div class=\"rt_con article\">
                    <h5>$list[article_name]</h5>
                    <span>$list[article_time]</span>
                    <p>
                       $list[article_content];
                    </p>
                </div>
             </div>" ?>
        </div>
    </div>
</div>
<?php include('foot.html') ?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>