<?php
$to = 'adres@example.com'; // Wprowadź swój adres e-mail
$subject = 'Test e-maila';
$message = 'To jest testowa wiadomość.';
$headers = 'From: nadawca@example.com' . "\r
" . // Wprowadź adres e-mail nadawcy
           'Reply-To: nadawca@example.com' . "\r
" .
           'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo 'E-mail został wysłany.';
} else {
    echo 'Wystąpił problem z wysłaniem e-maila.';
}
?>
