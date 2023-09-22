<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class EmailSender {
    private $mailer;

    public function __construct() {
        $this->mailer = new PHPMailer(true);
        // Configure mailer settings here (e.g., SMTP, authentication, etc.)
    }

    public function sendEmail($recipient, $subject, $message) {
        try {
            // Server settings
            $this->mailer->SMTPDebug = SMTP::DEBUG_SERVER;
            $this->mailer->isSMTP();
            $this->mailer->Host = 'smtp.gmail.com';
            $this->mailer->SMTPAuth = true;
            $this->mailer->Username = 'uic21mca2159@gmail.com'; // Replace with your Gmail email
            $this->mailer->Password = 'lvsm wzmw akxg gjyb'; // Replace with your Gmail password
            $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $this->mailer->Port = 465;

            // Recipients
            $this->mailer->setFrom('bahubali@gmail.com', 'bahubali');
            $this->mailer->addAddress($recipient);


            // Recipients

            // Content
            $this->mailer->isHTML(true);
            $this->mailer->Subject = $subject;
            $this->mailer->Body = $message;

            $this->mailer->send();
            return true; // Email sent successfully
        } catch (Exception $e) {
            return false; // Email sending failed
        }
    }
}
?>
