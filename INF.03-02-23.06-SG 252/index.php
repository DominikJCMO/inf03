<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Hurtownia szkolna</title>
    
</head>
<body>
    <section id="banner">
        <h1>Hurtownia z najlepszymi cenami</h1>
    </section>
    <section id="panel=left">
        <h2>Nasze ceny</h2>
        <table>
            <!-- Efekt działania skryptu 1 -->
        </table>
    </section>
    <section id="panel-midle">
       
        <h2>Koszt zakupów</h2>
        <form action="index.php" method="post">
        wybierz artykuł:
        <select name="object">
            <option value="1">Zeszyt 60 kartek</option>
            <option value="2">Zeszyt 32 kartek</option>
            <option value="3">Cyrkiel</option>
            <option value="4">Linijka</option>
        </select>
        <br>
        liszba sztuk: <input type="number"name="number_of_items">
        <br>
        <input type="submit"value="OBLICZ">
        </form>
        <!-- Wynik działania skryptu 2 -->
    </section>
    <section id="panel-right">
        <h2>Kontakt</h2>
        <img src="zakupy.png" alt="hurtownia">
        <p>
        <a href="e-mail: hurt@poczta2.pl ">hurt@poczta2.pl</a>
        </p>

    </section>
    <section id="footer">
        <h4>Witrynę wykonał:10</h4>
    </section>
</body>
</html>