/*Blockage du déroullage de la page*/
function saveScrollPosition() {
  localStorage.setItem("scrollPosition", window.scrollY);
}

function restoreScrollPosition() {
  var scrollPosition = localStorage.getItem("scrollPosition");
  if (scrollPosition !== null) {
    window.scrollTo(0, parseInt(scrollPosition));
  }
}
window.addEventListener("beforeunload", saveScrollPosition);
window.addEventListener("load", restoreScrollPosition);

/*Bouton divGauche*/
function toggleDiv() {
  var div = document.getElementById("myDiv");
  if (div.style.display === "none") {
    div.style.display = "block"; // Pour l'afficher
  } else {
    div.style.display = "none"; // Pour le masquer
  }
}
