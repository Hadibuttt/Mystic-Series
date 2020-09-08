<?php
include("Php and Database Connection.php");
?>
<head>
<title>MysticSeries</title>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141141986-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141141986-1');
</script>
	
	
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2523361779876259",
    enable_page_level_ads: true
  });
</script>
</head>
<link rel="icon" href="Index images and audio\overwolf-filled.png">
<link href="bootstrap\css\WBootstrap.css" rel="Stylesheet">

    <script src="bootstrap\js\jquery.min.js"></script>

    <script src="bootstrap\js\bootstrap.min.js"></script>
<br>

<?php
$ser_id=$_GET['ser_id'];
$s_id=$_GET['s_id'];
$ep=$_GET['ep'];

$sql="SELECT * FROM download_link WHERE series_id=$ser_id AND episode_id=$ep AND season_id=$s_id";
$result=$conn->query($sql);
         while($row=$result->fetch_assoc())
         {
            $A=$row['link'];
         }
         ?>
         <center><button type="submit" style="margin-top:20px;"><a href="<?php echo $A; ?>" target=_blank style="text-decoration:none;color:black;" download>Download Now!</a></button></center>
<br>

<center><div style="color:red;font-size:15px;">1. Make sure you are using Chrome or UC Browser Only, Downloads won't work on Opera Mini or UC mini.<br>
2. Make sure your ad blocker is turned OFF and you are not using any VPN.<br> 
3. If the video is playing instead of downloading just long press or right click on the video to get Save/Download option.<br></div></center>

<br>
<!--Mystic 3 Images Advertisment-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    

<!--Mystic 1st image Advertisment-->
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    
    <center>
    <img src="Index images and audio\WhatsApp Image 2019-05-24 at 2.33.01 PM.jpeg" class="img-responsive" style="width:380px;"></img>              
        </center>
   
        <h3 style="text-align:center;" class="col-xs-12 col-sm-12">Local Romeo Failed</h3>

</div>

<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
    <br>
</div>


<!--Mystic 2nd image Advertisment-->
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        
    <center>
    <img src="Index images and audio\IMG-20190423-WA0007.jpg" class="img-responsive" style="width:380px;"></img>
    </center>                

        <h3 style="text-align:center;" class="col-xs-12 col-sm-12">Love at first Sight</h3>
          
    </div>
    
    
    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
        <br>
    </div>
    

    <!--Mystic 3rd image Advertisment-->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

        <center>
        <img src="Index images and audio\WhatsApp Image 2019-05-24 at 2.33.01 PM.jpeg" class="img-responsive" style="width:380px;"></img>
        </center>

    <h3 style="text-align:center;" class="col-xs-12 col-sm-12">Local Romeo Failed</h3>

</div>
        
</div>

</div>