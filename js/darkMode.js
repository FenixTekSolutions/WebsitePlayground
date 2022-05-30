var darkmode = localStorage.getItem("dark");
if(darkmode == undefined)
{
    darkmode = false;

}
function ToggleDarkMode()
{
    darkmode = !darkmode;
    localStorage.setItem("dark", darkmode);
    console.log(darkmode);

    var style = document.getElementById("stylesht");
    style.href = darkmode ? "css/dark.css" : "css/light.css";
}

function SelectMode(){
    var style = document.getElementById("stylesht");
    darkmode = localStorage.getItem("dark");
    style.href = darkmode ? "css/dark.css" : "css/light.css";
    console.log("SelectMode triggered - Darkmode = " + darkmode);
}