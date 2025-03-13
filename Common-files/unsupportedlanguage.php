<?php
global $protocol, $host, $restOfURL;
require "redirect.php";

// Define the modal for English
$language_error_en = <<<HTML
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Warning - Website not complete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                This website is a work in progress. It is not finished in your language. Please change it to French if you understand it.
            </div>
            <div class="modal-footer">
                <a type="button" href="{$protocol}{$host}/FR-fr/{$restOfURL}" class="btn btn-secondary">Switch language</a>
                <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
<script>
    const myModal = new bootstrap.Modal(document.getElementById('myModal'), {});
    myModal.toggle();
</script>
HTML;

// Define the modal for Mandarin Chinese
$language_error_zh = <<<HTML
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">警告 - 网站未完成</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="关闭"></button>
            </div>
            <div class="modal-body">
                此网站正在建设中。您所使用的语言版本尚未完成。如果您懂法语，请将语言切换为法语。
            </div>
            <div class="modal-footer">
                <a type="button" href="{$protocol}{$host}/FR-fr/{$restOfURL}" class="btn btn-secondary">切换语言</a>
                <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</a>
            </div>
        </div>
    </div>
</div>
<script>
    const myModal = new bootstrap.Modal(document.getElementById('myModal'), {});
    myModal.toggle();
</script>
HTML;

$language_error_fr = <<<HTML
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Attention - Site en construction </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                Bienvenue sur mon site portfolio. Ce site est actuellement en construction. 
                Certaines sections peuvent être incomplètes ou sujettes à des modifications. 
                Je mets souvent à jour le site pour améliorer votre expérience. Merci pour votre patience et votre compréhension !<br>
                Vous pouvez constater l'évolution du <a href="https://trello.com/b/6Lxrh8p0/avancement-site-portfolio">site à cette adresse</a>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</a>
            </div>
        </div>
    </div>
</div>
<script>
    const myModal = new bootstrap.Modal(document.getElementById('myModal'), {});
    myModal.toggle();
</script>

HTML;

?>