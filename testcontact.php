<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>

<?php include('vendor/PHPMailer/src/Exception.php');?>
<?php include('vendor/PHPMailer/src/PHPMailer.php');?>
<?php include('vendor/PHPMailer/src/SMTP.php');?>


<?php include('init.php');?>
<?php
$email = '';
$subject = '';
$message = '';
$sent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $errors = [];

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = 'Please enter a valid email address';
    }

    if ($subject == '') {
        $errors[] = 'Please enter a subject';
    }

    if ($message == '') {
        $errors[] = 'Please enter a message';
    }

    if (empty($errors)) {

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host = 'your mail server';
            $mail->SMTPAuth = true;
            $mail->Username = 'username';
            $mail->Password = 'password';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('sender@example.com');
            $mail->addAddress('recipient@example.com');
            $mail->addReplyTo($email);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            $sent = true;

        } catch (Exception $e) {

            $errors[] = $mail->ErrorInfo;

        }
    }
}

?>


<h2>Contact</h2>

<?php if ($sent) : ?>
    <p>Message sent.</p>
<?php else: ?>

    <?php if (! empty($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" id="formContact">

        <div class="form-group">
            <label for="email">Your email</label>
            <input class="form-control" name="email" id="email" type="email" placeholder="Your email" value="<?= htmlspecialchars($email) ?>">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input class="form-control" name="subject" id="subject" placeholder="Subject" value="<?= htmlspecialchars($subject) ?>">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" placeholder="Message"><?= htmlspecialchars($message) ?></textarea>
        </div>

        <button class="btn">Send</button>

    </form>

<?php endif; ?>
