<?php
$callback = !empty($_GET['callback']) ? trim($_GET['callback']) : '';
 
if(!empty($callback)) {
    $data = json_encode(array(
        'uid' => 1,
        'name' => '测试',
    ));
     
    echo "{$callback}({$data});";
}
