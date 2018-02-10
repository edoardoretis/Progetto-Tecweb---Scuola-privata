function responsiveMenu() {
    var x = document.getElementById("hMenu");
    var nav = document.getElementById("nav");
    //var path = document.getElementById("path");
    if (nav.className === "responsive") {
        nav.className = "";
        //path.style="display: none;";
    }
    else {
        nav.className = "responsive";
        //path.style="display: block;";
    }
}