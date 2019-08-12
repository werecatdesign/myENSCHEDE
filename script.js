var letterCount = 1;

$(document).ready(doStuff);

function doStuff(e){
    // console.log ('You did stuff.');
    $('#menu_icon').click(expandMenu);
    $('#arrow_left').click(moveLeft);
    $('#arrow_right').click(moveRight);
    $('.smallLetter').click(pickLetter);
    
    // EVENTS PAGE
    $('.category').click(selectCategory);
    $('.dropdown_date').click(expandDates);
    emptyInputs();
    
    // NATURE PAGE
    $('.choose').click(selectOption);
    $('.moreinfo').click(showInfo);
    $('.closeBox').click(closeBox);

}

// Menu

function expandMenu (e) {
    e.preventDefault();
    console.log ('Here is your navigation');
    var menuBlock = $('body').find('#menudiv');
    menuBlock.toggleClass('hidden');
    var menuHeight = menuBlock.css('height');
    var hiddenMenu = $('body').find('#invisiblemenu');
    hiddenMenu.css('height', menuHeight);
    hiddenMenu.toggleClass('hidden');
    console.log(hiddenMenu);
}

// Letter Slider - Arrows

function moveLeft(e) {
    e.preventDefault();
    console.log('You clicked left');
    if (letterCount == 1){
        letterCount = 8;
    } else {
        letterCount--;
    }
    console.log(letterCount);
    updateLetter();
}

function moveRight(e){
    e.preventDefault();
    console.log('You clicked right');
    if (letterCount == 8){
        letterCount = 1;
    } else {
        letterCount++;
    }
    console.log(letterCount);
    updateLetter();
}

// Letter Slider - Pick a Letter from the Small Letter Menu

function pickLetter (e) {
    var pickedLetter = $(e.currentTarget).html();
    //console.log(pickedLetter);
    var lettername = $(pickedLetter).attr('id');
    //console.log(lettername);
    if (lettername == "events") {
        letterCount = 1;
    } else if (lettername == "nature") {
        letterCount = 2;
    } else if (lettername == "shopping") {
        letterCount = 3;
    } else if (lettername == "culture") {
        letterCount = 4;
    } else if (lettername == "history") {
        letterCount = 5;
    } else if (lettername == "evening") {
        letterCount = 6;
    } else if (lettername == "doing") {
        letterCount = 7;
    } else if (lettername == "eating") {
        letterCount = 8;
    }
    updateLetter();
}

// Updating the Letter in the Letter Slider

function updateLetter() {
    var letterContainer = $('body').find('.slider_letter');
    var newletterImage;    
    if (letterCount == 1) {
        newletterImage = $('<a href = "events.php" class = "lettersliderimage" id = "events"><img src = "graphics/Carousel/Events.png" alt = "Events"></a>');
    } else if (letterCount == 2) {
        newletterImage = $('<a href = "nature.php" class = "lettersliderimage" d = "nature"><img src = "graphics/Carousel/Nature.png" alt = "Nature"></a>'); 
    } else if (letterCount == 3) {
        newletterImage = $('<a href = "shopping.php" class = "lettersliderimage" id = "shopping"><img src = "graphics/Carousel/Shopping.png" alt = "Shopping"></a>'); 
    } else if (letterCount == 4) {
        newletterImage = $('<a href = "culture.php" class = "lettersliderimage" id = "culture"><img src = "graphics/Carousel/Culture.png" alt = "Culture"></a>');
    } else if (letterCount == 5) {
        newletterImage = $('<a href = "history.php" class = "lettersliderimage" id = "history"><img src = "graphics/Carousel/History.png" alt = "History"></a>');
    } else if (letterCount == 6) {
        newletterImage = $('<a href = "evening.php" class = "lettersliderimage" id = "evening"><img src = "graphics/Carousel/Evening.png" alt = "Evening"></a>');
    } else if (letterCount == 7) {
        newletterImage = $('<a href = "doing.php" class = "lettersliderimage" id = "doing"><img src = "graphics/Carousel/Doing.png" alt = "Doing"></a>');
    } else if (letterCount == 8) {
        newletterImage = $('<a href = "eating.php" class = "lettersliderimage" id = "eating"><img src = "graphics/Carousel/Eating.png" alt = "Eating"></a>');
    }    
    var oldLetterImage = letterContainer.find('.lettersliderimage');    
    letterContainer.html('');
    letterContainer.append(newletterImage);    
}

// EVENTS PAGE --------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Empty Input fields while reloading the page
function emptyInputs(){
    $('input[name="Culture"]').prop('checked', false);
    $('input[name="Music"]').prop('checked', false);
    $('input[name="Shopping"]').prop('checked', false);
    $('input[name="Gastronomy"]').prop('checked', false);
    $('input[name="Sports"]').prop('checked', false);
    $('input[name="startDate"]').val('');
    $('input[name="endDate"]').val('');
}

// Selecting a Category Button

function selectCategory(e){
    $(e.currentTarget).toggleClass('selected'); // Category gets selected
    
    // Setting the hidden checkboxes
    var checkedCategory = $(e.currentTarget).html(); // Selecting what says the button that was clicked
    //console.log(checkedCategory);
    
    // Checking and Unchecking Culture
    if (checkedCategory == 'Culture') {
        var isChecked = $('input[name="Culture"]').prop('checked');
        console.log(isChecked);
        if (isChecked == false) {
            $('input[name="Culture"]').prop('checked', true);
        } else {
            $('input[name="Culture"]').prop('checked', false);
        }            
    }
    
    // Checking and Unchecking Music
    if (checkedCategory == 'Music') {
        var isChecked = $('input[name="Music"]').prop('checked');
        console.log(isChecked);
        if (isChecked == false) {
            $('input[name="Music"]').prop('checked', true);
        } else {
            $('input[name="Music"]').prop('checked', false);
        }            
    }
    
    // Checking and Unchecking Shopping
    if (checkedCategory == 'Shopping') {
        var isChecked = $('input[name="Shopping"]').prop('checked');
        console.log(isChecked);
        if (isChecked == false) {
            $('input[name="Shopping"]').prop('checked', true);
        } else {
            $('input[name="Shopping"]').prop('checked', false);
        }            
    }
    
    // Checking and Unchecking Food & Drink
    if (checkedCategory == 'Gastronomy') {
        var isChecked = $('input[name="Gastronomy"]').prop('checked');
        console.log(isChecked);
        if (isChecked == false) {
            $('input[name="Gastronomy"]').prop('checked', true);
        } else {
            $('input[name="Gastronomy"]').prop('checked', false);
        }            
    }
    
    // Checking and Unchecking Sports
    if (checkedCategory == 'Sports') {
        var isChecked = $('input[name="Sports"]').prop('checked');
        console.log(isChecked);
        if (isChecked == false) {
            $('input[name="Sports"]').prop('checked', true);
        } else {
            $('input[name="Sports"]').prop('checked', false);
        }            
    }
}

// Dropdown for Start and End Date
function expandDates(e){
    $(e.currentTarget).next().toggleClass('hidden'); // The dropdown menu is shown
    var monthArray = ['July 2019', 'August 2019', 'September 2019', 'October 2019']; // Create an array of months left until October in 2019
    var dateID = $(e.currentTarget).attr('id'); // Check the ID of the button. Can either be date_1 for the start date or date_2 for the end date
    
    if (dateID == "date_1") { // Check if it is the start date button that is selected         
        
        var dropDown1 = $('body').find('#dropdown1'); // Find the container of the start date dropdown menu
        $(dropDown1).html(''); // Empty the container of the start dropdown menu
        
        var date2Button = $('body').find('#date_2'); // Find the end date button to check which end month is selected
        $(date2Button).html(''); // Empty the end date button
        $(date2Button).html('Until'); // Reset the date 2 button
        $(date2Button).removeClass('selected');
        $('input[name="endDate"]').val('');
        
        for (var i=0; i<monthArray.length; i++) {            
            var dropItem = $('<div class ="dropped_item" id = "'+[i]+'">'+monthArray[i]+'</div>'); // Create a dropdown item for each month
            //console.log(dropItem);
            dropItem.click(selectMonth1); // Define that the month that you click on is selected  
            dropDown1.append(dropItem); // Append the dropdown items (months) to the dropdown container
        } 
        
    }
    
    
    
    if (dateID == "date_2") {
        var date1Button = $('body').find('#date_1'); // Find the start date button to check which start month is selected
        var date1Month = $(date1Button).html(); // Return the month that is currently selected on the start date button
        console.log(date1Month); // Check the currently selected start month in the console
        
        var dropDown2 = $('body').find('#dropdown2'); // Find the container of the end date dropdown menu
        $(dropDown2).html(''); // Empty the container of the end date dropdown menu
        
        if (date1Month == 'From'){ // If no month is selected yet on the start date           
            var dropItem = $('<div class ="dropped_item" id = "nothingSelected">Please select the start month first.</div>'); // Ask user to select a start date first
            // console.log (dropItem);                       
            dropDown2.append(dropItem); // Append the text asking the user to select a start month first
            
        } else { // if the user has correctly selected a start date before selecting the end date
            var startMonthNumber = checkDate(date1Month); // checking which number in the array Date 1 has
            //console.log ('Your chosen month has the number '+checkedMonth);
            
            for (var i=startMonthNumber; i<monthArray.length; i++) { // making sure that the month dropdown items in dropdown 2 start with the month selected in dropdown 1            
                var dropItem = $('<div class ="dropped_item" id = "'+[i]+'">'+monthArray[i]+'</div>');
                dropItem.click(selectMonth2); 
                dropDown2.append(dropItem);
            }
        }        
    }
}

// Selecting the Start Date
function selectMonth1(e){
    var emptyDropDown = $(e.currentTarget).parent();    
    var dateButton = emptyDropDown.prev(); // The dropdown button that says 'Start Month'/'End Month'
    //console.log(date1Button); 
    var selectedMonth = $(e.currentTarget).html(); // The name of the selected month, e.g. July 2019
    //console.log(selectedMonth); 
    dateButton.html('');
    dateButton.html(selectedMonth);
    $('input[name="startDate"]').val(selectedMonth);
    dateButton.addClass('selected');
    $(emptyDropDown).html('');
    emptyDropDown.toggleClass('hidden');    
}

// Selecting the End Date
function selectMonth2(e){
    var emptyDropDown = $(e.currentTarget).parent();    
    var dateButton = emptyDropDown.prev(); // The dropdown button that says 'Start Month'/'End Month'
    //console.log(date1Button); 
    var selectedMonth = $(e.currentTarget).html(); // The name of the selected month, e.g. July 2019
    //console.log(selectedMonth); 
    dateButton.html('');
    dateButton.html(selectedMonth);
    $('input[name="endDate"]').val(selectedMonth);
    dateButton.addClass('selected');
    $(emptyDropDown).html('');
    emptyDropDown.toggleClass('hidden');    
}


// Dropdown for Date 2: Checking what is the month for Date 1, so that only all the months starting from that month are offered in the dropdown of Date 2
function checkDate(Month) {    
    var checkedMonth;
    if (Month == 'July 2019'){
        checkedMonth = 0;
    } else if (Month == 'August 2019'){
        checkedMonth = 1;
    } else if (Month == 'September 2019'){
        checkedMonth = 2;
    } else if (Month == 'October 2019'){
        checkedMonth = 3;
    }
    // console.log (checkedMonth);
    return checkedMonth;
}

// NATURE PAGE -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

function selectOption(e) {
    $(e.currentTarget).parent().siblings().children().removeClass('selected'); 
    $(e.currentTarget).toggleClass('selected');
    showOption();
}

function showOption() {
    if ($('#choose1').hasClass('selected')) {
        $('#chosen1').removeClass('hidden');
    } else {
        $('#chosen1').addClass('hidden');
    }
    
    if ($('#choose2').hasClass('selected')) {
        $('#chosen2').removeClass('hidden');
    } else {
        $('#chosen2').addClass('hidden');
    }
    
    if ($('#choose3').hasClass('selected')) {
        $('#chosen3').removeClass('hidden');
    } else {
        $('#chosen3').addClass('hidden');
    }
    
    if ($('#choose4').hasClass('selected')) {
        $('#chosen4').removeClass('hidden');
    } else {
        $('#chosen4').addClass('hidden');
    }
}

function showInfo (e) {
    $(e.currentTarget).parent().next().toggleClass('hidden');
}

function closeBox(e) {
    e.preventDefault();
    $(e.currentTarget).parent().toggleClass('hidden');
}