<?php

// Get the selected categories from the invisible input fields --------------------------------------------------------------------------------------------------------------------

include_once 'includes/dbh.inc.php';
include('includes/header.php');

$categoryArray = array();

$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];

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
        <div class = "redbox" id = "events_redbox2">
            <a href = "events.php"><button class = "search">New search</button></a>
        
';

if (!isset($_POST["Culture"]) && !isset($_POST["Music"]) && !isset($_POST["Shopping"]) && !isset($_POST["Gastronomy"]) && !isset($_POST["Sports"])) {
    echo '<p>Please select at least one category.</p>';
}

if ($startDate == "") {
    echo '
        <p>Please select the start month.</p>';
}
                                                                                                            
if ($endDate == "") {
    echo '
        <p>Please select the end month.</p>';
}

echo '</div>';
 
if ((isset($_POST["Culture"]) || isset($_POST["Music"]) || isset($_POST["Shopping"]) || isset($_POST["Gastronomy"]) || isset($_POST["Sports"])) && $startDate != "" && $endDate != "") {


    if (isset($_POST["Culture"])){
        array_push($categoryArray,"Culture");
    }

    if (isset($_POST["Music"])){
        array_push($categoryArray,"Music");
    }

    if (isset($_POST["Shopping"])){
        array_push($categoryArray,"Shopping");
    }

    if (isset($_POST["Gastronomy"])){
        array_push($categoryArray,"Gastronomy");
    }

    if (isset($_POST["Sports"])){
        array_push($categoryArray,"Sports");
    }

    //print_r($categoryArray);

    $where = "";

    if (count($categoryArray)==1) {
        $where = $where."category = '".$categoryArray[0]."'";
    } elseif (count($categoryArray)>1) {
        for ($i=0; $i<count($categoryArray); $i++) {
            if ($i==count($categoryArray)-1) {
                $where = $where."category = '".$categoryArray[$i]."'";
            } else {
                $where = $where."category = '".$categoryArray[$i]."' OR ";
            }
        }
    }

    //print_r($where);


    // Get the selected dates from the invisible input fields ------------------------------------------------------------------------------------------------------------------------

    $when = "";

    if ($startDate == "July 2019"){
        if ($endDate == "July 2019"){
            $when = $when."month = 'July')";
        } elseif ($endDate == "August 2019"){
            $when = $when."month = 'July' OR month = 'August')";
        } elseif ($endDate == "September 2019"){
            $when = $when."month = 'July' OR month = 'August' OR month = 'September')";
        } elseif ($endDate == "October 2019"){
            $when = $when."month = 'July' OR month = 'August' OR month = 'September' OR month = 'October')";
        }
    } elseif ($startDate == "August 2019"){
        if ($endDate == "August 2019"){
            $when = $when."month = 'August')";
        } elseif ($endDate == "September 2019"){
            $when = $when."month = 'August' OR month = 'September')";
        } elseif ($endDate == "October 2019"){
            $when = $when."month = 'August' OR month = 'September' OR month = 'October')";
        }    
    } elseif ($startDate == "September 2019"){
        if ($endDate == "September 2019"){
            $when = $when."month = 'September')";
        } elseif ($endDate == "October 2019"){
            $when = $when."month = 'September' OR month = 'October')";
        }    
    } elseif ($startDate == "October 2019"){
            $when = $when."month = 'October')";
    }

    // Make the SQL request and get the data from the database -----------------------------------------------------------------------------------------------------------------------

    $sql = "SELECT * from events WHERE (".$where.") AND ( ".$when." GROUP BY name ORDER BY sort_date;"; // ALL SQL code goes inside the quotation marks
    // print_r($sql); // Checking which SQL request was made

    echo '    
        <div class = "results">';

        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)) { // $row becomes an array with all the data from the database. While the variable row is not NULL. The mysqli_fetch_assoc is a function that does not only fetch a row but also counts up to the next rows through all the rows in the table, so that an array of rows is created.
                echo "<div class = 'searchresult'>
                        <h1>".$row['name']."</h1>
                        <div class = 'placetime'>
                            <div class = 'placetime_half'><span>".$row['displayed_date']."</span></div>
                            <div class = 'placetime_half'><span>".$row['location']."</span></div>
                        </div>
                        <div class = 'resultbody'>
                            <div class = 'resultpic'>
                                <div class = 'nothingness'></div>
                                <div class = 'content'>
                                    <img src='".$row['img_url']."' alt = 'Event Picture'>
                                </div>
                                <div class = 'nothingness'></div>
                            </div>
                            <div class = 'resulttext'>
                                <div class = 'nothingness'></div>
                                <div class = 'content'>                                
                                    <p>".$row['description']."</p>
                                </div>
                                <div class = 'nothingness'></div>
                            </div>
                        </div>
                        <button><a href =".$row['url'].">Visit event website</a></button>
                    </div>";

            }
        }

        echo '<div class = "whitefiller"></div></div>';

} // This is the bracket that closes the if statement --> If all the input fields/check boxes have values

echo '
</div>
</body>
</html>

'; 

?>