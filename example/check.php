<?php
require_once dirname(__FILE__) . '/TnCode.class.php';

header('Content-Type: application/json charset=utf-8');
if (TnCode::check()) {
    $arr = ['url' => '/', 'status' => 'bbb'];
} else {
    $arr = ['url' => '/', 'status' => 'error'];
}
echo json_encode($arr);
