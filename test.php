<?php

require_once 'vendor/autoload.php';
require_once 'PATH.php';
require_once 'autoload.php';

use Auth\MemberManager;
use Server\Request;
use Server\Request\ApplicationLayer;
use Tracy\Debugger;
use Utils\Htmlv2;
use Utils\Utils;

$Utils = new Utils();
$Request = new Request();
$ApplicationLayer = new ApplicationLayer();
$MemberManager = new MemberManager();
Debugger::enable();

$MemberManager::addMember(
    $Utils->uid(),
    "creamgod45",
    "35186392",
    "fuyin1054@gmail.com",
    true,
    true,
    time()
);