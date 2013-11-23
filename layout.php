<!DOCTYPE html>
<html>
<head lang="en">
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Site in Progress">

    <link rel="stylesheet" href="/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/css/novakia.css" type="text/css" />
    <link rel="stylesheet" href="/css/phone.css" type="text/css" />
    <link rel="stylesheet" href="/js/colorbox/example3/colorbox.css" type="text/css" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/js/colorbox/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="/js/novaktools.js"></script>


</head>
<body>
    <div id="BodyContainer">
        <header>
            <div id="Header">
                <?=$header?>
            </div>
        </header>

        <main>
            <?=$content?>
        </main>
    </div>
    <div id="FooterContainer">
        <footer>
            <?=$footer?>
        </footer>
    </div>
</body>
</html>