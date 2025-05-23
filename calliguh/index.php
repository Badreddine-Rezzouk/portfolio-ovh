<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> "Guh" </title>
        <meta name="description" content="This is a fansite dedicated to Hololive EN Myth's Mori Calliope. It shall be called the Guh button (Yes, this description is a shameless copy of Joel'z' Fauna ara).">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://calliguh.com">
        <meta property="og:type" content="website">
        <meta property="og:title" content='"Guh"'>
        <meta property="og:description" content="This is a fansite dedicated to Hololive EN Myth's Mori Calliope. It shall be called the Guh button (Yes, this description is a shameless copy of Joel'z' Fauna ara).">
        <meta property="og:image" content="">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="calliguh.com">
        <meta property="twitter:url" content="https://calliguh.com">
        <meta name="twitter:title" content='Guh"'>
        <meta name="twitter:description" content="This is a fansite dedicated to Hololive EN Myth's Mori Calliope. It shall be called the Guh button (Yes, this description is a shameless copy of Joel'z' Fauna ara).">
        <meta name="twitter:image" content="">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/stylesheet.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
        <script>
            function playRandomAudio() {
                fetch('get_random_audio.php')
                    .then(response => response.text())
                    .then(filePath => {
                        if (filePath) {
                            const audio = document.getElementById('audioPlayer');
                            audio.src = filePath;
                            audio.play();
                        } else {
                            alert("No audio files found.");
                        }
                    })
                    .catch(error => console.error('Error fetching audio:', error));
            }
        </script>
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
                    <button class="mx-auto p-1 w-25" id="clickButton" onclick="playRandomAudio()">
                        <img src="mori-calliope-hololive.gif" alt="Invisible Click Trigger">
                    </button>
                    <audio id="audioPlayer"></audio>
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
            Made by Rrat_Deadbeat, AKA <a href="https://www.badreddinerezzouk.com"> Badreddine Rezzouk</a> <p class="text-end"> Credits: Joel Z, Mori Calliope, @walfieee, Cover corp.</p>
        </footer>
    </body>
</html>
