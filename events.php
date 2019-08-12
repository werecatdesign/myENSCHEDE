<?php

include_once 'includes/dbh.inc.php';
include('includes/header.php');

$sql1 = 'INSERT INTO uniqueviews (date, time, datetime, page_url, page_name) VALUES (NOW(), NOW(), NOW(), "https://myenschede.werecat-design.com/events", "Events");';
$sql2 = 'UPDATE viewcount SET count = count + 1 WHERE page_name = "Events";';

$update1 = mysqli_query($conn, $sql1);
$update2 = mysqli_query($conn, $sql2);

mysqli_close($conn);

echo '
<div class = "bodytext">
    <div class = "redbox" id = "events_redbox">
        <div class = "category_letter">          
            <img src = "graphics/Carousel/Events.png" alt = "Category: Events">
        </div>        
        <div class = "category_content">           
            <h1> Events in Enschede </h1>                               
        </div>        
    </div>        
        <form method = "post" action = "eventresults.php">    
        <div class = "whitebox">
            <div class = "category_expand" id = "eventCats">
                <p>Which events are you interested in?</p>
                <a class = "category" id = "eventCat">Culture</a>
                <a class = "category" id = "eventCat">Music</a>
                <a class = "category" id = "eventCat">Shopping</a>
                <a class = "category" id = "eventCat">Gastronomy</a>
                <a class = "category" id = "eventCat">Sports</a>               
            </div>
            <div class = "hiddeninputs hidden">
                <input type = "checkbox" name = "Culture">
                <input type = "checkbox" name = "Music">
                <input type = "checkbox" name = "Shopping">
                <input type = "checkbox" name = "Gastronomy">
                <input type = "checkbox" name = "Sports">            
            </div>
                            
            <div class = "category_expand">
                <p><br>When do you want to go to an event?</p>      
                <div class = "equalflex">
                    <div class = "halfflex"">
                        <a class = "dropdown_date" id = "date_1">From</a>
                        <div class = "dropped hidden" id = "dropdown1"></div>
                    </div>
                    <div class = "halfflex"">
                        <a class = "dropdown_date" id = "date_2">Until</a>
                        <div class = "dropped hidden" id = "dropdown2"></div>
                    </div>
                </div>                
            </div>
            <div class = "hiddeninputs hidden">
                <input type = "text" name = "startDate">
                <input type = "text" name = "endDate">
            </div>
        </div>
        <div class = "redbox" id = "events_redbox2">
            <input type = "submit" class = "search" value = "Search events" id = "searchEvents">
        </div>
       </form>
       
</div>
<div id = "event_body"></div>
</body>
</html>

'; 

?>