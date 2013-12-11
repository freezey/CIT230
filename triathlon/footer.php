<div id="SiteMap">
    <nav>
        <h3>Site Map</h3>
            <?php foreach ($footerNavItems as $group => $items){
                ?>
                <ul>
                <?php
                foreach ($items as $text => $url){
                    ?>
                    <li><a href="<?=$url?>"><?=$text?></a></li>
                    <?php
                }
                ?>
                </ul>
            <?php
            }
            ?>
        <div class="clear"></div>
    </nav>
    <div class="clear"></div>
</div>