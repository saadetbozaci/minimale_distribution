var acc = document.getElementsByClassName("frame-acc-open"); // is the class
var index; // is the index

for (index = 0; index < acc.length; index++) {
    // acc.index : is the class value
    // Das Akkordion erhält mit addEventListener einen EventHandler, der bei einem Klick die Funktion click aufruft
    acc[index].addEventListener("click", function() {
        // ermitelt das geklickte Element
        this.classList.toggle("active");
        //Identifikation des Nachbarelement zum Aus-/ Einklappen 
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}