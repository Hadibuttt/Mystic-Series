<?php
include("Header.php");
?>


<?php 
$id=$_GET['id'];


$sql="SELECT * FROM series WHERE episode_id='$id'";
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
            $P=$row['genre'];
            $Q=$row['First_alphabet'];
            $R=$row['Mid_alphabet'];
            $S=$row['Last_alphabet'];
            // <a href='Tv Series.php?ser1="$A"&ser2="$B"&ser3="$C"' style='color:white;margin-left:-8px;'>
            // S, T or U </a>  »  ".$B." </b></div>
             echo "
             <br><div style='background-color:darkolivegreen;color:white;border:4px solid darkolivegreen;margin:1px;font-size:17px;border-radius:6px;word-spacing:2px;' class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
             
                 <a href='index.php' style='color:white;margin-left:-8px;'><b>Home </a> »<a href='Tv Series.php?ser1=$Q&ser2=$R&ser3=$S' style='color:white;margin-left:3px;'> 
                 $Q, $R or $S </a>  »  ".$B." </b></div>
             
             <br><br>
             
             <br><center><img src='Series Images/".$D."' style='border:1px solid black;border-radius:7px;'></img></center>
             
             <div style='color:white;font-size:18px;text-align:center;'><b>".$B."</b></div>
             
             <br>
             
             <p style='color:darkslategray;font-size:17px;text-align:center;'><i><b>".$E."</b></i></p>
             
             
             
             <div style='color:white;text-align:center;'><b>IMDB:</b><a href='".$F."' style='color:darkolivegreen;padding-left:3px;'>".$F."</a></div>
             <br>

             <div style='background-color:white;color:black;border:10px solid black;border-radius:12px;font-size:17;border-radius:14px;margin-left:2px;width:100.1%;'><b>  Casts: </b> ".$N." <br><b>Genres:</b>".$P."<br><b>Run Time:</b> ".$O."mins<br><b>Views:</b> ".$H."<br><b>Ratings:</b> ".$G."<br><b>Seasons:</b> 
             ";?>
             <?php  
             
             $sql = "SELECT COUNT(*) AS total FROM seasons WHERE series_id='$id'"; 
             $result = $conn->query($sql); 
             $values = $result->fetch_assoc(); 
             $num_rows = $values['total']; 
             echo $num_rows;
             
              ?>
              <?php
             echo"
              <br><b>Rate:</b>
             <select> 
             <option value="5">5</option>
             <option value="4">4</option>
             <option value="3">3</option>
             <option value="2">2</option>
             <option value="1">1</option>
             </select><button name="rate" style='background-color:darkolivegreen;color:white;border:2px solid darkolivegreen;border-radius:5px;padding-left:3px;'>Rate This</button></div>
             "?>
             
             
             <div style="background-color:darkolivegreen;color:white;border:5px solid darkolivegreen;margin:1px;font-size:19px;border-radius:5px;text-align:center;">Seasons</div>
             
             
             
            
            <?php
            $id=$_GET['id'];
            $sql1="SELECT * FROM seasons WHERE series_id='$id' order by id DESC";
            $result1=$conn->query($sql1);
            while($row1=$result1->fetch_assoc())
                    {
                        $s_id=$row1['id'];
                        $season_title=$row1['season_title'];
                    ?>
             

             <br>
             
             
             <b><big style="color:darkslategray;"><a href="Season page.php?ser_id=<?php echo $id; ?>&s_id=<?php echo $s_id; ?>" style="color:darkslategray;margin-left:4px;font-size:18.5px;"> » <?php echo $season_title; ?></a></big></b>
             
             
             <br>
             

<?php
         }       
        }

?>

<br>
<?php
include("Footer.php");
?>
