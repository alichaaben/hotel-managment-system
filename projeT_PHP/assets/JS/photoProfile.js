
function upload() {

    const fileUploadInput = document.querySelector('.file-uploader');

/// Validations ///

    if (!fileUploadInput.value) {
        return;
    }

// using index [0] to take the first file from the array
    const image = fileUploadInput.files[0];

// check if the file selected is not an image file
    if (!image.type.includes('image')) {
        return alert('Only images are allowed!');
    }

// check if size (in bytes) exceeds 10 MB
    if (image.size > 10_000_000) {
        return alert('Maximum upload size is 10MB!');
    }

/// Display the image on the screen ///

    const fileReader = new FileReader();
    fileReader.readAsDataURL(image);

    fileReader.onload = (fileReaderEvent) => {
        const profilePicture = document.querySelector('.profile-picture');
        profilePicture.style.backgroundImage = `url(${fileReaderEvent.target.result})`;
    }
    const fileReader2 = new FileReader();
    fileReader2.readAsDataURL(image);

    fileReader2.onload = (fileReaderEvent) => {
        const profilePicture2 = document.querySelector('.profile-picture-room');
        profilePicture2.style.backgroundImage = `url(${fileReaderEvent.target.result})`;
    }

// upload image to the server or the cloud
}