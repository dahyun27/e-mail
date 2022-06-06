<?php
$s = mysql_connect("localhost", "dahyeon", "1225") or die("실패입니다.");
print "접속 OK!<br>";
mysql_select_db("sungkyul");
// ..기능별 스크립트...
mysql_close($s);
print "<br><a href='mail.html'>메인 화면</a>";
?>