<?php
mysql_connect("localhost","root","12345678");//連結伺服器
mysql_select_db("test");//選擇資料庫
mysql_query("set names utf8");//以utf8讀取資料，讓資料可以讀取中文
$data=mysql_query("select * from farmer");//從contact資料庫中選擇所有的資料表
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料庫網頁連接測試</title>
</head>

<body>

<table width="700" border="1">
  <tr>
    <td>ID</td>
    <td>帳號</td>
    <td>姓名</td>
    <td>信箱</td>
    <td>密碼</td>
    <td>手機</td>
    <td>地址</td>
    <td>介紹</td>
  </tr>
<?php
for($i=1;$i<=mysql_num_rows($data);$i++){
$rs=mysql_fetch_row($data);
?>
    <div class='app'>
    <form method='GET' action='http://140.136.156.12:8080/getinfo/all/'>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
    <td><?php echo $rs[4]?></td>    
    <td><?php echo $rs[5]?></td>
    <td><?php echo $rs[6]?></td>
    <td><?php echo $rs[7]?></td>
      
  </tr>
        </form>
    </div>
<?php
}
?>
</table>
<p>&nbsp;</p>
</body>
</html>