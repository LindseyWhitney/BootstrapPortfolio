<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
  $marketing = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
  $message = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));

  if ($name == "" || $email == "" || $message == "") {
        $error_message = "Please fill in the required fields: Name, Email, and Message";
  }
  if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Bad form input";
  }

  require("inc/phpmailer/class.phpmailer.php");

  $mail = new PHPMailer;

  if (!isset($error_message) && !$mail->ValidateAddress($email)) {
      $error_message = "Invalid Email Address";
  }

  if (!isset($error_message)) {
      $email_body = "";
      $email_body .= "Name " . $name . "\n";
      $email_body .= "Email " . $email . "\n";
      $email_body .= "Marketing " . $marketing . "\n";
      $email_body .= "Message " . $message . "\n";

      $mail->setFrom($email, $name);
      $mail->addAddress('lindseydwhitney@gmail.com', 'Lindsey');     // Add a recipient

      $mail->isHTML(false);                                  // Set email format to HTML

      $mail->Subject = 'Design Inquiry from ' . $name;
      $mail->Body    = $email_body;

      if($mail->send()) {
          header("location:index.php#contact?status=thanks");
          exit;
      }
      $error_message = 'Message could not be sent.';
      $error_message .= 'Mailer Error: ' . $mail->ErrorInfo;
  }
}
?>

<?php
if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
    echo "<p class="form_submission">Thanks for the message! I&rsquo;ll be in touch with you soon.</p>";
} else {
    if (isset($error_message)) {
        echo "<p class='message'>".$error_message . "</p>";
    }
?>

<form method=“post” action=“contact.php”>
  <div class="col-md-6 col-md-offset-3 form-left">
    <div class="form-group">
      <label for="form__name" class="sr-only">Name</label>
      <input type="text" class="form-control" id="form__name" name="name" placeholder="Name (Required)" value="<?php if (isset($name)) { echo $name; } ?>">
    </div>
    <div class="form-group">
      <label for="form__email" class="sr-only">Email</label>
      <input type="email" class="form-control" id="form__email" name="mail" placeholder="Email (Required)" value="<?php if (isset($email)) { echo $email; } ?>">
    </div>
    <div class="form-group">
      <label for="form__marketing" class="sr-only">How did you hear about me?</label>
      <input type="text" class="form-control" id="form__marketing" name="marketing" placeholder="How did you hear about me?" value="<?php if (isset($marketing)) { echo $marketing; } ?>">
    </div>
  </div> <!-- .col-md-6 form-left -->
  <div class="form-group col-md-6 col-md-offset-3">
    <label for="form__message" class="sr-only">Message</label>
    <textarea name="message" class="form-control" rows="6" id="form__message" placeholder="What's on your mind?"><?php if (isset($message)) { echo htmlspecialchars($_POST["message"]); } ?></textarea>
  </div>
  <div style="display:none">
    <label for="form__address" class="sr-only">Address</label>
    <input type="text" class="form-control" id="form__address" name="address" placeholder="Please leave this field blank.">
    <p>Please leave this field blank</p>
  </div>
</form>

<a href="" class="text-hide Submit__button">Submit</a>

<?php } ?>
