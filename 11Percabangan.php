<?php

    //Percabangan If
    $total_belanja = 150000;

    if($total_belanja > 100000){
        echo "Anda dapat hadiah!!<hr>";
    }

    //percabangan If / Else
    $umur = 13;
    if ($umur < 18){
        echo "Kamu tidak boleh membuka situs ini<hr>";
    } else {
        echo "Selamat datang di webiste kami!<hr>";
    }
    //Percabangan If / ElseIf / Else
    $nilai = 92;
    if ($nilai > 90){
        $grade = "A+";
    } elseif($nilai > 80){
        $grade = "A";
    }elseif($nilai > 70){
        $grade = "B+";
    } elseif($nilai > 60){
        $grade = "B";
    } elseif($nilai > 50){
        $grade = "C+";
    } elseif($nilai > 40){
        $grade = "C";
    } elseif($nilai > 30){
        $grade = "D";
    } elseif($nilai > 20){
        $grade = "E";
    } else {
        $$grade = "F";
    }
    echo "Nilai anda: $nilai<br>";
    echo "Grade: $grade";

?>