<?php
require "conn.php";

if(isset($_POST['laheta'])){
        $nimi = $_POST['nimi'];
        $sposti = $_POST['sposti'];
        $viesti = $_POST['viesti'];

        $komento = "INSERT INTO yhteydenottopyynnot(pyyntoid, nimi, sposti, viesti) VALUES (NULL, :nimi, :sposti, :viesti)";
        $lisaa = $conn->prepare($komento);
        $lisaa->bindValue(':nimi', $nimi, PDO::PARAM_STR);
        $lisaa->bindValue(':sposti', $sposti, PDO::PARAM_STR);
        $lisaa->bindValue(':viesti', $viesti, PDO::PARAM_STR);
        $lisaa->execute();
}

echo "Yhteydenottopyyntösi on vastaanotettu.";
sleep(2);
header("location:../ota_yhteytta.html");

?>