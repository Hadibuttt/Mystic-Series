<?php
include("Header.php");
?>

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<style>
.button {position:fixed;bottom:20px;right:30px;}
.button1 {position:fixed;bottom:80px;right:30px;}
</style>

<br><div style="color:white;background-color:darkolivegreen;border:2px solid darkolivegreen;margin:1px;font-size:18px;border-radius:4px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><center>List of all Genre:</center></div>

<br><div style="color:darkslategray;font-size:17.5px;line-height:31px;margin-left:5px;">
                                  
                                  
                                 <br>
                             
                             
                             
                             
                                 <?php
$sql="SELECT * FROM genre ";
$result=$conn->query($sql);
             while($row=$result->fetch_assoc())
                    {
                        $A=$row['genre_id'];
                        $B=$row['genre'];
                    
                    ?>
                    <img src="https://img.icons8.com/doodle/48/000000/circled-right-2.png" style="height:25px;"> <a href="Select genre.php?genre=<?php echo $B;?>" style="color:darkslategray;font-size:19px;"><b><?php echo $B; ?></b></a><br>
<?php                    
                    }

                
?>
                              </div>
<br>

<?php
include("Footer.php");
?>
<button onclick="scrollWin(0, -15000)" class="btn button1"><i class="glyphicon glyphicon-chevron-up"></i></button><br>
<button onclick="scrollWin(0, 15000)" class="btn button"><i class="glyphicon glyphicon-chevron-down"></i></button><br>

<script>
    function scrollWin(x, y)
     {window.scrollBy(x, y);}
</script>