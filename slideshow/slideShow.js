var current_img = 0;
var previous_img = 0;
var num_img = 6; // 4 elements indexed 0-3, so we use 3 here
var infoType = 0;  
var slideshown_on = false;
var current_slide = false;
var mydelay = 1000; // delay interval = 1000ms, approx 1 sec
/* Array with the image information */
var imgList =new Array("d3swimvenue", "Panorama-008", "siebert_Field", "tcf_stadium","tennis-courts-aerial","williams_Arena");
var infoTypes = ["", "Facility","Sport", "Address"];
var infoArray = [
["","University Aquatic Center", "Swimming","1910 University Ave SE,  Minneapolis, MN 55455"],
["","Mariucci Arena","Hockey", "1901 4th St SE, Minneapolis, MN 55455"],
["","Siebert Stadium", "Baseball", "516 15th Av. SE., Minneapolis, MN"],
["","TCF Stadium", "Football", "1602 New Brighton Blvd, Minneapolis, MN 55413"], 
["", "Williams Arena", "Basketball","1925 SE 17th Ave, Minneapolis, MN 55455"],
["", "Nike Tennis Camp", "Tennis", "1815 4th Street SE, Minneapolis, MN, 55455"]
];

var $ = function(id){
	return(document.getElementById(id));
	}
	
/* Handles the slide show functionality */

function jumpSlide(e) {

  current_img = Number(e.target.id.replace("image_",""));
    refreshSlideShow();

}
function showSlide () {
  current_img = 0;
  refreshSlideShow();
}

function nextSlide() {
  current_img++;
  refreshSlideShow();
}

function previousSlide() {
  current_img--;
  refreshSlideShow();
}
function imagePath(i) {
    var image = imgList[i];
    return ("stadiums/").concat(image.concat(".jpg"));

}
function setControlButton(btn, num) {
  btn.style.backgroundImage = "url("+imagePath(num) + ")";
  btn.getElementsByClassName("button_info")[0].innerHTML = infoArray[num][info_type];
}
function refreshInterface() {
      setControlButton($("control_start"), 0);
      setControlButton($("control_previous"), calcImageNum(current_img-1));
      setControlButton($("control_next"), calcImageNum(current_img+1));

}

 
function calcImageNum(i) {
  return (i + num_img ) % num_img;
}
function refreshSlideShow() {
    refreshInfo();

    current_img = calcImageNum(current_img);
    var image_element = $("image-display"); // Get the Dom info for the Big Image (in HTML file)

  image_element.style.backgroundImage = "url("+imagePath(current_img) + ")";
    image_element.alt = "Image Number: " + current_img;


  var buttons = document.getElementById("jump_slide_buttons").children;

  for (var i = 0; i < buttons.length; i++) {
    if (i == current_img) {
      buttons[i].className = "slide_button_selected";
    } else{
      buttons[i].className = "slide_button";

    };

  };
refreshInterface();
}

function refreshInfo() {
  if (info_type == 0) {  
    $("info-content").innerHTML = "<strong>No Informaton Requested.</strong>";
  } else {
     $("info-content").innerHTML = "<strong>" + infoTypes[info_type] + "</strong>" + ": <br/>" + infoArray[calcImageNum(current_img)][info_type];

  };
}
function slideShow(){  
    
  nextSlide();

  /* Set the border color for the current and previous images here*/



  current_slide = true;
  slideshown_on = true;
	
} // end slideshow 
  

/* Handles the slide start slide show button*/
/* This callback is set in the HTML file, on the start button */
function startSlideShow(){
  if(!slideshown_on){	
  
 
      myVar = setInterval(function(){slideShow()}, mydelay);
   current_img = -1;
   slideShow();
    }
	else{ 
	alert("slide show is already active!");
	}
}

/* Handles the stop slide show button*/
/* This callback is set in the HTML file, on the stop button */
function stopSlideShow(){
  
    slideshown_on = false;
    clearTimeout(myVar);
}
function infoTypeChange (e) {
  info_type = Number(e.target.selectedIndex);
  refreshInterface();
  refreshSlideShow();
}
function configure() {
  var buttons = document.getElementById("jump_slide_buttons").children;
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click",jumpSlide);
  };
  $("info_type").addEventListener("change", infoTypeChange);
  $("info_type").selectedIndex = 0;
  info_type = 0;
  $("info-content").innerHTML = "";
  refreshInterface();
     setControlButton($("control_start"), 0);
  setControlButton($("control_previous"), 0);
  setControlButton($("control_next"), 0);
 }
window.onload=configure;
