<?php

// mysql 接続
$link = mysqli_connect('localhost', 'root', 'root', 'ajaxsample');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$id = $_GET['id'];
$sql = 'SELECT name FROM name WHERE id = ' . $id;
$result = mysqli_query($link, $sql);
if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error($sql));
}
$onerow = $result->fetch_assoc();
echo $onerow['name'];

mysqli_close($link);
