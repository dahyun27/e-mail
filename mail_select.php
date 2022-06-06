<?php
$con = mysqli_connect("localhost","dahyeon","1225","sungkyul");
$sql = "SELECT * FROM mail"; 
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
    echo"<div class=mail-data>
    <div class=num>".$row['number']."</div>
    <div>ID: ".$row['id']. "<br> Title: " .$row['title']. "<br> Message: " .$row['message']. "</div>
</div>";
}

print "<br><a href='mail.html'>메인 화면</a>";
?>
<style>
    .mail-data {
        display: flex;
        align-items: center;
        border: 3px solid #f8ad9d;
        border-radius: 5px;
        margin: 5px;
        padding: 5px;
    }
    .num {
        width: 3%;
        border-radius: 50%;
        background-color: #f4978e;
        height: 5%;
        text-align: center;
        padding: 5px;
        margin-right: 10px;
    }
    a:link {
        text-decoration: none;
        text-shadow: 0 0 24px;
        color: #f4978e;
        font-weight: 700;
        margin-left: 15px;
    }
    a:visited {
        text-decoration: none;
        text-shadow: 0 0 24px;
        color: #f08080;
        font-weight: 700;
        margin-left: 15px;
    }
</style>