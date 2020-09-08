 <?php

$servername= "148.72.232.173:3306";
$username= "mysticseries123";
$password= "prometheus123";
$dbname= "MysticSeries";
$conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
        {
            die("connection failed:".$conn->connect_error);
        }       

            else
            {
               
            }


        ?>