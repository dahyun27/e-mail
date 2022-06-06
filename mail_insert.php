<?php
$con = mysqli_connect("localhost","dahyeon","1225","sungkyul");
$id = $_POST['id'];
$id = addslashes($id);
$title = $_POST['title'];
$title = addslashes($title); 
$message = $_POST['message'];
$message = addslashes($message);

$sql = "insert into mail (
id,
title,
message
)"; 

$sql = $sql. "values (
'$id',
'$title',
'$message'
)";

if($con
->query($sql)){ 
echo '<script>alert("success inserting")</script>'; 
}else{ 
echo '<script>alert("fail to insert sql")</script>';
}
mysqli_close($mysqli);
?>
<script>
location.href = "mail.html";
</script>