<?php
/**
 * @var Utils\Utils $Utils
 * @var Server\Request $Request
 * @var Server\Request\ApplicationLayer $ApplicationLayer
 * @var string $error_msg
 */

use Utils\Htmlv2;
?>
<div class="container">
    <div class="login-panel">
        <form class="panel" action="" method="post">
            <h1><i class="fa-solid fa-cloud" style="color: #2474ff;"></i>&nbsp;登入</h1>
            <div class="mb-3">
                <label for="username" class="form-label">玩家ID</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="請輸入玩家 ID" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">密碼</label>
                <input type="password" id="inputPassword5" name="password" class="form-control" placeholder="請輸入密碼"
                       aria-labelledby="passwordHelpBlock" required>
                <div id="passwordHelpBlock" class="form-text">
                    如果你忘記密碼了，請至 Minecraft 中輸入指令 /website 忘記密碼 或是 /website forgetpasswd
                </div>
            </div>
            <?php
            echo (new Htmlv2("input"))
                ->attr("type", "hidden")
                ->attr("name", "CSRF")
                ->attr("value", $Request->CSRF("@login")->getValue())
                ->close(false)
                ->newLine(true)
                ->build();
            ?>
            <?= @$error_msg ?>
            <div class="d-grid gap-2 mb-3">
                <button type="submit" name="login" value="true" class="btn btn-success">登入</button>
            </div>
        </form>
    </div>
</div>