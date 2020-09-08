<?php
include("Header.php");
?>

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<style>
.button {position:fixed;bottom:20px;right:30px;}
.button1 {position:fixed;bottom:80px;right:30px;}
</style>

<br><div style="color:white;background-color:darkolivegreen;border:2px solid darkolivegreen;margin:1px;font-size:18px;border-radius:4px;width:99.9%;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><center>List of all Series:</center></div>

<br>

<br><div style="color:darkslategray;font-size:17.5px;line-height:30px;margin-left:5px;">

<?php
$record_per_page = 12;
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
$sql="SELECT * FROM series order by episode_id DESC LIMIT $start_from, $record_per_page";
$result=$conn->query($sql);
    
             while($row=$result->fetch_assoc())
                    {
                        $A=$row['episode_id'];
                        $B=$row['series_name'];
                    
                    ?>
                    
                    <img src="https://img.icons8.com/doodle/48/000000/circled-right-2.png" style="height:25px;"> <a href="Front Page.php?id=<?php echo $A; ?>" style="color:darkslategray;"><b><?php echo $B; ?></b></a><br>
<?php                    
                    } 
?>
    </div>
    <div align="center">
    
<?php
    $page_query = "SELECT * FROM series ORDER BY episode_id DESC";
    $page_result = mysqli_query($conn, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <=0)
    {
     $start_loop = $total_pages - 0;
    }
    $end_loop = $start_loop + 0;
    if($page > 1)
    {
     echo "<a href='List of All Series.php?page=1' class='a' style='color:white;'>First</a>";
     echo "<a href='List of All Series.php?page=".($page - 1)."' class='a' style='color:white;'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='List of All Series.php?page=".$i."' class='a' style='color:white;'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='List of All Series.php?page=".($page + 1)."' class='a' style='color:white;'>>></a>";
     echo "<a href='List of All Series.php?page=".$total_pages."' class='a' style='color:white;'>Last</a>";
    }
    ?>
    </div>
<!-- 
                                     
                                      (11)The Cry<br>
                                      (12)Shameless<br>
                                      (13)Titans<br>
                                      (14)Speechless<br>
                                      (15)The Bureau of Magical Things<br>
                                      (16)The Romanoffs<br>
                                      (17)Supernatural<br>
                                      (18)The Good Place<br>
                                      (19)The Big Bang Theory<br>
                                      (20)Superstore<br>
                                      (21)Station 19<br>
                                      (22)Sick of It<br>
                                      (23)S.W.A.T<br>
                                      (24)South Park<br>
                                      (25)The Goldbergs<br>
                                      (26)The Cool Kids<br>
                                      (27)Star<br>
                                      (28)Single Parents<br>
                                      (29)SEAL Team<br>
                                      (30)The Flash<br>
                                      (31)This Is Us<br>
                                      (32)The Purge<br>
                                      (33)The Gifted<br>
                                      (34)Sorry for Your Loss<br>
                                      (35)Star Wars Resistance<br>
                                      (36)The Venture Bros<br>
                                      (37)The Man in the High Castle<br>
                                      (38)The Outpost<br>
                                      (39)The Good Cop<br>
                                      (40)Snowfall<br>
                                      (41)Suits<br>
                                      (42)The Dragon Prince<br>
                                      (43)Teen wolf<br>
                                      (44)The Vampire Diaries<br>
                                      (45)The Orignals<br>
                                      (46)Sherlock<br>
                                      (47)The Bastard Executioner<br>
                                      (48)The Wire<br>
                                      (49)Spartacus<br>
                                      (50)Two and a half man<br>
                                      (51)Supernatural<br>
                                      (52)Stranger Things<br>
                                      (53)Salvation<br>
                                      (54)The Rich and the Ruthless<br>
                                      (55)Take Two<br>
                                      (56)Shooter<br>
                                      (57)Snatch <br>
                                      (58)Stan Lees Lucky Man<br>
                                      (59)Sharp Objects<br>
                                      (60)The Innocents<br>
                                      (61)Trial and Error<br>
                                      (62)Unforgotten<br>
                                      (63)The Affair<br>
                                      (64)Shades of Blue  <br>
                                      (65)Strange Angel<br>
                                      (66)Teachers  <br>
                                      (67)The 100 <br>
                                      (68)The Bold Type<br>
                                      (69)The Ranch<br>
                                      (70)The Expanse<br>
                                      (71)Taken<br>
                                      (72)The Staircase<br>
                                      (73)Sacred Games<br>
                                      (74)The Handmaids Tale<br>
                                      (75)UnREAL<br>
                                      (76)Six<br>
                                      (77)Siren<br>
                                      (78)The Good Fight <br> 
                                      (79)Trust<br>
                                      (80)The Americans<br>
                                      (81)The Last O.G.<br>
                                      (82)The Fosters<br>
                                      (83)Sense8<br>
                                      (84)The Hollow<br>
                                      (85)The Crossing<br>
                                      (86)Sweetbitter<br>
                                      (87)The Blacklist<br>
                                      (88)Shadowhunters<br>
                                      (89)Timeless<br> 
                                      (90)The Last Man on Earth<br>
                                      (91)Silicon Valley<br>
                                      (92)Timeless<br>
                                      (93)The Royals<br>
                                      (94)Safe<br>
                                      (95)The Magicians  <br>
                                      (96)The Good Karma Hospital<br>
                                      (97)Unsolved<br>
                                      (98)The Rain <br>
                                      (99)The Durrells<br>
                                      (100)Scandal<br>
                                      (101)The Mick<br>
                                      (102)The Sinner<br>
                                      (103)The Dangerous Book for Boys<br>
                                      (104)The Path  <br>
                                      (105)The Detour<br>
                                      (106)The Alienist<br>
                                      (107)Santa Clarita Diet <br>
                                      (108)The X-Files<br>
                                      (109)The Chi<br>
                                      (110)The Oath <br>
                                      (111)Sneaky Pete<br>
                                      (112)Strike<br>
                                      (113)Seven Seconds<br>
                                      (114)Strike Back<br>
                                      (115)Star Trek Discovery<br>
                                      (116)The Librarians<br>
                                      (117)The Mayor  <br>
                                      (118)The Brave    <br>      
                                      (119)Ten Days in the Valley   <br>   
                                      (120)The End of the Fucking World    <br>                                                   
                                      (121)The Brave      <br>  
                                      (122)The Mayor<br>
                                      (123)The Librarians   <br>   
                                      (124)Star Trek Discovery<br>
                                      (125)The Grand Tour <br>    
                                      (126)Seven Seconds<br>
                                      (127)Strike Back<br>
                                      (128)The Punisher<br>
                                      (129)The Crown <br>
                                      (130)The Shannara Chronicles <br>        
                                      (131)The Exorcist   <br>
                                      (132)Travelers<br>
                                      (133)Shut Eye  <br>    
                                      (134)Tin Star<br>
                                      (135)The Strain<br>
                                      (136)Twin Peak<br>
                                      (137)The Mist<br>
                                      (138)The Defenders<br>
                                      (139)The Leftovers<br>
                                      (140)The Keepers<br>
                                      (141)The Blacklist - Redemption<br>
                                      (142)Sleepy Hollow<br>
                                      (143)Taboo <br>
                                      (144)Salem<br>
                                      (145)The OA<br>
                                      (146)Scream Queens   <br>   
                                      (147)Secrets And Lies  <br>  
                                      (148)Tyrant<br>
                                      (149)The Night Of <br>
                                      (150)The Good Wife<br>
                                      (151)The Knick<br>
                                      (152)Satisfaction  <br> 
                                      (153)Under The Dome  <br>
                                      (154)The Whispers<br>
                                      (155)The Astronaut Wives Club <br>
                                      (156)True Detective<br>
                                      (157)The Messengers    <br>   
                                      (158)The Following <br>
                                      (159)The Returned<br>
                                      (160)The Mentalist<br>
                                      (161)Sons of Anarchy<br>
                                      (162)True Blood  <br> 
                                      (163)The Boondocks <br> 
                                      (164)Star Crossed  <br>
                                      (165)The Tomorrow People  <br>
                                      (166)Twisted   <br>
                                      (167)The Carrie Diaries<br>
                                      (168)Chicago Fire                                  <br>
                                      (169)Criminal Minds<br>
                                      (170)Chicago PD<br>
                                      (171)Bad Move<br>
                                      (172)American Housewife<br>
                                      (173)American Horror Story<br>
                                      (174)A Million Little Things<br>
                                      (175)Black Lightning<br>
                                      (176)Chesapeake Shores<br>
                                      (177)Black Earth Rising<br>
                                      (178)A Place to Call Home<br>
                                      (179)Bobs Burgers<br>
                                      (180)Big Hero 6 The Series<br>
                                      (181)A Discovery of Witches<br>
                                      (182)Channel Zero<br>
                                      (183)Bull<br>
                                      (184)Ballers<br>
                                      (185)Bodyguard<br>
                                      (186)American Vandal<br>
                                      (187)BoJack Horseman<br>
                                      (188)Cuckoo<br>
                                      (189)Castle Rock<br>
                                      (190)Bronx SIU<br>
                                      (191)Ask the StoryBots<br>
                                      (192)American Woman<br>
                                      (193)Animal Kingdom<br>
                                      (194)Condor<br>
                                      (195)Alone Together<br>
                                      (196)Claws<br>
                                      (197)Cloak and Dagger<br>
                                      (198)Casual<br>
                                      (199)Colony<br>
                                      (200)Code Black<br>
                                      (201)Carter<br>
                                      (202)Anne<br>
                                      (203)Bulletproof<br>
                                      (204)Brockmire<br>
                                      (205)A Very English Scandal<br>
                                      (206)Archers<br>
                                      (207)Billions <br>
                                      (208)Arrow<br>
                                      (209)Breaking Bad<br>
                                      (210)American Gods<br>
                                      (211)Empire                                              <br>
                                      (212)FBI<br>
                                      (213)Doctor Doctor<br>
                                      (214)Family Guy<br>
                                      (215)Doctor Who<br>
                                      (216)Fresh Off the Boat<br>
                                      (217)Fear the Walking Dead<br>
                                      (218)Elementary<br>
                                      (219)Forever 2018<br>
                                      (220)Detroiters<br>
                                      (221)Disenchantment<br>
                                      (222)Dietland<br>
                                      (223)Famous in Love<br>
                                      (224)Deception<br>
                                      (225)Deep State<br>
                                      (226)For the People<br>
                                      (227)Designated Survivor<br>
                                      (228)Dynasty<br>
                                      (229)Dear White People<br>
                                      (230)Endeavour<br>
                                      (231)Falling Water<br>
                                      (232)Divorce<br>
                                      (233)Everything Sucks<br>
                                      (234)Damnation<br>
                                      (235)Dirk Gentlys Holistic Detective Agency<br>
                                      (236)Dark<br>
                                      (237)Future Man<br>
                                      (238)Dark Matter<br>
                                      (239)Fearless<br>
                                      (240)Fargo<br>
                                      (241)Feud<br>
                                      (242)Emerald City<br>
                                      (243)Frequency<br>
                                      (244)Devious Maids<br>
                                      (245)Daredevil<br>
                                      (246)Downton Abbey<br>
                                      (247)Da Vincis Demons<br>
                                      (248)Dominion<br>
                                      (249)Extant<br>
                                      (250)Forever<br>
                                      (251)Friends With Better Lives<br>
                                      (252)Dragon Ball Z<br>
                                      (253)Friends<br>
                                      (254)Happy Together                                                                         <br>
                                      (255)God Friended Me<br>
                                      (256)Hawaii Five-0<br>
                                      (257)I Feel Bad<br>
                                      (258)How to Get Away with Murder<br>
                                      (259)Greys Anatomy<br>
                                      (260)Its Always Sunny in Philadelphia<br>
                                      (261)Greenleaf<br>
                                      (262)I Am Frankie<br>
                                      (263)Get Shorty<br>
                                      (264)Into the Dark<br>
                                      (265)Insecure<br>
                                      (266)Hilda<br>
                                      (267)Iron Fist<br>
                                      (268)Gary and his Demons<br>
                                      (269)Harlots<br>
                                      (270)Heathers<br>
                                      (271)Insatiable<br>
                                      (272)Hidden<br>
                                      (273)Ghosted<br>
                                      (274)Girlfriends Guide to Divorce<br>
                                      (275)I am Dying Up Here<br>
                                      (276)Humans<br>
                                      (277)Instinct<br>
                                      (278)Glow<br>
                                      (279)Genius<br>
                                      (280)Into the Badlands<br>
                                      (281)Goliath<br>
                                      (282)Imposters<br>
                                      (283)Impulse<br>
                                      (284)iZombie<br>
                                      (285)Gotham<br>
                                      (286)Harrow<br>
                                      (287)Good Girls<br>
                                      (288)Homeland<br>
                                      (289)Here and Now<br>
                                      (290)Grownish<br>
                                      (291)Greenhouse Academy<br>
                                      (292)Happy<br>
                                      (293)Ghost Wars<br>
                                      (294)Game of Thrones<br>
                                      (295)House of Cards<br>
                                      (296)How I Met Your Mother<br>
                                      (297)Kidding                                                                                       <br>
                                      (298)Light as a Feather<br>
                                      (299)Last Man Standing<br>
                                      (300)Law And Order - SVU<br>
                                      (301)Lethal Weapon<br>
                                      (302)Killjoys<br>
                                      (303)Jack Ryan<br>
                                      (304)Lost in Oz<br>
                                      (305)Lodge 49<br>
                                      (306)Luke Cage<br>
                                      (307)Life Sentence<br>
                                      (308)Legion<br>
                                      (309)Lucifer<br>
                                      (310)Killing Eve<br>
                                      (311)Krypton<br>
                                      (312)Life in Pieces<br>
                                      (313)LA to Vegas<br>
                                      (314)Jane The Virgin<br>
                                      (315)Lost in Space<br>
                                      (316)Legends of Tomorrow<br>
                                      (317)Jessica Jones<br>
                                      (318)Kevin Probably Saves the World<br>
                                      (319)Knightfall<br>
                                      (320)Jean Claude Van Johnson<br>
                                      (321)Limitless<br>
                                      (322)Legends<br>
                                      (323)Lost Girl<br>
                                      (324)Lost<br>
                                      (325)Murdoch Mysteries                                                                               <br>
                                      (326)Manifest<br>
                                      (327)Magnum PI<br>
                                      (328)NCIS - Los Angeles<br>
                                      (329)Madam Secretary<br>
                                      (330)MacGyver<br>
                                      (331)One Dollar<br>
                                      (332)Mr Mercedes<br>
                                      (333)Mom<br>
                                      (334)Modern Family<br>
                                      (335)New Amsterdam<br>
                                      (336)NCIS<br>
                                      (337)NCIS - New Orleans<br>
                                      (338)Mr Inbetween<br>
                                      (339)Maniac<br>
                                      (340)No Offence<br>
                                      (341)Ozark<br>
                                      (342)Orange Is The New Black<br>
                                      (343)Nashville<br>
                                      (344)Marlon<br>
                                      (345)Mystery Road<br>
                                      (346)Once Upon a Time<br>
                                      (347)New Girl<br>
                                      (348)Marcella<br>
                                      (349)On My Block<br>
                                      (350)Mozart in the Jungle<br>
                                      (351)McMafia<br>
                                      (352)Mary Kills People<br>
                                      (353)Mosaic<br>
                                      (354)Mr. Robot<br>
                                      (355)Outlander<br>
                                      (356)Mindhunter<br>
                                      (357)Midnight Texas<br>
                                      (358)Narcos<br>
                                      (359)Orphan Black<br>
                                      (360)Outsiders<br>
                                      (361)No Tomorrow<br>
                                      (362)Mistresses<br>
                                      (363)Murder in the First<br>
                                      (364)Manhattan<br>
                                      (365)Nikita<br>
                                      (366)Pine Gap<br>
                                      (367)Rel<br>
                                      (368)Press<br>
                                      (369)Riverdale<br>
                                      (370)Rake<br>
                                      (371)Ravens Home<br>
                                      (372)Queen of the South<br>
                                      (373)Power<br>
                                      (374)Paradise PD<br>
                                      (375)Preacher<br>
                                      (376)Queen Sugar<br>
                                      (377)Reverie<br>
                                      (378)Quantico<br>
                                      (379)Poldark<br>
                                      (380)Pose<br>
                                      (381)Ransom<br>
                                      (382)Patrick Melrose<br>
                                      (383)Picnic at Hanging Rock<br>
                                      (384)Rise<br>
                                      (385)Requiem<br>
                                      (386)Runaways<br>
                                      (387)Peaky Blinders<br>
                                      (388)Pretty Little Liars<br>
                                      (389)Reign<br>
                                      (390)Prison Break<br>
                                      (391)Powerless<br>
                                      (392)Pitch<br>
                                      (393)Quarry<br>
                                      (394)Person of Interest<br>
                                      (395)Penny Dreadful<br>
                                      (396)Revenge<br>
                                      (397)Red Band Society<br>
                                      (398)Resurrection<br>
                                      (399)Revolution<br>
                                      (400)Ravenswood<br> 
                                      (401)Van Helsing<br>
                                      (402)Will And Grace<br>
                                      (403)Wanderlust<br>
                                      (404)Vanity Fair<br>
                                      (405)Wrecked<br>
                                      (406)Wynonna Earp<br>
                                      (407)Wentworth<br>
                                      (408)Who Is America<br>
                                      (409)Westworld<br>
                                      (410)Vida<br>
                                      (411)When Calls the Heart<br>
                                      (412)Waco<br>
                                      (413)Valor<br>
                                      (414)Vikings<br>
                                      (415)Wisdom of the Crowd<br>
                                      (416)Wolf Creek<br>
                                      (417)Vice Principals<br>
                                      (418)Will<br>
                                      (419)Wayward Pines<br>
                                      (420)Vinyl<br>
                                      (421)War and Peace<br>
                                      (422)White Collar<br>
                                      (423)Witches of East End<br> 
                                      (424)911                                                                      <br>
                                      (425)You<br>
                                      (426)Z Nation<br>
                                      (427)Young Sheldon<br>
                                      (428)5th Ward<br>
                                      (429)Yellowstone<br>
                                      (430)12 Monkeys<br>
                                      (431)You Me Her<br>
                                      (432)13 Reasons Why<br>
                                      (433)You Are Wanted<br>
                                      (434)9JKL<br>
                                      (435)Youre the Worst<br>
                                      (436)Zoo<br>
                                      (437)24 Legacy<br>
                                      (438)2 Broke Girls<br>
                                      (439)24<br>
                                      (440)The Resident<br></b> -->
<br>

<?php
include("Footer.php");
?>
<button onclick="scrollWin(0, -15000)" class="btn button1"><i class="glyphicon glyphicon-chevron-up"></i></button><br>
<button onclick="scrollWin(0, 15000)" class="btn button"><i class="glyphicon glyphicon-chevron-down"></i></button><br>

<script>
    function scrollWin(x, y)
     {window.scrollBy(x, y);}
</script>
