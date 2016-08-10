<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>MAMP PRO</title>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: .9em;
            color: #000000;
            background-color: #FFFFFF;
            margin: 0;
            padding: 10px 20px 20px 20px;
        }

        samp {
            font-size: 1.3em;
        }

        a {
            color: #000000;
            background-color: #FFFFFF;
        }

        sup a {
            text-decoration: none;
        }

        hr {
            height: 1px;
            color: #000000;
            background-color: #000000;
            border: none;
        }

        #logo {
            margin-bottom: 10px;
            margin-left: 28px;
        }

        .text {
            width: 80%;
            margin-left: 90px;
            line-height: 140%;
        }
    </style>
</head>

<body>

demo区域

<hr>

<?php
/**
 * 注释测试
 */
echo "1.测试注释内容<br>";
?>
<br/>

<?php
// 测试变量
echo addCache();

/**
 */
function addCache()
{
    $str = "2.测试变量<br>";
    return $str;
}

// 数据类型测试
$testStr = '春风十里不如有你<br>';
echo $testStr;

// 双引号测试
$beer = '蜜蜂';
echo "$beer'飞回家<br>";
echo "$beer飞回家<br>";
echo "${beer}飞回家<br>";
echo "{$beer}飞回家<br>";

// 数组的使用测试
$arr = array("foo" => "bar", 12 => true);
print_r($arr);
echo $arr["foo"];
echo $arr[12];


// 对象测试
class Person
{
    var $name;

    function say()
    {
        echo "doing foo...<br>";
    }
}

$p = new Person();
$p->name = "tome";
$p->say();

// if elseif else测试
$a = 1;
$b = 2;
if ($a > $b) {
    echo "$a > $b<br>";
} elseif ($a == $b) {
    echo "$a == $b<br>";
} else {
    echo "$a < $b<br>";
}

// php的函数应用
/**
 * @param int $a
 * @param int $b
 */
function add($a, $b)
{
    $a = 1;
    $b = 2;
}

// 数组测试
$arr1 = array(
    "ID" => 1,
    "姓名" => "高某",
    "周报" => array(
        "2016.08.08",
        "2016.08.07",
        "2016.08.06"
    )
);

echo "ID" . $arr1["周报"][1] . "<br>";

?>

<?php
$contact = array(
    array(1, "高某", "A公司", "4353535", "rerer@qq.com"),
    array(1, "高某", "A公司", "4353535", "rerer@qq.com"),
    array(1, "高某", "A公司", "4353535", "rerer@qq.com"),
    array(1, "高某", "A公司", "4353535", "rerer@qq.com")
);

// 输出二位数组中的每个元素
for ($raw = 0; $raw < count($contact); $raw++) {
    for ($col = 0; $col < count($contact[$raw]); $col++) {
        echo " " . $contact[$raw][$col] . " ";
    }
    echo "<br>";
}

// foreach测试
echo "<br>";

foreach ($contact as $raw) {
    foreach ($raw as $col) {
        echo " " . $col . " ";
    }
    echo "<br>";
}
?>

// 面对对象版图形计算器
<center>
    <h1>图形（周长&面积）计算器</h1>
    <a href="start.php?action=rect">矩形</a>||
    <a href="start.php?action=triangle">三角形</a>||
    <a href="start.php?action=circle">圆形</a>
    <hr>

    <?php
    /**
     * 通过魔术方法去自动加载所需要的类文件，将需要的类包含进来
     * @param $className
     */
    function __autoload($className)
    {
        include strtolower($className) . ".class.php";
    }

    // 输出用户需要的表单
    echo new Form("start.php");
    // 如果用户提交表单则去计算
    if (isset($_POST["sub"])) {
        echo new Result();
    }
    ?>


    <?php
    require "calendar.class.php";
    echo new Calendar();
    ?>


</center>


</body>
</html>
