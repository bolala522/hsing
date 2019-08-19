<?php
include('conn/conn_local.php');
$sql = "SELECT * FROM article WHERE article_sort='news'";
$arrary = mysqli_query($conn, $sql);
?>

<?php
if (isset($_GET['page'])){
    $page=$_GET['page'];
    if ($page < 1) {
        $page = 1;
    }
}else{
    $page=1;
}
if ($page){
    $page_size=10;

    $sql = "SELECT * FROM article WHERE article_sort='news'";
    $result = mysqli_query($conn, $sql);
    $message_count=mysqli_num_rows($result);
    $page_count=ceil($message_count/$page_size);
    if ($page >= $page_count) {
$page = $page_count;
}
$offset=($page-1)*$page_size;
$sql = "SELECT * FROM article WHERE article_sort='news' ORDER BY article_id  limit $offset,$page_size";
$result = mysqli_query($conn, $sql);
}
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
<?php include('header.html'); ?>
<div id="top_banner" class="container-fluid">
    <img class="my_fade" src="img/about_top_banner.gif" alt="">
</div>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 culture">
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
            <div class="col-sm-12 col-md-8 culture_right">
                <div class="rt_tit">企业动态</div>
                <div class="culture_con rt_con">

                    <ul>
                        <?php while ($row = mysqli_fetch_array($result)) {
                            echo "
                             <li><a href=\"article.php?id=$row[article_id]\">
                        $row[article_name]&nbsp&nbsp&nbsp&nbsp($row[article_time])
                    </a></li>
                        ";
                        } ?>
                    </ul>
                </div>

                <div class="page">
                    <ul class="pagination justify-content-start">
                        <li class="page-item ">
                            <a class="page-link" href="news.php?page=1">首页</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="news.php?page=<?php echo ($page-1)?>">上一页</a></li>
                        <li class="page-item"><a class="page-link" href="news.php?page=<?php echo ($page+1)?>">下一页</a></li>
                        <li class="page-item"><a class="page-link" href="news.php?page=<?php echo $page_count?>">尾页</a></li>

                    </ul>
                    <div class="page_jump">
                        <label for="select_page">跳转到：</label>
                        <select id="select_page">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('foot.html'); ?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>