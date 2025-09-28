<?php
global $baseURL;
require "../../Common-files/redirect.php";
$title = "Experiences - Badreddine Rezzouk";
?>

<!DOCTYPE html>

<html>
    <head>
        <?php require "../../Common-files/header.php"; ?>
    </head>
    <body>
        <?php require "../../Common-files/navbar.php" ?>
        <div class="gradient-box">
            <div class="halfbox"></div>
            <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
                <h2> Mes expériences </h2>
            </div>
            <div class="halfbox"></div>

            <div class="row">
                <div class="col"></div>
                <div class="col-4 bg-white p-4 rounded-3 mx-auto w-40 border border-5 shadow-lg" style="cursor: pointer;" onclick="window.location.href='<?php echo $baseURL;?>Experiences/Stages/stages.php'">
                    <h3 class="text-center"> Mes stages</h3>
                </div>
                <div class="col"></div>
                <div class="col-4 bg-white p-4 rounded-3 mx-auto w-40 border border-5 shadow-lg" style="cursor: pointer;" onclick="window.location.href='<?php echo $baseURL;?>Experiences/Emplois/emplois.php'">
                    <h3 class="text-center">Mes emplois / jobs</h3>
                </div>
                <div class="col"></div>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
                <h4> Mes autres expériences </h4>
            </div>
        </div>
        <?php require "../../Common-files/footer.php" ?>
    </body>
</html>
