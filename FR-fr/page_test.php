<?php
require "../Common-files/redirect.php";
$title = "Page Test - Badreddine Rezzouk";
?>

<html>
    <head>
        <?php require_once "../Common-files/header.php"; ?>
    </head>
    <body>

    <?php require "../Common-files/navbar.php" ?>
    <div class="gradient-box">
        <h1> Vous n'êtes pas censé être là </h1>
        <p> Cet espace me sert de petits tests pour l'implémentation de features.</p>
        <iframe width="50vw" height="50vh" class="twitter-timeline" data-dnt="true" data-theme="dark" src="https://twitter.com/SinderVTuber?ref_src=twsrc%5Etfw"></iframe>
        <a class="twitter-timeline" data-dnt="true" data-theme="dark" href="https://twitter.com/SinderVTuber?ref_src=twsrc%5Etfw">Tweets by SinderVTuber</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <?php require "../Common-files/footer.php"; ?>
    </body>
</html>