// Array of images to scroll through 
var imgArr = [
    "img/gallery/3D/Barrell.png",
    "img/gallery/3D/Desk.png",
    "img/gallery/3D/Donut.png",
    "img/gallery/3D/Robot1.png",
    "img/gallery/3D/Robot2.png",
    "img/gallery/3D/Sword.png"
]

// Iterator
var num = 0;

function Next()
{
    var crsl = document.getElementById("carousel");

    num++;
    if(num >= imgArr.length)
    {
        num = 0;
    }

    crsl.src = imgArr[num];
    console.log("Clicked Next");
}

function Prev()
{
    var crsl = document.getElementById("carousel");

    num--;
    if(num < 0)
    {
        num = imgArr,length-1;
    }

    crsl.src = imgArr[num];
    console.log("Clicked Prev");
}
