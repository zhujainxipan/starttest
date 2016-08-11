<?php
/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/11
 * Time: 10:59
 */

$allowtype = array("gif", "png", "jpg");
$size = 1000000;
$path = "./uploads";

$error = $_FILES['myfile']['error'];
if ($error > 0) {
    echo "上传错误<br>";
    switch ($error) {
        case 1:
            die("上传文件大小查过了php配置文件中的定值");
            break;
        case 2:
            die("上传文件大小超过了表单的约定值");
            break;
        case 3:
            die("文件只被部分上载");
            break;
        case 4:
            die("没有上传任何文件");
            break;
        default:
            die("未知错误");
            break;
    }
}

$hz = array_pop(explode(".", $_FILES['myfile']['name']));
if (!in_array($hz, $allowtype)) {
    die("这个后缀是$hz，不是允许的文件类型");
}

list($maintype, $subtype) = explode("/", $_FILES["myfile"]["type"]);
if ($maintype == "text") {
    die("问题：不能上传文本文件");
}

$filename = date("YmdHis") . rand(100, 999) . "." . $hz;

if (is_uploaded_file($_FILES["myfile"]["tmp_name"])) {
    if (!move_uploaded_file($_FILES["myfile"]["tmp_name"], $path . '/' . $filename)) {
        die("问题：不能将文件移动到指定目录。");
    }
} else {
    die("问题：上传文件{$_FILES['myfile']['name']}不是合法文件");
}

echo "文件{$upfile}上传成功，保存在目录{$path}中，大小为{$_FILES['myfile']['size']}字节";
