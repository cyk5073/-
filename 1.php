<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
include ("./include.php");

ini_set("display_errors", "1");
$uploaddir = 'C:\AutoSet8\public_html\uoload\file\\';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$sqlstr = "INSERT INTO tb_board (b_file)
VALUES('$uploadfile')";

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "<script>window.alert('성공적으로 업로드 되었습니다.')";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
}
?>
