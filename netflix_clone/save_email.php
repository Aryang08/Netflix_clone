<?php

// save_email.php

// Include your database configuration file (config.php)
include 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve email from the form
    $email = $_POST['email'];

    // Insert data into the "users" database (Update table name to 'users', update as needed)
    $insertQuery = "INSERT INTO users (email) VALUES ('$email')";
    $result = mysqli_query($conn, $insertQuery);

    // Check if the query was successful
    if ($result) {
        // Send a welcome email to the subscriber
        $subject = "Welcome to Our Website";
        $message = "Thank you for subscribing to our website!";
        $headers = "From: agaryan437@gmail.com"; 

        // Use the mail() function to send the email
        mail($email, $subject, $message, $headers);

        // Redirect to a confirmation page or homepage
        header('Location: confirmation.html');
        exit();
    } else {
        // Handle the case when the query fails
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Redirect to the homepage if the form is not submitted
    header('Location: clone.html');
    exit();
}
?>

// // save_email.php

// // Include your database configuration file (config.php)
// include 'config.php';

// // Initialize $email variable
// $email = '';

// // Import PHPMailer classes
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/SMTP.php';

// // Use the PHPMailer namespaces
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

// // Check if the form is submitted
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Retrieve email from the form
//     $email = $_POST['email'];

//     // Insert data into the "users" database (Update table name to 'users', update as needed)
//     $insertQuery = "INSERT INTO users (email) VALUES ('$email')";
//     $result = mysqli_query($conn, $insertQuery);

//     // Check if the query was successful
//     if ($result) {
//         // Send a welcome email to the subscriber
//         $mail = new PHPMailer(true);

//         try {
//             $mail->setFrom('aryangupta210160@acropolis.in', 'Aryan gupta');
//             $mail->addAddress($email);
//             $mail->Subject = 'Welcome to Our Website';
//             $mail->Body = 'Thank you for subscribing to our website!';

//             // Use SMTP for sending emails
//             $mail->isSMTP();
//             $mail->Host = 'smtp.gmail.com';
//             $mail->SMTPAuth = true;
//             $mail->Username = 'aryangupta210160@acropolis.in';
//             $mail->Password = 'aryan@123';
//             $mail->SMTPSecure = 'ssl';
//             $mail->Port = 465;

//             $mail->send();

//             // Redirect to a confirmation page or homepage
//             header('Location: confirmation.html');
//             exit();
//         } catch (Exception $e) {
//             echo "Mailer Error: " . $mail->ErrorInfo;
//         }
//     } else {
//         // Handle the case when the query fails
//         echo "Error: " . mysqli_error($conn);
//     }
// } else {
//     // Redirect to the homepage if the form is not submitted
//     header('Location: clone.html');
//     exit();
// }

