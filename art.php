<!DOCTYPE html>

<html>
    <head>
        <title>Links - FenixTek</title>
        <?php include "headcomp.php" ?>
        <script type="text/javascript" src="js/imgCarousel.js"></script>
    </head>
    
    <body onload="SelectMode()">    
        <?php include "header.php"?>

        <div class="container_imageSlider">
            <button id="btnPrev" onclick="Prev()">Prev</button>
            <img id="carousel" src="img/gallery/3D/Barrell.png" width="50%"/>
            <button id="btnNext" onclick="Next()">Next</button>
        </div>

        <?php include "footer.php" ?>
    </body>
</html>