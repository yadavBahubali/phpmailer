    <?php
    require 'mail_function.php';

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $recipient = $_POST['to'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Create an instance of the EmailSender class
        $emailSender = new EmailSender();

        // Send the email
        if ($emailSender->sendEmail($recipient, $subject, $message)) {
            // Email sent successfully
            echo 'Email sent successfully';
        } else {
            // Email sending failed
            echo 'Email sending failed';
        }
    } else {
        // Handle other cases (e.g., form not submitted)
        // You can redirect or display an error message here
    }
    ?>
