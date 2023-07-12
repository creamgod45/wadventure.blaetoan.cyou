<?php

use Utils\HTML;

/**
 * @var Utils\Utils $Utils
 * @var Server\Request $Request
 * @var Server\Request\ApplicationLayer $ApplicationLayer
 */


if ($Request->POST("additem", true)->Get()) { ?>

<?php } else { ?>
    <?php
    $title = "首頁";
    $assets = [
        (new HTML())->html_Builder([
            "tagname" => "link",
            "config" => [
                "config.close" => false,
                "href" => $Utils->resources("css/all.css"),
                "rel" => "stylesheet",
                "type" => "text/css"
            ]
        ]),
        (new HTML())->html_Builder([
            "tagname" => "script",
            "config" => [
                "config.close" => true,
                "src" => $Utils->resources("js/all.js"),
            ]
        ]),
        (new HTML())->html_Builder([
            "tagname" => "script",
            "config" => [
                "config.close" => true,
                "src" => $Utils->resources("js/bootstrap.min.js"),
            ]
        ]),
        (new HTML())->html_Builder([
            "tagname" => "link",
            "config" => [
                "config.close" => false,
                "href" => $Utils->resources("css/bootstrap.min.css"),
                "rel" => "stylesheet",
                "type" => "text/css"
            ]
        ]),
        (new HTML())->html_Builder([
            "tagname" => "link",
            "config" => [
                "config.close" => false,
                "href" => $Utils->resources("scss/initialize.css"),
                "rel" => "stylesheet",
                "type" => "text/css"
            ]
        ]),
        (new HTML())->html_Builder([
            "tagname" => "link",
            "config" => [
                "config.close" => false,
                "href" => $Utils->resources("scss/menu.css"),
                "rel" => "stylesheet",
                "type" => "text/css"
            ]
        ]),
        (new HTML())->html_Builder([
            "tagname" => "link",
            "config" => [
                "config.close" => false,
                "href" => $Utils->resources("scss/@rank.css"),
                "rel" => "stylesheet",
                "type" => "text/css"
            ]
        ]),
    ];
    $content = "@rank.php";
    $footer = "";
    $script = "";
    $menu = true;
    include_once "templates/layout.php"; ?>
<?php } ?>