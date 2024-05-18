function loadPage(url) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("pageContent").innerHTML = xhr.responseText;
        }
    };

    xhr.open("GET", url, true);
    xhr.send();
}

// Ajoutez des gestionnaires d'événements aux liens de la barre latérale
var sidebarLinks = document.querySelectorAll(".sidebar-link");
sidebarLinks.forEach(function(link) {
    link.addEventListener("click", function(event) {
        event.preventDefault(); // Empêche le lien de charger une nouvelle page
        var url = this.getAttribute("data-url"); // Récupère l'URL de la page cible depuis l'attribut data-url
        loadPage(url); // Charge la page de manière asynchrone
    });
});