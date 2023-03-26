
<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $to = "a.azraai@gmail.com";
  $subject = "New form submission";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

  if(mail($to, $subject, $body)) {
    echo "Thank you for your message!";
  } else {
    echo "Error sending message!";
  }
}
?>
