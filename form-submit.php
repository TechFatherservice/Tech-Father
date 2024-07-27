<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'your-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'your-email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'your-phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $subject = filter_input(INPUT_POST, 'your-subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    $to = "techfather1450@gmail.com";
    $subject_header = "Web Enquiry TechFather";

    $txt = "
    <html>
    <body>
        <div style='max-width: 800px;margin: auto;font-family: Arial;'>
            <div style='max-width: 100%; text-align: center;'>
                <img src='' width='200px' /> 
            </div>
            <div style='width:auto; border: 1px solid #87ccac;padding: 20px;'>
                <p style='color:#fd6f08;font-size:19px;'>Name : <span style='color:#080;font-size:19px;'>$name</span></p>
                <p style='color:#fd6f08;font-size:19px;'>Email : <span style='color:#080;font-size:19px;'>$email</span></p>
                <p style='color:#fd6f08;font-size:19px;'>Phone : <span style='color:#080;font-size:19px;'>$phone</span></p>
                <p style='color:#fd6f08;font-size:19px;'>Subject : <span style='color:#080;font-size:19px;'>$subject</span></p>
                <p style='color:#fd6f08;font-size:19px;'>Message : <span style='color:#080;font-size:19px;'>$message</span></p>
                <br>
                <p style='font-size: 26px;font-weight: bold;color: #388b01;padding: 0;margin: 0;'>TechFather</p>
                <br>
                <hr>
                <h6 style='background: #e5f2d0;padding: 23px;text-align: center;'>
                    <p style='color: #3d88ec;font-size: 14px;font-weight: bold;text-align: center;padding: 0 0 0 0;margin: 26px 0 0 0;'>Help desk - Mail: Support@techfather.in</p>
                </h6>
                <div style='max-width: 800px;text-align: center; padding: 10px; background: #39830b; width: 100%; color: #fff;padding: 20px 1px;'>
                    Visit our website <a style='color: orange;' href='https://www.techfather.in'>TechFather</a>
                </div>
            </div>
        </div>
    </body>
    </html>";

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'techfather1450@gmail.com'; // SMTP username
        $mail->Password = 'gmngqkldkirsgdvk'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject_header;
        $mail->Body    = $txt;

        $mail->send();
        header('Location: page-contact.php?msg=success');
        exit();
    } catch (Exception $e) {
        header('Location: page-contact.php?msg=error');
        exit();
    }
} else {
    header('Location: page-contact.php?msg=error');
    exit();
}
?>

