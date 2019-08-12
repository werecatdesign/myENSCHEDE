<?php

include_once 'includes/dbh.inc.php';
include('includes/header.php');

$sql1 = 'INSERT INTO uniqueviews (date, time, datetime, page_url, page_name) VALUES (NOW(), NOW(), NOW(), "https://myenschede.werecat-design.com/history", "History");';
$sql2 = 'UPDATE viewcount SET count = count + 1 WHERE page_name = "History";';

$update1 = mysqli_query($conn, $sql1);
$update2 = mysqli_query($conn, $sql2);

mysqli_close($conn);

echo '

<div class = "bodytext">

<div class = "redbox" id = "history_redbox">
    <div class = "category_letter">          
        <img src = "graphics/Carousel/History.png" alt = "Category: History">
    </div>        
    <div class = "category_content">           
        <h1> History of Enschede </h1>                               
    </div>        
</div>            
<div class = "whitebox">
    <div class = "category_expand" id = "eventCats">
        <p>Learn about the history of Enschede by following the timeline!</p>               
    </div>        
</div>

<div class="timeline">
	  <h1 class = "time-announce">1000</h1>
            <div class = "filler"></div>
          <div class = "historical-image right" >
              <img id = "img1000" src = "graphics/History/1000.jpg" alt = "Enschede in the Middle Ages">
          </div>
        
          <ul class="timeline-items">
            <li class="is-hidden timeline-item" id = "text1000"> <!-- Normal block, positionned to the left -->
              <h1 class = "content-announce">Enschede in the Middle Ages</h1>
              <hr>
              <p class = "p-left">Enschede originated in the early Middle Ages as an agricultural settlement around a small castle or borg.<br><br>The area around the city was covered by huge moors and peat bogs.</p>
            </li>
        </ul>
        
        
	  <h1 class = "time-announce">1325</h1>
	  <ul class="timeline-items">
	    <li class="is-hidden timeline-item inverted"> <!-- Normal block, positionned to the right  -->
	      <h1 class = "content-announce">Enschede gets city rights</h1>
	      <hr>
	      <p>In 1325, Enschede received city rights from the bishop of Utrecht, allowing to hold year markets and to strengthen the settlement.<br><br>Two canals were built, running around the city in an egg shape. An impenetrable, high hedge was planted around the outer canal.</p>
	    </li>
	    <li class="is-hidden timeline-item centered"> <!-- Centered block, positionned in the middle -->
	      <p>In the late Middle Ages, the houses and city farms were built from half-timbered buildings. The high top façades consisted of long planks, the roofs were covered with reeds or straw.<br><br>There were only a few stone buildings in the city, namely: the town hall, the Great Church, the castle and the two city gates.</p>
	    </li>
	  </ul>
	  <h1 class = "time-announce">1465</h1>
	  <ul class="timeline-items">
	    <li class="is-hidden timeline-item inverted">
	      <h1 class = "content-announce">Fence around the city</h1>
	      <hr>
	      <p>In 1465 a wooden fence was erected around the city. The palisade was built on a shore between the old city graves and a new outer canal.<br><br>A stronghold was erected on the north side of the city.</p>
	    </li>
	  </ul>
	  <h1 class = "time-announce">1550</h1>
      <div class = "filler"></div>
        <div class = "historical-image right" >
              <img id = "img1560" src = "graphics/History/1560.jpg" alt = "Enschede in its agricultural era">
          </div>
	  <ul class="timeline-items">
	    <li class="is-hidden timeline-item" id = "text1560">
	      <p>Enschede was still a small and mainly agricultural town located within the double city moat.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1572-1597</h1>
      <div class = "historical-image left" >
         <img id = "img1572" src = "graphics/History/1572.jpg" alt = "The 80 Years War">
      </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item inverted" id = "text1572">
           <h1 class = "content-announce">The Eighty Years War</h1>
	       <hr>
	      <p>Between 1572 and 1597, Twente and Salland were destroyed by a guerrilla war that lasted for more than 25 years.<br><br>As a result, the area between Oldenzaal, Almelo and Groenlo was left depopulated for years.</p>
        </li>
	  </ul>
      <ul class="timeline-items">        
	    <li class="is-hidden timeline-item centered">
	      <p>The fortress and ramparts of Enschede were poorly cared for at that time and the states of Overijssel had long been no longer planning to invest in the dilapidated city walls.<br><br>The military role of Enschede was played out by the decision of Prince Maurits to force the city to surrender.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1648</h1>
      <div class = "filler"></div>
        <div class = "historical-image right" >
              <img id = "img1648" src = "graphics/History/1648.jpg" alt = "Enschede in the 17th and 18th centuries">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item" id = "text1648">
           <h1 class = "content-announce">Enschede in the 17th & 18th Centuries</h1>
	       <hr>
	      <p>The population of Overijssel had been hit hard by the war and needed over 100 years to recover.<br><br> The city area of Enschede within the canals was now characterized by homes and city farms. Both city gates were closed at night.</p>
        </li>
    </ul>
      
      <h1 class = "time-announce">1855-1866</h1>
      <div class = "filler"></div>
        <div class = "historical-image left" >
              <img id = "img1826" src = "graphics/History/1826.jpg" alt = "Emergence of the textile industry">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item inverted" id = "text1826">
           <h1 class = "content-announce">Emergence of the Textile Industry</h1>
	       <hr>
	      <p>In the 18th century trade in textile became increasingly important. The city began to focus specifically on the so-called bombazin, a fabric that consists partly of linen and partly of cotton.<br><br>Enschede grew into the most important center of textile production in the Netherlands.</p>
        </li>
	  </ul>
      <ul class="timeline-items">        
	    <li class="is-hidden timeline-item centered">
	      <p>The textile manufacturers replaced the timbered city farms with decent mansions.<br><br>Around and in the old city center of Enschede, steam weavers and bleachers were quickly set up.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1862</h1>
      <div class = "filler"></div>
        <div class = "historical-image right" >
              <img id = "img1862" src = "graphics/History/1862.jpg" alt = "The Great Fire">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item" id="text1862">
           <h1 class = "content-announce">The Great City Fire</h1>
	       <hr>
	      <p>What had been built up in Enschede in all those years was completely destroyed in a few hours on 7 May 1862.<br><br>The fire started in the morning in the house of a worker on Kalanderstraat. 650 families became homeless, the entire old city within the canals was lost in the immense fire.</p>
        </li>
	  </ul>
      <ul class="timeline-items">        
	    <li class="is-hidden timeline-item centered">
	      <p>But the destruction of the city gave the industry the opportunity to spread its wings. New factories were built outside the swept away center.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1866</h1>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item inverted">
           <h1 class = "content-announce">Station</h1>
	       <hr>
	      <p>The station was opened on July 1, 1866. Enschede was given a station on the Zutphen-Glanerbeek railway line.<br><br>The current station stems from after WWII.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1908</h1>
      <div class = "filler"></div>
        <div class = "historical-image right" >
              <img id = "img1908" src = "graphics/History/1908.jpg" alt = "Trams in Enschede">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item" id = "text1908">
           <h1 class = "content-announce">First Trams</h1>
	       <hr>
	      <p>The first trams rode through Enschede. The tram drove from Enschede to Glanerbrug.<br><br>They lasted until 1933, when they were replaced by buses.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1920</h1>
      <div class = "filler"></div>
        <div class = "historical-image left" >
              <img id = "img1916" src = "graphics/History/1916.jpg" alt = "Growing wealth">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item inverted" id = "text1916">
           <h1 class = "content-announce">Growing Wealth</h1>
	       <hr>
	      <p> New residential areas were no longer in the shadow of the immense textile factories, but could lie on the outskirts of the city.<br><br>In Enschede, besides the workers and textile barons, a large middle class finally began to emerge.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1929-1933</h1>
      <div class = "filler"></div>
        <div class = "historical-image right" >
              <img id = "img1929" src = "graphics/History/1929.jpg" alt = "Economic crisis">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item" id = "text1929">
           <h1 class = "content-announce">Economic Crisis</h1>
	       <hr>
	      <p>Due to the global economic crisis, the region of Twente and Enschede was also suffering from high unemployment. The number of employees in the textile sector fell from 42,000 to 26,000 between 1929 and 1933.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1944-1945</h1>
      <div class = "filler"></div>
        <div class = "historical-image left" >
              <img id = "img1944" src = "graphics/History/1944.jpg" alt = "World War II">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item inverted" id = "text1944">
           <h1 class = "content-announce">Second World War</h1>
	       <hr>
	      <p>Enschede was hit hard during the 2nd World War. Allied pilots were generally under the assumption that they were already flying over Germany.<br><br>The city was liberated on April 1, 1945 by units of a British Allied army.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1950</h1>
      <div class = "filler"></div>
        <div class = "historical-image right" >
              <img id = "img1950" src = "graphics/History/1950.jpg" alt = "Reconstruction of the city after World War II">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item" id = "text1950">
           <h1 class = "content-announce">Post-War Reconstruction</h1>
	       <hr>
	      <p>After the war ended, the reconstruction of the city began. The municipality decided to construct a wide boulevard right through the center.<br><br>Along this boulevard, long shopping galleries, large office buildings, a new post office and a trade fair should rise.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1967-1977</h1>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item centered">
           <h1 class = "content-announce">Downfall of the Textile Industry</h1>
	       <hr>
	      <p>Due to the independence of Indonesia, Twente lost an important market. Furthermore, they could no longer compete with foreign companies that produced at lower costs.<br><br>Almost all textile factories closed their doors between 1967 and 1977, unemployment rates were on the rise.<br><br>The University of Twente created new jobs.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">1990</h1>
      <div class = "filler"></div>
        <div class = "historical-image left" >
              <img id = "img1990" src = "graphics/History/1990.jpg" alt = "Economic recovery after the textile crisis">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item inverted" id="text1990">
           <h1 class = "content-announce">Recovery from the Textile Crisis</h1>
	       <hr>
	      <p>Almost the entire city centre became car-free. The Boulevard was closed again, as it stood in the way of the further economic development of the city. Instead, a large shopping square appeared.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">2000</h1>
      <div class = "filler"></div>
        <div class = "historical-image right" >
              <img id = "img2000" src = "graphics/History/2000.jpg" alt = "Fireworks explosion in Enschede">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item" id = "text2000">
           <h1 class = "content-announce">Fireworks Disaster</h1>
	       <hr>
	      <p>On Saturday, May 13, 2000, Enschede struck a new blow. An innocent fire turned into a disaster, causing an explosion in the fireworks store in Roombeek, killing 22 people and injuring around 1000.</p>
        </li>
	  </ul>
      <h1 class = "time-announce">2019</h1>
      <div class = "filler"></div>
        <div class = "historical-image left" >
              <img id = "img2019" src = "graphics/History/2019.jpg" alt = "Enschede today">
          </div>
	  <ul class="timeline-items">        
	    <li class="is-hidden timeline-item inverted" id = "text2019">
           <h1 class = "content-announce">Enschede Today</h1>
	       <hr>
	      <p>With over 157,000 inhabitants, Enschede is the largest city in the east of the Netherlands.<br><br>The textile industry is still visible in the form of beautiful villas, country estates, factory complexes, working-class areas and parks.<br><br>There is a lot of greenery in and around Enschede.</p>
        </li>
	  </ul>
	</div>

    
    <script src="script/jquery.timelify.js"></script>
<script>
	$(".timeline").timelify({
			animLeft: "fadeInLeft",
		animCenter: "fadeInUp",
		animRight: "fadeInRight",
		animSpeed: 600,
		offset: 150
	});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-36251023-1"]);
  _gaq.push(["_setDomainName", "jqueryscript.net"]);
  _gaq.push(["_trackPageview"]);

  (function() {
    var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;
    ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
  })();

</div>
</script>
</body>
    
</html>

'; 

?>