<?php
include("Header.php");
?>

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


<br><div style="background-color:darkolivegreen;color:white;border:5px solid darkolivegreen;margin:1px;font-size:17px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<a href="index.php" style="color:white;margin-left:-8px;"><b>Home </a>  » <a href="" style="color:white;margin-left:-1px;">
<?php
if(isset($_GET['ser1']))
{
$ser1=$_GET['ser1'];
$ser2=$_GET['ser2'];
$ser3=$_GET['ser3'];
echo $ser1.", ".$ser2." or ".$ser3;
}
else if(isset($_GET['ser11']))
{
$ser1=$_GET['ser11'];
$ser2=$_GET['ser22'];
$ser3=$_GET['ser33'];
echo $ser1.", ".$ser2." or ".$ser3;
}
?> </b></a></div>

<div style="background-color:white;color:black;border:5px solid white;margin:1px;font-size:17px;margin-top:-0.0px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><center>Tv Series starting with 
<?php
if(isset($_GET['ser1']))
{
$ser1=$_GET['ser1'];
$ser2=$_GET['ser2'];
$ser3=$_GET['ser3'];
echo $ser1." , ".$ser2." or ".$ser3;
}
else if(isset($_GET['ser11']))
{
$ser1=$_GET['ser11'];
$ser2=$_GET['ser22'];
$ser3=$_GET['ser33'];
echo $ser1." , ".$ser2." or ".$ser3;
}
?>
 </center> </div>

<div><br><br><br></div>

<br><div style="color:darkslategray;font-size:17.5px;line-height:33px;margin-left:5px;">

<?php
if(isset($_GET['ser1']))
{
$ser1=$_GET['ser1'];
$ser2=$_GET['ser2'];
$ser3=$_GET['ser3'];
$sql="SELECT * FROM series WHERE series_name LIKE '$ser1%' OR series_name LIKE '$ser2%' OR series_name LIKE '$ser3%'";
$result=$conn->query($sql);
    if($result->num_rows>0)
         {
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
            $P=$row['genre'];


?>

<b><a href="Front Page.php?id=<?php echo $A; ?>" style="color:darkslategray;font-size:18.5px;line-height:33px;margin-left:5px;"> <i class="glyphicon glyphicon-hand-right"></i> &nbsp<?php echo $B; ?></a></b><br>
<?php                    
        }
    }
}
?>

<?php
if(isset($_GET['ser11']))
        {
            $ser1=$_GET['ser11'];
            $ser2=$_GET['ser22'];
            $ser3=$_GET['ser33'];
           
$sql="SELECT * FROM series WHERE series_name LIKE '$ser1%' OR series_name LIKE '$ser2%'";
$result=$conn->query($sql);
    if($result->num_rows>0)
         {
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
            $P=$row['genre'];

?>

<b><a href="Front Page.php?id=<?php echo $A; ?>" style="color:darkslategray;font-size:18.5px;line-height:33px;margin-left:5px;"> <i class="glyphicon glyphicon-hand-right"></i> &nbsp<?php echo $B; ?></a></b><br>
<?php                    
        
    }
}
}
?>


<?php                    
if(isset($_GET['ser11']))
{
$ser1=$_GET['ser11'];
$ser2=$_GET['ser22'];
$ser3=$_GET['ser33'];
$limit=9;
$sql="SELECT * FROM series WHERE series_name BETWEEN '$ser3' AND '$limit'";
$result=$conn->query($sql);
    if($result->num_rows>0)
         {
             while($row=$result->fetch_assoc())
        {
            $A=$row['episode_id'];
            $B=$row['series_name'];
?>

<b><a href="Front Page.php?id=<?php echo $A; ?>" style="color:darkslategray;font-size:18.5px;line-height:33px;margin-left:5px;"> <i class="glyphicon glyphicon-hand-right"></i> &nbsp<?php echo $B; ?></a></b><br>
        <?php
        }}}
        ?>



</div>

<br>
<?php
include("Footer.php");
?>
