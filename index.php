<?php
include("Header.php");
?>

<audio controls autoplay="true" style="display:none" src="" type="audio/mp3">
</audio>

<br><div style="color:white;background-color:darkolivegreen;border:2px solid darkolivegreen;margin:1px;font-size:18px;border-radius:4px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div style="text-align:center;"> Recently Added:</div>
    </div>
<br>
<br><div style="color:darkslategray;font-size:17.5px;margin-left:5px;">
<?php
    $sql3="SELECT * FROM episodes order by epi_id DESC LIMIT 17";
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
<img src="https://img.icons8.com/doodle/48/000000/circled-right-2.png" style="height:25px;"><a style="color:darkslategray;" href="Season page.php?ser_id=<?php echo $series_id; ?>&s_id=<?php echo $season_id; ?>" target="_blank"><b><?php echo $series_name." - ".$season_title." - </b> ".$episode_title. " - [10/10] ";?></a><br>                             
    <?php
    }?>
<a href="More Updates.php" style="color:darkolivegreen;margin-left:30px;">More Updates..</a>
                                 
<div style="width:99.9%;margin-left:1px;margin-right:3px;">
<center><div style="background-color:darkolivegreen;color:white;border:3px solid darkolivegreen;font-size:18px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Please select from the list of Tv Series:</div><div style="background-color:darkolivegreen;color:white;border:3px solid darkolivegreen;font-size:17px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">first character of the tv series</div></center></div>
<br><br><br>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;" ><a href="Tv Series.php?ser1=A&ser2=B&ser3=C" style="color:black;margin-left:7.3px;" ><b>A-B-C</b><br>
TV Series starting with A, B or C<br>
Eg. Arrow, Agents of Shield, American Horror Story, Bones, Breaking Bad, Castle etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="Tv Series.php?ser1=D&ser2=E&ser3=F" style="color:black;margin-left:7.3px;"><b>D-E-F</b><br>
TV Series starting with D, E or F<br>
Eg. Dexter, Dragon Ball Z, Friends, Doctor Who, Fringe etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="Tv Series.php?ser1=G&ser2=H&ser3=I" style="color:black;margin-left:7.3px;"><b>G-H-I</b><br>
TV Series starting with G, H or I<br>
Eg. How i met your Mother, Homeland, Game of thrones, Gotham, Greys Anatomy etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="Tv Series.php?ser1=J&ser2=K&ser3=L" style="color:black;margin-left:7.3px;"><b>J-K-L</b><br>
TV Series starting with J, K or L<br>
Eg. Jane the virgin, Lost, Lost Girl etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="Tv Series.php?ser1=M&ser2=N&ser3=O" style="color:black;margin-left:7.3px;"><b>M-N-O</b><br>
TV Series starting with M, N or O<br>
Eg. Modren Family, Naruto Shippuden, Once Upon a time etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="Tv Series.php?ser1=P&ser2=Q&ser3=R" style="color:black;margin-left:7.3px;"><b>P-Q-R</b><br>
TV Series starting with P, Q or R<br>
Eg. Revenge, Prison Break, Person Of Intrest etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="Tv Series.php?ser1=S&ser2=T&ser3=U" style="color:black;margin-left:7.3px;"><b>S-T-U</b><br>
TV Series starting with S, T or U<br>
Eg. The Vampire Diaries, Supernatural, Teen Wolf, The Big Bang Theory etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="Tv Series.php?ser1=V&ser2=W&ser3=X" style="color:black;margin-left:7.3px;"><b>V-W-X</b><br>
TV Series starting with V, W or X<br>
Eg. Vikings, Witches of East End, White Collar etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;" ><a href="Tv Series.php?ser11=Y&ser22=Z&ser33=0-9" style="color:black;margin-left:7.3px;"><b>Y-Z-#</b><br>
TV Series starting with Y, Z or #<br>
Eg. 24, 2 Broke Girls, Yi-Gi-Oh! etc.<br></a></div>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br></div>

<br><div style="color:darkolivegreen;font-size:18px;"  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">Request for Series:</div>

<div style="color:darkslategray;"  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<form action="feedback.php" method="post">
<textarea name="feed" cols="60"  required="" rows="4" placeholder="Enter your Name / Request Here..
E.g [David / GOT S3]" class="col-xs-11 col-sm-11 col-md-11 col-lg-11"></textarea><br><button type="submit" name="go" style="font-size:17px;margin-top:1.9px;">Enter Request</button>
</div>
</form>

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

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br>
</div>

<?php
include("Footer.php");
?>
