<?php $page_title = "About Jyoti Equipments – Leading Kitchen Equipment Manufacturer";
$description = "Discover Jyoti Equipments, a trusted name in commercial kitchen solutions. We specialize in high-performance kitchenware for hotels, restaurants, and catering businesses. Learn more about our commitment to quality.";
$keyword = "
 Jyoti Equipments,Preparation Equipment,Equipment Manufacturer India,Industrial Preparation Machinery,Industrial Preparation Machinery,Food Processing Equipment,Service Equipment,Equipment Manufacturer India,Industrial Service Equipment,Commercial Service Equipment,Best Service Equipment Manufacturer in India,Best Service Equipment supplier in India,Best Service Equipment exporter in IndiaPantry Equipment,Kitchen Equipment India,Commercial Pantry Equipment,Industrial Kitchen Equipment,Stainless Steel Pantry Equipment,Best Pantry Equipment Manufacturer in India,Best Pantry Equipment supplier in India";
include('header.php') ?>
<style>
  /* Container */
  .container-abt {
    max-width: 1200px;
    margin: auto;
    padding: 40px 20px;
    /* background: white; */
  }

  /* Header */
  h1 {
    text-align: center;
    font-size: 32px;
    font-weight: 700;
    color: #b71c1c;
    margin-bottom: 20px;
  }

  /* Normal Text Section */
  .normal-text {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
  }

  .normal-text p {
    flex: 1;
    font-size: 16px;
    line-height: 1.8;
    text-align: justify;
  }

  .normal-text img {
    max-width: 400px;
    border-radius: 8px;
  }

  /* Content Section */
  .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 30px;
    margin-top: 40px;
  }

  .text {
    flex: 1;
    font-size: 16px;
    line-height: 1.8;
    text-align: justify;
  }

  .image img {
    max-width: 350px;
    border-radius: 8px;
  }

  .motto-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 20px;
    /* background: linear-gradient(to right, #e3f2fd, #ffffff); Light gradient */
  }

  .motto-card {
    max-width: 650px;
    text-align: center;
    background: #ffffff;
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
    border-left: 5px solid #d32f2f;
  }

  .motto-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  }

  .icon {
    font-size: 60px;
    color: #d32f2f;
    /* Blue tone for a professional look */
    margin-bottom: 15px;
  }

  .motto-card h2 {
    font-size: 30px;
    color: #222;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .motto-card p {
    font-size: 17px;
    color: #555;
    line-height: 1.8;
    margin-bottom: 10px;
  }

  .motto-card p strong {
    font-size: 18px;
    color: #d32f2f;
    font-weight: 600;
  }

  /* Contact Section */
  .contact-section {
    text-align: center;
    margin-top: 50px;
    background: #f5f5f5;
    padding: 30px;
    border-radius: 8px;
  }

  .contact-section h2 {
    font-size: 24px;
    color: #b71c1c;
    margin-bottom: 10px;
  }

  .contact-section p {
    font-size: 16px;
    color: #333;
    margin: 5px 0;
  }

  .contact-section a {
    color: #d32f2f;
    text-decoration: none;
    font-weight: bold;
  }

  .contact-section a:hover {
    text-decoration: underline;
  }

  /* Responsive Design */
  @media (max-width: 992px) {
    .card-container {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 768px) {

    .normal-text,
    .content {
      flex-direction: column;
      text-align: center;
    }

    .normal-text img,
    .image img {
      max-width: 100%;
    }

    .card-container {
      grid-template-columns: repeat(1, 1fr);
    }
  }

  /* Commitment Section */
  .commitment-section {
    background: #ffffff;
    padding: 50px 20px;
    display: flex;
    justify-content: center;
  }

  .commitment-container {
    display: flex;
    align-items: flex-start;
    max-width: 1200px;
    width: 100%;
    gap: 30px;
  }

  /* Left Side: Text Content */
  .commitment-content {
    flex: 1;
    text-align: left;
  }

  .commitment-content h2 {
    font-size: 28px;
    font-weight: bold;
    color: #b71c1c;
    margin-bottom: 15px;
  }

  .commitment-content p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 10px;
  }

  /* Right Side: Full-Width Cards */
  .commitment-cards {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  /* Card Base Style */
  .commitment-card {
    background: #f5f5f5;
    padding: 15px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    width: 100%;
  }

  .commitment-card:hover {
    transform: translateY(-5px);
  }

  /* Icon Styling */
  .commitment-card i {
    font-size: 30px;
    color: #d32f2f;
    background: #ffecec;
    padding: 15px;
    border-radius: 50%;
    min-width: 60px;
    text-align: center;
  }

  /* Card Text */
  .card-text h3 {
    font-size: 18px;
    font-weight: bold;
    color: #b71c1c;
    margin-bottom: 5px;
  }

  .card-text p {
    font-size: 14px;
    color: #555;
  }

  /* Responsive Design */
  @media (max-width: 1024px) {
    .commitment-container {
      flex-direction: column;
      text-align: center;
    }

    .commitment-cards {
      align-items: center;
    }

    .commitment-card {
      flex-direction: column;
      text-align: center;
      width: 90%;
    }

    .commitment-card i {
      margin-bottom: 10px;
    }
  }

  /* Clients Section */
  .clients-section {
    background: #ffffff;
    padding: 50px 20px;
    text-align: center;
    border-radius: 8px;
    max-width: 1000px;
    margin: auto;
  }

  .clients-content {
    max-width: 800px;
    margin: auto;
    color: #333;
  }

  .clients-content h2 {
    font-size: 28px;
    font-weight: bold;
    color: #b71c1c;
    margin-bottom: 20px;
  }

  .clients-content p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 15px;
  }

  .clients-content strong {
    color: #d32f2f;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .clients-content {
      text-align: left;
    }
  }

  .kitchen-types-wrapper {
    max-width: 1200px;
    margin: auto;
    padding: 80px 20px;
  }

  .text-row .title {
    font-size: 36px;
    font-weight: 700;
    color: #b30000;
    margin-bottom: 10px;
  }

  .text-row .subtitle {
    font-size: 18px;
    color: #444;
    max-width: 700px;
    margin: 0 auto 50px;
  }

  .cards-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 30px;
  }

  .card {
    background: #fff5f5;
    border: 1px solid #ffd6d6;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(255, 0, 0, 0.1);
    transition: all 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(255, 0, 0, 0.2);
  }

  .card h3 {
    font-size: 20px;
    color: #b30000;
    margin-bottom: 10px;
  }

  .card p {
    color: #333;
    line-height: 1.6;
    font-size: 15.5px;
  }

  /* Responsive: 2 Cards per Row on Tablet & Up */
  @media (min-width: 768px) {
    .cards-grid {
      grid-template-columns: repeat(2, 1fr);
    }

    .card {
      max-width: 100%;
    }
  }

  .kitchen-types-premium {
    background: linear-gradient(to bottom right, #fff, #f9f9f9);
    padding: 30px 20px;
    font-family: 'Poppins', sans-serif;
  }

  .kitchen-types-wrapper {
    max-width: 1200px;
    margin: auto;
  }

  .text-row.text-center {
    text-align: center;
    margin-bottom: 60px;
  }

  .title {
    font-size: 2.5rem;
    color: #c40000;
    font-weight: 800;
    margin-bottom: 15px;
  }

  .subtitle {
    font-size: 1.1rem;
    color: #555;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
  }

  .cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
  }

  .card {
    background: rgba(255, 255, 255, 0.6);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    border: 1px solid #eee;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    padding: 30px 25px;
    text-align: center;
  }

  .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 35px rgba(196, 0, 0, 0.15);
  }

  .icon-wrapper {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid #c40000;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .icon-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .card:hover .icon-wrapper img {
    transform: scale(1.1);
  }

  .card-content h3 {
    font-size: 1.2rem;
    color: #c40000;
    font-weight: 600;
    margin-bottom: 10px;
  }

  .card-content p {
    font-size: 0.95rem;
    color: #333;
    line-height: 1.6;
  }

  /* Responsive tweaks */
  @media (max-width: 600px) {
    .title {
      font-size: 2rem;
    }

    .subtitle {
      font-size: 0.95rem;
    }
  }
</style>
<section class="section banner banner-section p-5">
  <div class="row justify-content-center align-items-center">
    <div class="col-sm-8">
      <div class="banner-inner">
        <h1 class="heading-xl text-center text-dark">About Us</h1>
      </div>
    </div>
  </div>
</section>

<div class="container-abt">
  <h1>JYOTI EQUIPMENTS PVT LTD.</h1>
  <div class="normal-text">
    <p>
      <strong> JYOTI EQUIPMENTS PVT LTD. </strong> was formed in 2005 along with an ISO Certified 9001:2015 by Mr.
      Satish, <strong> who possesses 25 years of experience in the design, and manufacturing of commercial
        kitchen equipment along with all kinds of Hospital Furniture, also supplies pan India with all
        kinds of Utensils, Pot, Crockery as well as cutleries, </strong> erection and commissioning of commercial
      kitchen equipment and Refrigeration equipment sound quality of our equipment The factory is
      located at <strong> Kirari Road, Nangloi,</strong>and the most famous <strong> Industrial Area of Delhi </strong> in Capital of India.
    </p>
    <img src="uploads/about-2.jpeg" width="100%" alt="Jyoti Equipments" title="Jyoti Equipments">
  </div>
  <section class="commitment-section">
    <div class="commitment-container">
      <!-- Left Side: Text Content -->
      <div class="commitment-content">
        <h2>Our Commitment</h2>
        <p>
          <strong>We, JYOTI EQUIPMENTS PVT LTD.,</strong> are committed to manufacturing
          <strong>custom-made kitchen equipment</strong> based on customer needs, budget,
          and delivery schedules, ensuring complete client satisfaction.
        </p>
        <p>
          As one of the youngest firms in the country providing
          <strong>turnkey solutions for commercial kitchens</strong>, we specialize in delivering
          a full range of food service equipment.
        </p>
        <p>
          Our establishment is driven by a knowledgeable team with unparalleled experience
          in catering to the diverse needs of <strong>small, medium, and standard establishments</strong>.
        </p>
      </div>
      <!-- Right Side: Full-Width Cards with Side Icons -->
      <div class="commitment-cards">
        <div class="commitment-card">
          <i class="fas fa-bread-slice"></i>
          <div class="card-text">
            <h3>Small Bakeries</h3>
            <p>We provide specialized kitchen solutions for small bakeries that double as eateries.</p>
          </div>
        </div>
        <div class="commitment-card">
          <i class="fas fa-utensils"></i>
          <div class="card-text">
            <h3>Medium Eateries</h3>
            <p>Custom-made equipment tailored for mid-sized eateries and restaurants.</p>
          </div>
        </div>
        <div class="commitment-card">
          <i class="fas fa-hotel"></i>
          <div class="card-text">
            <h3>Large Hotels</h3>
            <p>High-end commercial kitchen setups for large hotels with extensive requirements.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="text">
      <p>
        <strong>JYOTI EQUIPMENTS PVT. LTD.</strong> lays the greatest stress on the quality of the end product
        produced by the machinery it deals with, particularly since the clientele of modern high-class
        eateries cater to people whose palates are kindled by a variety of food products ranging from
       the spicy to the delicate taste.
        <br><br>Flavors combined with the superior nutritional value of preparations, made under rigid
        hygienic conditions, ensure the best results. The Proprietors of the Company scoured the
        world market, satisfying themselves with the quality of machinery brought out by different
        manufacturers, and thereafter entered into an agreement with them for sole distributorship
        in the country.
      </p>
    </div>
    <div class="image">
      <img src="uploads/about.jpg" alt="Jyoti Equipments" title=" Jyoti Equipments">
    </div>
  </section>
  <!-- <section class="motto-section">
    <div class="motto-card">
      <i class="fas fa-handshake icon"></i>
      <h2>Our Motto</h2>
      <p><strong>“To work together with integrity and make our customers feel valued.”</strong></p>
      <p>We deal with all types of food service equipment under one roof.</p>
      <p>We hope you find some of our machines interesting for your establishment. If you need further information or clarification, feel free to contact us anytime. We are here to serve you better.</p>
    </div>
  </section> -->
  <section class="kitchen-types-premium">
    <div class="kitchen-types-wrapper">
      <!-- Heading -->
      <div class="text-row text-center">
        <h2 class="title">Types of Kitchens We Specialize In</h2>
        <p class="subtitle">
          Precision-built kitchen setups tailored for performance, hygiene, and efficiency — crafted to elevate every culinary experience.
        </p>
      </div>
      <!-- Card Section -->
      <div class="cards-grid">
        <!-- Card Example (Duplicate for other kitchen types) -->
        <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-1.png" alt="Jyoti Equipments" title="Jyoti Equipments">
          </div>
          <div class="card-content">
            <h3>Hotel Kitchens</h3>
            <p>Designed for volume, hygiene, and diverse menu execution in 5-star hospitality spaces.</p>
          </div>
        </div>
        <!-- Repeat the card above for all kitchen types, just change image and text -->
        <!-- Restaurant -->
        <div class="card">
          <div class="icon-wrapper">
            <img src="uploads/res-kitchen.jpg" alt="Restaurant Kitchen" title="Restaurant Kitchen">
          </div>
          <div class="card-content">
            <h3>Restaurant Kitchens</h3>
            <p>Efficient, modular layouts built for speed and perfection in every dish served.</p>
          </div>
        </div>
        <!-- Cloud -->
        <div class="card">
          <div class="icon-wrapper">
            <img src="uploads/cloud-kitchen.jpg" alt="Cloud Kitchen" title="Cloud Kitchen">
          </div>
          <div class="card-content">
            <h3>Cloud Kitchens</h3>
            <p>Smart kitchens for delivery-first businesses with compact, brand-flexible layouts.</p>
          </div>
        </div>
        <!-- Industrial -->
        <div class="card">
          <div class="icon-wrapper">
            <img src="uploads/industrial.jpg" alt="Industrial Kitchen" title="Industrial Kitchen">
          </div>
          <div class="card-content">
            <h3>Industrial & Canteens</h3>
            <p>Large-scale operations for factories, corporates, and government spaces.</p>
          </div>
        </div>
        <!-- Hospital -->
        <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-2.png" alt="Hospital Kitchen" title="Hospital Kitchen">
          </div>
          <div class="card-content">
            <h3>Hospital Kitchens</h3>
            <p>Cleanroom-standard kitchens focused on health, nutrition, and safety regulations.</p>
          </div>
        </div>
        <!-- Bakery -->
        <div class="card">
          <div class="icon-wrapper">
            <img src="uploads/bakery.jpeg" alt="Bakery Kitchen" title="Bakery Kitchen">
          </div>
          <div class="card-content">
            <h3>Bakery Kitchens</h3>
            <p>Oven-ready, climate-managed spaces built for precision baking and storage.</p>
          </div>
        </div>

        <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-1.png" alt="Jyoti Equipments" title="Jyoti Equipments">
          </div>
          <div class="card-content">
            <h3>Banquet</h3>
            <p>Large-scale kitchens designed for preparing bulk meals for events like weddings, conferences, or parties.</p>
          </div>
        </div>

        <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-1.png" alt="Jyoti Equipments" title="Jyoti Equipments">
          </div>
          <div class="card-content">
            <h3>Food Joints</h3>
            <p>Compact, high-efficiency kitchens tailored for fast food or quick-service menus.</p>
          </div>
        </div>

        <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-1.png" alt="Jyoti Equipments" title="Jyoti Equipments">
          </div>
          <div class="card-content">
            <h3>Resorts</h3>
            <p>Versatile, well-equipped kitchens catering to multi-cuisine dining experiences.</p>
          </div>
        </div>

        <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-1.png" alt="Jyoti Equipments" title="Jyoti Equipments">
          </div>
          <div class="card-content">
            <h3>Bars</h3>
            <p>Small kitchens or prep areas that support beverage service with light snacks, finger foods, or appetizers. Emphasizes quick plating and minimal cooking.            </p>
          </div>
        </div>

        <!-- <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-1.png" alt="Jyoti Equipments" title="Jyoti Equipments">
          </div>
          <div class="card-content">
            <h3>Restaurants</h3>
            <p>Designed for volume, hygiene, and diverse menu execution in 5-star hospitality spaces.</p>
          </div>
        </div> -->

        <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-1.png" alt="Jyoti Equipments" title="Jyoti Equipments">
          </div>
          <div class="card-content">
            <h3>Cafe</h3>
            <p>Medium-sized kitchens focused on light meals, baked items, and beverages.             </p>
          </div>
        </div>

        <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-1.png" alt="Jyoti Equipments" title="Jyoti Equipments">
          </div>
          <div class="card-content">
            <h3>Institutional</h3>
            <p>Large, functional kitchens serving schools, colleges, hospitals, or office canteens.</p>
          </div>
        </div>

        <!-- <div class="card">
          <div class="icon-wrapper">
            <img src="new/prep-1.png" alt="Jyoti Equipments" title="Jyoti Equipments">
          </div>
          <div class="card-content">
            <h3>Hospital</h3>
            <p>Designed for volume, hygiene, and diverse menu execution in 5-star hospitality spaces.</p>
          </div>
        </div> -->



        
      </div>
    </div>
  </section>

  <div class="mb-5 justify-content-center p-4 rounded-4 shadow-lg border bg-white" style=" font-family: 'Segoe UI', sans-serif;">
  <div class="d-flex align-items-center mb-3">
    <!-- <img src="https://img.icons8.com/fluency/48/hospital-room.png" alt="Hospital Icon" class="me-3" /> -->
    <h3 class=" mb-0">Jyoti Equipments Private Limited</h3>
  </div>
  <p class="text-secondary mb-2">
    <strong>ISO, GMP & CE certified</strong> and based in the industrial hub of Delhi, Jyoti Equipments Pvt. Ltd. is a distinguished manufacturer and exporter of top-tier Medical Equipment and Hospital Supplies.
  </p>
  <p class="text-secondary mb-2">
    With an advanced infrastructure spread across <strong>8,000 sq. ft.</strong>, including cutting-edge R&D, quality control labs, and modern production units, we deliver excellence through products like Surgical Instruments, Deep Freezers, Stretchers, Wheel Chairs, and more.
  </p>
  <p class="text-secondary">
    Led by visionary <strong>Mr. Satish Kumar</strong>, we ensure timely deliveries and competitive pricing, serving India and the Middle East with commitment to quality and innovation.
  </p>
  <a href="https://www.jyotihospitalequipments.com/" class="btn btn-outline-secondary mt-3 fw-semibold" target="_blank">🔗 Visit Our Official Website</a>
</div>
  <section class="clients-section">
    <div class="clients-content">
      <h2>Our Clients & Manufacturing Excellence</h2>
      <p>
        As a leading provider of <strong>food processing equipment</strong>, we take pride in being an
        <strong>ISO Certified 9001:2015</strong> and <strong>NSIC Company</strong>, earning a strong reputation
        among our esteemed clients through our commitment to quality and excellence.
      </p>
      <p>
        Our <strong>in-house manufacturing facilities</strong> and technical expertise enable us to produce a
        diverse range of <strong>refrigeration equipment and stainless-steel products</strong> for commercial
        kitchens, industrial applications, and other commercial sectors.
      </p>
      <p>
        We maintain <strong>strict quality control</strong> to ensure superior finish and compliance with
        design specifications before any product leaves our factory. Our dedicated approach to
        <strong>in-house fabrication</strong> guarantees the highest standards of precision, catering to the
        increasing sophistication of modern-day requirements.
      </p>
    </div>
  </section>

  

  <div class="contact-section">
    <h2>Contact Information</h2>
    <p><strong>Corp. Add:</strong> C-2, Metro Bazaar Near Nangloi Metro Station, New Delhi-110041</p>
    <p><strong>E-Mail:</strong>  sales@jyotiequipments.com, info@jyotiequipments.com</p>
    <p><strong>Mob. No.:</strong>  +91-9810519352, +91-9354261649, +91-9667738088, +91-8826478386</p>
    <p><strong>Website:</strong> <a href="http://www.jyotiequipments.com" target="_blank">www.jyotiequipments.com</a>, <a href="http://www.jyotihospitalequipments.com" target="_blank">www.jyotihospitalequipments.com</a></p>
  </div>
</div>
<?php include('footer.php') ?>