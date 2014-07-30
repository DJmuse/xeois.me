<?php

    include 'functions/links.php';
   // include "functions/globalVars.php";
    $cLink = findCurrentLink();
    $bDir = baseDir();
    $sPDir = subPagesDir();
    $endURL = currentPage();
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/webfont/1.3.0/webfont.js" type="text/javascript"></script>
<script type="text/javascript">

    var currentLink = <?php echo json_encode($cLink); ?>;
    var subDir = "<?php echo($bDir); ?>";
    var subPagesDir = "<?php echo($sPDir); ?>";
    var menuItemsAmt = $('.menu .menuButton a').length;
    var endUrl = "<?php echo($endURL); ?>";
    console.log(endUrl);
    // Makes Current Nav Link Active
    (function setActiveLink(){
       $('.'+endUrl).addClass('active');
        if(endUrl === 'index'){
            $('.home').addClass('active');
        }
    })();

    // creates correct path on links
    (function addSubDirectory(){

        for(var i=0;i<menuItemsAmt;i++){
            var href = $('.menu .menuButton a').eq(i).attr('href');
            if(i === 0){
                var newHref = subDir+href;
            }
            if(i !== 0){
                var newHref = subPagesDir+href;
            }
            $('.menu .menuButton a').eq(i).attr('href', newHref);
        }
    })();

</script>

<!-- Custom PopupBox-->
<script type="text/javascript">
    $(document).ready(function(){
        var boxedLinks = [],
            linkedBoxItem = $('a[rel="boxMe"]');

        function findBoxLinks(){
            for(var i=0;i<linkedBoxItem.length;i++){
                boxedLinks.push(i);
            }
            return boxedLinks;
        }

        function createPopBox(){
            findBoxLinks();
            for(var i=0;i<boxedLinks.length;i++){

                var boxToPop = linkedBoxItem.eq(i).attr('href'),
                    viewHeight = $(window).height(),
                    viewWidth = $(window).width(),
                    boxDesiredWidth = linkedBoxItem.eq(i).attr('data-box-width'),
                    boxDesiredHeight = linkedBoxItem.eq(i).attr('data-box-height'),
                    animateTop,
                    animateLeft,
                    boxDiv = '<div class="popBox" data-box-num="'+i+'"></div>';
                $('body').append(boxDiv);
                if(boxDesiredHeight){
                   animateTop = viewHeight-boxDesiredHeight;
                }
                if(!boxDesiredHeight){
                    animateTop = viewHeight-400;
                }
                if(boxDesiredWidth){
                    animateLeft = viewWidth-boxDesiredWidth;
                }
                if(!boxDesiredWidth){
                    animateLeft = viewWidth-400;
                }
                linkedBoxItem.eq(i).attr('data-box-url', boxToPop);
                linkedBoxItem.eq(i).attr('href', 'javascript:return false;');
                linkedBoxItem.eq(i).click(function(){
                    $('.popBox[data-box-num='+i+']').show().css('z-index','1000').animate({
                        height: 400,
                        width: 400,
                        top: parseInt(animateTop),
                        left: parseInt(animateLeft)
                    });
                });

            }

        }
    });
</script>

<!-- Google Analytics -->
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42353043-1', 'xeois.me');
    ga('send', 'pageview');

</script>