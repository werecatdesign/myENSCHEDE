<?php

include_once 'includes/dbh.inc.php';
include('includes/header.php');

$sql1 = 'INSERT INTO uniqueviews (date, time, datetime, page_url, page_name) VALUES (NOW(), NOW(), NOW(), "https://myenschede.werecat-design.com/eating", "Eating");';
$sql2 = 'UPDATE viewcount SET count = count + 1 WHERE page_name = "Eating";';

$update1 = mysqli_query($conn, $sql1);
$update2 = mysqli_query($conn, $sql2);

mysqli_close($conn);

echo '
    
<div class = "bodytext">
    <div class = "redbox" id = "eating_redbox">
        <div class = "category_letter">          
            <img src = "graphics/Carousel/Eating.png" alt = "Category: Eating">
        </div>        
        <div class = "category_content">           
            <h1>Eating in Enschede</h1>                               
        </div>        
    </div>            
    <div class = "whitebox">
        <div class = "category_expand" id = "eventCats">
            <p>What or where would you like to eat?</p>
            <a class = "mapCat" id = "cat1">Italian</a>
            <a class = "mapCat" id = "cat2">Asian</a>
            <a class = "mapCat" id = "cat3">Fast Food</a>
            <a class = "mapCat" id = "cat4">Bakery</a>
            <a class = "mapCat" id = "cat5">Café</a>  
        </div>        
    </div>
    <div class = "redbox" id = "events_redbox2">
        <button class = "search" id = "searchShops">Search restaurants</button>
    </div>
    <div id ="mapContainer">
        <script src = "map.js">
        </script>
    </div>
</div>
</body>
</html>

'; 

?>