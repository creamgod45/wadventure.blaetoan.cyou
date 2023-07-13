<?php
/**
 * @var Utils\Utils $Utils
 * @var Server\Request $Request
 * @var Server\Request\ApplicationLayer $ApplicationLayer
 */

use Auth\MemberManager;
use Type\String\CGString;
use Utils\Htmlv2;

$MemberManager = new MemberManager();
if (
    $Request->POST('login', true)->Get() &&
    $Request->CSRF("@login")->equal($Request->POST('CSRF', true)->Get()) &&
    !(new CGString($Request->POST('username', true)->Get()))->isEmpty() &&
    !(new CGString($Request->POST('password', true)->Get()))->isEmpty()
) {
    $Request->SESSION('error_message', true)->Remove();
    $Request->CSRF("@login")->reset();
    $a = $Request->POST('username', true)->Get();
    $b = $Request->POST('password', true)->Get();
    $member = $MemberManager::getMember($MemberManager::$ENUM_USE_USERNAME, $a);
    if ($MemberManager->login($member, $b)) {
        $Utils->goto_page([2, "/index.php"]);
        $Request->SESSION('member', true)->Set($member->toArray());
        $Utils->pinv($member);
        include_once "@login_success.php";
    } else {
        $error_msg = (new Htmlv2("p"))
            ->attr("style", "color:red;")
            ->newLine(true)
            ->close(true)
            ->body("登入失敗，可能的原因<br><ul><li>密碼錯誤</li><li>帳號錯誤</li></ul>")
            ->build();
        include_once "@login_failed.php";
    }

} else {
    include_once "@login_failed.php";
}