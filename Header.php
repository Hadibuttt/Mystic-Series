<?php
include("Php and Database Connection.php");
?>

<html>

<head>
<title>MysticSeries</title>

<link rel="icon" href="Index images and audio\overwolf-filled.png">
<link href="bootstrap\css\WBootstrap.css" rel="Stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141141986-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141141986-1');
</script>
	
	
<style>
.a {
   padding:8px 16px;
   border:1px solid #ccc;
   color:#333;
   font-weight:bold;
  }
a:hover{text-decoration:underline;}
a{text-decoration:none;}
</style>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2523361779876259",
    enable_page_level_ads: true
  });
</script>
</head>

<body style="background-color:black;font-family:normal;">

<div style="background-color:slategray;color:white;border:2px solid slategray;font-size:17px;border-radius:7px;margin-top:1.5px;width:99.8%;margin-left:1.5px;">

<a href="index.php" style="color:white;">   | Home

<a href="List of All Series.php" style="color:white;">| List of All Series 

<a href="genre.php" style="color:white;">| List of All Genre |</a></a></a></div><br>

<center>
<a href="index.php">
    <img src="Index images and audio\logoM.png" style="height:250px;width:250;background-color:white;border-radius:6px;"></img>
</a>
</center>

<br><div style="background-color:darkolivegreen;color:white;border:2px solid darkolivegreen;font-size:17px;border-radius:5px;" class="col-lg-12 col-md-12 col-sm-12 col-md-12 col-xs-12"> 
        <div style="text-align:center;">Join our <a href="https://www.facebook.com/MysticTvSeries" style="color:Black;font-size:17px;"> facebook page</a> to get all the news and updates.
            <img src="Index images and audio\new_facebook_like_640.png" style="width:35px;height:20px;"></img>
        </div>
    </div><br>

<form action="search.php" method="post">
<br><input type="text" name="1" required="" style="width:90%;font-size:15px;" placeholder="  Type name of series to search..."><button type="submit" name="btn" style="width:10%;font-size:15px;">Search</button><br>
</form>

<?php
if(isset($_POST['btn']))

{

    $AB= $_POST['1'];

    if($AB==' ')

{
    echo "<center><big style='font-size:19px;text-align:center;color:white;border:1px solid white;padding:2px;'>Enter a keyword</big></center>";
}

    else
    {

    $sql="SELECT * FROM series WHERE series_name LIKE '%$AB%'";
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
                        // $sql1="SELECT * FROM seasons WHERE season_title LIKE '%$AB%'";
                        // $result1=$conn->query($sql1);
                        //     if($result1->num_rows>0)
                        //          {
                        //             while($row1=$result1->fetch_assoc())
                        //                 {
                        //                     $season_id=$row1['id'];
                        //                     $season_title=$row1['season_title'];
                        
    ?>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            
                            <a href="Front Page.php?id=<?php echo $A; ?>" style="color:aliceblue;text-align:center;font-size:19px;margin-right:10px;"> » <?php echo $B; ?></a>
                            </div>
                            
                             <div class="col-xs-8 col-xs-offset-4 col-sm-8 col-sm-offset-4 col-md-11 col-md-offset-1 col-lg-11 col-lg-offset-1">
                            <img src="Series Images/<?php echo $D; ?>" style="border:1px solid black;border-radius:7px;height:240px;margin-top:4px;"></img></center>        
                            </div>
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <br>
                        </div>
                        
    <?php                    
                        //     }
                        // }
                    }
                }
                else
                {
                    echo "<center><big style='font-size:19px;text-align:center;color:white;border:1px solid white;padding:2px;'>No Results found</big></center>";
                }
    
            }
}

?>


