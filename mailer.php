<?php

if ($_POST) {
    $to = "srinathsath@gmail.com"; // your mail here
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $mobile = filter_var($_POST["mobile"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

    $subject = 'Portfolio submit form';
    $cc = 'kannasivamps@gmail.com';
    $bcc = 'kannasivamps@gmail.com';
    $body = "Name: $name\nMobile: $mobile\nEmail: $email\nMessage: $message\n";

    // Mail headers
    $headers = 'From: ' . $email . "\r\n" .
               'Cc: ' . $cc . "\r\n" .
               'Bcc: ' . $bcc . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (@mail($to, $subject, $body, $headers)) {
        echo "<script>
                alert('Thank you for contacting us. We will get back to you soon!');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "<script>
                alert('Something went wrong. Please try again later.');
                window.location.href = 'index.html';
              </script>";
    }
}
?>
