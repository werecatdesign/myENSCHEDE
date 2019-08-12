<?php

include_once 'includes/dbh.inc.php';
include('includes/header.php');

$sql1 = 'INSERT INTO uniqueviews (date, time, datetime, page_url, page_name) VALUES (NOW(), NOW(), NOW(), "https://myenschede.werecat-design.com/nature", "Nature");';
$sql2 = 'UPDATE viewcount SET count = count + 1 WHERE page_name = "Nature";';

$update1 = mysqli_query($conn, $sql1);
$update2 = mysqli_query($conn, $sql2);

mysqli_close($conn);

echo '

<div class = "bodytext">
    <div class = "redbox" id = "nature_redbox">
        <div class = "category_letter">          
            <img src = "graphics/Carousel/Nature.png" alt = "Category: Nature">
        </div>        
        <div class = "category_content">           
            <h1> Nature in Enschede </h1>                               
        </div>        
    </div>            
    <div class = "whitebox">
        <div class = "intro">
            <p>Enschede has more nature to offer than you think!<br><br>If you feel like taking a break from the busy city life, explore the natural treasures of Enschede!<br><br>Where would you like to go?</p> 
        </div>
        <div class = "equalflex">
            <div class = "halfflex">
                <button class = "choose selected" id = "choose1">Parks in Enschede</button>
            </div>
            <div class = "halfflex">
                <button class = "choose" id = "choose2">Around Enschede</button>
            </div>
        </div>
    </div>
    <div class = "results">
        <div class = "chosen" id = "chosen1">
            <div class = "searchresult">
                <h1>Ledeboerpark</h1>
                <span class = "location">North-Western Enschede</span>
                <a class = "moreinfo" id = "ledeboer">
                    <img class = "resultimage" src = "graphics/Parks/Ledeboerpark.jpg" alt = "Ledeboerpark">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Ledeboerpark</h1>
                    <p class = "infoBoxText">The Ledeboerpark was created in 1918 from a part of the former estate Het Wageler by which it is surrounded. In this area you can find an alternation of fields, grasslands, wooded banks, bushes, farms, streams and rugged areas.</p>
                    <img src = "graphics/Parks/Ledeboerpark.jpg" alt = "Ledeboerpark">
                    <p class = "infoBoxText">The park is named after textile industrialist Abraham Ledeboer. Original elements from 1880 include the Coach House, various trees and bushes, the ponds and the entrance gate.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.233971,6.869516&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                </div>
            </div>    
            <div class = "searchresult">
                <h1>Volkspark</h1>
                <span class = "location">Central Enschede</span>
                <a class = "moreinfo" id = "volks">
                    <img class = "resultimage" src = "graphics/Parks/Volkspark.jpg" alt = "Volkspark">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Volkspark</h1>
                    <p class = "infoBoxText">The Volkspark is the oldest popular park in the Netherlands. It was established as a park in 1872. This was made possible by a bequest of H.J. van Heek (1814-1872). His intention was to leave the population a park where the textile workers could relax with their families in their free time.</p>
                    <img src = "graphics/Parks/Volkspark.jpg" alt = "Volkspark">
                    <p class = "infoBoxText">In the park you can admire various works of art, including the war memorial of Mari Andriessen, the centre of the annual commemoration on 4 May.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.220742,6.878836&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                </div>
            </div> 
            <div class = "searchresult">
                <h1>Wooldrikpark</h1>
                <span class = "location">Eastern Enschede</span>
                <a class = "moreinfo" id = "wooldrik">
                    <img class = "resultimage" src = "graphics/Parks/Wooldrikpark.jpg" alt = "Wooldrikpark">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Wooldrikpark</h1>
                    <p class = "infoBoxText">The Wooldrikpark is one of the old parks of Enschede. It attracts with its large variety of trees, the petting zoo with the playground next to it and the pond. Although the park was only inaugurated as a park in 1950, its planting and design is 19th century.</p>
                    <img src = "graphics/Parks/Wooldrikpark.jpg" alt = "Wooldrikpark">
                    <p class = "infoBoxText">The park is known for its beautiful solitary trees and its flower terrace. There is also duck terrace with ducks and fish. Since 2004 there has been a spouting fountain in the long summer season.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.216370,6.913835&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                </div>
            </div> 
            <div class = "searchresult">
                <h1>Blijdensteinpark</h1>
                <span class = "location">Eastern Enschede</span>
                <a class = "moreinfo" id = "blijdenstein">
                    <img class = "resultimage" src = "graphics/Parks/Blijdensteinpark.png" alt = "Blijdensteinpark">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Blijdensteinpark</h1>
                    <p class = "infoBoxText">Through this park runs a large road: Boulevard 1945. The park originates from the private property of the Blijdenstein family who settled there in 1855. In 1958, the terrain was donated to the city of Enschede.</p>
                    <img src = "graphics/Parks/Blijdensteinpark.png" alt = "Blijdensteinpark">
                    <p class = "infoBoxText">In the Blijdensteinpark, a variety of artworks can be admired. The Blijdenstein villa - today known as Villa de Bank - now contains a textile museum.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.216365,6.907934&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                </div>
            </div> 
            <div class = "searchresult">
                <h1>G.J. Van Heekpark</h1>
                <span class = "location">North-Western Enschede</span>
                <a class = "moreinfo" id = "vanheek">
                    <img class = "resultimage" src = "graphics/Parks/VanHeekpark.jpg" alt = "G.J. Van Heekpark">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>G.J. Van Heekpark</h1>
                    <p class = "infoBoxText">From its old centre (between the canals), Enschede has expanded into surrounding agricultural land. Wide zones have remained undeveloped. These are the so-called green wedges. The Van Heekpark is the last part of such a green wedge, entering the city from the north-west.</p>
                    <img src = "graphics/Parks/VanHeekpark.jpg" alt = "G.J. Van Heekpark">
                    <p class = "infoBoxText">In the formal part and along the edges, sport and play will predominate, while the romantic part focuses on rest, art and culture.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.228044,6.883497&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                </div>
            </div> 
            <div class = "searchresult">
                <h1>Wesselerbrinkpark</h1>
                <span class = "location">Southern Enschede</span>
                <a class = "moreinfo" id = "wesselerbrink">
                    <img class = "resultimage" src = "graphics/Parks/Wesselerbrinkpark.jpg" alt = "Wesselerbrinkpark">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Wesselerbrinkpark</h1>
                    <p class = "infoBoxText">The Wesselerbrinkpark dates back to the 1960s and 1970s and has a gradual transition from culture to nature. The park also forms the green heart of the district with the same name.</p>
                    <img src = "graphics/Parks/Wesselerbrinkpark.jpg" alt = "Wesselerbrinkpark">
                    <p class = "infoBoxText">Originally, the area was an agricultural area around the farm "de Wesseler". As part of the "Wesselerbrink expansion plan" adopted in 1963, there was room for the creation of a park.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.190486,6.874870&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                </div>
            </div> 
            <div class = "searchresult">
                <h1>Thomas Ainsworthpark</h1>
                <span class = "location">Western Enschede</span>
                <a class = "moreinfo" id = "ainsworth">
                    <img class = "resultimage" src = "graphics/Parks/Ainsworthpark.jpg" alt = "Thomas Ainsworthpark">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Thomas Ainsworthpark</h1>
                    <p class = "infoBoxText">The Thomas Ainsworth Park is a small park located along the Pathmossingel in the Pathmos district. Originally the park had a pond, which was filled in at the end of the sixties. Because of this pond, the Ainsworth Park is popularly known as the duck park. </p>
                    <img src = "graphics/Parks/Ainsworthpark.jpg" alt = "Thomas Ainsworthpark">
                    <p class = "infoBoxText">It is named after Thomas Ainsworth, an Englishman by birth and versatile technician with extensive experience in the cotton industry, who had been working in Twente regularly since 1831.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.213801,6.875342&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                </div>
            </div> 
            <div class = "searchresult">
                <h1>Kozakkenpark</h1>
                <span class = "location">Western Enschede</span>
                <a class = "moreinfo" id = "kozakken">
                    <img class = "resultimage" src = "graphics/Parks/Kozakkenpark.jpg" alt = "Kozakkenpark">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Kozakkenpark</h1>
                    <p class = "infoBoxText">The Kozakkenpark (Cossack Park) is named after the Cossacks who set up their camp here during the liberation of Enschede from French rule in the beginning of the 19th century. In the park stands a an inscribed column that commemorates (foreign) victims of the First World War from 1914-1918.</p>
                    <img src = "graphics/Parks/Kozakkenpark.jpg" alt = "Kozakkenpark">
                    <p class = "infoBoxText">The part on the other side of the Goolkatenweg offers space for a playground and a football field.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.227337,6.873845&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                </div>
            </div> 
            <div class = "searchresult">
                <h1>Florapark</h1>
                <span class = "location">North-Eastern Enschede</span>
                <a class = "moreinfo" id = "flora">
                    <img class = "resultimage" src = "graphics/Parks/Florapark.jpg" alt = "Florapark">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Florapark</h1>
                    <p class = "infoBoxText">In the Florapark, hidden behind bushes and surrounded by tall trees is a white building on the hill. At the end of the 19th century the manufacturers association "De Aapclub" met here every Sunday evening.</p>
                    <img src = "graphics/Parks/Florapark.jpg" alt = "Florapark">
                    <p class = "infoBoxText">Originally there was a tall hedge of shrubs with thorns and a garden around the building. In the 1950s, the municipality turned this garden into a beautiful whole. Today, the Apenhof is an atelier for artists.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.227878,6.910036&travelmode=walking"><button class = "infoRoute">Show route</button></a>
                </div>
            </div>
        </div>
        <div class = "chosen hidden" id = "chosen2">
            <div class = "searchresult">
                <h1>Rutbeek Recreational Park</h1>
                <span class = "location">Het Rutbeek / Southeast of Enschede</span>
                <a class = "moreinfo" id = "rutbeek">
                    <img class = "resultimage" src = "graphics/Parks/Rutbeek.jpg" alt = "Rutbeek Recreational Park">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Rutbeek Recreational Park</h1>
                    <p class = "infoBoxText">Het Rutbeek Recreational Park is a nature reserve in the south-west of Enschede. It has various activities to offer, such as swimming, sunbathing, skating and playgrounds.</p>
                    <img src = "graphics/Parks/Rutbeek.jpg" alt = "Rutbeek Recreational Park">
                    <p class = "infoBoxText">In the natural area, different tree and plant species occur. There are also a number of small heathlands. The large number of animals that you can encounter so close to the big city is also special.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.178484,6.838474&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                </div>
            </div>
            <div class = "searchresult">
                <h1>Hof Espelo</h1>
                <span class = "location">North of Enschede</span>
                <a class = "moreinfo" id = "espelo">
                    <img class = "resultimage"src = "graphics/Parks/HofEspelo.jpg" alt = "Hof Espelo">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Hof Espelo</h1>
                    <p class = "infoBoxText">Hof Espelo is situated on the East Dutch Plateau, part of the North Sea basin. It is a perfect area for hiking. East of the reserve lies the Stauchwall of Enschede.</p>
                    <img src = "graphics/Parks/HofEspelo.jpg" alt = "Hof Espelo">
                    <p class = "infoBoxText">You can walk freely along the paths and paths, with the exception of the farms. The main entrance is at the Weerseloseweg. The 1 hour and 15 minute trail starts at the main entrance, the route is indicated by poles with a yellow head.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.253676,6.873984&travelmode=driving"><button class = "infoRoute">Show route</button></a>
                </div>
            </div>
            <div class = "searchresult">
                <h1>Rondje Enschede</h1>
                <span class = "location">Hiking trail around Enschede</span>
                <a class = "moreinfo" id = "rondje">
                    <img class = "resultimage" src = "graphics/Parks/RondjeEnschede.jpg" alt = "Het Rondje">
                </a>
                <button class = "moreinfo"><b>Read more</b></button>
            </div>
            <div class = "infoBox hidden">
                <a class = "closeBox"><img src = "graphics/Icons/xred.png" alt = "Close box"></a>
                <div class = "textInBox">
                    <h1>Het Rondje Enschede</h1>
                    <p class = "infoBoxText">Rondje Enschede is an adventurous walking and cycling route of about 52 km around the town. The route meanders through a varied landscape with attractive resting places.</p>
                    <img src = "graphics/Parks/RondjeEnschede.jpg" alt = "Het Rondje Enschede">
                    <p class = "infoBoxText">Rondje Enschede leads along newly laid out and ancient paths, along the magnificent green nature of the outskirts of the town, but also right through the centre.</p>
                    <a href="https://www.google.com/maps/dir/?api=1&origin=52.220692,6.897632&destination=52.256130,6.880971&travelmode=driving"><button class = "infoRoute">Show route to start</button></a>
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