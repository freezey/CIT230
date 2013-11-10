<h1>Using The HTML5 Canvas</h1>
<h2>Objectives</h2>
<ul>
    <li>Create a basic animation using the HTML5 canvas</li>
    <li>Understand the abilities and limitations of the HTML5 Canvas</li>
</ul>
<h2>My Canvas</h2>
<div id="TestCanvasContainer" width="600" height="400" style="border:1px solid #000000"></div>

<script src="http://d3lp1msu2r81bx.cloudfront.net/kjs/js/lib/kinetic-v4.7.4.min.js"></script>

<script type="text/javascript">
    var stage = new Kinetic.Stage({
        container: 'TestCanvasContainer',
        width: 600,
        height: 400
    });

    var layer = new Kinetic.Layer();
    var rect = new Kinetic.Rect({
        x:100,
        y:100,
        width:100,
        height:100,
        fill:'blue',
        stroke:'black',
        strokeWidth:5
    });
    var circle = new Kinetic.Circle({
        x:100,
        y:340,
        radius: 32,
        fill:'blue',
        stroke:'black',
        strokeWidth:2
    });
    layer.add(rect);
    layer.add(circle);
    stage.add(layer);

    var animationAmplitude = 150;
    var animationPeriod = 2000;
    var centerX = stage.getWidth() / 2;
    var centerY = stage.getHeight() / 2;
    var animation = new Kinetic.Animation(function(frame){
        rect.setX(animationAmplitude * Math.sin(frame.time * 2 * Math.PI / animationPeriod) + centerX);
        circle.setY(-animationAmplitude * Math.sin(frame.time * 2 * Math.PI / animationPeriod) + centerY);
    }, layer);
    animation.start();

</script>