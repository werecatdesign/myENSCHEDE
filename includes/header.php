<?php
    
echo '

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>myENSCHEDE Mobile Website</title>
    <link rel="stylesheet" media="(max-width: 800px)" href="style.css" />
    <link rel="stylesheet" media="(min-width: 801px)" href="desktop_style.css" />
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1549984893" />
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://js.api.here.com/v3/3.0/mapsjs-places.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
	<link rel="stylesheet" media="(max-width: 800px)" rel="stylesheet" href="style/timelify.css">
    <link rel="stylesheet" media="(min-width: 801px)" rel="stylesheet" href="style/desktop_timelify.css">
</head>
    
<body>
    <!-- HEADER: myENSCHEDE LOGO -->
    
    <div class = "header">
        <div class = "header_logo"><a href = "index.php"><img src = "graphics/Logos/myENSCHEDE.jpg"></a> </div>         
        <div class = "menu_icon">
            <div class = "nothingness"></div>
            <div class = "content">
                <a href = "#" id = "menu_icon"><img src = "graphics/Icons/menu_icon.png" alt = "Expand Menu"></a>
            </div>
            <div class = "nothingness"></div>
        </div>
    </div>
    
    <!-- MENU: NAVIGATION ON LANDING PAGE 1 -->
    <div id = "menudiv" class = "hidden">
        <div class = "menu_item">
            <a href = "about.php" id = "about">ABOUT myENSCHEDE</a>
        </div>
        <div class = "menu_item">
            <a href = "letterteam.php" id = "about">THE LETTER TEAM</a>
        </div>
        <div class = "menu_item">
            <a href = "events.php" id = "events"><b>E</b>VENTS</a>
        </div>
        <div class = "menu_item">
            <a href = "nature.php" id = "nature"><b>N</b>ATURE</a>
        </div>
        <div class = "menu_item">
            <a href = "shopping.php" id = "shopping"><b>S</b>HOPPING</a>
        </div>
        <div class = "menu_item">
            <a href = "culture.php" id = "culture"><b>C</b>ULTURE</a>
        </div>
        <div class = "menu_item">
            <a href = "history.php" id = "history"><b>H</b>ISTORY</a>
        </div>
        <div class = "menu_item">
            <a href = "evening.php" id = "evening"><b>E</b>VENING</a>
        </div>
        <div class = "menu_item">
            <a href = "doing.php" id = "doing"><b>D</b>OING</a>
        </div>
        <div class = "menu_item">
            <a href = "eating.php" id = "eating"><b>E</b>ATING</a>
        </div>
        <div class = "menu_item">
            <a href = "sponsors.php" id = "sponsors">PARTNERS & SPONSORS</a>
        </div>
     </div> 
     <div id = "invisiblemenu" class = "hidden"></div>

';

?>