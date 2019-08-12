<?php

include('includes/header.php');

echo '

    <!----------------------------------------------------------------------------------------- LETTER SLIDER ------------------------------------------------------------------------------------------->
    
    <div class = "bodytext">
    <div class = "whitebox">
        <p><b>myENSCHEDE</b> is an interactive art installation made of eight letters forming the word ENSCHEDE. It will be displayed from 9-11 July 2019 at de Broodbode in Central Enschede.</p>
    </div>
    
    <div class = "letterPicking">
        <div class = "pickOne">
            <h1>Pick a letter and learn more!</h1>
        </div>
        <div class = "slider">
            <button href = "#" class = "arrow" id = "arrow_left">
                <img src = "graphics/Icons/left-arrow.png" alt = "Move Left">
            </button>
            <div class = "letterslider">                
                <div class = "slider_letter">
                    <a href ="events.php" class ="lettersliderimage" id = "events"><img src = "graphics/Carousel/Events.png" alt = "Events"></a>
                </div>
            </div>
            <button class = "arrow" id = "arrow_right">
                <img src = "graphics/Icons/right-arrow.png" alt = "Move Right">
            </button>
        </div>
    </div>
    
    <!----------------------------------------------------------------------------------------- INDICATION ------------------------------------------------------------------------------------------->
    <div class = "all_letters">
        <div class = "smallLetter">
             <a href ="#" class ="smallLetterImage" id = "events"><img src = "graphics/Carousel/Events.png" alt = "Events"></a>    
        </div>
        <div class = "smallLetter">
             <a href ="#" class ="smallLetterImage" id = "nature"><img src = "graphics/Carousel/Nature.png" alt = "Nature"></a>    
        </div>
        <div class = "smallLetter">
             <a href ="#" class ="smallLetterImage" id = "shopping"><img src = "graphics/Carousel/Shopping.png" alt = "Shopping"></a>    
        </div>
        <div class = "smallLetter">
             <a href ="#" class ="smallLetterImage" id = "culture"><img src = "graphics/Carousel/Culture.png" alt = "Culture"></a>    
        </div>
        <div class = "smallLetter">
             <a href ="#" class ="smallLetterImage" id = "history"><img src = "graphics/Carousel/History.png" alt = "History"></a>    
        </div>
        <div class = "smallLetter">
             <a href ="#" class ="smallLetterImage" id = "evening"><img src = "graphics/Carousel/Evening.png" alt = "Evening"></a>    
        </div>
        <div class = "smallLetter">
             <a href ="#" class ="smallLetterImage" id = "doing"><img src = "graphics/Carousel/Doing.png" alt = "Doing"></a>    
        </div>
        <div class = "smallLetter">
             <a href ="#" class ="smallLetterImage" id = "eating"><img src = "graphics/Carousel/Eating.png" alt = "Eating"></a>    
        </div>
    </div>
    
    </div>
    
</body>
    
</html>

'; 

?>