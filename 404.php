<?php
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'Common-files/header.php'; ?>
    <title>404 - Page Not Found</title>
</head>
<body>
<?php require "Common-files/navbar.php" ?>
    <div class="gradient-box" style="align-content: center; justify-content: center;">
        <div class="bg-white p-4 rounded-3 text-center w-50 h-100 mx-auto border border-5 shadow-lg">
            <h1>404 - Page Not Found</h1>
            <p>La page que vous recherchez n'existe pas.</p>
            <p>The page you are looking for does not exist.</p>
            <p>您要查找的页面不存在。</p>
        </div>
        <div class="box h-100"></div>
    </div>
</body>
</html>