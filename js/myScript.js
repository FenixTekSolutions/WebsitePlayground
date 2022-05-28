
function Loaded(){
    //alert("Welcome");
}

var darkmode = false;

function ToggleDarkMode()
{
    darkmode = !darkmode;
    console.log(darkmode);
}

function InvalidCredentials()
{
    alert("Username or password is missing or incorrect!");
}

function test(){
    window.open("test.php");
}
// var btnDM;

// onload (btnDM = document.getElementById("darkmodebutton"));
// btnDM.addEventListener("click", ToggleDarkMode, false);
