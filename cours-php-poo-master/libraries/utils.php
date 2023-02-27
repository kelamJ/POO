<?php
// render('articles/index')
function render(string $path, array $variables = [])
{
    //['article' => 2, 'var2' => "Malek"]
    //$article = 2;
    //$var2 = "Malek"
    extract($variables);

    ob_start();
    require('templates/' . $path. '.html.php');
    $pageContent = ob_get_clean();

    require('templates/layout.html.php');
}

//redirect('index.php');
function redirect(string $url): void 
{
    header("Location: $url");
    exit();
}