<?php include 'header.html'; ?>
<title>TABLEAUX BD</title>
</head>
<body>


<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "student2";
$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    echo"error";
}
else{
    $base=mysqli_select_db($conn,$db);
    if(!$base){
        echo"eroor";
    }


   else{
       echo "ok bd"."<br>";
        $sql="select* from user";
        $result=mysqli_query($conn,$sql);
        echo "<table>";
        echo "<tr>";
        echo "<th>Login</th>";
        echo "<th>Password</th>";
        echo "<th>Bureau</th>";
        echo "</tr>";
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['login']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['bureau']."</td>";
                echo "</tr>";
        }

        }
        echo "</table>";
   }
}
mysqli_close($conn);

include 'footer.html';
