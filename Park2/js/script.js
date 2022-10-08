/**
MEANINGFUL INTERACTION #1
Mobile menu bar
A short description of why this interaction is distinct from the other interactions, content-focused & meaningful.
// */
// As most of our target audience usually uses their mobile device to browse the website, this function can enhance 
// the user experience for the mobile user. It can make the structure of the mobile website more clearly. 

// Place your JS code here
let menuButton = document.querySelector("#menu span")
if(menuButton){
    
    menuButton.addEventListener("click", function(event){

        let navgation = document.querySelector(".inside-container");
        if(navgation.style.display == ""){
            navgation.style.display = "flex"
            menuButton.style.background = "rgb(179 31 31)"
        }
        else if(navgation.style.display == "flex"){
            navgation.style.display = "";
            menuButton.style.background = "#ff4a4a"
        }
        event.preventDefault();
    });
}

/**
MEANINGFUL INTERACTION #2
Checking price
A short description of why this interaction is distinct from the other interactions, content-focused & meaningful.
*/
// This function can show the price when users click on different radio button. 
// This can remaind users the accommodation price and do not need to go back accommodation page to check the price.

// Place your JS code here
const timeZone = document.getElementsByName("time-zone");

if(timeZone[0]){
    timeZone[0].addEventListener('click', changePrice);
}
if(timeZone[1]){
    timeZone[1].addEventListener('click', changePrice);
}
function changePrice (){
    let firstPrice = document.getElementById("accommodation-price");
    if (timeZone[0].checked){
        firstPrice.innerHTML = "Accommodation Price: $300 per night";
        
    }else if (timeZone[1].checked){
        firstPrice.innerHTML = "Accommodation Price: $350 per night";
    }
}

/**
MEANINGFUL INTERACTION #3
Book ticket
A short description of why this interaction is distinct from the other interactions, content-focused & meaningful.
*/
// This function will let users book tickets online and they get some booking information after that they provide valid information. 
// It will make the booking process easier and more efficient.

// Place your JS code here
const selectedForm = document.getElementsByClassName("form");
const clientName = document.getElementById("name");
const submitButton = document.querySelectorAll(".submission button");
const windAccommodation = document.querySelector(".window-accommodation");
const adultTicket = document.getElementById('adult-ticket');
const childTicket = document.getElementById("child-ticket");
const errorMessage = document.querySelectorAll(".error-message");
const windTicket = document.querySelector(".window-ticket");
const closeSign = document.querySelectorAll(".pop-up-window span")
//Booking ticket form 
if(selectedForm[1]){
    selectedForm[1].addEventListener('submit', function(event) {
        
        let ticketDate = document.getElementById("booking-date").value;
        var formateTicketDate = new Date(ticketDate)
        var today = new Date();
        var formateToday = new Date(today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate());
        var message = '';

        // check ticket form validation
        if((adultTicket.value == "0" && childTicket.value == "0") || 
        (adultTicket.value == "" && childTicket.value == "")){
                message = "Both value can not be 0 / empty!";
        }
        if(formateToday > formateTicketDate){
            message = "Date cannot be past!";
        }
        // calculate the total price of ticket
        else{
            let totalPrice = document.getElementById('ticket-total-price');
            let price = adultTicket.value * 125 + childTicket.value * 80;
            totalPrice.innerHTML = "Total price: " + '$' + price;

            // pop up window 
            submitButton[1].addEventListener("click", function(event){
                windTicket.style.display = "flex";
                event.preventDefault();
            });
        }
        errorMessage[0].innerHTML = message;
  
        event.preventDefault();
    });
}

// close pop up windows
function closeWindow (event){
    windAccommodation.style.display = "none";
    windTicket.style.display = "none";
}
if(closeSign[0]){
    closeSign[0].addEventListener("click", closeWindow);
}
if(closeSign[1]){
    closeSign[1].addEventListener("click", closeWindow);
}


/**
MEANINGFUL INTERACTION #4
Book Accommodation
A short description of why this interaction is distinct from the other interactions, content-focused & meaningful.
*/
// This function will let users book accommodation online and they get some booking information after that they provide valid information. 
// It will make the booking process easier and more efficient.


// Place your JS code here

// Book accommodation form 
if(selectedForm[2]){
    selectedForm[2].addEventListener("submit", function(event){

        let checkIn = document.querySelector("#check-in");
        var formateCheckIn = new Date(checkIn.value)
        let checkOut = document.querySelector("#check-out");
        var message = "";
        var today = new Date();
        var formateToday = new Date(today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate());
        let dayTime = 1000 * 60 * 60 * 24
        var dateDifference = (Date.parse(checkOut.value) - Date.parse(checkIn.value)) / dayTime;

        // check the validation of accommodation form
        if(checkIn.value > checkOut.value){
            message = "Check out date cannot before check in date!"
        }
        else if (formateCheckIn < formateToday ){
            message = "Check in date cannot in past!"
        }
        else{
            // calculate number of nights
            let numberDays = document.getElementById("stay")
            numberDays.innerHTML = "Stay: " + dateDifference + " " + "night"
    
            // calculate total price
            let totalPrice = document.getElementById("accommodation-total-price")
            if(timeZone[0].checked){
                let numberRoom = document.querySelectorAll("select")
                var price = 300 * dateDifference * numberRoom[1].value;
                totalPrice.innerHTML = "Total price: $" + price

            }else if (timeZone[1].checked){
                let numberRoom = document.querySelectorAll("select")
                var price = 350 * dateDifference * numberRoom[1].value;
                totalPrice.innerHTML = "Total price: $" + price
            } 

            // pop up window
            submitButton[3].addEventListener("click", function(event){
                windAccommodation.style.display = "flex";
                event.preventDefault();
            });
        }
        errorMessage[1].innerHTML = message;  
        event.preventDefault();
    });
}
 
/**
MEANINGFUL INTERACTION #5
Automate slideshow
A short description of why this interaction is distinct from the other interactions, content-focused & meaningful.
*/
// This function will let our target audience get more information about the accommodation through images. 
// This function also can make the structure more clearly because one position only can display one image without this function. 
// If we want to show more images, they will take more space on the screen, which will make the structure so messy. 


// Place your JS code here
{
    let firstHotelImage = document.querySelector("#first-hotel-image")
    let secondHotelImage = document.querySelector("#second-hotel-image");
    if (firstHotelImage && secondHotelImage){

        var imageNumber = 0 
        var firstImages = []
        var firstImagesDescription = []

        var secondImages = []
        var secondImagesDescription = []
        var time = 2500
        
        firstImages[0] = "image/oldhouse-unsplash.jpg"
        firstImages[1] = "image/oldhouse-living-room-581073_640.jpg"
        firstImages[2] = "image/oldhouse-bedroom-425635_640.jpg"

        firstImagesDescription[0] = "the stone house in a garden "
        firstImagesDescription[1] = "the dining room in the hotel with luxury wall paper and carpet"
        firstImagesDescription[2] = "bedroom has a bed, andiron and wood floor"


        secondImages[0] = "image/prague-2086967_640.jpg"
        secondImages[1] = "image/interior-1961070_640.jpg"
        secondImages[2] = "image/room-4962276_640.jpg"
        
        secondImagesDescription[0] = "the white building in road conjection and old red car on the road "
        secondImagesDescription[1] = "The living room is classically decorated with floor-to-ceiling Windows."
        secondImagesDescription[2] = "The bedroom is classically decorated with a pale green wall and fireplace."


        function switchImage(){
            // add image and description 
            firstHotelImage.src = firstImages[imageNumber];
            firstHotelImage.alt = firstImagesDescription[imageNumber];

            secondHotelImage.src = secondImages[imageNumber];
            secondHotelImage.alt = secondImagesDescription[imageNumber];

            if(imageNumber < 2){
                imageNumber++;
            }
            else{imageNumber = 0;}
        setTimeout(switchImage, time);
        }
        window.onload = switchImage
        // inspired by Traversy Media. YouTube. https://www.youtube.com/watch?v=4YQ4svkETS0

    }
}

/**
MEANINGFUL INTERACTION # 6
add user's name to pop-up window's content
A short description of why this interaction is distinct from the other interactions, content-focused & meaningful.
*/
/**When users click the submit button in contact information form, the text of button will change to 'done' to remaind that
the form has submited. it will add users's name into pop-up windows. This function will improve the user experience and provide users 
with a sense of exclusivity and personal service. 
*/ 
// 

// Place your JS code here
// submit customer name
if(selectedForm[0]){
selectedForm[0].addEventListener('submit', function(event){
    event.preventDefault();
    let popContent = document.querySelectorAll(".pop-up-window h3");
    submitButton[0].innerHTML = "Done !"
    popContent[0].innerHTML = "Thanks" + " " + clientName.value + " " + "for booking tickets!";
    popContent[1].innerHTML = "Thanks" + " " + clientName.value + " " + "for booking accommodation!";
    
});

}

// Initialise "AOS" Plugin

if(typeof AOS != "undefined") {
    AOS.init();
}