<div id="SiteMap">
    <nav>
        <h3>Site Map</h3>
        <ul>
            <?php foreach ($footerNavItems as $text => $url){
                ?>
                <li><a href="<?=$url?>"><?=$text?></a></li>
            <?php
            }
            ?>
        </ul>
    </nav>

</div>