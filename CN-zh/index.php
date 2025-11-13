<?php global $language_error_zh;
require "../Common-files/redirect.php";
require "../Common-files/unsupportedlanguage.php";
$title = "首页 - Badreddine Rezzouk"
?>


<!DOCTYPE html>

<html class="gradient-box">
    <head>
        <?php require '../Common-files/header.php'; ?>
    </head>
    <body>
        <?php require "../Common-files/navbar.php" ?>
        <div class="gradient-box">
            <div id="main_page_cover" class="container-fluid" style='background-image: url("../Images/Home_Page_Banner_Paris_2024_2000.png"); background-size: cover; background-position: center; background-color: rgba(255,255,255,0.6); background-blend-mode: darken;'>
                <div class="halfbox"></div>
                <div class="card mb-3 offset-lg-1 border border-5 col-lg-4">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../Images/bainville.jpg" class="img-fluid rounded-start" alt="Portrait de Jacques Bainville">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <p class="card-text">"L'optimisme est la foi des révolutions"</p>
                                <p class="card-text"><small> - Jacques Bainville </small></p>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <br class="d-md-block d-none">
                <div class="card mb-3 offset-lg-7 border border-5 col col-lg-4">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../Images/einstein-langue-1600-1600.jpg" class="img-fluid rounded-start" alt="Portrait de Albert Einstein">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <p class="card-text">"Hör auf, mich irgendetwas sagen zu lassen"</p>
                                <p class="card-text"><small> - 愛因斯坦 </small></p>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="box"></div>
            </div>
            <br>
            <?php echo $language_error_zh?>
            <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                <h2>欢迎来到我的投资组合</h2>
            </div>
            <div class="box"></div>
            <div id="main_page_section" class="container-fluid">
                <div class="row">
                    <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                        您好，我叫“傅恬蔚”和我是法国人。我是巴黎黎塞纳河畔大学生。
                    </div>
                </div>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                <h4>在此作品集中可以找到：</h4>
            </div>
            <div class="halfbox"></div>
            <div class="container bg-white p-4 rounded-3 text-center w-auto mx-auto border border-5 shadow-lg">
                <div class="row">
                    <a class="col link-underline link-underline-opacity-0" href="<?php echo $baseURL;?>Profile.php">
                        <div class="col">
                            <h6> 我的个人资料 </h6>
                            <p> 了解关于我的一切。 </p>
                        </div>
                    </a>
                    <a class="col link-underline link-underline-opacity-0" href="<?php echo $baseURL;?>Academics.php">
                        <div class="col">
                            <h6> 我的学术与职业简介 </h6>
                            <p> 一个独特的方式来展示我的能力。 </p>
                        </div>
                    </a>
                    <a class="col link-underline link-underline-opacity-0" href="<?php echo $baseURL;?>Experiences/Experiences.php">
                        <div class="col">
                            <h6> 我的工作与实习经历 </h6>
                            <p> 证明我不是毫无经验之人。（进行中） </p>
                        </div>
                    </a>
                </div>
                <div class="row">
                    <div class="col link-underline link-underline-opacity-0">
                        <h6> </h6>
                    </div>
                    <div class="col link-underline link-underline-opacity-0">

                    </div>
                    <a class="col link-underline link-underline-opacity-0" href="<?php echo $baseURL;?>Passions/modding.php">
                        <div class="col">
                            <h6> 我的模组项目 </h6>
                            <p> 谁知道呢？也许我们有共同的爱好。 </p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 text-center w-50 offset-1 border border-5 shadow-lg">
                <h4>现在是 <span id="current-time"></span>，日期是 <span id="current-date"></span>。</h4>
            </div>
            <div class="box"></div>
            <?php require "../Common-files/footer.php" ?>
        </div>
    </body>
</html>
