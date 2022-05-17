<?php
if(!empty($_POST['data'])){
    $data = $_POST['data'];
    list($type, $data) = explode(';', $data);
    list(, $data)      = explode(',', $data);
    $data = base64_decode($data);
    file_put_contents(strval(rand(100,1000000)) . '.png', $data);
    }
?>