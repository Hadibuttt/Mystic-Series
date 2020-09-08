<?php
include("Header.php");
?>

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<style>
.button {position:fixed;bottom:20px;right:30px;}
.button1 {position:fixed;bottom:80px;right:30px;}
</style>

<br>

<div style="background-color:darkolivegreen;color:white;border:4px solid darkolivegreen;margin:1px;font-size:17px;border-radius:6px;word-spacing:2px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             
                 <a href="index.php" style="color:white;margin-left:-8px;"><b>Home </a> »<span style="color:white;margin-left:3px;"> All Tv Series in <?php echo $_GET['genre']; ?></span></b></div>
             

<br>
<br>
<br>



<?php 
$gener_name=$_GET['genre'];
$sql="SELECT * FROM series WHERE genre LIKE '%$gener_name%'";
$result=$conn->query($sql);
// if($result->num_rows>0)
//      {
         while($row=$result->fetch_assoc())
         {
            $A=$row['episode_id'];
            $B=$row['series_name'];
            $C=$row['genre_id'];
            $D=$row['image'];
            $E=$row['description'];
            $F=$row['imdb_link'];
            $G=$row['rating'];
            $H=$row['series_views'];
            $I=$row['season_views'];
            $J=$row['episode_views'];
            $K=$row['season_id'];
            $L=$row['recently_added_date'];
            $M=$row['episodes_id'];
            $N=$row['Cast'];
            $O=$row['run_time'];
            $P=$row['genre'];?>

<a href="Front Page.php?id=<?php echo $A; ?>" style="font-size:18px;margin-left:8px;color:darkslategrey;">
  <b><i class="glyphicon glyphicon-hand-right"></i> &nbsp<?php echo $B; ?></b></a><br>
<br>


<?php
         }
                  ?>




<?php
include("Footer.php");
?>
<button onclick="scrollWin(0, -15000)" class="btn button1"><i class="glyphicon glyphicon-chevron-up"></i></button><br>
<button onclick="scrollWin(0, 15000)" class="btn button"><i class="glyphicon glyphicon-chevron-down"></i></button><br>

<script>
    function scrollWin(x, y)
     {window.scrollBy(x, y);}
</script>