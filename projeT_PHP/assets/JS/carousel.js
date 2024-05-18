
/**********************************************************************/
// Function to open carousel popup
function openCarousel(images) {
    const modal = document.getElementById('imageModal');
    const carouselImg = document.getElementById('carousel-img');

    carouselImg.src = images[0];
    modal.style.display = 'block';

    let currentIndex = 0;

    function setCurrentImage(index) {
        carouselImg.src = images[index];
        currentIndex = index;
    }

    function changeSlide(step) {
        let newIndex = currentIndex + step;
        if (newIndex < 0) {
            newIndex = images.length - 1;
        } else if (newIndex >= images.length) {
            newIndex = 0;
        }
        setCurrentImage(newIndex);
    }

    document.querySelector('.prev').addEventListener('click', () => changeSlide(-1));
    document.querySelector('.next').addEventListener('click', () => changeSlide(1));
}

// Function to close carousel popup
function closeCarousel() {
    document.getElementById('imageModal').style.display = 'none';
}



// JavaScript code to handle filtering based on dropdown selection
document.getElementById('filter-dropdown').addEventListener('change', function () {
    const selectedCategory = this.value;
    const cards = document.querySelectorAll('#filterable-cards .card');

    cards.forEach(card => {
        const categoryName = card.getAttribute('data-name');
        if (selectedCategory === 'all' || categoryName === selectedCategory) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});