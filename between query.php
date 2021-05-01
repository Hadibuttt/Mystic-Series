<?php
include("Header.php");
include("header.php");
?>

<?php
$sql="SELECT * FROM series WHERE series_name BETWEEN '0' AND '9' ";
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
?>


<?php
include("Footer.php");
?>


