<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set the recipient email as the client's email (shown in the "To" field)
    $clientEmail = "jyotieqpt@gmail.com";  // Client mail

    // Set BCC email to the specified address
    $bccEmails = "promopactmarketing@gmail.com";  

    // Set Indian time zone
    date_default_timezone_set('Asia/Kolkata');
    $currentTime = date("H:i:s");  // Format: Day-Month-Year Hour:Minute:Second

    // Set subject with the actual Indian time
    $subject = "Jyoti Equipments Inquiry - " . $currentTime;

    // Check which form was submitted and prepare the email content accordingly
    if (isset($_POST['whatsappName'])) {
        // WhatsApp form data
        $name = htmlspecialchars($_POST['whatsappName']);
        $mobile = htmlspecialchars($_POST['whatsappMobile']);
        $message = "WhatsApp Contact Form Submission:\n\nName: $name\nMobile: $mobile";
    } elseif (isset($_POST['email'])) {
        // Email form data
        $companyName = htmlspecialchars($_POST['companyName']);
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $mobile = htmlspecialchars($_POST['mobile']);
        $productService = htmlspecialchars($_POST['productService']);
        $messageBody = htmlspecialchars($_POST['message']);

        $message = "Email Contact Form Submission:\n\nCompany Name: $companyName\nName: $name\nEmail: $email\nMobile: $mobile\nProduct/Service: $productService\n\nMessage: $messageBody";
    } else {
        echo "Invalid form submission.";
        exit;
    }

// Set email headers
    $headers = "From: promopact.in@server\r\n";
    $headers .= "Reply-To: jyotieqpt@gmail.com\r\n";
    $headers .= "BCC: $bccEmails\r\n";  // Hide other emails by sending them as BCC
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

 
    // Send the email (to client email and hidden BCC recipients)
    if (mail($clientEmail, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>