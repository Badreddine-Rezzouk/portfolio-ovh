<?php
global $topURL;
require "../../../Common-files/redirect.php";
$title = 'Mod - Badreddine Rezzouk';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php require '../../../Common-files/header.php'; ?>
    </head>
    <body>
        <?php require "../../../Common-files/navbar.php" ?>
        <div class="gradient-box">
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg">
                <h2 class="mod-title"></h2>
            </div>
            <div class="box"></div>

        </div>
        <script>
            let modData = [];

            document.addEventListener('DOMContentLoaded', () => {
                fetch('<?php echo $topURL?>mods-json/mods.json')
                    .then(res => res.json())
                    .then(data => {
                        allMods = data.mods;
                        games = data.games;
                        categories = data.categories;

                        populateFilters();
                        renderMods(allMods);
                    });

                document.getElementsByClassName('mod-title').innerHTML = mod.title;
            });

        </script>
    </body>
</html>

