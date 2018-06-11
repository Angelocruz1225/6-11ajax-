<?php
    header("content-type:text/html;charset=utf-8");
    if ($_POST["usename"] === "admin" && $_POST["password"] === "123456") {
        $array = array(
            "status" => 1,
            "msg" => "登陆成功"
        );
    } else {
        $array = array(
            "status" => 0,
            "msg" => "登陆失败"
        );
    }
    echo json_encode($array, JSON_UNESCAPED_UNICODE);
?>