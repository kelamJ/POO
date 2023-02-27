<?php
// render('articles/index')
function render(string $path, array $variables){
    ob_start();
    require('templates/' . $path. '.html.php');
    $pageContent = ob_get_clean();

    require('templates/layout.html.php');
}