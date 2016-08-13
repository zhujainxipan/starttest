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
    // php时间日期相关api的使用
    require "calendar.class.php";
    echo new Calendar();
    ?>

    <?php
    // php文件处理相关
    function getFilePro($fileName)
    {
        if (!file_exists($fileName)) {
            echo "目标文件不存在<br>";
            return;
        }

        if (is_file($fileName)) {
            echo $fileName . "是一个文件<br>";
        }

        if (is_dir($fileName)) {
            echo $fileName . "是一个目录<br>";
        }

        if (is_readable($fileName)) {
            echo $fileName . "文件可读<br>";
        }

        if (is_writable($fileName)) {
            echo $fileName . "文件可写<br>";
        }

        if (is_executable($fileName)) {
            echo $fileName . "文件可执行<br>";
        }

        echo "文件建立时间：" . date("Y 年 m 月 j日", filectime($fileName)) . "<br>";
        echo "文件最后改动时间：" . date("Y 年 m 月 j日", filemtime($fileName)) . "<br>";
        echo "文件最后打开时间：" . date("Y 年 m 月 j日", fileatime($fileName)) . "<br>";
        echo "文件形态" . getFileType($fileName) . "<br>";
        echo "文件大小" . getFileSize(filesize($fileName)) . "<br>";
    }


    function getFileType($fileName)
    {
        switch (filetype($fileName)) {
            case 'file':
                $type .= "普通文件";
                break;
            case 'dir':
                $type .= "目录文件";
                break;
            case 'block':
                $type .= "块设备文件";
                break;
            case 'char':
                $type .= "字符设备文件";
                break;
            case 'fifo':
                $type .= "命名管道文件";
                break;
            case 'link':
                $type .= "符号链接";
                break;
            case 'unknow':
                $type .= "未知类型";
                break;
            default:
                $type .= "没有检测到类型";
        }
        return $type;
    }

    function getFileSize($bytes)
    {
        if ($bytes >= pow(2, 40)) {
            $return = round($bytes / pow(1024, 4), 2);
            $suffix = "TB";
        } elseif ($bytes >= pow(2, 30)) {
            $return = round($bytes / pow(1024, 3), 2);
            $suffix = "GB";
        } elseif ($bytes >= pow(2, 20)) {
            $return = round($bytes / pow(1024, 2), 2);
            $suffix = "MB";
        } elseif ($bytes >= pow(2, 10)) {
            $return = round($bytes / pow(1024, 1), 2);
            $suffix = "KB";
        } else {
            $return = $bytes;
            $suffix = "Byte";
        }
        return $return . " " . $suffix;
    }

    getFilePro("start.php");

    ?>

    // php网络留言板
    <p>网络留言板</p>
    <?php
    $fileName = "text_data.txt";
    if (isset($_POST["sub1"])) {
        $message = $_POST["username"] . "||" . $_POST["title"] . "||" . $_POST["mess"] . "<|>";
        writeMessage($fileName, $message);
    }

    if (file_exists($fileName)) {
        readMessage($fileName);
    }

    function writeMessage($fileName, $message)
    {
        $fp = fopen($fileName, "a");
        if (flock($fp, LOCK_EX)) {
            fwrite($fp, $message);
            flock($fp, LOCK_UN);
        } else {
            echo "不能锁定文件！";
        }
        fclose($fp);
    }


    function readMessage($fileName)
    {
        $fp = fopen($fileName, "r");
        flock($fp, LOCK_SH);
        $buffer = "";
        while (!feof($fp)) {
            $buffer .= fread($fp, 1024);
        }

        $data = explode("<|>", $buffer);

        foreach ($data as $line) {
            list($username, $title, $message) = explode("||", $line);
            if ($username != "" && $title != "" && $message != "") {
                echo $username . '说';
                echo '&nbsp;' . $title . ",";
                echo $message . "<hr>";
            }
        }

        flock($fp, LOCK_UN);
        fclose($fp);
    }


    ?>
    <hr>

    <!--以下为用户输入表单界面-->
    <form action="" method="post">
        用户名：<input type="text" size=30 name="username"><br>
        标题:<input type="text" size=30 name="title"><br>
        <textarea name="mess" rows="4" cols="38">请在这里输入留言信息</textarea>
        <input type="submit" name="sub1" value="留言">
    </form>
    <hr>

    <p>文件上传测试</p>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        选择文件：<input type="file" name="myfile">
        <input type="submit" value="上传文件">
    </form>

    <hr>
    <p>数据库连接测试</p>

    <?php
    $link = mysql_connect('localhost', 'root', 'admin');
    if (!$link) {
        die('连接失败' . mysql_error());
    }
    echo "与mysql服务器建立连接成功<br>";

    echo mysql_get_client_info() . '<br>';
    echo mysql_get_host_info() . '<br>';
    echo mysql_get_proto_info() . '<br>';
    echo mysql_get_server_info() . '<br>';
    echo mysql_get_client_info() . '<br>';
    echo mysql_stat() . '<br>';

    mysql_select_db('bookstore', $link) or die('不能选定数据库bookstore' . mysql_error());

    // 插入数据
    $insert = "INSERT INTO book(bookname,publisher,author,price,detail,publishdate) VALUES ('PHP','PHP','PHP','80.00','PHP','2016.08.11')";

    $result = mysql_query($insert);

    if ($result && mysql_affected_rows() > 0) {
        echo '数据记录插入成功<br>';
    } else {
        echo '插入数据失败<br>';
    }

    // 查询数据
    $query = "SELECT bookname, author, publisher, price, detail FROM book";
    $queryResult = mysql_query($query);
    echo '<table>';
    while ($row = mysql_fetch_row($queryResult)) {
        echo '<tr>';
        foreach ($row as $data) {
            echo '<td>' . $data . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    mysql_free_result($queryResult);

    mysql_close($link);
    ?>

    <hr>

    <?php
    // PDO测试

    $dsn = "mysql:dbname=bookstore;host=127.0.0.1";
    $user = "root";
    $password = "admin";

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo "数据库连接失败" . $e->getMessage();
        exit;
    }

    // 插入数据
    $insert1 = "INSERT INTO book(bookname,publisher,author,price,detail,publishdate) VALUES ('PHP','PHP','PHP','80.00','PHP','2016.08.11')";
    $affected = $dbh->exec($insert1);

    if ($affected) {
        echo "数据库表中受影响的行数为：" . $affected;
    } else {
        print_r($dbh->errorInfo());
    }

    // 查询数据
    $query1 = "SELECT bookname, author, publisher, price, detail FROM book";

    try {
        $pdoStatement = $dbh->query($query1);
        echo '一共从表中查出' . $pdoStatement->rowCount() . "条记录<br>";
        foreach ($pdoStatement as $row) {
            echo $row['bookname'] . "\t";
            echo $row['author'] . "\t";
            echo $row['publisher'] . "\t";
            echo $row['price'] . "\t";
            echo $row['detail'] . "<br>";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


    ?>

    // 变量测试
    <?php
    $hi = 'hello';
    $$hi = 'world';
    echo $hello;
    ?>

    <?php
    $insert1 = '131321323312';
    echo $insert1 . '<br>';

    $test = <<<EOT
黄河之水天上来，\\\\\$ 奔流到海不复回，三千越甲可吞吴
EOT;

    echo $test."地方方式发生地方";

    define("PI", 3.1415926);

    

    ?>

</center>


</body>
</html>
