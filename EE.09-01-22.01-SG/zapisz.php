<?php
    $id_polaczenia = mysqli_connect("localhost", "root", "", "wedkowanie");

    // pobranie danych z formularza
    $imie = $_POST['first_name'];
    $nazwisko = $_POST['last_name'];
    $address = $_POST['address'];

    $zapytanie = 'INSERT INTO karty_wedkarskie (imie, nazwisko, adres, data_zezwolenia, punkty) VALUES ("' .  $imie . '", "' . $nazwisko . '", "' . $address . '", NULL, NULL)';

    $wynik_zapytania = mysqli_query($id_polaczenia, $zapytanie);

    mysqli_close($id_polaczenia);
?>