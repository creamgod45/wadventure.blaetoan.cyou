<?php

use Utils\Htmlv2;

/**
 * @var Utils\Utils $Utils
 * @var Server\Request $Request
 * @var Server\Request\ApplicationLayer $ApplicationLayer
 */
$title = "線上商店";
$assets = [
    "<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\" integrity=\"sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=\" crossorigin=\"anonymous\"></script>",
    (new Htmlv2("link"))
        ->newLine(true)
        ->close(false)
        ->attr("href", $Utils->resources("css/all.css"))
        ->attr("type", "text/css")
        ->attr("rel", "stylesheet")
        ->build(),
    (new Htmlv2("link"))
        ->newLine(true)
        ->close(false)
        ->attr("href", $Utils->resources("css/lightbox.min.css"))
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
        ->attr("src", "https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js")
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
        ->attr("href", $Utils->resources("scss/@shop.css"))
        ->attr("type", "text/css")
        ->attr("rel", "stylesheet")
        ->build(),
    (new Htmlv2("script"))
        ->newLine(true)
        ->close(true)
        ->attr("src", $Utils->resources("js/loadimg.js"))
        ->build(),
    (new Htmlv2("script"))
        ->newLine(true)
        ->close(true)
        ->attr("src", $Utils->resources("js/lightbox.min.js"))
        ->build(),
    (new Htmlv2("script"))
        ->newLine(true)
        ->close(true)
        ->attr("src", $Utils->resources("js/@shop.js"))
        ->build(),
];
$content = "@shop.php";
$footer = "";
$script = "";
$menu = true;
include_once "templates/layout.php"; ?>