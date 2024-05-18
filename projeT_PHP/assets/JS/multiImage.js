
/***************************imageMultiple***************/
document.getElementById('fileInput').addEventListener('change', function() {
    const files = this.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
            const imageContainer = document.createElement('div'); // Créer un conteneur pour l'image
            imageContainer.classList.add('img-container');

            const image = new Image();
            image.src = e.target.result;
            image.classList.add('img-preview');
            imageContainer.appendChild(image);

            // Ajouter un bouton de suppression à l'intérieur du conteneur
            const deleteBtn = document.createElement('button');
            deleteBtn.innerHTML = 'X';
            deleteBtn.classList.add('delete-btn');
            imageContainer.appendChild(deleteBtn);

            document.getElementById('imageContainer').appendChild(imageContainer);

            deleteBtn.addEventListener('click', function() {
                imageContainer.parentNode.removeChild(imageContainer);
            });
        }

        reader.readAsDataURL(file);
    }
});

