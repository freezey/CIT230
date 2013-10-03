<h1 class="text-center"><a href="/Home"><img src="/img/php_small.jpg" class="center"></a>NovakTools - PHP</h1>
<nav>
    <div id="TopNavContainer">
    <ul>
        <?php foreach ($headerNavItems as $text => $url){
            ?>
            <li><a href="<?=$url?>"><?=$text?></a></li>
        <?php
        }
        ?>
    </ul>
    </div>
</nav>