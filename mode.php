<?php

/**
 * @var Utils $Utils
 */
require_once 'vendor/autoload.php';

use Auth\Member;
use Nette\Utils\FileSystem as fs;
use Utils\Utils;

$mode = fs::read('mode');
$Request1 = new Server\Request();

/**
 * @var Member $member
 */
$member = $Request1->SESSION('member', true)->Get();

if ($member->isAdministrator()) {
    echo "<h1>目前你已經繞過這個模式系統，因為你是管理員。</h1>";
    if ($mode === 'maintenance') {
        echo('<p>[維護模式]將在維護完成後開放網站系統</p>');
    }
    if ($mode === 'protect') {
        echo('<p>[保護模式]已受到網路攻擊，將在修復完成後開放網站系統</p>');
    }
    if ($mode === 'disable' || $mode !== 'enable') {

        echo('<p>[關閉模式]所有頁面無法瀏覽且不在服務!!</p>');
    }
} else {
    if ($mode === 'maintenance') {
        die('<h1>[維護模式]將在維護完成後開放網站系統');
    }
    if ($mode === 'protect') {
        die('<h1>[保護模式]已受到網路攻擊，將在修復完成後開放網站系統');
    }
    if ($mode === 'disable' || $mode !== 'enable') {
        die('<h1>[關閉模式]所有頁面無法瀏覽且不在服務!!');
    }
}