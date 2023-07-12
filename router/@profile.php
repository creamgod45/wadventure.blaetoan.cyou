<?php

use Utils\Htmlv2;

/**
 * @var Utils\Utils $Utils
 * @var Server\Request $Request
 * @var Server\Request\ApplicationLayer $ApplicationLayer
 */

$title = "首頁";
$assets = [
    "<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\" integrity=\"sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=\" crossorigin=\"anonymous\"></script>",
    (new Htmlv2("link"))
        ->newLine(true)
        ->close(false)
        ->attr("href", $Utils->resources("css/all.css"))
        ->attr("type", "text/css")
        ->attr("rel", "stylesheet")
        ->build(),
    (new Htmlv2("script"))
        ->newLine(true)
        ->close(true)
        ->attr("src", $Utils->resources("js/all.js"))
        ->build(),
    (new Htmlv2("script"))
        ->newLine(true)
        ->close(true)
        ->attr("src", $Utils->resources("js/bootstrap.min.js"))
        ->build(),
    (new Htmlv2("link"))
        ->newLine(true)
        ->close(false)
        ->attr("href", $Utils->resources("css/bootstrap.min.css"))
        ->attr("type", "text/css")
        ->attr("rel", "stylesheet")
        ->build(),
    (new Htmlv2("link"))
        ->newLine(true)
        ->close(false)
        ->attr("href", $Utils->resources("scss/initialize.css"))
        ->attr("type", "text/css")
        ->attr("rel", "stylesheet")
        ->build(),
    (new Htmlv2("link"))
        ->newLine(true)
        ->close(false)
        ->attr("href", $Utils->resources("scss/menu.css"))
        ->attr("type", "text/css")
        ->attr("rel", "stylesheet")
        ->build(),
    (new Htmlv2("link"))
        ->newLine(true)
        ->close(false)
        ->attr("href", $Utils->resources("scss/@profile.css"))
        ->attr("type", "text/css")
        ->attr("rel", "stylesheet")
        ->build(),
    (new Htmlv2("script"))
        ->newLine(true)
        ->close(true)
        ->attr("src", $Utils->resources("js/@profile.js"))
        ->build(),
];
$content = "@profile.php";
$footer = "";
$script = "var b=\"" . $Request->CSRF("@profile")->getValue() . "\";";
$menu = true;
include_once "templates/layout.php"; ?>