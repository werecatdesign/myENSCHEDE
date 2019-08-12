<?php

include_once 'includes/dbh.inc.php';
include('includes/header.php');

$sql1 = 'INSERT INTO uniqueviews (date, time, datetime, page_url, page_name) VALUES (NOW(), NOW(), NOW(), "https://myenschede.werecat-design.com/culture", "Culture");';
$sql2 = 'UPDATE viewcount SET count = count + 1 WHERE page_name = "Culture";';

$update1 = mysqli_query($conn, $sql1);
$update2 = mysqli_query($conn, $sql2);

mysqli_close($conn);

echo '
<div class = "bodytext">
    <div class = "redbox" id = "culture_redbox">
        <div class = "category_letter">          
            <img src = "graphics/Carousel/Culture.png" alt = "Category: Culture">
        </div>        
        <div class = "category_content">           
            <h1> Culture in Enschede </h1>                               
        </div>        
    </div>            
    <div class = "whitebox">
        <div class = "intro">
            <p>Discover the cultural treasures in the city of Enschede!<br><br>Pick a category of your interest!</p> 
        </div>
        <div class = "buttondiv">
            <button class = "choose selected" id = "choose1">Museum</button>
        </div>
        <div class = "buttondiv">
            <button class = "choose" id = "choose2">Gallery</button>
        </div>
        <div class = "buttondiv">
            <button class = "choose" id = "choose3">Theatre</button>
        </div>
        <div class = "buttondiv">    
            <button class = "choose" id = "choose4">Music</button>            
        </div>
    </div>
    <div class = "results">
        <div class = "chosen" id = "chosen1">
            <div class = "searchresult">
                <h1>Rijksmuseum Twenthe</h1>
                <span class = "location">Northern Enschede</span>
                <a class = "moreinfo" id = "rijksmuseum">
                    <img class = "resultimage" src = "graphics/Culture/RijksmuseumTwenthe.JPG" alt = "Rijksmuseum Twenthe">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Rijksmuseum Twenthe</h1>
                    <p class = "infoBoxText">Rijksmuseum Twenthe is a museum with changing exhibitions and a large collection of old, modern and contemporary art in Enschede.</p>
                    <img src = "graphics/Culture/RijksmuseumTwenthe.JPG" alt = "Rijksmuseum Twenthe">
                    <p class = "infoBoxText">Together with TETEM and De Museumfabriek, Rijksmuseum Twenthe forms the Roombeek Culture Park cluster. Every year, Rijksmuseum Twenthe welcomes many visitors from home and abroad.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.rijksmuseumtwenthe.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.228126,6.897305&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>De Museumfabriek</h1>
                <span class = "location">Northern Enschede</span>
                <a class = "moreinfo" id = "museumfabriek">
                    <img class = "resultimage" src = "graphics/Culture/Museumfabriek.png" alt = "De Museumfabriek">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>De Museumfabriek</h1>
                    <p class = "infoBoxText">The Museum Factory in Enschede is not a traditional museum where you can only look at works of art and other special objects from a distance.</p>
                    <img src = "graphics/Culture/Museumfabriek.png" alt = "Rijksmuseum Twenthe">
                    <p class = "infoBoxText">The Wunderkammer, the large exhibition, shows the richness of the collections and the magic of all special objects. In the Makerspace you can let your creativity run wild. Here you can make the most special things with the 3D printer, laser cutter, foam cutter and much more equipment.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.demuseumfabriek.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.232314,6.895250&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Museum Buurtspoortweg</h1>
                <span class = "location">Boekelo</span>
                <a class = "moreinfo" id = "buurtspoortweg">
                    <img class = "resultimage" src = "graphics/Culture/Buurtspoortweg.jpg" alt = "Museum Buurtspoortweg">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Museum Buurtspoortweg</h1>
                    <p class = "infoBoxText">The Museum Buurtspoortweg runs a museum railway between Haaksbergen and Boekelo. The history of the local railways is told in a living way.</p>
                    <img src = "graphics/Culture/Buurtspoortweg.jpg" alt = "Museum Buurtspoortweg">
                    <p class = "infoBoxText">At Haaksbergen station, in one of the historic wagons, you can get to know the goods transport of the past in an interactive way. And with a return ticket you can go back and forth as often as they want!</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.museumbuurtspoorweg.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.205965,6.802094&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "chosen hidden" id = "chosen2">
            <div class = "searchresult">
                <h1>Tetem Kunstruimte</h1>
                <span class = "location">Northern Enschede</span>
                <a class = "moreinfo" id = "tetem">
                    <img class = "resultimage" src = "graphics/Culture/Tetem.jpg" alt = "Tetem Art Space">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Tetem Kunstruimte</h1>
                    <p class = "infoBoxText">Tetem is an art gallery in the Roombeek Culture Park Cluster. Its exhibitions tell the story of a society in development. Tetem operates in the broad field of digital media, technology, science and design.</p>
                    <img src = "graphics/Culture/Tetem.jpg" alt = "Tetem Art Gallery">
                    <p class = "infoBoxText">Education and co-creation with the public and partners from other domains have an important role to play at Tetem. This gallery sets itself apart and thus reaches a broad and diverse audience.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.tetem.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.233747,6.895600&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Fotogalerie Objektief</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "objektief">
                    <img class = "resultimage" src = "graphics/Culture/FotogalerieObjektief.jpg" alt = "Photo Gallery Objektief">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Fotogalerie Objektief</h1>
                    <p class = "infoBoxText">For more than 30 years, Objektief Photo Gallery in Enschede has been the only photo gallery in the region. Objektief is a platform for established, but also for talented young photographers.</p>
                    <img src = "graphics/Culture/FotogalerieObjektief.jpg" alt = "Photo Gallery Objektief">
                    <p class = "infoBoxText">By enriching their exhibitions with (new) media, video, book presentations, lectures and workshops, Objektief bridges the gap between photography and other cultural disciplines.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.fotogalerie-objektief.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219654,6.894379&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Beeld & Ambeeld</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "beeldenambeeld">
                    <img class = "resultimage" src = "graphics/Culture/BeeldEnAmbeeld.jpg" alt = "Beeld & Ambeeld">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Beeld & Ambeeld</h1>
                    <p class = "infoBoxText">The Beeld & Aambeeld Gallery exhibits art on the wall and jewellery in showcases.<br><br>It hosts eight exhibitions per year, preferably in a combination of visual artists and jewellery designers. There are many paintings, mixed techniques, graphics and jewelry to admire.</p>
                    <img src = "graphics/Culture/BeeldEnAmbeeld.jpg" alt = "Beeld & Ambeeld">
                    <p class = "infoBoxText">Companies and individuals can also visit the gallery for advice on collecting, restoring, advertising gifts, framing and hanging art.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "http://www.beeldenaambeeld.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219206,6.894670&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "chosen hidden" id = "chosen3">
            <div class = "searchresult">
                <h1>Wilminktheater</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "wilminktheater">
                    <img class = "resultimage" src = "graphics/Culture/Wilminktheater.jpg" alt = "Wilminktheater">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Wilminktheater</h1>
                    <p class = "infoBoxText">The Wilminktheater Enschede is the largest provider of theatre performances and concerts in the eastern Netherlands. It is part of the national "Muziekkwartier" and has three locations in Enschede.</p>
                    <img src = "graphics/Culture/Wilminktheater.jpg" alt = "Wilminktheater">
                    <p class = "infoBoxText">The public can choose from a wide range of offers: Musicals, cabaret, dance, theatre, youth theatre, world music, opera, international orchestras, room music, pop music, etc.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.wilminktheater.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.222679,6.895368&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>De Kleine Willem</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "dekleinewillem">
                    <img class = "resultimage" src = "graphics/Culture/DeKleineWillem.jpg" alt = "De Kleine Willem">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>De Kleine Willem</h1>
                    <p class = "infoBoxText">The theatre belongs to the Wilminktheater. De Kleine Willem offers a podium for performances that currently take place less in the Grolsch Saal in Atak.</p>
                    <img src = "graphics/Culture/DeKleineWillem.jpg" alt = "De Kleine Willem">
                    <p class = "infoBoxText">De Kleine Willem offers a broad genre. Every Thursday, for example, cabaret is on the programme. The almost 40 performances include cabaret and music, but also youth and solo theatre.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.wilminktheater.nl/de-kleine-willem/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219646,6.895852&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Mystiek Theater</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "mystiektheater">
                    <img class = "resultimage" src = "graphics/Culture/MystiekTheater.png" alt = "Mystiek Theater">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Mystiek Theater</h1>
                    <p class = "infoBoxText">Fancy dinner, theatre and pure horror? With the complete dinner shows of Mystiek Theater in Enschede you are in the right place.</p>
                    <img src = "graphics/Culture/MystiekTheater.png" alt = "Mystiek Theater">
                    <p class = "infoBoxText">An exciting evening with lots of thrills awaits you at the labyrinth games in the House of Horror. Or visit our circus with clowns and magic, which becomes a real hell at the Ballalena Horror Show with musical dinner. Or rather showbizz with theatre, singing, dancing and in the Horror Movie Show?</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.mystiektheater.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.224672,6.889645&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Concordia Enschede</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "concordia">
                    <img class = "resultimage" src = "graphics/Culture/Concordia.png" alt = "Concordia Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Concordia Enschede</h1>
                    <p class = "infoBoxText">Concordia offers everyone the possibility to participate in art and cultural events. The film theatre offers amateur filmmakers a performance area.</p>
                    <img src = "graphics/Culture/Concordia.png" alt = "Concordia Enschede">
                    <p class = "infoBoxText">Concordia Kunst & Kultur also has a theatre and a visual arts centre with a gallery and art library. It organises courses, workshops, studio days, readings and art trips in the field of theatre and visual arts.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.concordia.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221137,6.895876&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Het Vestzaktheater</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "vestzaktheater">
                    <img class = "resultimage" src = "graphics/Culture/Vestzaktheater.jpg" alt = "Het Vestzaktheater">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Het Vestzaktheater</h1>
                    <p class = "infoBoxText">The Vestzaktheater is one of the smallest theatres in the Netherlands with 65 seats.</p>
                    <img src = "graphics/Culture/Vestzaktheater.jpg" alt = "Het Vestzaktheater">
                    <p class = "infoBoxText">Famous names, but also theatre newcomers and amateur groups from the region perform here. It is the ideal stage for try-outs. The programme includes theatre, cabaret, music and narrative theatre, as well as presentations on literature and poetry.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.hetvestzaktheater.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219692,6.894282&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Theater Sonnevanck</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "theatersonnevanck">
                    <img class = "resultimage" src = "graphics/Culture/Sonnevanck.jpg" alt = "Theater Sonnevanck">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Theater Sonnevanck</h1>
                    <p class = "infoBoxText">Theater Sonnevanck is one of the nine national BIS youth theatre companies based in Enschede. Sonnevanck makes new music theatre, solid in content and adventurous in form.</p>
                    <img src = "graphics/Culture/Sonnevanck.jpg" alt = "Theater Sonnevanck">
                    <p class = "infoBoxText">They play more than 400 performances a year in the small and medium rooms of theatres and at schools in a truck trailer that has been converted into a theatre. Sonnevanck has its own house and theatre in Enschede.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.sonnevanck.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219160,6.895307&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>The Hidden Theatre</h1>
                <span class = "location">Boekelo</span>
                <a class = "moreinfo" id = "hiddentheatre">
                    <img class = "resultimage" src = "graphics/Culture/HiddenTheatre.jpg" alt = "The Hidden Theatre in Boekelo">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>The Hidden Theatre</h1>
                    <p class = "infoBoxText">Hidden Theatre in Boekelo organises every second Tuesday of the month a cabaret show with new talents or with new try-outs from well-known cabaret artists. The theatre has paid special attention to Twente talents.</p>
                    <img src = "graphics/Culture/HiddenTheatre.jpg" alt = "The Hidden Theatre in Boekelo">
                    <p class = "infoBoxText">With a good wine and a tasty snack, you will be able to process all your impressions after the performance. You might even meet the artist of the evening at the bar!</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.verborgentheater.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.204191,6.799546&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "chosen hidden" id = "chosen4">
            <div class = "searchresult">
                <h1>Muziekcentrum Enschede</h1>
                <span class = "location">Northern Enschede</span>
                <a class = "moreinfo" id = "muziekcentrum">
                    <img class = "resultimage" src = "graphics/Culture/Muziekcentrum.jpg" alt = "Muziekcentrum Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Muziekcentrum Enschede</h1>
                    <p class = "infoBoxText">The Muziekcentrum Enschede is one of the most important concert halls in the Netherlands. The acoustics are praised by both visitors and (inter)national musicians.</p>
                    <img src = "graphics/Culture/Muziekcentrum.jpg" alt = "Muziekcentrum Enschede">
                    <p class = "infoBoxText">The leading concerts in the Muziekcentrum together with the varied theatre and music offer of the Wilminktheater, the Kleine Willem and concerts in the Grote Kerk form the cultural face of Enschede.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.wilminktheater.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.221930,6.895377&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Wilminktheater</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "wilminktheater">
                    <img class = "resultimage" src = "graphics/Culture/Wilminktheater.jpg" alt = "Wilminktheater">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Wilminktheater</h1>
                    <p class = "infoBoxText">The Wilminktheater Enschede is the largest provider of theatre performances and concerts in the eastern Netherlands.It is part of the national "Muziekkwartier" and has three locations in Enschede.</p>
                    <img src = "graphics/Culture/Wilminktheater.jpg" alt = "Wilminktheater">
                    <p class = "infoBoxText">The public can choose from a wide range of offers: Musicals, cabaret, dance, theatre, youth theatre, world music, opera, international orchestras, room music, pop music, etc.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.wilminktheater.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.222679,6.895368&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>Metropool Enschede</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "metropool">
                    <img class = "resultimage" src = "graphics/Culture/Metropool.jpg" alt = "Metropool Enschede">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Metropool Enschede</h1>
                    <p class = "infoBoxText">TMetropool Enschede is a pop podium that is primarily focused on organizing activities for a wide audience. Metropool organises concerts, club nights, photo exhibitions, indoor festivals, studio recordings, cultural events, talent development and more.</p>
                    <img src = "graphics/Culture/Metropool.jpg" alt = "Metropool Enschede">
                    <p class = "infoBoxText">From Pop to Rock, from Metal to Hip Hop, from Techno to Indierock, there is live music for every music lover.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://metropool.nl/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.222541,6.893575&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>De Kleine Willem</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "dekleinewillem">
                    <img class = "resultimage" src = "graphics/Culture/DeKleineWillem.jpg" alt = "De Kleine Willem">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>De Kleine Willem</h1>
                    <p class = "infoBoxText">The theatre belongs to the Wilminktheater. De Kleine Willem offers a podium for performances that currently take place less in the Grolsch Saal in Atak.</p>
                    <img src = "graphics/Culture/DeKleineWillem.jpg" alt = "De Kleine Willem">
                    <p class = "infoBoxText">De Kleine Willem offers a broad genre. Every Thursday, for example, cabaret is on the programme. The almost 40 performances include cabaret and music, but also youth and solo theatre.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.wilminktheater.nl/de-kleine-willem/"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.219646,6.895852&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class = "searchresult">
                <h1>De Grote Kerk</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "degrotekerk">
                    <img class = "resultimage" src = "graphics/Culture/GroteKerk.jpg" alt = "The Great Church">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>De Grote Kerk</h1>
                    <p class = "infoBoxText">The Grote Kerk (Great Church) in Enschede is the most atmospheric and certainly the most central place in the city.</p>
                    <img src = "graphics/Culture/GroteKerk.jpg" alt = "TheGreatChurch">
                    <p class = "infoBoxText">A special part of the church is the beautiful Lambertus van Dam organ from 1892. Every year chamber music, baroque and early music, choral music, world music and organ music sound in the cosy atmosphere of the church. In addition, dance and music performances are regularly organized.</p>
                    <div class = "infoBoxEqualFlex">
                        <div class = "infoBoxHalfFlex">
                            <a href = "https://www.uitinenschede.nl/locaties/grote-kerk"><button class = "webInfo">Visit website</button></a>
                        </div>
                        <div class = "infoBoxHalfFlex">
                            <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220680,6.895831&travelmode=walking"><button class = "infoRoute">Show route</button></a>
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