
/******************fonction add faciliter*************/
var lineCount = 0;

function AddCustom() {
    var value = document.getElementById('custom_value').value;

    // Création de la ligne de tableau
    var newRow = document.createElement('tr');
    newRow.setAttribute('id', 'line' + lineCount);
    newRow.setAttribute('class', 'line-custom');

    // Création de la colonne de valeur
    var valueCell = document.createElement('td');
    valueCell.textContent = value;

    // Création de la colonne de suppression
    var deleteCell = document.createElement('td');
    deleteCell.setAttribute('align', 'right');
    var deleteLink = document.createElement('a');
    deleteLink.setAttribute('href', 'javascript:void(0)');
    deleteLink.setAttribute('onclick', 'RemoveLine(this)');
    var deleteIcon = document.createElement('img');
    deleteIcon.setAttribute('src', './assets/delete.png');
    deleteIcon.setAttribute('width', '16'); // Largeur de l'image en pixels
    deleteIcon.setAttribute('height', '16'); // Hauteur de l'image en pixels
    deleteLink.appendChild(deleteIcon);
    deleteCell.appendChild(deleteLink);

    // Ajout des colonnes à la ligne
    newRow.appendChild(valueCell);
    newRow.appendChild(deleteCell);

    // Ajout de la ligne au tableau
    document.getElementById('custom_display').appendChild(newRow);

    // Incrémenter le compteur de lignes
    lineCount++;

    // Vider l'input
    document.getElementById('custom_value').value = "";
}

function RemoveLine(element) {
    var rowToRemove = element.parentNode.parentNode;
    rowToRemove.parentNode.removeChild(rowToRemove);
}