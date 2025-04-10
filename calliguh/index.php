<?php global $language_error_fr;
require "../Common-files/redirect.php";
require "../Common-files/unsupportedlanguage.php";
//require "increment.php";
?>

<!DOCTYPE html>

<html>
    <head>
        <?php require "../Common-files/header.php"?>
    </head>
    <body >
        <div class="container-fluid">
            <div class="box"></div>
            <div class="bg-black text-white w-50 mx-auto align-items-center d-flex flex-column justify-content-center" >
                <form method="POST" action="">
                    <button type="submit" value="update">
                        <img src="out-transparent-80.webp" alt="Mori Calliope gif">
                    </button>
                    <span id="global_count_value"></span>
                    <span id="local_countvalue"></span>
                </form>


                <h6> Subscribe to <a>Mori Calliope's channel</a></h6>
            </div>
        </div>
        <div id="credits">

        </div>
    </body>
</html>
