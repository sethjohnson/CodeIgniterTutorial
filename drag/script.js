var $ = function(id){
  return(document.getElementById(id));
}

function lerp(a, b, f)
{
    return a + f * (b - a);
}

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
  image_div.style.width = img.width + "px";
  image_div.style.height = img.height + "px";
  image_div.style.left = lerp(bounds[0][0], bounds[0][1]-img.width, Math.random()) + "px";
  image_div.style.top = lerp(bounds[1][0], bounds[1][1]-img.height, Math.random()) + "px";
  image_div.style.backgroundImage = "url("+imagePath(image_div.id) + ")";  
}

function createImagesDiv (picture_div) {
  var pictures = $("pictures").getElementsByClassName("picture");
  for (var i = 0; i < pictures.length; i++) {

    configureImage(pictures[i]);
    pictures[i].style.zIndex = i+1;
    images.push(pictures[i]);


  };
      for (var i = images.length - 1; i >= 0; i--) {
    };
}

function bringImageToTop(img) {
  var coming_from = parseInt(img.style.zIndex);
     img.style.zIndex = length;

  var length = images.length;

  for (var i = 0; i < length; i++) {
    if(parseInt(images[i].style.zIndex) > coming_from) {

      images[i].style.zIndex = parseInt(images[i].style.zIndex) - 1;
    }

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
   } 
} 

function stopDrag()
{
   document.removeEventListener( "mousemove", updateImageLocation, false );
   
  
  
} 

function updateImageLocation( e ) 
{
  //Keep the image grabbed from the same point:
   theImg.style.left = (e.clientX-grab_x) + "px";
   theImg.style.top = (e.clientY-grab_y) + "px";

} 


function configure() {
  var picture_div = $("pictures");
  createImagesDiv(picture_div);
   document.addEventListener( "mousedown", startDrag, false );
   document.addEventListener( "mouseup", stopDrag, false );
}

window.onload=configure;
