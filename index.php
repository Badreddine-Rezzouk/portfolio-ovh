<?php
session_start();

$languageFromBrowser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$allowed_languages = ['fr', 'en', 'cn'];

$language_website = [
        'fr' => 'FR-fr',
        'en' => 'US-en',
        'cn' => 'CN-zh',
];

if (in_array($languageFromBrowser, $allowed_languages)) {
    $_SESSION['prev_lang'] = $languageFromBrowser;
    $lang = $languageFromBrowser;
} elseif (isset($_SESSION['prev_lang']) && in_array($_SESSION['prev_lang'], $allowed_languages)) {
    $lang = $_SESSION['prev_lang'];
} else {
    $lang = 'fr';
    $_SESSION['prev_lang'] = $lang;
}

if (isset($language_website[$lang])) {
    $full_lang = $language_website[$lang];
    $_SESSION['prev_lang'] = $full_lang;
} else {
    $short = substr($lang, 0, 2);
    $full_lang = $language_website[$short] ?? 'FR-fr';
    $lang = $short;
    $_SESSION['prev_lang'] = $full_lang;
}

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'
        || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$host = $_SERVER['HTTP_HOST'] ?? 'localhost:63342';

if ($host === 'localhost:63342') {
    $baseURL = $protocol . $host . '/portfolio-ovh/' . $full_lang . '/';   // keep slash
    $topURL  = $protocol . $host . '/portfolio-ovh/';
} else {
    $baseURL = $protocol . $host . '/' . $full_lang . '/';
    $topURL  = $protocol . $host . '/';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "Common-files/header.php"; ?>
</head>
<body class="bg-dark text-light">

<div class="position-absolute top-0 start-0">
    <p id="terminal"></p>
    <script>
        new TypeIt("#terminal", {
            afterComplete: async (instance) => {
                const targetURL = "<?php echo $baseURL; ?>index.php";
                await new Promise(r => setTimeout(r, 500));
                window.location.href = targetURL;
            }})
            .type('<span class="text-success">ovh-portfolio@guest</span> > ', { instant:true })
            .type("apt install madman", { lifelike:true, delay:300 }).break()
            .type('Reading package lists...', { instant:true, delay:3500 })
            .type(' Done', { instant:true, delay:150 }).break()
            .type('Building dependency tree', { instant:true, delay:1250 }).break()
            .type('<span class="text-warning">The following packages will be installed</span>', { instant:true, delay:75 }).break()
            .type('<span class="text-success">madman</span>', { instant:true, delay:250 }).break()
            .type('<span class="text-warning">The following additional packages will be installed</span>', { instant:true, delay:75 }).break()
            .type('<span class="text-success">bootstrap formula-1 frenchman-soul game-modding luxor php-kit portfolio pyro-pup-insustries ratp-fanatism sncf-fanatism typeit webdev-kit</span>', { instant:true, delay:250 }).break()
            .type('<span class="text-primary">Do you want to continue? [Y/n]</span>', { instant:true, delay:2500 })
            .type(' Y', { instant:true, delay:500 }).break()
            .pause(1500)
            .type('Need to get 385010 kB of archives.', { instant:true, delay:275 }).break()
            .type('After this operation, 42069 kB of additional disk space will (not) be used.', { instant:true }).break()
            .type('Get:1 https://virtueasie.secretdatabase.com/cursed_projects/the_frenchman [385010 kB]', { instant:true, delay:3000 }).break()
            .type('Fetched 385010 kB in 3s [128336kB/s]', { instant:true, delay:75 }).break()
            .type('Unpacking madman (2.0) . . .', { instant:true, delay:2200 }).break()
            .type('<span class="text-success">ovh-portfolio@guest</span> > ', { instant:true, delay:900 })
            .type("madman", { lifelike:true, delay:300 }).break()
            .type('<span class="text-primary">Are you sure? This is like opening Pandora\'s box. [Y/n]</span>', { instant:true, delay:2500 })
            .type(' Y', { instant:true, delay:500 }).break()
            .pause(1500)
            .type("Alright then, you've been warned, you'll be redirected in", { instant:true})
            .type(" 3...", { delay:1000 })
            .type(" 2...", { delay:1000 })
            .type(" 1...", { delay:1000 })
            .go()
    </script>
</div>

</body>
</html>
