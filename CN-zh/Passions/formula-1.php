<?php
require "../../Common-files/redirect.php";
$title = "一级方程式 - Badreddine Rezzouk";
?>

<!DOCTYPE html>

<html class="gradient-box">
<head>
    <?php require '../../Common-files/header.php'; ?>
</head>
<body>
<?php require "../../Common-files/navbar.php" ?>
<div class="gradient-box">
    <div class="halfbox"></div>
    <div class="bg-white p-4 text-center rounded-3 w-50 mx-auto border border-5 shadow-lg">
        <h2> 一级方程式 </h2>
    </div>
    <div class="halfbox"></div>
    <div class="bg-white p-4 text-center rounded-3 w-75 mx-auto">
        <h4> 一级方程式简介 </h4>
        <p class="text-start"> 一级方程式是一项由 <abbr title="赛车性能会因车队不同而变化">多类型</abbr> 组成的汽车比赛，由国际汽车联合会（FIA）管理，自1950年以来每年举办。 </p>
    </div>
    <div class="halfbox"></div>
    <div id="gasly" class="bg-white p-4 rounded-3 w-50 offset-1">
        <div class="row">
            <div id="info" class="col offset-1">
                <h2 class='text-center'>我最喜欢的车手</h2><ul>
                    <li><strong>姓名：</strong> 皮埃尔·加斯利 (Pierre Gasly) </li>
                    <li><strong>号码：</strong> 10 </li>
                    <li><strong>国籍：</strong> 法国 </li>
                    <li><strong>车队：</strong> BWT Alpine F1 车队</li>
                </ul>

            </div>
            <div id="photo" class="col offset-1 border border-5 rounded square" style="background: var(--gradient)">
                <img src="<?php echo $topURL?>Images/thumbnail/formula-1_gasly-face_thumbnail.png" alt="皮埃尔·加斯利">
            </div>
        </div>
        <p> 一个地道的法国人，雄鸡高唱！<br><br>
            他出生于1996年2月7日，来自一个热爱赛车的家庭：祖父1961年玩卡丁车，祖母是诺曼底冠军，父亲曾代表标致参加耐力赛。
            皮埃尔和他的两个兄弟在<strong>非常</strong>年幼的时候（2岁！当时我还在啃脚丫呢）就接触了卡丁车。<br><br>
            从一辆二手卡丁车起步，他在2006年成为诺曼底冠军，次年在全国比赛中获得第三名，并赢得一个冠军头衔。<br><br>
            2011年，皮埃尔·加斯利加入 <u>Auto Sport Academy</u> 的F4系列赛，并再次排名第三。
        </p>
    </div>
    <div class="halfbox"></div>
</div>
<?php require "../../Common-files/footer.php" ?>
</body>
</html>
