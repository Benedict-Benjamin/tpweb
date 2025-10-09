<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "student2";
$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    echo"error";
}

else {
        echo "<form action='' method='post'>;
        <label for='Login'>Login</label><br>;
        <input type='text' name='Login' id='Login'><br>;
        <label for='password'>Password</label>;
        <input type='password' name='Password' id='password'><br>;
        <label for='Bureau'>Bureau</label>;
        <input type='text' name='Bureau' id='Bureau'><br>;
        <input type='submit' value='Valider'>;
        </form>";
    }
    if (isset($_POST['Login'], $_POST['Password'], $_POST['Bureau'])) {
        $login = $_POST['Login'];
        $password = $_POST['Password'];
        $bureau = $_POST['Bureau'];
        $base = mysqli_select_db($conn, $db);
        if (!$base) {
            echo "error";
        } else {

            echo "ok bd<br>";
            $sql = "insert into user (login,password,bureau) values(?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sss", $login, $password, $bureau);
            if (mysqli_stmt_execute($stmt)) {
                echo "insertion Ok<br>";
            } else {
                echo "insertion Failed";
            }
        }

}


