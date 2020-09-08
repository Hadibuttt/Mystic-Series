<?php
include("Header.php");
?>


<?php

if(isset($_POST['go']))

{
    $feed= $_POST['feed'];

    if($feed==" ")

    {
        echo "<center><big style='font-size:19px;text-align:center;color:white;border:1px solid white;padding:2px;'>Enter a keyword </big></center>";       
    }

    else

    {

    $sql="INSERT INTO feedback(feedback) VALUES('$feed')";
    if($conn->query($sql)===TRUE)

        {
            echo "<center><big style='font-size:19px;text-align:center;color:white;border:1px solid white;padding:2px;'>Request Submitted Successfully </big></center>";
            
        }

        else
        {
            echo "<center><big style='font-size:19px;text-align:center;color:white;border:1px solid white;padding:2px;'>Error Submitting Request </big></center>";
        }


    }
    
        }
?>
<br>


<?php
include("Footer.php");
?>
