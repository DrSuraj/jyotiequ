<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jyoti Equipments">
    <meta name="publisher" content="Jyoti Equipments">
    <meta name="robots" content="ALL">
    <title> <?php echo isset($page_title) ? $page_title : 'Jyoti Equipments-Commercial Kitchen Equipment Manufacturer & Supplier'; ?> </title>

<meta name="description" content="  <?php echo isset($description) ? $description : 'Jyoti Equipments is a leading manufacturer and supplier of high-quality commercial kitchen equipment for hotels, restaurants, caterers, and food processing units.'; ?>">

<meta name="keywords" content="<?php echo isset($keyword) ? $keyword : 'Jyoti Equipments,Preparation Equipment,Equipment Manufacturer Jaipur,Industrial Preparation Machinery,Industrial Preparation Machinery,Food Processing Equipment,Laboratory Preparation Tools,Best Preparation Equipment Manufacturer in JaipurCooking Equipment,Kitchen Equipment,Commercial Cooking Equipment,Food Processing Equipment,Commercial Kitchen Tools,Best Cooking Equipment Manufacturer in Jaipur,Best Cooking Equipment supplier in JaipurRefrigeration Equipment,Cooling Systems,Commercial Refrigeration,Industrial Refrigeration'; ?>">
<link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />

    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    
<nav class="navbar">
    <div class="container">
        <!-- Logo -->
        <a href="../index.php" class="logo" title="Home"><img src="../uploads/nav-logo-bg.png" alt="Jyoti Equipment Pvt Ltd" title="Jyoti Equipment Pvt Ltd" class="logo-img"></a>

        <!-- Desktop Menu -->
        <div id="menu" class="menu">
            <a href="../index.php " title="Home">Home</a>
            <a href="../about.php" title="About Us">About Us</a>
            <!-- Products Dropdown -->
            <div class="dropdown">
                <button class="dropdown-btn" id="productsBtn">Products ▼</button>
                <div id="productsDropdown" class="dropdown-content">
                    <a href="preparation-equipment.php" title="Preparation Equipment">Preparation Equipment </a>
                    <a href="cooking-equipment.php" title="Cooking Equipment">Cooking Equipment </a>
                    <a href="bar-equipment.php" title="Bar Equipment">Bar Equipment </a>
                    <a href="refrigeration-equipment.php" title="Refrigeration Equipment">Refrigeration Equipment  </a>
                    <a href="bakery-equipment.php" title="Bakery Equipment">Bakery Equipment </a>
                    <a href="service-equipment.php" title="Service Equipment">Service Equipment  </a>
                    <a href="pantry-equipment.php" title="Pantry Equipment">Pantry Equipment </a>
                    <a href="storage-equipment.php" title="Storage Equipment">Storage Equipment </a>
                    <a href="tables.php" title="Tables">Tables  </a>
                    <a href="washing-equipment.php" title="Washing Equipment">Washing Equipment </a>
                    <a href="display-counter.php" title="Display Counters">Display Counters  </a>
                    <a href="coffee-machines.php" title="Coffee Machines">Coffee Machines</a>
                    <a href="cold-rooms.php" title="Cold Rooms">Cold Rooms </a>
                    <a href="fast-food-equipments.php" title="Fast Food Equipment">Fast Food Equipment </a>
                    <a href="ovens.php" title="Ovens">Ovens </a>
                    <a href="dishwashers.php" title="Dishwashers">Dishwashers </a>
                    <a href="hvac-system.php" title="HVAC System">HVAC System </a>
                  
                </div>
            </div>
            <!-- <a href="#">Blogs</a> -->
            <!-- <a href="#">Services</a> -->
            <a href="../our-clients.php" title="Clients">Clients</a>
            <a href="../imported.php" title="Clients">Imported</a>
            <a href="../projects.php" title="Clients">Projects</a>
            <!-- <a href="our-clients.php" title="Projects">Projects</a> -->
            <a href="../contact.php" title="Contact Us">Contact Us</a>
        </div>

        <!-- Buy Now Button -->
        <!-- <a href="tel:9810519352" class="buy-now">Call Now</a> -->

        <!-- Mobile Menu Button -->
        <button id="mobileMenuBtn" class="mobile-menu-btn">☰</button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu">
        <a href="../index.php" title="Home">Home</a>
        <a href="../about.php" title="About Us">About Us</a>

        <!-- Mobile Dropdown (Products) -->
        <div class="dropdown">
            <button class="dropdown-btn" id="mobileProductsBtn">Products ▼</button>
            <div id="mobileProductsDropdown" class="dropdown-content">
            <a href="preparation-equipment.php" title="Preparation Equipment">Preparation Equipment </a>
                    <a href="cooking-equipment.php" title="Cooking Equipment">Cooking Equipment </a>
                    <a href="refrigeration-equipment.php" title="Refrigeration Equipment">Refrigeration Equipment  </a>
                    <a href="bakery-equipment.php" title="Bakery Equipment">Bakery Equipment </a>
                    <a href="service-equipment.php" title="Service Equipment">Service Equipment  </a>
                    <a href="pantry-equipment.php" title="Pantry Equipment">Pantry Equipment </a>
                    <a href="storage-equipment.php" title="Storage Equipment">Storage Equipment </a>
                    <a href="tables.php" title="Tables">Tables  </a>
                    <a href="washing-equipment.php" title="Washing Equipment">Washing Equipment </a>
                    <a href="display-counter.php" title="Display Counters">Display Counters  </a>
                    <a href="coffee-machines.php" title="Coffee Machines">Coffee Machines</a>
                    <a href="cold-rooms.php" title="Cold Rooms">Cold Rooms </a>
                    <a href="fast-food-equipments.php" title="Fast Food Equipment">Fast Food Equipment </a>
                    <a href="ovens.php" title="Ovens">Ovens </a>
                    <a href="dishwashers.php" title="Dishwashers">Dishwashers </a>
                    <a href="hvac-system.php" title="HVAC System">HVAC System </a>
            </div>
        </div>
        <!-- <a href="#">Blogs</a> -->
        <!-- <a href="#">Services</a> -->
        <a href="../our-clients.php">Clients</a>
        <a href="../imported.php" title="Clients">Imported</a>
        <a href="../projects.php" title="Clients">Projects</a>
        <a href="../contact.php">Contact Us</a>
    </div>
</nav>




<div id="hxb-enquiry-forms">
              <!-- Fixed Side Icons -->
            <div class="fixed-icons">
                
                <a href="tel:+919810519352" title="Call" class="phone-icon"><i class="fas fa-phone"></i></a>
                <a href="#" class="whatsapp-icon" title="Whatsapp" id="whatsapp-trigger"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="mail-icon" id="mail-trigger"><i class="fas fa-envelope"></i></a>
                <a href="../brochure.pdf" title="Brochure" class="mail-icon" id="mail-trigger"><i class="fa-solid fa-file-pdf"></i></a>
            </div>
            
            <!-- WhatsApp Popup Form -->
            <div id="whatsapp-popup" class="popup-form">
                <div class="form-content">
                    <span class="close-btn" id="close-whatsapp">&times;</span>
                    <h2>Contact via WhatsApp</h2>
                    <form id="whatsappForm" method="post">
                        <input type="text" id="whatsappName" name="whatsappName" placeholder="Name" required>
                        <input type="text" id="whatsappMobile" name="whatsappMobile" placeholder="Mobile" required>
                        <button type="submit" class="btn">Submit</button>
                    </form>
                </div>
            </div>
            
            <!-- Mail Popup Form -->
            <div id="mail-popup" class="popup-form">
                <div class="form-content">
                    <span class="close-btn" id="close-mail">&times;</span>
                    <h2>Contact via Email</h2>
                    <form id="mailForm" method="post">
                        <input type="text" id="companyName" name="companyName" placeholder="Company Name" required>
                        <input type="text" id="name" name="name" placeholder="Name" required>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <input type="text" id="mobile" name="mobile" placeholder="Mobile" required>
                        <input type="text" id="productService" name="productService" placeholder="Product/Services" required>
                        <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
      </div>


      <script>
        // Handle WhatsApp Popup

document.getElementById('whatsapp-trigger').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('whatsapp-popup').style.display = 'flex';
});

document.getElementById('close-whatsapp').addEventListener('click', function () {
    document.getElementById('whatsapp-popup').style.display = 'none';
});

document.getElementById('whatsappForm').addEventListener('submit', function (e) {
    e.preventDefault();
    var name = document.getElementById('whatsappName').value;
    var mobile = document.getElementById('whatsappMobile').value;
    var whatsappUrl = `https://api.whatsapp.com/send?phone=+919810519352&text=Hi, My name is ${name} and my mobile number is ${mobile}.`;
    window.open(whatsappUrl, '_blank');
});

// Handle Mail Popup
document.getElementById('mail-trigger').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('mail-popup').style.display = 'flex';
});

document.getElementById('close-mail').addEventListener('click', function () {
    document.getElementById('mail-popup').style.display = 'none';
});

// document.getElementById('mailForm').addEventListener('submit', function (e) {
//     e.preventDefault();
//     alert("Thank you for your message! We will get back to you shortly.");
//     document.getElementById('mail-popup').style.display = 'none';
// });
  
// Handle WhatsApp form submission
document.getElementById('whatsappForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    var formData = new FormData(this);

    fetch('../form-handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        if (result === 'success') {
            alert('WhatsApp form submitted successfully!');
            document.getElementById('whatsapp-popup').style.display = 'none';
        }
        else {
            alert('There was an error submitting the form.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Handle Mail form submission
document.getElementById('mailForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    var formData = new FormData(this);

    fetch('../form-handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        if (result === 'success') {
            alert('Mail form submitted successfully!');
            document.getElementById('mail-popup').style.display = 'none';
        } else {
            alert('There was an error submitting the form.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Handle Footer Mail Popup

    // Open the mail popup using class
    const mailPopupLinks = document.querySelectorAll('.open-mail-popup');
    mailPopupLinks.forEach(link => {
        link.onclick = function(e) {
            e.preventDefault(); // Prevent the default anchor click behavior
            document.getElementById('mail-popup').style.display = 'flex'; // Show the popup
        };
    });

    // Close the mail popup
    document.getElementById('close-mail').onclick = function() {
        document.getElementById('mail-popup').style.display = 'none'; // Hide the popup
    };

    // Close the popup when clicking outside of it
    window.onclick = function(event) {
        const popup = document.getElementById('mail-popup');
        if (event.target === popup) {
            popup.style.display = 'none'; // Hide the popup
        }
    };
    
    
    // Contact page form
    
    document.getElementById('contactPageForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Collect form data
    var formData = new FormData(this);

    // Send data to the PHP handler
    fetch('../form-handler.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        if (result === 'success') {
            alert('Your message has been sent successfully!');
        } else {
            alert('There was an error sending your message. Please try again later.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error sending your message. Please try again later.');
    });
    });

      </script>