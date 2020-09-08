<?php
include("Header.php");
?>


<?php
$ser_id=$_GET['ser_id'];  
$sql="SELECT * FROM series WHERE episode_id='$ser_id'";
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
            $Q=$row['First_alphabet'];
            $R=$row['Mid_alphabet'];
            $S=$row['Last_alphabet'];
       ?>

<br><div style="background-color:darkolivegreen;color:white;border:4px solid darkolivegreen;margin:1px;font-size:17px;border-radius:5px;word-spacing:2px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<a href="index.php" style="color:white;margin-left:-8px;"><b>Home </a> »<a href="Tv Series.php?ser1=<?php echo "$Q"; ?>&ser2=<?php echo "$R"; ?>&ser3=<?php echo "$S"; ?>" style="color:white;margin-left:2px;"> <?php echo "$Q, $R or $S"; ?></a>  »  <a href="Front Page.php?id=<?php echo $_GET['ser_id'];?>" style="color:white;margin-left:2px;"><?php echo $B; ?></a> »  <a href="Season page.php?ser_id=<?php echo $_GET['ser_id'];?>&s_id=<?php echo $_GET['s_id'];?>" style="color:white;margin-left:2px;"> Season 0<?php echo $_GET['s_id'];?></b></a> <b> » Episode <?php echo $_GET['ep'];?></b></div>

	<br><br><br>

<center><img src="Series Images/<?php echo $D; ?>" style="border:1px solid black;border-radius:7px;"></img></center>

<div style="color:white;font-size:18px;text-align:center;"><b><?php echo $B; ?></b></div>

<br><div style="color:white;font-size:15px;text-align:center;">Season 0<?php echo $_GET['s_id'];?> - Episode <?php echo $_GET['ep'];?> </div>
<br>

<div style="background-color:white;color:black;border:1px solid black;border-radius:4px;font-size:16.5px;width:99.4%;margin-left:2px;"><b>Views :</b> <?php echo $H ?>
</div>
<br>

<div style="background-color:darkolivegreen;color:white;border:8px solid darkolivegreen;border-radius:5px;text-align:center;"><a href="//dl.mysticseries.xyz/Download page.php?ser_id=<?php echo $_GET['ser_id']; ?>&s_id=<?php echo $_GET['s_id']; ?>&ep=<?php echo $_GET['ep']; ?>" style="color:white;">Download Mp4 Files </a></div>
<br>

<div style="color:darkslategray;font-size:16px;margin-left:7px;"><b> » <?php echo $B; ?> - S0<?php echo $_GET['s_id'];?>E<?php echo $_GET['ep'];?> (MysticSeries.xyz).mp4 (<?php echo $H ?> Downloads) </b></div><br>
<br>
<div style="background-color:darkolivegreen;color:white;border:8px solid darkolivegreen;border-radius:5px;text-align:center;"><a href="//dl.mysticseries.xyz/Download page.php?ser_id=<?php echo $_GET['ser_id']; ?>&s_id=<?php echo $_GET['s_id']; ?>&ep=<?php echo $_GET['ep']; ?>" style="color:white;">Download HD Mp4 Files </a></div>
<br>
<div style="color:darkslategray;font-size:16px;margin-left:7px;"><b> » <?php echo $B; ?> - S0<?php echo $_GET['s_id'];?>E<?php echo $_GET['ep'];?> HD (MysticSeries.xyz).mp4 (<?php echo $I ?> Downloads) </b></div><br>
<br>
<div style="background-color:darkolivegreen;color:white;border:8px solid darkolivegreen;border-radius:5px;text-align:center;"><a href="//dl.mysticseries.xyz/Download page.php?ser_id=<?php echo $_GET['ser_id']; ?>&s_id=<?php echo $_GET['s_id']; ?>&ep=<?php echo $_GET['ep']; ?>" style="color:white;">Download 3gp Files </a></a>  </div>
<br>
<div style="color:darkslategray;font-size:16px;margin-left:7px;"><b> » <?php echo $B; ?> - S0<?php echo $_GET['s_id'];?>E<?php echo $_GET['ep'];?> (MysticSeries.xyz).3gp (<?php echo $J ?> Downloads) </b></div><br>
         <?php
        
        }
        
        ?>

<br>

<?php
include("Footer.php");
?>
