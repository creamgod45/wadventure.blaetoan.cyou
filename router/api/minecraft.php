<?php


use Nette\Utils\FileSystem as FS;
use Nette\Utils\Json;

/**
 * @var Utils\Utils $Utils
 * @var Server\Request $Request
 * @var Server\Request\ApplicationLayer $ApplicationLayer
 **/
$json = file_get_contents('php://input'); // 获取POST请求的原始数据

$data = json_decode($json, true); // 将JSON字符串解析为关联数组
if (@$data["key"] === "d16b8ca31465277df32f049d49d84286") {
    echo Json::encode(["code" => 202, "message" => "data import"]);
} else {
    echo Json::encode(["code" => 403, "message" => "error key"]);
}
function recur_ksort(&$array) {
    foreach ($array as &$value) {
        if (is_array($value))
            recur_ksort($value);
    }
    ksort($array);
}
recur_ksort($data);
@mkdir("log");
FS::write("log/".time() . "_api_minecraft.php.json", Json::encode($data, Json::PRETTY));