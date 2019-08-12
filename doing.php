<?php

include_once 'includes/dbh.inc.php';
include('includes/header.php');

$sql1 = 'INSERT INTO uniqueviews (date, time, datetime, page_url, page_name) VALUES (NOW(), NOW(), NOW(), "https://myenschede.werecat-design.com/doing", "Doing");';
$sql2 = 'UPDATE viewcount SET count = count + 1 WHERE page_name = "Doing";';

$update1 = mysqli_query($conn, $sql1);
$update2 = mysqli_query($conn, $sql2);

mysqli_close($conn);

echo '

<div class = "bodytext">

<div class = "redbox" id = "doing_redbox">
        <div class = "category_letter">          
            <img src = "graphics/Carousel/Doing.png" alt = "Category: Doing">
        </div>        
        <div class = "category_content">           
            <h1> "Doing" in Enschede </h1>                               
        </div>        
    </div>            
    <div class = "whitebox">
        <div class = "intro">
            <p>Are you in for an adventure?<br><br>Discover which activities Enschede has to offer!</p> 
        </div>
        <div class = "buttondiv">
            <button class = "choose selected" id = "choose1">Fun & Entertainment</button>
        </div>
        <div class = "buttondiv">
            <button class = "choose" id = "choose2">Discover & Explore</button>
        </div>
        <div class = "buttondiv">
            <button class = "choose" id = "choose3">Indoor Sports</button>
        </div>
        <div class = "buttondiv">    
            <button class = "choose" id = "choose4">Outdoor Sports</button>            
        </div>
    </div>
    <div class = "results">
        <div class = "chosen" id = "chosen1">
            <div class = "searchresult">
                <h1>ZERO55</h1>
                <span class = "location">North-West of Enschede</span>
                <a class = "moreinfo" id = "zero55">
                    <img class = "resultimage" src = "graphics/Doing/ZERO55.jpg" alt = "ZERO55 Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>ZERO55</h1>
                    <p class = "infoBoxText">ZERO55 distinguishes itself by a varied offer of futuristic and unique activities for young and old. Adrenaline is guaranteed!</p>
                    <img src = "graphics/Doing/ZERO55.jpg" alt = "ZERO55 Enschede">
                    <p class = "infoBoxText">At the Go Planet Parc in Enschede it is possible to participate at ZERO55 in electric kart, Lasertag, VR Racing and Space Exit.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://zero55.nl/enschede/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.238612,6.833586&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Holland Casino</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "hollandcasino">
                    <img class = "resultimage" src = "graphics/Doing/HollandCasino.jpg" alt = "Holland Casino">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Holland Casino</h1>
                    <p class = "infoBoxText">In the centre of Enschede you will find Holland Casino. In addition to their range of table games and slot machines, Holland Casino also has an excellent restaurant where you are welcome every day from 5 pm.</p>
                    <img src = "graphics/Doing/HollandCasino.jpg" alt = "Holland Casino">
                    <p class = "infoBoxText">The casino also has 3 multifunctional rooms, including the atmospheric The Club, which is perfect for a private party or business meeting.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.hollandcasino.nl/vestigingen/enschede"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.217935,6.894387&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Glowgolf Enschede</h1>
                <span class = "location">Southern Enschede</span>
                <a class = "moreinfo" id = "glowgolf">
                    <img class = "resultimage" src = "graphics/Doing/GlowGolf.jpg" alt = "Glowgolf Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Glowgolf Enschede</h1>
                    <p class = "infoBoxText">Discover glow-in-the-dark miniature golf in Enschede. Play 18 holes on a spectacular golf course with wonderful decorative elements. All walls and floors are illuminated with black light.</p>
                    <img src = "graphics/Doing/GlowGolf.jpg" alt = "Glowgolf Enschede">
                    <p class = "infoBoxText">The many small obstacles make it difficult for you to create a hole-in-one. You will also wear 3D glasses. Thus the paintings on the wall seem to really move... The theme of the golf course is "An adventurous journey".</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://glowgolf.nl/enschede/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.205878,6.901683&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Starworld Enschede</h1>
                <span class = "location">Southern Enschede</span>
                <a class = "moreinfo" id = "starworld">
                    <img class = "resultimage" src = "graphics/Doing/StarWorld.png" alt = "Starworld Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Starworld Enschede</h1>
                    <p class = "infoBoxText">Starworld has the way to fill your afternoon with an exciting paintball battle or the famous and raging exciting laser game, also called LaserQuest.</p>
                    <img src = "graphics/Doing/StarWorld.png" alt = "Starworld Enschede">
                    <p class = "infoBoxText">In addition, they are always busy with other spectacular indoor activities. Top secret of course. Keep an eye on their site for new information.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.star-world.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.204866,6.901274&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Midgetgolf Enschede</h1>
                <span class = "location">North-West of Enschede</span>
                <a class = "moreinfo" id = "midgetgolf">
                    <img class = "resultimage" src = "graphics/Doing/MidgetgolfEnschede.jpg" alt = "Midgetgolf Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Midgetgolf Enschede</h1>
                    <p class = "infoBoxText">Miniature golf is a sport that looks a lot like its big brother, golf. From the name you can already see that it is about smaller courses. At most mini-golf courses you have 18 holes that you have to cover in as few strokes as possible.</p>
                    <img src = "graphics/Doing/MidgetgolfEnschede.jpg" alt = "Midgetgolf Enschede">
                    <p class = "infoBoxText">A difference with golf is that in miniature golf you only work with a putter, the club that you use in golf to draw the ball on the green.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "http://www.midgetgolf-enschede.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.238070,6.834214&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Avontura Twentehallen</h1>
                <span class = "location">Southern Enschede</span>
                <a class = "moreinfo" id = "avontura">
                    <img class = "resultimage" src = "graphics/Doing/Avontura.jpg" alt = "Avontura Twentehallen">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Avontura Twentehallen</h1>
                    <p class = "infoBoxText">Avontura Twentehallen is a hall with a lot of indoor playgrounds. The little ones can play on the playgrounds that are especially for small children.</p>
                    <img src = "graphics/Doing/Avontura.jpg" alt = "Avontura Twentehallen">
                    <p class = "infoBoxText">Just drop by and jump on the trampolines, play sports on the multi-sport field, slide on the family slide or climb on the climbing volcano.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://optisport.nl/avonturatwentehallen"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.191054,6.886929&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Ballorig</h1>
                <span class = "location">Southern Enschede</span>
                <a class = "moreinfo" id = "ballorig">
                    <img class = "resultimage" src = "graphics/Doing/Ballorig.jpg" alt = "Ballorig">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Ballorig</h1>
                    <p class = "infoBoxText">Have a wonderful romp in the ball pool or try out super somersaults on the bouncy cushions. Crawl through tunnels, corridors and mazes. Boundless climbing or screeching from the slides.</p>
                    <img src = "graphics/Doing/Ballorig.jpg" alt = "Ballorig">
                    <p class = "infoBoxText">That is only a small selection of many attractions which lets children from 0 - 12 years experience an unforgettable day in the kids play paradise Ballorig.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.ballorig.nl/enschede"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.206124,6.901395&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "chosen hidden" id = "chosen2">
            <div class = "searchresult">
                <h1>Grolsch Brewery Tour</h1>
                <span class = "location">Boekelo</span>
                <a class = "moreinfo" id = "grolschbrewery">
                    <img class = "resultimage" src = "graphics/Doing/GrolschBreweryTour.jpg" alt = "Grolsch Brewery Tour">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Grolsch Brewery Tour</h1>
                    <p class = "infoBoxText">Would you like to learn more about Grolsch? Then visit the Grolsch Brewery! Here you can watch, smell and taste the beer yourself during a brewery tour.</p>
                    <img src = "graphics/Doing/GrolschBreweryTour.jpg" alt = "Grolsch Brewery Tour">
                    <p class = "infoBoxText">You will learn everything about Grolsch: the rich history, the expertise, the brewing and bottling of beer and the typical advertising campaigns. There is also plenty of space and time to sample the delicious Grolsch beers.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.grolsch.nl/brouwerij-tour.html"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.207020,6.817178&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Grolsch Veste Stadium Tour</h1>
                <span class = "location">North-Western Enschede</span>
                <a class = "moreinfo" id = "grolschveste">
                    <img class = "resultimage" src = "graphics/Doing/GrolschVeste.jpg" alt = "Grolsch Veste">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Grolsch Veste Stadium Tour</h1>
                    <p class = "infoBoxText">The Grolsch Veste is the football stadium of FC Twente. Experience what it feels like to run through the players tunnel onto the FC Twente football pitch and take a look at the players changing room</p>
                    <img src = "graphics/Doing/GrolschVeste.jpg" alt = "Grolsch Veste">
                    <p class = "infoBoxText">The tour includes the following elements: reception, handing out the FC Twente Tour Pass, introductory film, coffee and tea, guided tour of the stadium and a small gift from FC Twente.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.fctwente.nl/club/stadion/rondleidingen"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.236169,6.837301&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Room Escape Enschede</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "letsescape">
                    <img class = "resultimage" src = "graphics/Doing/RoomEscape.jpg" alt = "Room Escape Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Room Escape Enschede</h1>
                    <p class = "infoBoxText">You and your team enter the room. BAM! Behind you the door closes. The task is simple: Escape the room in an hour.</p>
                    <img src = "graphics/Doing/RoomEscape.jpg" alt = "Room Escape Enschede">
                    <p class = "infoBoxText">Use your knowledge, your mind, solution strategies and teamwork to solve puzzles and riddles and find hidden clues. Only when you work together can you manage to collect all the clues and free yourself in time. Room Escape Enschede has two rooms.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.roomescapeenschede.nl"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.223062,6.903617&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Lets Escape Enschede</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "letsescape">
                    <img class = "resultimage" src = "graphics/Doing/LetsEscape.jpg" alt = "Lets Escape Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Let´s Escape Enschede</h1>
                    <p class = "infoBoxText">The Escape Rooms have extraordinary puzzles that demand a lot from your empathy and teamwork.</p>
                    <img src = "graphics/Doing/LetsEscape.jpg" alt = "Lets Escape Enschede">
                    <p class = "infoBoxText">The rooms in Enschede are located on the "Old Market Square". This makes it possible to combine a visit at one of the four rooms at Let´s Escape with a cosy evening. Combinations of Escape Room and dinner are also possible.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://letsescape.nl/enschede/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220242,6.895821&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>The Hour Escapes</h1>
                <span class = "location">Western Enschede</span>
                <a class = "moreinfo" id = "hourescapes">
                    <img class = "resultimage" src = "graphics/Doing/HourEscapes.jpg" alt = "The Hour Escapes">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>The Hour Escapes</h1>
                    <p class = "infoBoxText">The Hour Escapes is the newest escape room in Enschede. The theme of this escape room is Nikola Tesla.</p>
                    <img src = "graphics/Doing/HourEscapes.jpg" alt = "The Hour Escapes">
                    <p class = "infoBoxText">The adventure begins on the evening of 26 November 1938. Nikola Tesla has been working for months to complete his prototype that enables the wireless transmission of energy. Take on the role of Nikola Tesla, get to know his inventions and try to understand his brilliant brain.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://thehourescapes.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219661,6.855432&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Marberts Ballonvaarten</h1>
                <span class = "location">North-Western Enschede</span>
                <a class = "moreinfo" id = "marberts">
                    <img class = "resultimage" src = "graphics/Doing/MarbertsBallonvaarten.jpg" alt = "Marberts Ballonvaarten">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Marberts Ballonvaarten</h1>
                    <p class = "infoBoxText">Wave to the people who stay behind as you slowly float away. Enjoy the beautiful landscape that you glide silently over. And when you have solid ground under your feet again, you will of course toast with a cool glass of champagne.</p>
                    <img src = "graphics/Doing/MarbertsBallonvaarten.jpg" alt = "Marberts Ballonvaarten">
                    <p class = "infoBoxText">Marberts Ballonvaarten has been the trusted address for an unforgettable and above all safe balloon ride for more than 20 years.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "http://www.marberts.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.228958,6.881444&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Adventure Twente</h1>
                <span class = "location">Rutbeek Recreational Park</span>
                <a class = "moreinfo" id = "marberts">
                    <img class = "resultimage" src = "graphics/Doing/AdventureTwente.jpeg" alt = "Adventure Twente">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Adventure Twente</h1>
                    <p class = "infoBoxText">Adventure Twente organises adventurous group outings in which the outdoors and the experience of nature are central. They have created a beautiful location at the recreational park Het Rutbeek.</p>
                    <img src = "graphics/Doing/AdventureTwente.jpeg" alt = "Adventure Twente">
                    <p class = "infoBoxText">Adventure Twente offers recreational and educational outdoor activities within the theme of bushcraft & survival, and gold & gemstones search.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.adventuretwente.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.180536,6.827774&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "chosen hidden" id = "chosen3">
            <div class = "searchresult">
                <h1>Krazy Kangaroo</h1>
                <span class = "location">Southern Enschede</span>
                <a class = "moreinfo" id = "krazykangaroo">
                    <img class = "resultimage" src = "graphics/Doing/KrazyKangaroo.jpg" alt = "Krazy Kangaroo">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Krazy Kangaroo</h1>
                    <p class = "infoBoxText">Krazy Kangaroo is the largest trampoline park of Enschede. It offers jumpers the space around the standard trampoline fields and a wide range of jump areas.</p>
                    <img src = "graphics/Doing/KrazyKangaroo.jpg" alt = "Krazy Kangaroo">
                    <p class = "infoBoxText">The jump areas include free jumping, a space with horizontal and vertical jumping fields, a trick area with extra high jumping, a pillow pit, foam pit, slackline, bounceboard area, ninja parkour and a sports area.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://optisport.nl/krazykangarooenschede"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.191055,6.886944&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Diveworld Enschede</h1>
                <span class = "location">North-West of Enschede</span>
                <a class = "moreinfo" id = "diveworld">
                    <img class = "resultimage" src = "graphics/Doing/DiveWorld.jpg" alt = "Diveworld Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Diveworld Enschede</h1>
                    <p class = "infoBoxText">Dive World has an indoor diving pool that is 10 metres deep and filled with more than 1.3 million litres of crystal clear water.</p>
                    <img src = "graphics/Doing/DiveWorld.jpg" alt = "Diveworld Enschede">
                    <p class = "infoBoxText">The perfect place to make an introductory dive, under professional guidance and for a free dive if you already have a diving license. With platforms at 1.4, 5 and 10 meters, everyone can test and train different skills underwater.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.diveworld.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.239263,6.833820&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Arque Klimcentrum</h1>
                <span class = "location">Southern Enschede</span>
                <a class = "moreinfo" id = "arque">
                    <img class = "resultimage" src = "graphics/Doing/ArqueKlimcentrum.jpg" alt = "Arque Klimcentrum">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Arque Klimcentrum</h1>
                    <p class = "infoBoxText">Arque Climbing Centre is a sports climbing hall and home to the Enschede Sports Climbing Association "Onsight". In addition to the standard climbing walls, Arque has two walls of 4 metres wide and 18 metres long that overhang 8 metres on which only pre-climbing takes place.</p>
                    <img src = "graphics/Doing/ArqueKlimcentrum.jpg" alt = "Arque Klimcentrum">
                    <p class = "infoBoxText">To climb at Arque, you do not have to follow a course, the instructions on everything you need to know to climb and secure safely are provided free of charge.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.arque.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.207223,6.900092&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Cube Bouldergym</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "cube">
                    <img class = "resultimage" src = "graphics/Doing/CubeBouldergym.jpg" alt = "Cube Bouldergym">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Cube Bouldergym</h1>
                    <p class = "infoBoxText">Cube Bouldergym in Enschede is the second climbing hall in the Netherlands to specialise completely in bouldering, a special type of climbing.</p>
                    <img src = "graphics/Doing/CubeBouldergym.jpg" alt = "Cube Bouldergym">
                    <p class = "infoBoxText">CubeBoludergym has a 500 m² climbing wall with 12 rounds in different levels of difficulty. In total there are more than 200 short climbing courses (boulders). New courses are designed at regular intervals, at least 15 new boulders every week.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://cubebouldergym.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.223025,6.903675&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Skatepark De Fabriek</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "defabriek">
                    <img class = "resultimage" src = "graphics/Doing/SkateparkDeFabriek.jpg" alt = "Skatepark De Fabriek">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Skatepark De Fabriek</h1>
                    <p class = "infoBoxText">The skatepark  De Fabriek has been located on the old Polaroid site in Enschede since 2012.</p>
                    <img src = "graphics/Doing/SkateparkDeFabriek.jpg" alt = "Skatepark De Fabriek">
                    <p class = "infoBoxText">The park was designed and built by skaters and consists entirely of wood. You can choose from different sections with different levels of difficulty, disciplines and obstacles. Just try it out for yourself!</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.defabriek.org/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.222888,6.904292&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Soccer Inside</h1>
                <span class = "location">North-West of Enschede</span>
                <a class = "moreinfo" id = "soccerinside">
                    <img class = "resultimage" src = "graphics/Doing/SoccerInside.jpg" alt = "Soccer Inside">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Soccer Inside</h1>
                    <p class = "infoBoxText">Soccer Inside is the largest indoor football centre in the East of the Netherlands with 3 speed soccer fields!</p>
                    <img src = "graphics/Doing/SoccerInside.jpg" alt = "Soccer Inside">
                    <p class = "infoBoxText">Soccer Inside has a spacious catering facility with a view of the fields. In addition to football and bubbleball, they offer a wide range of arrangements for kids parties, team parties, staff parties and bachelor parties, among other things.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.go-planet.nl/op-het-park/soccer-inside/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.238282,6.833733&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Bowling Enschede</h1>
                <span class = "location">North-Western Enschede</span>
                <a class = "moreinfo" id = "bowling">
                    <img class = "resultimage" src = "graphics/Doing/BowlingEnschede.jpg" alt = "Bowling Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Bowling Enschede</h1>
                    <p class = "infoBoxText">At Bowling Enschede there are 16 modern bowling alleys at your disposal - ideal for families, company outings or other celebrations. Whether you come with friends, family or colleagues, it is always fun.</p>
                    <img src = "graphics/Doing/BowlingEnschede.jpg" alt = "Bowling Enschede">
                    <p class = "infoBoxText">Bowling Enschede has two separate rooms that can be linked to the bowling centre. These are ideal for various types of buffets, arrangements, meetings, presentations or an à la carte dinner.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.bowling-enschede.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.239367,6.833332&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Glowgolf Enschede</h1>
                <span class = "location">Southern Enschede</span>
                <a class = "moreinfo" id = "glowgolf">
                    <img class = "resultimage" src = "graphics/Doing/GlowGolf.jpg" alt = "Glowgolf Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Glowgolf Enschede</h1>
                    <p class = "infoBoxText">Discover glow-in-the-dark miniature golf in Enschede. Play 18 holes on a spectacular golf course with wonderful decorative elements. All walls and floors are illuminated with black light.</p>
                    <img src = "graphics/Doing/GlowGolf.jpg" alt = "Glowgolf Enschede">
                    <p class = "infoBoxText">The many small obstacles make it difficult for you to create a hole-in-one. You will also wear 3D glasses. Thus the paintings on the wall seem to really move... The theme of the golf course is "An adventurous journey".</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://glowgolf.nl/enschede/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.205878,6.901683&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Midgetgolf Enschede</h1>
                <span class = "location">North-West of Enschede</span>
                <a class = "moreinfo" id = "midgetgolf">
                    <img class = "resultimage" src = "graphics/Doing/MidgetgolfEnschede.jpg" alt = "Midgetgolf Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Midgetgolf Enschede</h1>
                    <p class = "infoBoxText">Miniature golf is a sport that looks a lot like its big brother, golf. From the name you can already see that it is about smaller courses. At most mini-golf courses you have 18 holes that you have to cover in as few strokes as possible.</p>
                    <img src = "graphics/Doing/MidgetgolfEnschede.jpg" alt = "Midgetgolf Enschede">
                    <p class = "infoBoxText">A difference with golf is that in miniature golf you only work with a putter, the club that you use in golf to draw the ball on the green.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "http://www.midgetgolf-enschede.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.238070,6.834214&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div> 
        </div>
        <div class = "chosen hidden" id = "chosen4">
            <div class = "searchresult">
                <h1>Waterski Twente</h1>
                <span class = "location">Het Rutbeek</span>
                <a class = "moreinfo" id = "waterskitwente">
                    <img class = "resultimage" src = "graphics/Doing/WaterskiTwente.jpg" alt = "Waterski Twente">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Waterski Twente</h1>
                    <p class = "infoBoxText">On recreation lake "Het Rutbeek" you will find Cable Waterski Centre Twente. The perfect place for everyone who loves waterskiing or who likes it very much. For people who have no experience with waterskiing, no panic. You can learn within one hour!</p>
                    <img src = "graphics/Doing/WaterskiTwente.jpg" alt = "Waterski Twente">
                    <p class = "infoBoxText">There is also the possibility to rent the course for company parties, groups of friends, sports clubs and suchlike. With this hiring one can also choose from various arrangements.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.waterskitwente.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.181214,6.841204&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Climbing Park Rutbeek</h1>
                <span class = "location">Rutbeek Recreational Park</span>
                <a class = "moreinfo" id = "klimbosrutbeek">
                    <img class = "resultimage" src = "graphics/Doing/KlimbosRutbeek.jpg" alt = "Climbing Park Rutbeek">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Climbing Park Rutbeek</h1>
                    <p class = "infoBoxText">Climbing Park Rutbeek is located in the Rutbeek Recreational Park. An exciting rope course has been built in a forest. You move safely secured in a climbing harness from tree to tree.</p>
                    <img src = "graphics/Doing/KlimbosRutbeek.jpg" alt = "Climbing Park Rutbeek">
                    <p class = "infoBoxText">The course is at a height of about 5 metres and offers challenge, fun and adventure. It is recommended that you wear sporty clothing and sturdy shoes.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.buitenhoff.nl/klimbos-rutbeek/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.180122,6.829652&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Paintball Warriors</h1>
                <span class = "location">Rutbeek Recreational Park</span>
                <a class = "moreinfo" id = "paintballwarriors">
                    <img class = "resultimage" src = "graphics/Doing/PaintballWarriors.jpg" alt = "Paintball Warriors">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Paintball Warriors</h1>
                    <p class = "infoBoxText">If you want to play paintball in Enschede, Paintball Warriors is your place to go! On the recreation area "Het Rutbeek" we have two different fields where you can play with your own group.</p>
                    <img src = "graphics/Doing/PaintballWarriors.jpg" alt = "Paintball Warriors">
                    <p class = "infoBoxText">In addition to an open field with artificially built obstacles, you can also play paintball in a real forest plot.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.paintballwarriors.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.179542,6.830378&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Shortgolf Spielehof</h1>
                <span class = "location">West of Enschede</span>
                <a class = "moreinfo" id = "paintballwarriors">
                    <img class = "resultimage" src = "graphics/Doing/ShortgolfSpielehof.png" alt = "Shortgolf Spielehof">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Shortgolf Spielehof</h1>
                    <p class = "infoBoxText">In a quiet environment you will find this beautiful golf course where you can play shortgolf. Golfing is possible for everyone aged 10 and over.</p>
                    <img src = "graphics/Doing/ShortgolfSpielehof.png" alt = "Shortgolf Spielehof">
                    <p class = "infoBoxText">The game is played on a small 18-hole golf course. Rules and etiquette are the same as on a normal golf course. The distances from the tee to the flag on the greens vary. Most holes have a length between 50 and 90 meters.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.spielehof.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.201692,6.784544&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Skicentrum Moser</h1>
                <span class = "location">Rutbeek Recreational Park</span>
                <a class = "moreinfo" id = "skicentrummoser">
                    <img class = "resultimage" src = "graphics/Doing/SkicentrumMoser.jpg" alt = "Skicentrum Moser">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Skicentrum Moser</h1>
                    <p class = "infoBoxText">In the Jorg Moser Ski Centre, located in the recreation area Het Rutbeek, there are three plastic ski slopes with different levels of difficulty and a cosy restaurant.</p>
                    <img src = "graphics/Doing/SkicentrumMoser.jpg" alt = "Skicentrum Moser">
                    <p class = "infoBoxText">Besides the ski and snowboard slopes, there are also tubing tracks. You can also organise parties for family, children or companies at the Moser Ski Centre.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://skicentrummoser.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.179540,6.830339&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        
    </div>
    <div class = "whitefiller"></div>

</div>
    
</html>

'; 

?>