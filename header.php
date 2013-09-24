<h1>Header Text</h1>
<nav>
    <ul>
        <?php foreach ($headerNavItems as $text => $url){
            ?>
            <li><a href="<?=$url?>"><?=$text?></a></li>
        <?php
        }
        ?>
    </ul>
</nav>