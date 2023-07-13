<?php
/**
 * @var Utils\Utils $Utils
 * @var Server\Request $Request
 * @var Server\Request\ApplicationLayer $ApplicationLayer
 * @var Member $member
 */

use Auth\Member;

$member_array = $Request->SESSION('member', true)->Get();
if(!is_bool($member_array)){
    $member = new Member();
    $member->setArray($member_array);


    $Utils->pinv($ApplicationLayer->getHandleList(), "ApplicationLayer#allow 1");
    $ApplicationLayer->register("member_isInitialized", $member->isInitialized(), true);
    if (!$ApplicationLayer->run()) {
        $Utils->pinv($ApplicationLayer->getHandleList(), "ApplicationLayer#deny");
        $Request->Redirect("/index.php", 0);
    } else {
        $Utils->pinv($ApplicationLayer->getHandleList(), "ApplicationLayer#allow");
    }
}else{
    $Request->Redirect("/index.php", 0);
}
?>
<div class="container">
    <h1><?= $title ?></h1>
    <div class="row gx-5" data-masonry="{&quot;percentPosition&quot;: true }">
        <div class="col m-2">
            <div class="card shadow rounded-3" style="width: 18rem;">
                <a class="image-preview rounded-3" data-lightbox="image" data-title="' . $file['real_filename'] . '" data-background="' . $domainname . '/gallery-images/' . $file['filename'] . '" href="' . $domainname . '/gallery-images/' . $file['filename'] . '"></a>
                <div class="card-body" style="position: relative;">
                    <div class="fs-5">玩家點數 10000 點</div>
                    <b>遊戲幣\台幣\贊助幣 $1,000.00</b>
                    <div>玩家點數是用於兌換皮膚獎勵、武器、裝備、權限、特效、素材、寵物</div>

                    <div class="position-absolute bottom-0 start-0 p-3">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success">+</button>
                            <button type="button" class="btn btn-danger">&times;</button>
                            <button type="button" class="btn btn-warning">-</button>
                        </div>
                    </div>
                    <div class="position-absolute bottom-0 end-0 p-3">
                        <button type="button" class="btn btn-primary">加入購物車</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


