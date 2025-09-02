<?php
require "../../Common-files/redirect.php";
$title = "Formula 1 - Badreddine Rezzouk";
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
        <h2> Formula 1 </h2>
    </div>
    <div class="halfbox"></div>
    <div class="bg-white p-4 text-center rounded-3 w-75 mx-auto">
        <h4> Formula 1 in summary </h4>
        <p class="text-start"> Formula 1 is a <abbr title="the car's performance varies depending on the team">polytype</abbr> motorsport competition governed by the Fédération Internationale de l'Automobile (FIA), held annually since 1950. </p>
    </div>
    <div class="halfbox"></div>
    <div id="gasly" class="bg-white p-4 rounded-3 w-50 offset-1">
        <div class="row">
            <div id="info" class="col offset-1">
                <h2 class='text-center'>My favorite driver</h2><ul>
                    <li><strong>Name:</strong> Pierre Gasly </li>
                    <li><strong>Number:</strong> 10 </li>
                    <li><strong>Country:</strong> France </li>
                    <li><strong>Team:</strong> BWT Alpine F1 Team</li>
                </ul>

            </div>
            <div id="photo" class="col offset-1 border border-5 rounded square" style="background: var(--gradient)">
                <img src="<?php echo $topURL?>Images/thumbnail/formula-1_gasly-face_thumbnail.png" alt="Pierre Gasly">
            </div>
        </div>
        <p> A true Frenchman from home soil, cock-a-doodle-doo!<br><br>
            Born on February 7, 1996, he comes from a family passionate about motorsport: a grandfather who did karting in 1961, a grandmother who was a champion in Normandy, and a father who raced endurance for Peugeot.
            Pierre and two of his brothers themselves got into karting at a <strong>very</strong> young age (2 years old, I was still chewing on my feet at that age).<br><br>
            After starting with a second-hand kart, he managed to become champion of Normandy in 2006, then took 3rd place in a national competition and a championship the following year.<br><br>
            Pierre Gasly joined F4 in 2011 under the tutelage of <u>Auto Sport Academy</u>, where he once again finished 3rd.
        </p>
    </div>
    <div class="halfbox"></div>
</div>
<?php require "../../Common-files/footer.php" ?>
</body>
</html>
