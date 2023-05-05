// Filter vendors based on category



function filterVendors(category) {
    const cards = document.querySelectorAll('.vendor-card');
    cards.forEach(card => {
        if (category === 'all' || card.classList.contains(category)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Add click event listener to category buttons

document.addEventListener('DOMContentLoaded', function() {
const navButtons = document.querySelectorAll('.nav a');
navButtons.forEach(button => {
    button.addEventListener('click', () => {
        const selectedCategory = button.getAttribute('data-filter');
        filterVendors(selectedCategory);
    });
});
});

// Add active class to navbar links on click
const navLinks = document.querySelectorAll('nav ul li a');
navLinks.forEach(link => {
    link.addEventListener('click', function () {
        // Remove active class from all links
        navLinks.forEach(link => link.classList.remove('active'));
        // Add active class to clicked link
        this.classList.add('active');
    });
});

// Add fixed position to header on scroll
window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    if (window.pageYOffset > 0) {
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    }
});

// Show/hide login options
document.addEventListener("DOMContentLoaded", function () {
    const loginLink = document.getElementById('login-link');
    const loginOptions = document.getElementById('login-options');
    const userLoginBtn = document.getElementById('user-login-btn');
    const vendorLoginBtn = document.getElementById('vendor-login-btn');

    // Function to hide login options
    function hideLoginOptions() {
        loginOptions.style.display = 'none';
    }

    // Show login options when login link is clicked
    loginLink.addEventListener('click', function () {
        loginOptions.style.display = 'block';
    });

    // Redirect to user login page when user login button is clicked
    userLoginBtn.addEventListener('click', function () {
        window.location.href = '../Modules/userlogin.php';
    });

    // Redirect to vendor login page when vendor login button is clicked
    vendorLoginBtn.addEventListener('click', function () {
        window.location.href = '../Modules/vendourlogin.php';
    });

    // Hide login options when clicking outside the login options
    window.addEventListener('click', function (event) {
        if (!loginOptions.contains(event.target) && event.target !== loginLink) {
            hideLoginOptions();
        }
    });

    // Hide login options when scrolling
    window.addEventListener('scroll', function () {
        hideLoginOptions();
    });
});


function bookNow(event) {
    event.preventDefault();

    var location = document.getElementById("location").value;
    var event = document.getElementById("event").value;
    var date = document.getElementById("date").value;

    var url = "../Modules/booknow.php?location=" + location + "&event=" + event + "&date=" + date;

    console.log("url:", url); // Add this line to check if URL is being constructed correctly

    window.location.href = url;
}


  

$(document).ready(function () {
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        fade: true,
        speed: 100,

        arrows: true,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>'
    });
});



document.addEventListener('DOMContentLoaded', function() {
    // your script code here
 
var dropdownToggle = document.querySelector('.dropdown-toggle');
var dropdownMenu = document.querySelector('.dropdown-menu');

dropdownToggle.addEventListener('click', function() {
  dropdownMenu.classList.toggle('show');
});

window.addEventListener('click', function(event) {
  if (!event.target.matches('.dropdown-toggle')) {
    if (dropdownMenu.classList.contains('show')) {
      dropdownMenu.classList.remove('show');
    }
  }
});
});