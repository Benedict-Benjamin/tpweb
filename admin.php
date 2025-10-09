<?php
session_start();
if ($_SESSION["login"] =="admin") {
    echo "bonjour";
    echo"<br>";
    echo "<a href='logout.php'>logout</a>";
}
else{
    header("location:login.php?error");
}