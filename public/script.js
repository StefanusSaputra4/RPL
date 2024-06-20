document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll("nav ul li a");
    const slides = document.querySelectorAll(".slide");
    const cartCount = document.getElementById("cart-count");
    let itemCount = 0;  // Initialize item count for cart
    let index = 0;  // Initialize index for slides

    // Navigation Links activation
    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
            navLinks.forEach((nav) => nav.classList.remove("active"));
            this.classList.add("active");
        });
    });

    // Function to show a specific slide
    function showSlide(i) {
        slides.forEach((slide) => {
            slide.style.display = "none";
        });
        slides[i].style.display = "block";
    }

    // Function to show the next slide
    function nextSlide() {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    // Function to show the previous slide
    function prevSlide() {
        index = (index - 1 + slides.length) % slides.length;
        showSlide(index);
    }

    // Event listeners for the slider navigation buttons
    document.querySelector(".next").addEventListener("click", nextSlide);
    document.querySelector(".prev").addEventListener("click", prevSlide);

    // Show the first slide initially
    showSlide(index);

    // Cart functionality: increment item count and display on cart icon
    document.querySelectorAll(".add-to-cart-button").forEach((button) => {
        button.addEventListener("click", function () {
            itemCount++;
            cartCount.textContent = itemCount;
            cartCount.style.display = "flex"; // Show the cart count element
            alert("Barang ditambahkan ke keranjang");
        });
    });
});
