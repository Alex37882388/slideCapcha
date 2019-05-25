<?php
/**
 * Created by PhpStorm.
 * User: 85210755@qq.com
 * NickName: 柏宇娜
 * Date: 2018/12/12 17:41
 */
if (is_file(__DIR__ . '/../../../autoload.php')) {
    require_once __DIR__ . '/../../../autoload.php';
}
if (is_file('/vendor/autoload.php')) {
    require_once '/vendor/autoload.php';
}

use SliderCapcha\SliderCapcha;

$config = [
    'dir'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . 'bg' . DIRECTORY_SEPARATOR,//图片目录绝对路径，必须png格式
    'fault' => 5,//容错象素 越大体验越好，越小破解难道越高
    //'mark_bg' => dirname(__FILE__) . '/img/mark.png',
    //'mark'    => dirname(__FILE__) . '/img/mark2.png'
];

$sc = new SliderCapcha($config);

$sc->make();