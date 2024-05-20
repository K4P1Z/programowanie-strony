<?php
include("polaczenie.php")
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <main>
    <div class="baner">
        <h1>BIURO PODRÓŻY</h1>
    </div>
    <div class="bloki">
    <div class="left">
        <h2>Promocje</h2>
        <table>
            <tr>
                <td>Warszawa</td>
                <td>od 600zł</td>
            </tr>
            <tr>
                <td>Wenecja</td>
                <td>od 1200zł</td>
               
            </tr>
            <tr>
                <td>Paryż</td>
                <td>od 1200zł</td>
            </tr>
        </table>
    </div>
    <div class="middle">
        <h2>W tym roku jedziemy do...</h2>
        <?php 
            $zdjecia = $polaczenie->query("SELECT nazwaPliku,podpis FROM zdjecia order by podpis asc")
            for(i=0;$i>=10;$i++){
                "<img src=$zdjecia>"
            }
        ?>
        <img src="folder/1.jpg" alt="1">
        <img src="folder/2.jpg" alt="2">
        <img src="folder/3.jpg" alt="3">
        <img src="folder/4.jpg" alt="4">
        <img src="folder/5.jpg" alt="5">
        <img src="folder/6.jpg" alt="6">
        <img src="folder/7.jpg" alt="7">
        <img src="folder/8.jpg" alt="8">
        <img src="folder/9.jpg" alt="9">
    </div>
    <div class="right">
        <h2>Kontakt</h2>
        <a href="biuro@wycieczki.pl">biuro@wycieczki.pl</a>
        <p>telefon: 444555666</p>
    </div>
</div>
    <div class="dane">
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>

        </ol>
    </div>
    <footer>
        <p>Stronę wykonał: 0000000000000000</p>
    </footer>
    </main>
</body>
</html>