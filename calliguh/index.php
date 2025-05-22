<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Calliguh </title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/stylesheet.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
    </head>
    <body>
        <div class="width-box" style="background: url('./bg-calliguh.png'); background-size: cover; min-height: 80vh">
            <div class="box"></div>
            <div class="row">
                <div class="col offset-1">
                    <div class="bg-white p-4 rounded-3 text-center mx-auto border border-5 shadow-lg">
                        <h4>Global Counter</h4>
                        <h1 id="counter">0</h1>
                    </div>
                    <div class="halfbox"></div>
                    <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                        <p class="mx-auto"> Subscribe to <a href="https://www.youtube.com/@MoriCalliope">Mori Calliope Ch. hololive-EN</a></p>
                    </div>
                </div>
                <div class="col">
                    <button class="mx-auto p-3 w-25" id="clickButton">
                        <img src="mori-calliope-hololive.gif" alt="Invisible Click Trigger">
                    </button>
                </div>
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
