<?php $page_title = "Contact Jyoti Equipments – Get in Touch for Kitchen Solutions";
$description = "Need top-quality commercial kitchen equipment? Contact Jyoti Equipments today! Reach out for inquiries, custom solutions, and expert guidance on your kitchen needs.";
$keyword = "Jyoti Equipments,Preparation Equipment,Equipment Manufacturer India,Industrial Preparation Machinery,Industrial Preparation Machinery,Food Processing Equipment,Service Equipment,Equipment Manufacturer India,Industrial Service Equipment,Washing Equipment,Industrial Washing Machines,Commercial Washing Equipment,Heavy-Duty Washing Equipment,Automatic Washing Systems,Top Industrial Washing Machine Supplier in India,Top Industrial Washing Machine manufacturer in IndiaDisplay Counter,Display Counter India,Bakery Display Counter,Stainless Steel Display Counter,Best Display Counter Manufacturer in India,Best Display Counter supplier in India,Best Display Counter supplier in India";
include('header.php') ?>
<section class="section banner banner-section p-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-8">
            <div class="banner-inner">
                <h1 class="heading-xl text-center">Contact us</h1>
            </div>
        </div>
    </div>
</section>
<style>
    #contactPageForm {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }
    input,
    textarea {
        width: 100%;
        padding: 12px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }
    input:focus,
    textarea:focus {
        border-color: #6a5acd;
        outline: none;
        box-shadow: 0 0 5px rgba(106, 90, 205, 0.5);
    }
    textarea {
        resize: none;
    }
    .btn {
        color: white;
        background-color: red;
    }
    @media (max-width: 480px) {
        #contactPageForm {
            padding: 15px;
        }
    }
</style>
<div class="container-contact mt-5 mb-5 p-5">
    <h2 class="mt-3 mb-3 text-center"><b>Feel Free To Reach Us</b></h2>
    <div class="row">
        <div class="col-sm-6">
            <form id="contactPageForm" method="post">
                <input type="text" id="companyName" name="companyName" placeholder="Company Name (Optional)">
                <input type="text" id="name" name="name" placeholder="Name" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="text" id="mobile" name="mobile" placeholder="Mobile" required>
                <input type="text" id="productService" name="productService" placeholder="Product/Services" required>
                <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
        <div class="col-sm-6">

        <div class="contact-wrapper">
      
      <!-- Contact Details Box -->
      <div class="glass-box">
        <h4 class="mb-4 ">Contact Details</h4>
        <div class="info-item">
          <i class="fas fa-phone"></i>
          +91-9810519352, 9354261649, 9667738088, 8826478386 
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          sales@jyotiequipments.com, info@jyotiequipments.com
        </div>
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          C-2, Metro Bazaar, Near Nangloi Metro Station, Nangloi, New Delhi -110041 (India)
        </div>
        
       
      </div>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.183512976238!2d77.0622341737551!3d28.684156581737668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d044cb66b50fb%3A0x5431ef0b0186aab!2sJyoti%20Equipments%20Private%20Limited%3B%20Commercial%20kitchen%2CHotel%20kitchen%20and%20bulk%20cooking%20equipments!5e0!3m2!1sen!2sin!4v1746694335496!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
    </div>
    
 
        </div>
    </div>
</div>


  <style>
 

    .contact-wrapper {
      max-width: 1300px;
      /*margin: 60px auto;*/
      padding: 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 30px;
    }

    .glass-box {
      background: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(15px);
      border-radius: 20px;
      box-shadow: 0 20px 50px rgba(0, 102, 204, 0.15);
      padding: 35px;
      transition: all 0.3s ease;
    }

    .glass-box:hover {
      transform: translateY(-6px);
      box-shadow: 0 25px 65px rgba(0, 102, 204, 0.25);
    }

    .contact-title {
      text-align: center;
      font-size: 2.8rem;
      font-weight: 700;
      color: red;
      margin-bottom: 40px;
    }

    .form-control:focus {
      border-color: red;
      box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.25);
    }

    .btn-primary {
      background-color: red;
      border: none;
    }

    .btn-primary:hover {
      background-color: red;
    }

    .info-item {
      margin-bottom: 25px;
      display: flex;
      align-items: center;
      font-size: 1rem;
      color: #333;
    }

    .info-item i {
      color: red;
      font-size: 1.4rem;
      margin-right: 12px;
      width: 30px;
    }

    .whatsapp-float {
      position: fixed;
      bottom: 25px;
      right: 25px;
      background-color: #25D366;
      color: #fff;
      border-radius: 50px;
      padding: 12px 18px;
      font-size: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      z-index: 999;
      transition: all 0.3s ease;
    }

    .whatsapp-float:hover {
      background-color: red;
      text-decoration: none;
    }

    @media (max-width: 767px) {
      .contact-title {
        font-size: 2rem;
      }
    }
  </style>
<script>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include('footer.php') ?>