<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama   = htmlspecialchars($_POST['nama']);
    $email  = htmlspecialchars($_POST['email']);
    $pesan  = htmlspecialchars($_POST['pesan']);

    // EMAIL TUJUAN (ganti dengan emailmu!)
    $kepada = "shintadwiastuti0203@gmail.com";

    $subjek = "Pesan Baru dari Website LessonIta";
    $isi_email = "
    Ada pesan baru dari website LessonIta:

    Nama   : $nama
    Email  : $email
    Pesan  :
    $pesan
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Kirim Email
    if (mail($kepada, $subjek, $isi_email, $headers)) {
        header("Location: sukses.html");
        exit();
    } else {
        header("Location: gagal.html");
        exit();
    }
}
?>
