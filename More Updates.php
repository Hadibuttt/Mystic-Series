<?php
include("Header.php");
?>

<br><div style="color:white;background-color:darkolivegreen;border:2px solid darkolivegreen;margin:1px;font-size:18px;border-radius:4px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div style="text-align:center;"> Recently Added:</div>
    </div>
<br>
<br><div style="color:darkslategray;font-size:17.5px;margin-left:5px;">
    <?php
                $sql3="SELECT * FROM episodes order by epi_id DESC LIMIT 22";
                $result3=$conn->query($sql3);
                while($row3=$result3->fetch_assoc())
                        {
                            $id=$row3['id'];
                            $series_id=$row3['series_id'];
                            $season_id=$row3['season_id'];
                            $episode_title=$row3['episode_title'];
            
                            $sql2="SELECT * FROM seasons WHERE id='$season_id'";
                            $result2=$conn->query($sql2);
                            $row2=$result2->fetch_assoc();
                                    
                                        $season_title=$row2['season_title'];
                                        $season_id=$row2['id'];
                            $sql1="SELECT * FROM series WHERE episode_id='$series_id'";
                            $result1=$conn->query($sql1);
                            $row1=$result1->fetch_assoc();
                                        $id=$row1['episode_id'];
                                        $series_name=$row1['series_name'];
                            ?>
<img src="https://img.icons8.com/doodle/48/000000/circled-right-2.png" style="height:25px;"> <b><?php echo $series_name." - ".$season_title." - </b> ".$episode_title. " - [10/10] ";?><br>                             
    <?php
    }?>
<br>
<?php
include("Footer.php");
?>