var darkmode;

if(window.localStorage.getItem("dark") != null)
{
    darkmode = window.localStorage.getItem("dark");
}
else{
    darkmode = false;
}

window.localStorage.setItem("dark", darkmode);
console.log(localStorage.getItem("dark"));

function ToggleDarkMode()
{
    darkmode = !darkmode;
    window.localStorage.setItem("dark", darkmode);
    console.log(darkmode);
    SelectMode();
}

function SelectMode(){
    var style = document.getElementById("stylesht");
    darkmode = JSON.parse(window.localStorage.getItem("dark"));

    style.href = darkmode ? "css/dark.css" : "css/light.css";

    console.log("SelectMode triggered - Darkmode = " + darkmode);
    console.log("localStorage('dark') = " + window.localStorage.getItem("dark"));
    console.log(style.href);
}