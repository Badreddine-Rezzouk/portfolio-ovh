<?php global $language_error_zh;
require "../Common-files/redirect.php";
require "../Common-files/unsupportedlanguage.php" ?>


<!DOCTYPE html>

<html class="gradient-box">
    <head>
        <?php require '../Common-files/header.php'; ?>
    </head>
    <body>
        <?php require "../Common-files/navbar.php" ?>
        <div class="gradient-box">
            <div id="main_page_cover" class="container-fluid">
                <br>
                <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                    <h2>欢迎来到我的投资组合</h2>
                </div>
                <div class="box"></div>
                <div class="card mb-3 offset-md-1" style="max-width: 540px; justify-content: center;">
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
                <div class="card mb-3 offset-md-7" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="../Images/einstein-langue-1600-1600.jpg" class="img-fluid rounded-start" alt="Portrait de Albert Einstein">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <p class="card-text">"Hör auf, mich irgendetwas sagen zu lassen"</p>
                                <p class="card-text"><small> - Albert Einstein </small></p>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
            <?php echo $language_error_zh?>
            <div class="box"></div>
            <div id="main_page_section" class="container-fluid">
                <div class="row">
                    <div class="bg-white p-4 rounded-3 text-center w-50 mx-auto border border-5 shadow-lg">
                        您好，我叫“傅恬蔚”和我是法国人。我是巴黎黎塞纳河畔大学生。
                    </div>
                </div>
            </div>
            <div class="box"></div>
            <div class="bg-white p-4 rounded-3 text-center w-50 offset-1 border border-5 shadow-lg">
                <script>
                    // Function to update the time
                    function updateTime() {
                        // Use Luxon to get the current time in Paris with the Bengali numbering system
                        const dt = luxon.DateTime.now().setZone('Europe/Paris').setLocale('zh');

                        // Format the time with the Bengali numbering system
                        const formattedTime = dt.toLocaleString(luxon.DateTime.TIME_WITH_SECONDS);
                        const formattedDate = dt.toLocaleString(luxon.DateTime.DATE_FULL);

                        // Insert the formatted time into the <span> element
                        const timeElement = document.getElementById('current-time');
                        if (timeElement) {
                            timeElement.textContent = formattedTime;
                        } else {
                            console.error("Element with ID 'current-time' not found!");
                        }
                        const dateElement = document.getElementById('current-date');
                        if (dateElement) {
                            dateElement.textContent = formattedDate;
                        } else {
                            console.error("Element with ID 'current-date' not found!");
                        }
                    }
                    function updateDate() {
                        const dt = luxon.DateTime.now().setZone('Europe/Paris').setLocale('zh');

                        const formattedDate = dt.toLocaleString(luxon.DateTime.DATE_FULL);

                        const dateElement = document.getElementById('current-date');
                        if (dateElement) {
                            dateElement.textContent = formattedDate;
                        } else {
                            console.error("Element with ID 'current-date' not found!");
                        }
                    }
                    // Ensure the DOM is fully loaded before running the script
                    document.addEventListener("DOMContentLoaded", function () {
                        // Update the time immediately
                        updateTime();
                        updateDate();
                        // Update the time every second (1000 milliseconds)
                        setInterval(updateTime, 1000);
                        setInterval(updateDate, 1000);
                    });
                </script>
                <h4>现在是 <span id="current-time"></span>，日期是 <span id="current-date"></span>。</h4>
            </div>
            <div class="box"></div>
            <?php require "../Common-files/footer.php" ?>
        </div>
    </body>
</html>
