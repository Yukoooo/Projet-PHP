<link rel="stylesheet" href="Style.css">
<body>
    <div>
        <h1>Contact</h1>
        <form action="" method="post">
            <input class="overflow" type="text" placeholder="Nom" name="Nom"></input>
            <input class="overflow" type="text" placeholder="Prénom" name="Prénom"></input>
            <input class="overflow" type="email" placeholder="Adresse Mail" name="AdresseM"></input>
            <input class="overflow" type="text" placeholder="Adresse" name="Adresse"></input>
            <input class="overflow" type="tel" placeholder="+33" name="tel"></input><br>
            <input class="overflow" style="	margin-top: 10px; height: 40px; width: 700px;" id="msg" type="Message" placeholder="Un message à nous transmettre ?" name="Msg"></input><br>
            <input id="sub" type="submit" value="Nous Contacter !"></input>

        </form>
    </div>
</body>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=contact', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

if ($_POST) {
    $pdo->exec("INSERT INTO clients (Nom, Prénom, AdresseM, Adresse, tel, Msg) VALUES ('$_POST[Nom]', '$_POST[Prénom]', '$_POST[AdresseM]', '$_POST[Adresse]', '$_POST[tel]', '$_POST[Msg]')");
}

?>