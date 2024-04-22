/*Blockage du déroullage de la page*/
function saveScrollPosition() {
    localStorage.setItem('scrollPosition', window.scrollY);
}

function restoreScrollPosition() {
    var scrollPosition = localStorage.getItem('scrollPosition');
    if (scrollPosition !== null) {
        window.scrollTo(0, parseInt(scrollPosition));
    }
}
window.addEventListener('beforeunload', saveScrollPosition);
window.addEventListener('load', restoreScrollPosition);