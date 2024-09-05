<?php

    //Perulangan For
    for($i = 0; $i < 10; $i++){
        echo "<h2>ini perulangan ke-$1</h2>";
    }

    //Perulangan While
    $ulangi = 0;

    while($ulangi < 10){
        echo "<p>Ini adalah perulangan ke-$ulangi</p>";
        $ulangi++;
    }

    //Perulangan Do/While
    $loop = 10;

    do{
        echo "<p>looping $ulangi</p>";
        $loop--;
    } while ($loop > 0);

    $books = [
        "Panduan Belajar PHP untuk pemula",
        "Membangun Aplikasi Web dengan PHP",
        "Tutorial PHP dan MySQL",
        "Membuat Chat Bot dengan PHP"
    ];

    echo "<h5>Judul Buku PHP:</h5>";
    echo "<ul>";
        foreach($books as $buku){
            echo "<li>$buku</li>";
        }
    echo "</ul>";


?>