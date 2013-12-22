<?php
$assets = array(
    'Alcatraz-and-Fishermans-Wharf.jpg' => 'http://onemansblog.com/wp-content/uploads/2009/07/Alcatraz-and-Fishermans-Wharf.jpg',
    'Alcatraz_aerial.jpg' => 'http://www.englishexercises.org/makeagame/my_documents/my_pictures/2008/ago/Z1A_esca_alcatraz_l.jpg',
    'Alcatraz_water.jpg' => 'http://upload.wikimedia.org/wikipedia/commons/0/05/Alcatraz11.JPEG',
    'Fishermans_Wharf_ground.jpg' => 'http://redandwhitesf.files.wordpress.com/2010/02/1whrf17.jpg',
    'Fishermans_Wharf_no_people.JPG' => 'http://2.bp.blogspot.com/-zD1gE8mdM1k/T11jhY-T8kI/AAAAAAAAAO8/a3kCElSEtQE/s1600/Fisherman\'s+Wharf+1.JPG',
    'FishermansWharfToAlcatraz_aerial.jpg' => 'http://soulofamerica.com/soagalleries/sfoak/genattr/SF-FW_to_Alcatraz.jpg',
    'San_Quentin_Prison_water.jpg' => 'http://sanquentinnews.files.wordpress.com/2010/09/outofsfsan-quentin-19991.jpg',
    'San_Quentin_Prison_aerial.jpg' => 'http://upload.wikimedia.org/wikipedia/commons/e/e9/San_Quentin_Prison.jpg',
    'Fort_Baker_on_San_Francisco_Bay.jpg' => 'http://upload.wikimedia.org/wikipedia/commons/3/34/Fort_Baker_on_San_Francisco_Bay.jpg',
    'alcatraz_sketch.jpg' => 'http://www.robertcasumbal.com/blog/page/2/ (http://www.robertcasumbal.com/blog/images/090206_alcatraz_detail_900.jpg)',
    'san_quentin_1940_picture.jpg' => 'http://www.redrumautographs.com/His2.html (http://www.redrumautographs.com/His2_clip_image002_0014.jpg)',
    'GoldenGateBridge_BW.jpg' => 'http://vintagefeedsacks.blogspot.mx/2011/06/free-vintage-clip-art-golden-gate.html (http://1.bp.blogspot.com/-SWzn1BySRJs/TgfnZTgojEI/AAAAAAAABCM/E6aEHuwyHRM/s1600/298566-GoldenGateBridge.jpg)',
    'fishermans_wharf_sketch.jpg' => 'http://www.otis-graphics.com/blog/archives/370 (http://www.otis-graphics.com/blog/wp-content/uploads/2010/09/fishermans_wharf.jpg)',
    'BatterySpencer_1913.jpg' => 'http://www.militarymuseum.org/BtySpencer.html (http://www.militarymuseum.org/Resources/BtySpencer15.jpg)',
    'FortBakerParade.jpg' => 'http://www.nps.gov/goga/historyculture/fort-baker.htm (http://www.nps.gov/goga/historyculture/images/GOGA-19194-015-Ft-Baker-Par.jpg)',
    'FortBaker_landscape.jpg' => 'http://www.nps.gov/goga/historyculture/fort-baker.htm (http://www.nps.gov/goga/images/new-FOBA-landscape.jpg)',
    'GoldenGateBridge_construction.jpg' => 'http://blogs.kqed.org/newsfix/2012/05/22/golden-gate-bridge-history-in-photos/ (http://blogs.kqed.org/newsfix/files/2012/05/bridgehanging-1024x804.jpg)',
    'LyfordHouse.jpg' => 'http://en.wikipedia.org/wiki/File:Lyforderazorback.jpg'
);
?>

<script type="text/javascript" src="/triathlon/js/colorbox/jquery.colorbox-min.js"></script>
<link rel="stylesheet" href="/triathlon/js/colorbox/example3/colorbox.css" type="text/css" />

<ul>
    <?php foreach ($assets as $name => $source){
        echo '<li><a href="/triathlon/img/' . $name . '" class="colorbox">' . $name . '</a>' . "<br> - " . $source . "</li>";
    }?>
</ul>
