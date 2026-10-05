<?php
include('header.php');
// include('db.php');
// $result = $conn->query("SELECT * FROM product ");
?>
<link rel="stylesheet" href="styles.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
.kitchen-custom-section {
  padding: 80px 20px;
  background: #fff;
  font-family: 'Poppins', sans-serif;
  color: #333;
}

.kitchen-container {
  max-width: 1200px;
  margin: auto;
  text-align: center;
}

/* Header */
.kitchen-header h2 {
  color: #cc0000;
  font-size: 36px;
  margin-bottom: 10px;
}

.kitchen-header p {
  font-size: 18px;
  color: #666;
  margin-bottom: 60px;
}

/* Process Timeline */
.kitchen-process-section {
  margin: 80px 0;
}

.process-heading {
  font-size: 28px;
  color: #444;
  margin-bottom: 50px;
  font-weight: 600;
}

.process-timeline {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
  position: relative;
  padding: 0 20px;
}

.timeline-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  flex: 1 1 150px;
  min-width: 100px;
}

.timeline-icon {
  background: #fff;
  border: 3px solid #cc0000;
  border-radius: 50%;
  padding: 15px;
  width: 80px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.3s ease;
}

.timeline-icon img {
  height: 40px;
  width: 40px;
}

.timeline-step p {
  margin-top: 12px;
  font-weight: 500;
  color: #cc0000;
}

.timeline-line {
  height: 3px;
  background: #cc0000;
  flex-grow: 1;
  margin: 0 10px;
  min-width: 30px;
}

.timeline-icon:hover {
  transform: scale(1.1);
  box-shadow: 0 0 12px rgba(204, 0, 0, 0.3);
}
.timeline-icon.red-theme {
  background-color: #ff0000; /* Bright red */
  color: #ffffff; /* White icon */
  padding: 20px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(255, 0, 0, 0.3);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.timeline-icon.red-theme:hover {
  transform: scale(1.1);
  box-shadow: 0 8px 20px rgba(255, 0, 0, 0.5);
}

.timeline-icon.red-theme i {
  font-size: 24px;
}


@media (max-width: 768px) {
  .process-timeline {
    flex-direction: column;
    gap: 30px;
  }

  .timeline-line {
    width: 3px;
    height: 30px;
    margin: 10px 0;
  }
}

/* Components */
.kitchen-components h3 {
  font-size: 26px;
  margin-bottom: 20px;
  color: #444;
}

.kitchen-components ul {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 15px;
  list-style: none;
  padding: 0;
}

.kitchen-components li {
  background: #ffe5e5;
  color: #b00000;
  padding: 10px 20px;
  border-radius: 9999px;
  font-weight: 500;
  border: 1px solid #ffcccc;
}

/* CTA */
.kitchen-cta {
  margin-top: 60px;
}

.kitchen-cta h4 {
  font-size: 22px;
  margin-bottom: 20px;
  color: #444;
}

.kitchen-cta a {
  background: #cc0000;
  color: white;
  padding: 14px 32px;
  border-radius: 999px;
  font-size: 16px;
  text-decoration: none;
  transition: 0.3s ease;
  display: inline-block;
}

.kitchen-cta a:hover {
  background: #a00000;
}

</style>
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('uploads/banner.avif');"></div>
    <div class="hero-bg" style="background-image: url('uploads/ban-2.avif');"></div>

    <div class="content-box">
        <h2>For A <span class="highlight">Better</span> Experience</h2>
        <p>Upgrade Your Kitchen, Enhance Your Performance with Jyoti Equipment's Discover durable, high-performance kitchen solutions designed for efficiency and reliability.</p>
        <div class="buttons">
            <a href="contact.php" class="btn secondary">Learn More</a>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <button class="nav-btn left-btn">&#10094;</button>
    <button class="nav-btn right-btn">&#10095;</button>
</section>



<!-- <div class="container-slide">
        <div class="content">
            <h1>JUST COME TO FOODIE & ORDER</h1>
            <p>Here you will find all the best quality and pure food. Order now to satisfy your hunger!</p>
            <div class="buttons">
                <a href="#" class="btn btn-primary">Order Now</a>
                <a href="#" class="btn btn-secondary">Explore More</a>
            </div>
        </div>
        <div class="image-section">
            <img src="uploads/main1.png" alt="Delicious Food">
        </div>
    </div> -->

<section class="about-container">
    <div class="about-grid">
        <!-- Left Side: About Us Content -->
        <div class="about-content">
            <h2>About Us</h2>
            <p>Welcome to Jyoti Equipments, your one-stop shop for excellent commercial kitchenware. Our specialty is offering the best kitchen solutions for catering companies, hotels, restaurants, banquets, and food processing facilities. Our goods are made to be long-lasting, effective, and operate smoothly, so your kitchen will function properly and adhere to industry requirements. Jyoti Equipments has the ideal option for you, whether you need special cooking and refrigeration machines or a whole commercial kitchen setup. Businesses wishing to improve their kitchen operations choose us because of our dedication to quality and client happiness.</p>
            <a href="about.php" class="learn-more">Learn More</a>
        </div>

        <!-- Right Side: Mission, Vision, Values with Icons -->
        <div class="about-values">
            <div class="value-box">
                <span class="icon">🚀</span>
                <div>
                    <h3>Our Mission</h3>
                    <p>To empower hotels, restaurants, and cafes with high-quality, custom kitchen and hospitality solutions for unmatched efficiency and excellence.
                    </p>
                </div>
            </div>
            <div class="value-box">
                <span class="icon">🎯</span>
                <div>
                    <h3>Our Vision</h3>
                    <p>To lead India’s hospitality industry as the go-to source for innovative, tailored kitchen equipment.</p>
                </div>
            </div>
            <div class="value-box">
                <span class="icon">💡</span>
                <div>
                    <h3>Our Values</h3>
                    <p> <b>Excellence:</b> Delivering superior products and service every time.</p>
                    <p><b>Customization:</b>Crafting bespoke solutions for every kitchen to meet unique needs.</p>
                    <p><b>Innovation:</b>Leveraging technology for smarter, better designs.</p>
                    <p><b>Trust:</b>Fostering reliable, lasting client relationships.</p>
                    <p><b>Sustainability:</b>Championing eco-friendly practices in all we do.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="img/indian.avif" width="100%" alt="Preparation Equipment Manufacturer in India" title="Preparation Equipment Manufacturer in India">
        </div>
        <div class="col-sm-6">
            <img src="uploads/Preperation1.avif" width="100%" alt="Preparation Equipment Manufacturer in India" title="Preparation Equipment Manufacturer in India">
        </div>
    </div>
</div>

<style>
    .slide-text2 a {
color: white;
text-decoration: none;
    }
    </style>




<div class="carousel-container-BOX mt-5 mb-5">
    <h2 id="testimonial-heading">Discover Our High-Quality Solutions</h2><br>
    <!-- Left Arrow -->
    <button class="arrow left" id="prevBtn">&#10094;</button>

    <div class="carousel-wrapper" id="carouselWrapper">

        <!-- SEO Optimized Slides -->
        <div class="slide">
            <img src="uploads/commercial-kitchen-equipment.avif" alt="Commercial Kitchen Equipment Manufacturer in India" title="Commercial Kitchen Equipment Manufacturer in India">
            <div class="slide-text1">Kitchen Equipment</div>
            <div class="slide-text2"><a href="cooking-equipment.php" title="Cooking Equipment">View</a></div>
        </div>
        <div class="slide">
            <img src="uploads/storage-equipment2.avif" alt="Hotel Equipment Manufacturer in India" title="Hotel Equipment Manufacturer in India">
            <div class="slide-text1">Hotel Equipment </div>
            <div class="slide-text2"><a href="fast-food-equipments.php" title="Fast food Equipment">View</a></div>
        </div>
        <div class="slide">
            <img src="uploads/industrial-kitchen-equipment.avif" alt="Industrial Kitchen Equipment Manufacturer in India" title="Industrial Kitchen Equipment Manufacturer in India">
            <div class="slide-text1">Industrial Kitchen Equipment</div>
            <div class="slide-text2"><a href="preparation-equipment.php" title="Preparation Equipment">View</a></div>
        </div>
        <div class="slide">
            <img src="uploads/banquet-kitchen-equipment.avif" alt="Banquet Kitchen Manufacturer in India" title="Banquet Kitchen Manufacturer in India">
            <div class="slide-text1">Banquet Kitchen Equipment</div>
            <div class="slide-text2"><a href="service-equipment.php" title="Service Equipment">View</a></div>
        </div>
        <div class="slide">
            <img src="uploads/hotel-kitchen-equipment.avif" alt="Hotel Kitchen Manufacturer in India" title="Hotel Kitchen Manufacturer in India">
            <div class="slide-text1">Hotel Kitchen Equipment</div>
            <div class="slide-text2"><a href="cooking-equipment.php" title="Cooking Equipment">View</a></div>
        </div>
        <div class="slide">
            <img src="uploads/service-trolley.avif" alt="Kitchen Supplier Manufacturer in India" title="Kitchen Supplier Manufacturer in India">
            <div class="slide-text1">Service Trolley</div>
            <div class="slide-text2"><a href="service-equipment.php" title="Service Trolley">View</a></div>
        </div>
        <div class="slide">
            <img src="uploads/service-rack.avif" alt="Best Kitchen Equipment Manufacturer in India" title="Best Kitchen Equipment Manufacturer in India">
            <div class="slide-text1">Service Rack</div>
             <div class="slide-text2"><a href="service-equipment.php" title="Service Equipment">View</a></div>
        </div>
        
    </div>

    <!-- Right Arrow -->
    <button class="arrow right" id="nextBtn">&#10095;</button>
</div>

<section class="manufacturing-services">
    <!-- <h2>Manufacturing</h2>
            <p>Our manufacturing facilities and technical expertise cater to the manufacture of a broad range of 
               refrigeration equipment and stainless-steel products for commercial kitchens and other commercial 
               and industrial applications. Our Manufactured Products range from:</p>
         -->
    <h2>Services We Provide</h2>
    <div class="card-container">
        <div class="card">
            <i class="fas fa-comments icon"></i>
            <h3>Consultation</h3>
            <p>Initial consultation with owners, architects, and consultants to determine objectives.</p>
        </div>
        <div class="card">
            <i class="fas fa-drafting-compass icon"></i>
            <h3>Designing Layouts</h3>
            <p>Creating functional layouts and specifying equipment for food service facilities.</p>
        </div>
        <div class="card">
            <i class="fas fa-coins icon"></i>
            <h3>Budget Planning</h3>
            <p>Analyzing costs to establish a practical budget for the project.</p>
        </div>
        <div class="card">
            <i class="fas fa-tools icon"></i>
            <h3>Supervision</h3>
            <p>Monitoring fabrication to ensure equipment meets client standards.</p>
        </div>
        <div class="card">
            <i class="fas fa-truck-loading icon"></i>
            <h3>Supply & Installation</h3>
            <p>Delivering and setting up equipment at various service points.</p>
        </div>
        <div class="card">
            <i class="fas fa-user-cog icon"></i>
            <h3>Commissioning & Training</h3>
            <p>Ensuring proper operation and training staff for efficient usage.</p>
        </div>
        <div class="card">
            <i class="fas fa-headset icon"></i>
            <h3>After Sales Service</h3>
            <p>Ensuring proper operation and training staff for efficient usage.</p>
        </div>


        <div class="card">
            <i class="fas fa-wrench icon"></i>
            <h3>AMC and CMC under Maintenance</h3>
            <p>Comprehensive and annual maintenance services for uninterrupted performance.</p>
        </div>


        <!-- <div class="card">
                    <i class="fas fa-wrench icon"></i>
                    <h3>Service & Maintenance</h3>
                    <p>Providing ongoing service and maintenance for installed equipment.</p>
                </div> -->
    </div>
</section>





<br>
<section class="manufacturing-services">
    <!-- <h2>Manufacturing</h2>
            <p>Our manufacturing facilities and technical expertise cater to the manufacture of a broad range of 
               refrigeration equipment and stainless-steel products for commercial kitchens and other commercial 
               and industrial applications. Our Manufactured Products range from:</p>
         -->
    <h2>Maintenance</h2>


<div id="maintenance-cards">
  <div class="card" id="card-amc">
    <i class="fas fa-comments icon"></i>
    <h3>AMC</h3>
    <p>Annual Maintenance Contract offering scheduled service and support to prevent system downtime.</p>
  </div>

  <div class="card" id="card-cmc">
    <i class="fas fa-wrench icon"></i>
    <h3>CMC</h3>
    <p>Comprehensive Maintenance Contract covering repairs, parts, and full service for hassle-free operation.</p>
  </div>
</div>



</div>

</section>



<!-- number counter or viste counter-->

<section class="counter-section mb-5" style="margin-top: 20px;">
    <div class="counter-content">
        <p>The Ultimate Commercial Kitchen Solutions.</p>
        <h2>You convey the idea, and we deliver a refined interface.</h2>
        <p>We are a leading provider of commercial kitchen solutions, equipping businesses with top-quality appliances and innovative designs to enhance efficiency and performance.</p>
        <a href="about.php" class="btn-more">More Details</a>
    </div>
    <div class="counter-container">
        <div class="counter-box">
            <span class="counter" data-target="2005">0</span>
            <p>Year of Establishment</p>
        </div>
        <div class="counter-box">
            <span class="counter" data-target="10">0</span>
            <p>Overseas</p>
        </div>
        <div class="counter-box">
            <span class="counter" data-target="5598">0</span>
            <p>Clients Served</p>
        </div>

    </div>
</section>






<div class="container-before my-5">
    <div class="row">
        <h2 class="aft text-center mb-5">Outdated appliances slowing down productivity ?</h2>
        <!-- Column 1 -->
        <div class="col-sm-6 d-flex align-items-center">

            <div class="features-container">
                <!-- Feature 1 -->
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fa fa-cog"></i>
                    </div>
                    <div class="feature-title">Increased Efficiency</div>
                    <div class="feature-text">Advanced kitchen tools streamline food preparation, reducing wait times and boosting productivity.</div>
                </div>

                <!-- Feature 2 -->
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fa fa-angle-double-up"></i>
                    </div>
                    <div class="feature-title">Optimized Utilization</div>
                    <div class="feature-text">Smartly designed equipment maximizes kitchen space, improving workflow and reducing clutter.</div>
                </div>
            </div>

        </div>

        <!-- Column 2: Before-After Image Slider -->
        <div class="col-sm-6">
            <div class="about-image-slider">
                <div class="image-container">
                    <img src="uploads/before.avif" alt="Jyoti Equipment" title="Jyoti Equipment" class="slider-image image-left">
                    <img src="uploads/after.avif" alt="Jyoti Equipment" title="Jyoti Equipment" class="slider-image image-right">
                </div>
                <div class="slider-handle">
                    <div class="handle-icon">⟷</div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="kitchen-custom-section">
  <div class="kitchen-container">

    <!-- Heading -->
    <div class="kitchen-header">
      <h2>Customized Kitchen Solutions</h2>
      <p>Tailored components, finishes & layouts to perfectly match your space and lifestyle.</p>
    </div>

    <!-- Process Timeline -->
    <div class="kitchen-process-section">
      <h3 class="process-heading">Our Process</h3>
      <div class="process-timeline">

        <div class="timeline-step">
        <div class="timeline-icon red-theme">
  <i class="fas fa-video"></i>
</div>

          <p>Consultation</p>
        </div>

        <div class="timeline-line"></div>

        <div class="timeline-step">
          <div class="timeline-icon red-theme">
          <i class="fas fa-box-open"></i>

          </div>
          <p>Design</p>
        </div>

        <div class="timeline-line"></div>

        <div class="timeline-step">
          <div class="timeline-icon red-theme">
          <span class="material-icons">kitchen</span>          <!-- Kitchen appliances -->

          </div>
          <p>Material Selection</p>
        </div>

        <div class="timeline-line"></div>

        <div class="timeline-step">
          <div class="timeline-icon red-theme">
          <span class="material-icons">factory</span>                <!-- Factory -->

          </div>
          <p>Manufacturing</p>
        </div>

        <div class="timeline-line"></div>

        <div class="timeline-step">
          <div class="timeline-icon red-theme">
          <span class="material-icons">settings</span>                 <!-- System settings -->

          </div>
          <p>Installation</p>
        </div>

      </div>
    </div>

    <!-- Components -->
    <div class="kitchen-components">
      <h3>Customizable Components</h3>
      <ul>
        <li>Pull-Out Baskets</li>
        <li>Cutlery Trays</li>
        <li>Corner Units</li>
        <li>Tall Units</li>
        <li>Overhead Storage</li>
        <li>Chimney & Hob</li>
      </ul>
    </div>

    <!-- CTA -->
    <!-- <div class="kitchen-cta">
      <h4>Start Customizing Your Kitchen Today!</h4>
      <a href="#contact">Book Free Consultation</a>
    </div> -->

  </div>
</section>











<?php include('footer.php') ?>