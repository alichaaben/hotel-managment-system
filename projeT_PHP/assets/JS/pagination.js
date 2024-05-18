

// Fonction pour afficher la page précédente
function previousPage(tableId) {
    var table = document.getElementById(tableId);
    var currentPage = parseInt(table.getAttribute("data-page"));
    if (currentPage > 1) {
        currentPage--;
        showPage(table, currentPage);
    }
}

// Fonction pour afficher la page suivante
function nextPage(tableId) {
    var table = document.getElementById(tableId);
    var currentPage = parseInt(table.getAttribute("data-page"));
    var totalPages = parseInt(table.getAttribute("data-total-pages"));
    if (currentPage < totalPages) {
        currentPage++;
        showPage(table, currentPage);
    }
}

// Fonction pour afficher la page spécifique
function showPage(table, pageNumber) {
    var rows = table.rows;
    var rowsPerPage = parseInt(table.getAttribute("data-rows-per-page"));
    var startIndex = (pageNumber - 1) * rowsPerPage;
    var endIndex = startIndex + rowsPerPage;

    // Afficher les lignes de la page spécifique et masquer les autres
    for (var i = 1; i < rows.length; i++) {
        if (i >= startIndex && i < endIndex) {
            rows[i].style.display = "table-row";
        } else {
            rows[i].style.display = "none";
        }
    }

    // Mettre à jour l'attribut data-page
    table.setAttribute("data-page", pageNumber);
}

// Initialisation de la pagination pour chaque tableau
document.addEventListener("DOMContentLoaded", function() {
    var tables = document.querySelectorAll("table");
    tables.forEach(function(table) {
        var rowsPerPage = 7; // Nombre de lignes par page
        var totalRows = table.rows.length -1; // Soustraire l'en-tête
        var totalPages = Math.ceil(totalRows / rowsPerPage);

        // Initialiser les attributs de pagination
        table.setAttribute("data-page", 1);
        table.setAttribute("data-rows-per-page", rowsPerPage);
        table.setAttribute("data-total-pages", totalPages);

        // Afficher la première page
        showPage(table, 1);
    });
});
