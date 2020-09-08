<?php
include("Header.php");
?>
<?php 
$ser_id=$_GET['ser_id'];
$s_id=$_GET['s_id'];

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



 <br><div style="background-color:darkolivegreen;color:white;border:4px solid darkolivegreen;margin:1px;font-size:17px;border-radius:6px;word-spacing:2px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

 <a href="index.php" style="color:white;margin-left:-8px;"><b>Home </a> » <a href="Tv Series.php?ser1=<?php echo "$Q"; ?>&ser2=<?php echo "$R"; ?>&ser3=<?php echo "$S"; ?>" style="color:white;margin-left:2px;"><?php echo "$Q, $R or $S"; ?> </a>  »  <a href="Front Page.php?id=<?php echo $_GET['ser_id'];?>" style="color:white;margin-left:2px;"><?php echo $B; ?></a> » Season 0<?php echo $_GET['s_id'];?></b></div>
            
 <div><br><br><br></div>
 <center><img src="Series Images/<?php echo $D; ?>" style="border:1px solid black;border-radius:7px;"></img></center>

<div style="color:white;font-size:18px;text-align:center;"><b><?php echo $B; ?></b></div>



<br><div style="color:white;font-size:16px;text-align:center;">Season 0<?php echo $_GET['s_id'];?> </div>

<div style="background-color:white;color:black;border:14px solid black;border-radius:16px;font-size:16.5px;margin-left:2px;width:100%;"> <b> Views:</b> <?php echo $I; ?><br><b>Episodes:</b> <?php 

$sql = "SELECT COUNT(*) AS total FROM episodes WHERE series_id='$ser_id' AND season_id='$s_id'"; 
$result = $conn->query($sql); 
$values = $result->fetch_assoc(); 
$num_rows = $values['total']; 
echo $num_rows;

?> <br></div>

<div style="background-color:darkolivegreen;color:white;border:5px solid darkolivegreen;margin:1px;font-size:19px;border-radius:5px;text-align:center;">Episodes</div>
<br>


            
            <?php
            $s_id=$_GET['s_id'];
            $ser_id=$_GET['ser_id'];
            $record_per_page = 10;
            $page = '';
            if(isset($_GET["page"]))
            {
             $page = $_GET["page"];
            }
            else
            {
             $page = 1;
            }
            $start_from = ($page-1)*$record_per_page;
            $sql1="SELECT * FROM episodes WHERE series_id='$ser_id' AND season_id='$s_id' order by id DESC LIMIT $start_from, $record_per_page";
            $result1=$conn->query($sql1);
            while($row1=$result1->fetch_assoc())
                    {
                        $id=$row1['id'];
                        $episode_title=$row1['episode_title'];
                    
            ?>

<big style="color:darkslategray;"><b><a href="Episode Page.php?ser_id=<?php echo $ser_id; ?>&s_id=<?php echo $s_id; ?>&ep=<?php echo $id; ?>" style="color:darkslategray;margin-left:4px;"> » <?php echo $episode_title; ?></b></a><br></big>
<br>

<?php
    }
}
?>
<center>
<?php
$s_id=$_GET['s_id'];
$ser_id=$_GET['ser_id'];
$page_query = "SELECT * FROM episodes WHERE series_id='$ser_id' AND season_id='$s_id' order by id DESC";
$page_result = mysqli_query($conn, $page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);
$start_loop = $page;
$difference = $total_pages - $page;
if($difference <= 0)
{
 $start_loop = $total_pages - 0;
}
$end_loop = $start_loop + 0;
if($page > 1)
{
 echo "<a href='Season page.php?page=1&ser_id=$ser_id&s_id=$s_id' class='a' style='color:white;'>First</a>";
 echo "<a href='Season page.php?page=".($page - 1)."&ser_id=$ser_id&s_id=$s_id' class='a' style='color:white;'><<</a>";
}
for($i=$start_loop; $i<=$end_loop; $i++)
{     
 echo "<a href='Season page.php?page=".$i."&ser_id=$ser_id&s_id=$s_id' class='a' style='color:white;'>".$i."</a>";
}
if($page <= $end_loop)
{
 echo "<a href='Season page.php?page=".($page + 1)."&ser_id=$ser_id&s_id=$s_id' class='a' style='color:white;'>>></a>";
 echo "<a href='Season page.php?page=".$total_pages."&ser_id=$ser_id&s_id=$s_id' class='a' style='color:white;'>Last</a>";
}
?>
</center>
<br>
<?php
include("Footer.php");
?>