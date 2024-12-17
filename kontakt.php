<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Odbieranie danych z formularza
    $firstName = htmlspecialchars($_POST['firstName']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['mail']);
    $usluga = htmlspecialchars($_POST['usluga']);
    $message = htmlspecialchars($_POST['message']);
    $confirm = isset($_POST['confirm']) ? true : false;

    // Walidacja danych
    if ($confirm) {
        $to = "tomekneckar@gmail.com"; // Adres e-mail, na który ma być wysłana wiadomość
        $subject = "Nowa wiadomość z formularza kontaktowego";
        $body = "Imię i Nazwisko: $firstName
";
        $body .= "Numer telefonu: $phone
";
        $body .= "E-mail: $email
";
        $body .= "Usługa: $usluga
";
        $body .= "Wiadomość: $message
";

        // Wysyłanie e-maila
        if (mail($to, $subject, $body)) {
            echo "Wiadomość została wysłana!";
        } else {
            echo "Wystąpił błąd podczas wysyłania wiadomości.";
        }
    } else {
        echo "Musisz potwierdzić zapoznanie się z regulaminem!";
    }
}
?>
