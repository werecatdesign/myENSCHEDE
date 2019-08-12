<?php

include_once 'includes/dbh.inc.php';
include('includes/header.php');

$sql1 = 'INSERT INTO uniqueviews (date, time, datetime, page_url, page_name) VALUES (NOW(), NOW(), NOW(), "https://myenschede.werecat-design.com/evening", "Evening");';
$sql2 = 'UPDATE viewcount SET count = count + 1 WHERE page_name = "Evening";';

$update1 = mysqli_query($conn, $sql1);
$update2 = mysqli_query($conn, $sql2);

mysqli_close($conn);

echo '

<div class = "bodytext">
    <div class = "redbox" id = "evening_redbox">
        <div class = "category_letter">          
            <img src = "graphics/Carousel/Evening.png" alt = "Category: Evening">
        </div>        
        <div class = "category_content">           
            <h1> Evening in Enschede </h1>                               
        </div>        
    </div>            
    <div class = "whitebox">
        <div class = "intro">
            <p>Get ready for a great night out!<br><br>From dancing to drinking, from partying from relaxing with friends, Enschede´s nightlife has it all.<br><br>What do you fancy tonight?</p> 
        </div>
        <div class = "equalflex">
            <div class = "halfflex">
                <button class = "choose selected" id = "choose1">Bars & Pubs</button>
            </div>
            <div class = "halfflex">
                <button class = "choose" id = "choose2">Dancing</button>
            </div>
        </div>
    </div>
    <div class = "results">
        <div class = "chosen" id = "chosen1">
            <div class = "searchresult">
                <h1>Shooters</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "shooters">
                    <img class = "resultimage" src = "graphics/Evening/Shooters.jpg" alt = "Shooters">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Shooters</h1>
                    <p class = "infoBoxText">Shooters is THE shot bar of Enschede - named Shooters because it offers a wide range of all kinds of shots.</p>
                    <img src = "graphics/Evening/Shooters.jpg" alt = "Shooters">
                    <p class = "infoBoxText">Shooters is a popular spot in the nightlife of Enschede where students like to meet and drink. Several student clubs and one darts club are situated at Shooters.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://nl-nl.facebook.com/ShootersEnschede/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221410,6.894871&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Molly Malone</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "mollymalone">
                    <img class = "resultimage" src = "graphics/Evening/MollyMalone.jpg" alt = "Molly Malone">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Molly Malone</h1>
                    <p class = "infoBoxText">Molly Malone is a real Irish pub at the Oude Market in Enschede. From the bar tables by the window you have a magnificent view of the Oude market. You can book the first floor for closed parties.</p>
                    <img src = "graphics/Evening/MollyMalone.jpg" alt = "Molly Malone">
                    <p class = "infoBoxText">If you fancy a party with a convivial and relaxed atmosphere, then Molly Malone is the place for you. On Mondays the popular pub quiz always takes place and then it is really crowded.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.molly-malone.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221218,6.895425&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Proeflokaal België</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "belgie">
                    <img class = "resultimage" src = "graphics/Evening/ProeflokaalBelgie.jpg" alt = "Proeflokaal België">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Proeflokaal België</h1>
                    <p class = "infoBoxText">The name says it all: here you can taste special beers from the tap or from the bottle. The large terrace is a great place to stay. They have many types of Belgian beer and a wide choice of snacks.</p>
                    <img src = "graphics/Evening/ProeflokaalBelgie.jpg" alt = "Proeflokaal België">
                    <p class = "infoBoxText">Proeflokaal België also often has various cultural activities that can be found at our events overview.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "http://proeflokaalbelgie.nl/enschede/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220988,6.896327&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Paddy´s</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "paddys">
                    <img class = "resultimage" src = "graphics/Evening/Paddys.jpg" alt = "Paddy´s Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Paddy´s</h1>
                    <p class = "infoBoxText">Paddy´s is a concept in Enschede. The address to enjoy a tasty lunch, have a nice dinner or eat tapas and go out on Friday and Saturday nights.</p>
                    <img src = "graphics/Evening/Paddys.jpg" alt = "Paddy´s Enschede">
                    <p class = "infoBoxText">They have it all under one roof and have been proud of it for more than 25 years! You will find them at the beautiful Oude Markt 12 in Enschede, where also many great events take place.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.paddys.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221190,6.895536&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Magic Bar</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "magicbar">
                    <img class = "resultimage" src = "graphics/Evening/MagicBar.jpg" alt = "Magic Bar">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Magic Bar</h1>
                    <p class = "infoBoxText">Fancy a party night in Enschede? The Magic Bar is open every weekend and is ready to celebrate.</p>
                    <img src = "graphics/Evening/MagicBar.jpg" alt = "Magic Bar">
                    <p class = "infoBoxText">The Magic Bar is open until late in the evening. Every weekend the team is ready to make you a nice evening.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://nl-nl.facebook.com/magicenschede"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221358,6.894480&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>´t Gat in de Markt</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "tgatindemarkt">
                    <img class = "resultimage" src = "graphics/Evening/tGatInDeMarkt.jpg" alt = "´t Gat in de Markt">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>´t Gat in de Markt</h1>
                    <p class = "infoBoxText">´t Gat in de Markt is a student café in Enschede. The staff are all students themselves and always know how to make a party. No matter which day, this pub is open 365 days a week.</p>
                    <img src = "graphics/Evening/tGatInDeMarkt.jpg" alt = "´t Gat in de Markt">
                    <p class = "infoBoxText">As a student you do not always have a lot to spend, but that is no problem! With the lowest catering prices in Enschede you can also get a drink cheaply!</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.tgatindemarkt.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220981,6.895401&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Café Stonewall</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "cafestonewall">
                    <img class = "resultimage" src = "graphics/Evening/CafeStonewall.jpg" alt = "Café Stonewall">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Café Stonewall</h1>
                    <p class = "infoBoxText">Café Stonewall is a cosy and convivial (gay) café in Enschede, fully organised by volunteers. Extravagant parties regularly take place here.</p>
                    <img src = "graphics/Evening/CafeStonewall.jpg" alt = "Café Stonewall">
                    <p class = "infoBoxText">The café was celebrating its thirtyth anniversary this year in June. Café Stonewall is still the only place in Enschede where the LGBT community is central.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://stonewall.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219324,6.894851&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Fellini Enschede</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "fellini">
                    <img class = "resultimage" src = "graphics/Evening/Fellini.jpg" alt = "Fellini Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Fellini Enschede</h1>
                    <p class = "infoBoxText">Taste and experience La Dolce Vita daily from morning to evening. Fellini offers a unique concept in Enschede. At night, it turns into a cosy bar.</p>
                    <img src = "graphics/Evening/Fellini.jpg" alt = "Fellini Enschede">
                    <p class = "infoBoxText">This restaurant was named after Frederico Fellini, one of the most prominent directors of the 20th century. This name is very fitting, because the Fellini used to be a cinema.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.fellini.nu/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221466,6.895298&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Xotix</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "xotix">
                    <img class = "resultimage" src = "graphics/Evening/Xotix.jpg" alt = "Xotix Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Xotix</h1>
                    <p class = "infoBoxText">Xotix is a bar and urban club in Enschede that plays the following genres: Nederhop, HipHop, Reggaeton, Moombahton & Dancehall.</p>
                    <img src = "graphics/Evening/Xotix.jpg" alt = "Xotix Enschede">
                    <p class = "infoBoxText">You can enjoy your night out by chilling in its mediterranean atmosphere or get moving on the dance floor.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.facebook.com/pg/Xotix-2076748915921943/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221418,6.894745&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Café Rocks</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "xotix">
                    <img class = "resultimage" src = "graphics/Evening/RocksCafe.jpg" alt = "Café Rocks">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Café Rocks</h1>
                    <p class = "infoBoxText">Café Rocks, the Rockcafé in Enschede, is located in the vibrant centre of Enschede! The Café has a reputation as THE Rock Café in Enschede. Here, as the name suggests, a lot of (hard) rock music is played on the smallest stage of Twente.</p>
                    <img src = "graphics/Evening/RocksCafe.jpg" alt = "Café Rocks">
                    <p class = "infoBoxText">If you feel like a "rocky" evening with a delicious beer, you can come to Café Rocks seven days a week, 365 days a year!</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.caferocks.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219855,6.896335&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Café de Pimpelaar</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "depimpelaar">
                    <img class = "resultimage" src = "graphics/Evening/DePimpelaar.jpg" alt = "Café de Pimpelaar">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Café de Pimpelaar</h1>
                    <p class = "infoBoxText">De Pimpelaar is a café where you can enjoy a beer in an old-fashioned cosy environment! The cosy terrace on the corner of the Oude Markt has a beautiful view of the square</p>
                    <img src = "graphics/Evening/DePimpelaar.jpg" alt = "Café de Pimpelaar">
                    <p class = "infoBoxText">In addition to alcoholic snacks, various types of tea and coffee are also available. Above the café there is a room that can be rented for small parties or other gatherings. The room has a bar.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://de-de.facebook.com/depimpelaar/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220868,6.896657&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>De Kater</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "dekater">
                    <img class = "resultimage" src = "graphics/Evening/DeKater.jpg" alt = "De Kater">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>De Kater</h1>
                    <p class = "infoBoxText">A cosy drink, dinner or a quick lunch? Come to De Kater for that. For 40 years they have been the "place to be" at the Oude market for a snack and a drink.</p>
                    <img src = "graphics/Evening/DeKater.jpg" alt = "De Kater">
                    <p class = "infoBoxText">Everything is possible in this café: relaxing on the benches, reading the newspaper at the favourite table, enjoying a cool beer or a delicious cappuccino. Come by and find out for yourself why they have been the leading café in Enschede for 40 years!</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.dekater.com/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220608,6.894911&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>De Vestingbar</h1>
                <span class = "location">UT Campus</span>
                <a class = "moreinfo" id = "vestingbar">
                    <img class = "resultimage" src = "graphics/Evening/DeVestingbar.jpg" alt = "De Vestingbar">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>De Vestingbar</h1>
                    <p class = "infoBoxText">The Vestingbar a student bar in Enschede on the campus of the University of Twente. The bar is open 6 days a week (Monday to Saturday) for both students and other visitors.</p>
                    <img src = "graphics/Evening/DeVestingbar.jpg" alt = "De Vestingbar">
                    <p class = "infoBoxText">Throughout the year they organize many (theme) parties and they are closely involved in major events such as the Kick-In and the Batavierenrace. But most of all they are open for a nice beer with friends!</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.vestingbar.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.242938,6.852274&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Het Bolwerk</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "hetbolwerk">
                    <img class = "resultimage" src = "graphics/Evening/HetBolwerk.jpg" alt = "Het Bolwerk">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Het Bolwerk</h1>
                    <p class = "infoBoxText">Café Het Bolwerk with its swinging dance floors and exhibitions is one of the oldest cafés in the Netherlands.</p>
                    <img src = "graphics/Evening/HetBolwerk.jpg" alt = "Het Bolwerk">
                    <p class = "infoBoxText">It serves a variety of coffees and offers delicious draught beers. At night, it is a nice spot to have a drink.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "http://www.cafehetbolwerk.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221408,6.895053&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Café Vrieler</h1>
                <span class = "location">South-Eastern Enschede</span>
                <a class = "moreinfo" id = "vrieler">
                    <img class = "resultimage" src = "graphics/Evening/CafeVrieler.jpg" alt = "Café Vrieler">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Café Vrieler</h1>
                    <p class = "infoBoxText">Café Vrieler is the most cosiest "brown" café in the city. In the café there are two billiard tables and four dart courts. Do you want to take a gamble? Then you can go behind one of the slot machines.</p>
                    <img src = "graphics/Evening/CafeVrieler.jpg" alt = "Café Vrieler">
                    <p class = "infoBoxText">Don´t you want to be active? Of course you can also have a chat at the bar! In a relaxed atmosphere you can enjoy the snacks and drinks.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://vrieler.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.210359,6.908036&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Club Casanova</h1>
                <span class = "location">North-Western Enschede</span>
                <a class = "moreinfo" id = "casanova">
                    <img class = "resultimage" src = "graphics/Evening/ClubCasanova.jpg" alt = "Club Casanova">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Club Casanova</h1>
                    <p class = "infoBoxText">Would you like to briefly escape the daily stress and relax in the company of one or more sexy ladies?</p>
                    <img src = "graphics/Evening/ClubCasanova.jpg" alt = "Club Casanova">
                    <p class = "infoBoxText">This cosy and stylish nightclub and strip club consists of a bar, several intimate seats in various configurations and a large podium for live performances. You can enjoy drinks with your business friends in company of one or more ladies.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.clubcasanova.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221380,6.893460&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Friends Backstage</h1>
                <span class = "location">North-Western Enschede</span>
                <a class = "moreinfo" id = "friendsbackstage">
                    <img class = "resultimage" src = "graphics/Evening/FriendsBackstage.jpg" alt = "Friends Backstage">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Friends Backstage</h1>
                    <p class = "infoBoxText">Friends Backstage is a cosy café near the Oude Kerk (Old Church) where you can have a drink in a cosy atmosphere.</p>
                    <img src = "graphics/Evening/FriendsBackstage.jpg" alt = "Friends Backstage">
                    <p class = "infoBoxText">The café has a small heated outdoor terrace, a dart area and a chill-out area.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://nl-nl.facebook.com/Cafe.Friends.Backstage"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220366,6.895719&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>De Beiaard</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "debeiaard">
                    <img class = "resultimage" src = "graphics/Evening/DeBeiaard.jpg" alt = "De Beiaard">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>De Beiaard</h1>
                    <p class = "infoBoxText">For about 22 years the people of Enschede have been lucky enough to own a beer café with a large selection of beers!</p>
                    <img src = "graphics/Evening/DeBeiaard.jpg" alt = "De Beiaard">
                    <p class = "infoBoxText">At Beiaard you can not only drink a delicious cold beer, but you can also eat it. Many dishes are prepared with beer. For snacks, have a look at the Wappaz and Tapas menu. Eating lunch on Saturday is also no problem, have a look at the lunch menu with various soups, salads and breads.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "http://beiaardenschede.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220606,6.896545&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Pool Café "The Bridge"</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "poolcafethebridge">
                    <img class = "resultimage" src = "graphics/Evening/PoolcafeTheBridge.jpg" alt = "Pool Café The Bridge">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Pool Café "The Bridge"</h1>
                    <p class = "infoBoxText">Pool Café "The Bridge" has been a well-known name in the heart of Enschede for almost 10 years. Every year thousands of students get to know the most enjoyable pool café in Enschede.</p>
                    <img src = "graphics/Evening/PoolcafeTheBridge.jpg" alt = "Pool Café The Bridge">
                    <p class = "infoBoxText">You can not only play pool in all the fun, but you can also play darts! At the pool café you can also organise an outing or a birthday party.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.poolcafethebridge.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221235,6.895083&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Snooker & Pool Centre</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "snookerandpoolcentre">
                    <img class = "resultimage" src = "graphics/Evening/SnookerPoolcentrum.jpg" alt = "Snooker & Pool Centre Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Snooker & Pool Centre</h1>
                    <p class = "infoBoxText">At Snooker & Poolcentrum Enschede you can play darts, billiards and pool. There are also a number of slot machines.</p>
                    <img src = "graphics/Evening/SnookerPoolcentrum.jpg" alt = "Snooker & Pool Centre">
                    <p class = "infoBoxText">ASnooker & Poolcentrum Enschede has 22 billiard tables and 4 snooker tables. There is also a dart corner with 3 dart boards. At the bar you can enjoy a snack or a drink.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.senpenschede.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221045,6.893917&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Jansen & Janssen</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "jansenenjanssen">
                    <img class = "resultimage" src = "graphics/Evening/JansenEnJanssen.jpg" alt = "Jansen & Janssen">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Jansen & Janssen</h1>
                    <p class = "infoBoxText">At Café Jansen & Janssen you can enjoy a cup of coffee, a beer or a drink. Between 12 and 4 pm you can also enjoy a roll, soup or Strammer Max.</p>
                    <img src = "graphics/Evening/JansenEnJanssen.jpg" alt = "Jansen & Janssen">
                    <p class = "infoBoxText">You can also book the so-called "White Room" at Jansen en Janssen for a drink or a special celebration.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.jansenenjanssen.com/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221246,6.895304&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Foodbar Bluff</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "bluff">
                    <img class = "resultimage" src = "graphics/Evening/FoodbarBluff.jpg" alt = "Foodbar Bluff">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Foodbar Bluff</h1>
                    <p class = "infoBoxText">Foodbar Bluff is located on the beautiful Oude Markt, the gastronomy square in Enschede. Here you can have lunch, dinner or order some snacks in the evening with your friends!</p>
                    <img src = "graphics/Evening/FoodbarBluff.jpg" alt = "Foodbar Bluff">
                    <p class = "infoBoxText">Foodbar Bluff also serves High Wine or High Gin. That means you get different snacks with your drinks. A perfect formula for a great evening!</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.bluff.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220751,6.894765&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Bardot Enschede</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "bardot">
                    <img class = "resultimage" src = "graphics/Evening/Bardot.jpg" alt = "Bardot Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Bardot Enschede</h1>
                    <p class = "infoBoxText">Bardot Bar & Restaurant is an atmospheric restaurant on Langestraße, in the centre of Enschede. It serves simple classics as well as seafood with the best French wine.</p>
                    <img src = "graphics/Evening/Bardot.jpg" alt = "Bardot Enschede">
                    <p class = "infoBoxText">The restaurant impresses with its atmospheric furnishings and a great terrace in the courtyard. A holiday feeling is aroused here...</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.bardot.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219945,6.895704&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>San Remo</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "sanremo">
                    <img class = "resultimage" src = "graphics/Evening/SanRemo.jpg" alt = "San Remo">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>San Remo</h1>
                    <p class = "infoBoxText">San Remo is a café, but not just any café. It is a café that has been in the beautiful city centre of Enschede since 1967.</p>
                    <img src = "graphics/Evening/SanRemo.jpg" alt = "San Remo">
                    <p class = "infoBoxText">A café with a history, but also contemporary! At San Remo, the house wine is served in terracotta jars and the beer is also available in terracotta jugs. Specialty beers are also part of the assortment. With different beers on tap we also have a nice selection of special beers in the bottle.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "http://www.cafesanremo.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221320,6.896324&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class = "chosen hidden" id = "chosen2">
            <div class = "searchresult">
                <h1>Aspen Valley</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "aspenvalley">
                    <img class = "resultimage" src = "graphics/Evening/AspenValley.jpg" alt = "Aspen Valley">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Aspen Valley</h1>
                    <p class = "infoBoxText">Welcome to Aspen Valley, the Tirol of the eastern Netherlands. The interior is clad in wood, which absolutely enhances the atmosphere.</p>
                    <img src = "graphics/Evening/AspenValley.jpg" alt = "Aspen Valley">
                    <p class = "infoBoxText">Every weekend, energetic party music and even more energetic bartenders are on the move, until late in the night. A proven top concept that is popular among students, but also young adults.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://aspenvalley.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221039,6.896083&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>´t Bölke</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "tboelke">
                    <img class = "resultimage" src = "graphics/Evening/Bolke.jpg" alt = "´t Bölke">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>´t Bölke</h1>
                    <p class = "infoBoxText">With top DJs, the best new local talents and the latest in sound technology, the disco offers not only cool sounds, but also an incomparable light and laser show.</p>
                    <img src = "graphics/Evening/Bolke.jpg" alt = "´t Bölke">
                    <p class = "infoBoxText">It is not without reason that ´t Bölke is voted one of the most popular discos in the Benelux every year. Due to the stylish interior and a team of friendly, professional staff, ´t Bölke is "the place to be".</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://bolke.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.223019,6.893404&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Club Recklezz</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "clubrecklezz">
                    <img class = "resultimage" src = "graphics/Evening/ClubRecklezz.jpg" alt = "Club Recklezz">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Club Recklezz</h1>
                    <p class = "infoBoxText">Club Recklezz is a night club in Enschede that plays various music genres for different target groups.</p>
                    <img src = "graphics/Evening/ClubRecklezz.jpg" alt = "Club Recklezz">
                    <p class = "infoBoxText">What is also special about it, is the laughing chamber. Partygoers can inhale laughing gas by means of a balloon, resulting in a kind of "party kick". The owner believes that the use of laughing gas reduces alcohol and drug use, resulting in a decrease in nightlife violence and aggression.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://aspenvalley.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221039,6.896083&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Xotix</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "xotix">
                    <img class = "resultimage" src = "graphics/Evening/Xotix.jpg" alt = "Xotix Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Xotix</h1>
                    <p class = "infoBoxText">Xotix is a bar and urban club in Enschede that plays the following genres: Nederhop, HipHop, Reggaeton, Moombahton & Dancehall.</p>
                    <img src = "graphics/Evening/Xotix.jpg" alt = "Xotix Enschede">
                    <p class = "infoBoxText">You can enjoy your night out by chilling in its mediterranean atmosphere or get moving on the dance floor.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.facebook.com/pg/Xotix-2076748915921943/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221418,6.894745&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Paddy´s</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "paddys">
                    <img class = "resultimage" src = "graphics/Evening/Paddys.jpg" alt = "Paddy´s Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Paddy´s</h1>
                    <p class = "infoBoxText">Paddy´s is a concept in Enschede. The address to enjoy a tasty lunch, have a nice dinner or eat tapas and go out on Friday and Saturday nights.</p>
                    <img src = "graphics/Evening/Paddys.jpg" alt = "Paddy´s Enschede">
                    <p class = "infoBoxText">They have it all under one roof and have been proud of it for more than 25 years! You will find them at the beautiful Oude Markt 12 in Enschede, where also many great events take place.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.paddys.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221190,6.895536&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class = "searchresult">
                <h1>Rico Latino</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "ricolatino">
                    <img class = "resultimage" src = "graphics/Evening/RicoLatino.jpg" alt = "Rico Latino">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Rico Latino</h1>
                    <p class = "infoBoxText">Rico Latino is a dancing studio that specialises in Latin American dance. Besides offering dancing classes and workshops, they also organise events and parties at night.</p>
                    <img src = "graphics/Evening/RicoLatino.jpg" alt = "Rico Latino">
                    <p class = "infoBoxText">There is also an event hosted by Rico Latino together with Grolsch: The Grolsch Summer Sounds Rico Latino XL.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.ricolatino.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220384,6.898526&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class = "whitefiller"></div>


</div>

</body>
    
</html>

'; 

?>