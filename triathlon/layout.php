<!DOCTYPE html>
<html>
<head lang="en">
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Site in Progress">

    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/triathlon/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="/triathlon/css/novakia.css" type="text/css" />
    <link rel="stylesheet" href="/triathlon/css/phone.css" type="text/css" />
    <link rel="stylesheet" href="/triathlon/js/colorbox/example3/colorbox.css" type="text/css" />


    <script type="text/javascript" src="/triathlon/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="/triathlon/js/colorbox/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="/triathlon/js/triathlon.js"></script>


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