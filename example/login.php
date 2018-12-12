<?php
/**
 * Created by PhpStorm.
 * User: 85210755@qq.com
 * NickName: 柏宇娜
 * Date: 2018/12/12 17:42
 */
if (is_file(__DIR__ . '/../../../autoload.php')) {
    require_once __DIR__ . '/../../../autoload.php';
}
if (is_file('/vendor/autoload.php')) {
    require_once '/vendor/autoload.php';
}

use SliderCapcha\SliderCapcha;

header('Content-Type: application/json charset=utf-8');
if (SliderCapcha::check()) {
    $arr = ['url' => '/', 'status' => 'ok'];
} else {
    $arr = ['url' => '/', 'status' => 'error'];
}

exit(json_encode($arr));