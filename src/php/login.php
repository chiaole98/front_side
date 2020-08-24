<?php
// 建立MySQL的資料庫連接 
$link = mysqli_connect("localhost","root","12345678","test")
        or die("無法開啟MySQL資料庫連接!<br/>");
echo "資料庫test開啟成功!<br/>";
$sql = "INSERT INTO `account`(`userName`, `userEmail`, `userPswd`) VALUES (\"1234\",\"1234\",\"2016-12-22\",\"123\",\"003\")"; // 指定SQL字串
echo "SQL字串: $sql <br/>";
//送出UTF8編碼的MySQL指令
mysqli_query($link, 'SET NAMES utf8'); 
mysqli_query($link, $sql);

?>