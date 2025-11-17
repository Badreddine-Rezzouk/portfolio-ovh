<?php
require "../Common-files/redirect.php";
$title = "专长 - Badreddine Rezzouk"
?>

<!DOCTYPE html>

<html class="gradient-box">
<head>
    <?php require '../Common-files/header.php'; ?>
</head>
<body>
<?php require "../Common-files/navbar.php" ?>
<div class="gradient-box">
    <br>
    <div class="bg-white p-4 text-center rounded-3 w-50 mx-auto border border-5 shadow-lg">
        <h2> 我的学习、学历与认证 </h2>
    </div>
    <div class="box"></div>
    <div class="bg-white p-4 rounded-3 w-60 mx-auto border border-5 shadow-lg">
        <p> 在此页面，您可以找到我所有的学习信息，包括就读学校、已取得的学位以及拥有的证书。 </p>
    </div>
    <div class="halfbox"></div>
    <hr class="mx-auto rounded-2">
    <div class="halfbox"></div>
    <div class="bg-white p-4 rounded-3 w-75 offset-1 border border-5 shadow-lg">
        <div>
            <h2 id="titleLycee" class="text-primary text-center"></h2>
            <script>
                new TypeIt("#titleLycee", {
                    strings: "技术高中文凭（STI2D）"
                }).go().destroy()
            </script>
        </div>
        <p class="text-start"><span class="text-warning">就读地点：</span>  <a class="text-dark" href="https://lyc-brassens-courcouronnes.ac-versailles.fr/">乔治·布拉桑斯综合高中</a>，位于埃夫里‑库尔库隆。</p>
        <div class="row">
            <div class="col-6">
                <img src="../Images/diplome_bac.jpg" class="img-fluid rounded-3 border border-5 shadow-lg" alt="国家四级学历证书">
            </div>
            <div class="col text-center mx-auto my-auto">
                <p> 专业 <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="工业与可持续发展技术科学">SIN</span>，以 “优秀” 等级获得。 </p>
                <div class="halfbox"></div>
                <p class="text-start">选修科目（除公共课程外）：</p>
                <div class="accordion" id="AccordionMatièresLycee">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMaths" aria-expanded="false" aria-controls="collapseMaths">
                                数学
                            </button>
                        </h2>
                        <div id="collapseMaths" class="accordion-collapse collapse" data-bs-parent="#accordionMatièresLycee">
                            <div class="accordion-body">
                                <p> 无论是 2+2 还是算法，数学在日常生活中都非常有用。 </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePhysique" aria-expanded="false" aria-controls="collapseMaths">
                                物理‑化学
                            </button>
                        </h2>
                        <div id="collapsePhysique" class="accordion-collapse collapse" data-bs-parent="#accordionMatièresLycee">
                            <div class="accordion-body">
                                <p> 在物理‑化学专项中，我们学习了：分子质量、力等内容。</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIngenieurie" aria-expanded="false" aria-controls="collapseMaths">
                                工程、创新与可持续发展 – 信息系统与数字技术
                            </button>
                        </h2>
                        <div id="collapseIngenieurie" class="accordion-collapse collapse" data-bs-parent="#accordionMatièresLycee">
                            <div class="accordion-body">
                                <p> 内容即将更新……</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="halfbox"></div>
    <hr class="mx-auto rounded-2">
    <div class="halfbox"></div>
    <div class="bg-white text-dark p-4 rounded-3 text-center w-80 mx-auto border border-5 shadow-lg">
        <div>
            <h2 id="titleBUT" class="text-primary"></h2>
            <script>
                new TypeIt("#titleBUT", {
                    strings: "信息技术本科（BUT）"
                }).go().destroy()
            </script>
        </div>
        <p class="text-start"><span class="text-warning">就读地点：</span> <a class="text-dark" href="https://iutparis-seine.u-paris.fr/">巴黎大学技术学院 – 塞纳河畔（德卡尔特）校区</a>，位于巴黎第十六区</p>
        <div>
        </div>

        <div class="row">
            <div class="col">
                <div id="carouselIUT" class="carousel slide rounded-3 border border-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $topURL; ?>Images/Academie/IUT/img.png" class="d-block " alt="IUT 图片">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $topURL; ?>Images/Academie/IUT/img_1.png" class="d-block " alt="IUT 图片">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $topURL; ?>Images/Academie/IUT/img_2.png" class="d-block " alt="IUT 图片">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIUT" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">上一张</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselIUT" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">下一张</span>
                    </button>
                </div>
            </div>
            <div class="col text-start">
                <div class="col text-start">
                    <p>课程：</p>
                    <div class="accordion" id="accordionMatièresBUT">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDevApp" aria-expanded="false" aria-controls="collapseDevApp">
                                    应用程序开发（C、C++、Java）
                                </button>
                            </h2>
                            <div id="collapseDevApp" class="accordion-collapse collapse" data-bs-parent="#accordionMatièresBUT">
                                <div class="accordion-body">
                                    <p>内容即将更新……</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDevMobile" aria-expanded="false" aria-controls="collapseDevMobile">
                                    移动端开发
                                </button>
                            </h2>
                            <div id="collapseDevMobile" class="accordion-collapse collapse" data-bs-parent="#accordionMatièresBUT">
                                <div class="accordion-body">
                                    <p>内容即将更新……</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDevWeb" aria-expanded="false" aria-controls="collapseDevWeb">
                                    Web 开发
                                </button>
                            </h2>
                            <div id="collapseDevWeb" class="accordion-collapse collapse" data-bs-parent="#accordionMatièresBUT">
                                <div class="accordion-body">
                                    <p>内容即将更新……</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBDD" aria-expanded="false" aria-controls="collapseBDD">
                                    数据库
                                </button>
                            </h2>
                            <div id="collapseBDD" class="accordion-collapse collapse" data-bs-parent="#accordionMatièresBUT">
                                <div class="accordion-body">
                                    <p> MySQL、Oracle SQL、MariaDB、SQLite——各种格式层出不穷。如果人类能够达成共识，这些或许会变得简单。但在此之前，我只能逐一处理它们。</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReseaux" aria-expanded="false" aria-controls="collapseReseaux">
                                    计算机网络
                                </button>
                            </h2>
                            <div id="collapseReseaux" class="accordion-collapse collapse" data-bs-parent="#accordionMatièresBUT">
                                <div class="accordion-body">
                                    <p>内容即将更新……</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseManagement" aria-expanded="false" aria-controls="collapseManagement">
                                    信息系统管理 – 敏捷 / 伦理
                                </button>
                            </h2>
                            <div id="collapseManagement" class="accordion-collapse collapse" data-bs-parent="#accordionMatièresBUT">
                                <div class="accordion-body">
                                    <p>内容即将更新……</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="halfbox"></div>
    <hr class="mx-auto rounded-2">
    <div class="halfbox"></div>
    <div class="row">
        <div class="bg-white p-4 rounded-3 col-10 col-md-8 text-center offset-1 border border-5 shadow-lg">
            <div class="row">
                <h4> 我的编程语言 </h4>
                <div class="col">
                    <p class="text-start">
                        前端语言：
                    <ul class="list-group list-group-flush list-group-horizontal">
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/html5-logo.png" class="img-logo" alt="HTML5 徽标">
                                <figcaption> HTML5 </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/css3-logo.png" class="img-logo" alt="CSS3 徽标">
                                <figcaption> CSS3 </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/javascript-logo.png" class="img-logo" alt="JavaScript 徽标">
                                <figcaption> JavaScript </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/php-logo.png" class="img-logo" alt="PHP 徽标">
                                <figcaption> PHP 8.3 </figcaption>
                            </figure>
                        </li>
                    </ul>
                    </p>
                </div>
                <div class="col">
                    <p class="text-start">
                        框架：
                    <ul class="list-group list-group-flush list-group-horizontal">
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/bootstrap-logo.png" class="img-logo" alt="Bootstrap 徽标">
                                <figcaption> Bootstrap </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/react-logo.png" class="img-logo" alt="React 徽标">
                                <figcaption> React JS </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/symfony-logo.png" class="img-logo" alt="Symfony 徽标">
                                <figcaption> Symfony </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/mariadb-logo.png" class="img-logo" alt=".NET 徽标">
                                <figcaption> .NET </figcaption>
                            </figure>
                        </li>
                    </ul>
                    </p>
                </div>
                <div class="col">
                    <p class="text-start">
                        数据库系统：
                    </p>
                    <ul class="list-group list-group-flush list-group-horizontal">
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/mariadb-logo.png" class="img-logo" alt="MariaDB 徽标">
                                <figcaption> MariaDB </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/mysql5-logo.png" class="img-logo" alt="MySQL 徽标">
                                <figcaption> MySQL </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/sqlite-logo.png" class="img-logo" alt="SQLite 徽标">
                                <figcaption> SQLite </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <div class="halfbox"></div>
    <div class="row flex-column-reverse">
        <div class="col-10 col-md-8 text-center offset-1 flex-column-reverse bg-white p-4 rounded-3 border border-5 shadow-lg">
            <div class="row">
                <h4> 我常用的软件 </h4>
                <div class="col">
                    <ul class="list-group list-group-flush list-group-horizontal">
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL?>Images/logo/adobe-logo.png" class="img-logo" alt="Adobe Creative Cloud 徽标">
                                <figcaption> Adobe 套件 </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL ?>Images/logo/davinci-logo.png" class="img-logo"
                                     alt="DaVinci Resolve 徽标">
                                <figcaption> DaVinci Resolve </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL ?>Images/logo/krita-logo.png" class="img-logo"
                                     alt="Krita 徽标">
                                <figcaption> Krita </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL ?>Images/logo/unreal-logo.png" class="img-logo"
                                     alt="Unreal Engine 徽标">
                                <figcaption> Unreal Engine </figcaption>
                            </figure>
                        </li>
                        <li class="list-group-item">
                            <figure>
                                <img src="<?php echo $topURL ?>Images/logo/blender-logo.png" class="img-logo"
                                     alt="Blender 徽标">
                                <figcaption> Blender </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

    <div class="box"></div>
</div>


<?php require "../Common-files/footer.php" ?>
</body>
</html>