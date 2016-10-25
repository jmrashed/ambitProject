<?php include("./includes/header.php"); ?>
<?php include("./includes/navbar.php"); ?>

<link rel="stylesheet" type="text/css" href="srpgs.minified.css"/>
<script type="text/javascript" src="jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="srpgs.minified.js"></script>
<script type="text/javascript">

    var srpgs_slideshowSpeed = 5000, // speed of the automatic slideshow
            srpgs_scroll_delay = 700, // speed of the scrolling controls
            srpgs_path_pics = 'pics/';		// path to large photos
    srpgs_path_thumb = 'pics/thumbnails/';

    var srpgs_photos = [{
            "image": "srpgs-01.jpg"
        }, {
            "image": "srpgs-02.jpg"
        }, {
            "image": "srpgs-03.jpg"
        }, {
            "title": "Title of Photo #04",
            "image": "srpgs-04.jpg",
            "url": "http://www.yoursite.com/photo-set-01/",
            "subject": "#04 in Subject of Set #1"
        }, {
            "title": "Title of Photo #05",
            "image": "srpgs-05.jpg",
            "url": "http://www.yoursite.com/photo-set-01/",
            "subject": "#05 in Subject of Set #1"
        }, {
            "title": "Title of Photo #06",
            "image": "srpgs-06.jpg",
            "url": "http://www.yoursite.com/photo-set-02/",
            "subject": "Subject of Set #2: Photo #06"
        }, {
            "title": "",
            "image": "srpgs-07.jpg",
            "url": "",
            "subject": ""
        }, {
            "title": "Title of Photo #08",
            "image": "srpgs-08.jpg",
            "url": "http://www.yoursite.com/photo-set-02/",
            "subject": "Subject of Set #2: Photo #08"
        }, {
            "image": "srpgs-09.jpg"
        }, {
            "image": "srpgs-10.jpg"
        }, {
            "image": "srpgs-11.jpg"
        }, {
            "image": "srpgs-12.jpg"
        }, {
            "image": "srpgs-13.jpg"
        }, {
            "image": "srpgs-14.jpg"
        }, {
            "image": "srpgs-15.jpg"
        }, {
            "image": "srpgs-16.jpg"
        }, {
            "image": "srpgs-17.jpg"
        }, {
            "image": "srpgs-18.jpg"
        }
    ];
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2417948-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

<div class="srpgs-container">
    <div class=" row ">
        <!-- Photo placeholders -->
        <div id="srpgs-slideshow">
            <div id="srpgs-rotate-1" class="srpgs-holder"><img src="" /></div>
            <div id="srpgs-rotate-2" class="srpgs-holder"><img src="" /></div>
        </div>

        <!-- Photo slideshow controls -->
        <div id="srpgs-control">
            <div class="srpgs-thumbs-nav copyright"><a href="http://www.javascriptbank.com" title="Copyright 2013">+</a></div>
            <div class="srpgs-thumbs-nav up"></div>
            <div id="srpgs-thumbs-gallery"></div>
            <div class="srpgs-thumbs-nav down"></div>
            <div id="srpgs-control-btns">
                <div id="srpgs-control-back"></div>
                <div id="srpgs-control-play-pause"></div>
                <div id="srpgs-control-next"></div>
            </div>
        </div>

        <!-- Titles and subjects of the photos -->
        <div id="srpgs-picture">
            <span id="srpgs-picture-title"></span>
            <p class="srpgs-picture-link">
                In: <a href="#" id="srpgs-picture-url"></a>
            </p>
        </div>
    </div>

</div>
</div>

<?php
//include("./includes/footer.php"); 
?>
