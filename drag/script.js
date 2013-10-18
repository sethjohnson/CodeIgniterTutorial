var $ = function(id){
  return(document.getElementById(id));
}

function lerp(a, b, f)
{
    return a + f * (b - a);
}

var pictures = ["flowers", "colors", "cat"];
var images = [];
var bounds = [[0,500],[0,500]];

var theImg; 
var grab_x;
var grab_y;
var zIndex;
  
function imagePath(name) {
  return "pictures/"+name+".jpg";
}
function configureImage(image_div) {
  var img = new Image();
  img.src = imagePath(image_div.id);
  image_div.style.backgroundImage = "url("+imagePath(image_div.id) + ")";  
  image_div.style.width = img.width + "px";
  image_div.style.height = img.height + "px";
  image_div.style.left = lerp(bounds[0][0], bounds[0][1]-img.width, Math.random()) + "px";
  image_div.style.top = lerp(bounds[1][0], bounds[1][1]-img.height, Math.random()) + "px";
  image_div.style.backgroundImage = "url("+imagePath(image_div.id) + ")";  
}

function createImagesDiv (picture_div) {
  for (var i = pictures.length - 1; i >= 0; i--) {
    var new_pic_div = document.createElement("div");
    new_pic_div.id = pictures[i];
    new_pic_div.className = "picture";
    configureImage(new_pic_div);
    new_pic_div.style.zIndex = i+1;
    picture_div.appendChild(new_pic_div);
    images.push(new_pic_div);

  };
}

function bringImageToTop(img) {
  var coming_from = parseInt(img.style.zIndex);
  var length = images.length;
    //alert(coming_from + ", " + (length));
  for (var i = 0; i < length; i++) {
    //alert(i + ": " + images[i].id);
    if(images[i].style.zIndex > coming_from);
    images[i].style.zIndex = parseInt(images[i].style.zIndex) - 1;
    // Do something with element i.
  }
   img.style.zIndex = length;
}
function startDrag( e )
{
   if ( e.target.className == "picture" ) // if you mouse down of the image Object
   {
      theImg = e.target;
      bringImageToTop(theImg);
      grab_x = e.clientX - parseInt(theImg.style.left);
      grab_y = e.clientY - parseInt(theImg.style.top);



      document.addEventListener( "mousemove", updateImageLocation, false ); //add a listener
   } // end if
} // end function startDrag

function stopDrag()
{
   document.removeEventListener( "mousemove", updateImageLocation, false );
   
  // for multiple image case, set theImage = null;
  // that ensures the if statement in startdrag will function correctly
} // end function stopDrag

function updateImageLocation( e ) // events are passed to the listener after it is registered
{
//update css attributes of the image by getting values from the event
   theImg.style.left = (e.clientX-grab_x) + "px";
   theImg.style.top = (e.clientY-grab_y) + "px";

} // end function updateImageLocation


function configure() {
  var picture_div = $("pictures");
  createImagesDiv(picture_div);
   document.addEventListener( "mousedown", startDrag, false );
   document.addEventListener( "mouseup", stopDrag, false );
}

window.onload=configure;
