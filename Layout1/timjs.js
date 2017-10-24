
//onclick toggle menu
var isOpen = false;
function displayMenu() {
  if (!isOpen) {
    document.getElementsByTagName("ul")[0].style.display = 'block';
    isOpen = true;
  }
  else {
    document.getElementsByTagName("ul")[0].style.display = 'none';
    isOpen = false;
  }
}

//per evitare conflitto tra la modalità mobile e web
function menuEnabled() {
  var w = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;
  if (w > 680) {
    document.getElementsByTagName("ul")[0].style.display = 'block';
    isOpen = true;
  }
  else {
    document.getElementsByTagName("ul")[0].style.display = 'none';
    isOpen = false;
  }
}
