<div id="SiteMap">
    <nav>
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
    <p>© 2013 Jordan Novak</p>
    <p>Last Updated 21 December 2013</p>
</div>