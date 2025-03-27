<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $to = "simone.ricciardi93@outlook.it";
    $subject = "Nuova Iscrizione SRK Championship";
    $message = "Nome: $nome\nEmail: $email";
    $headers = "From: no-reply@srkchampionship.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Grazie per l'iscrizione, $nome!</h2>";
    } else {
        echo "<h2>Errore nell'invio della mail. Riprova più tardi.</h2>";
    }
} else {
    echo "<h2>Accesso non autorizzato.</h2>";
}
?>
