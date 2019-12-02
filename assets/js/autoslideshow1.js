//Image array
var imageArray = ["./../images/autoslide/1.png", "./../images/autoslide/2.jpeg", "./../images/autoslide/3.jpeg"];

//save array size to variable arrayLength
var arrayLength = imageArray.length;

//set time inbetween slides, in miliseconds
setInterval(runit, 2800);

//variable to count the arrray size
var x = 1

//function runit, runs slideshow when called
function runit() {
    //set image to the next picture in the array
    document.getElementById('auto1_slideshow').src = imageArray[x];

    //increase the count in "x" to advance to next image
    x++;

    //loops back to the first image if it reaches the end
    if (x === arrayLength) {
        x = 0;
    }
}