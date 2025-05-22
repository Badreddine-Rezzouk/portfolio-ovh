<?php $title = "Calliguh"?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php require_once '../Common-files/header.php'?>
        <style>
            #clickButton {
                background: none;
                border: none;
                padding: 0;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="width-box" style="background: url('./bg-calliguh.png'); background-size: cover; min-height: 80vh">
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                <h4>Global Counter</h4>
                <h1 id="counter">0</h1>
            </div>
            <button class="mx-auto p-3 w-25" id="clickButton">
                <img src="mori-calliope-hololive.gif" alt="Invisible Click Trigger">
            </button>
            <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                <p class="mx-auto"> Subscribe to <a href="https://www.youtube.com/@MoriCalliope">Mori Calliope Ch. hololive-EN</a></p>
            </div>
            <div class="halfbox"></div>
            <script>
                const counterEl = document.getElementById('counter');
                const button = document.getElementById('clickButton');
                fetch('counter.txt?ts=' + new Date().getTime()) // add cache buster
                    .then(response => response.text())
                    .then(count => {
                        counterEl.textContent = count;
                    });

                const interval = setInterval(function() {
                    fetch('counter.txt?ts=' + new Date().getTime()) // add cache buster
                        .then(response => response.text())
                        .then(count => {
                            counterEl.textContent = count;
                        });

                }, 5000);

                button.addEventListener('click', () => {
                    fetch('counter.php')
                        .then(response => response.text())
                        .then(count => {
                            counterEl.textContent = count;
                        });
                });
            </script>
        </div>
        <footer class="sticky-bottom bg-white p-3 border-top border-light shadow-lg">
            Made by Rrat_Deadbeat, AKA <a href="https://www.badreddinerezzouk.com"> Badreddine Rezzouk</a>
        </footer>
    </body>
</html>
