<?php

include_once 'includes/dbh.inc.php';
include('includes/header.php');

$sql1 = 'INSERT INTO uniqueviews (date, time, datetime, page_url, page_name) VALUES (NOW(), NOW(), NOW(), "https://myenschede.werecat-design.com/shopping", "Shopping");';
$sql2 = 'UPDATE viewcount SET count = count + 1 WHERE page_name = "Shopping";';

$update1 = mysqli_query($conn, $sql1);
$update2 = mysqli_query($conn, $sql2);

mysqli_close($conn);

echo '

<div class = "bodytext">
    
<div class = "redbox" id = "shopping_redbox">
        <div class = "category_letter">          
            <img src = "graphics/Carousel/Shopping.png" alt = "Category: Shopping">
        </div>        
        <div class = "category_content">           
            <h1> Shopping in Enschede </h1>                               
        </div>        
    </div>            
        <div class = "whitebox">
            <div class = "category_expand" id = "eventCats">
                <p>What would you like to shop?</p>
                <a class = "mapCat" id = "cat1">Clothing</a>
                <a class = "mapCat" id = "cat2">Groceries</a>
                <a class = "mapCat" id = "cat3">Electronics</a>
                <a class = "mapCat" id = "cat4">Jewellery</a>
                <a class = "mapCat" id = "cat5">Beauty</a>
                <a class = "mapCat" id = "cat6">Shoes</a>
            </div>        
        </div>
        <div class = "redbox" id = "events_redbox2">
            <button class = "search" id = "searchShops">Search shops</button>
        </div>
    <div id ="mapContainer"></div>
    <script src = "map.js"></script>
</div>
</body>
</html>


'; 

?>