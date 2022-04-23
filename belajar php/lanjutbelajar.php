<?php

    $nama = "ardi";
    $umur = 3;
    $tinggi = 3.5;


    // $kalimat = "halo, nama saya $nama umur saya adalah $umur dan tinggi badan saya adalah $tinggi";
   
    // echo $kalimat;

    // percabangan if-else
/*
    if($nama == "ardi")
    {
        echo "benar itu ardi";
    } else {
        echo "kamu siapa?";
    }
*/
/*
    // percabangan switch-case

    switch($nama) {
        case "ardi";
        echo "benar itu ardi";
        break;
        default;
        echo "kamu siapa?";
    }
    */

    // ternary oprator
    
/*
    $kalimat = $nama == "ardi" ? "benar itu ardi" : "kamu siapa?"; 

    echo $kalimat;
*/
    // perulangan for
    /*
    for($i=0; $i <= 10; $i++) {
        echo "ini adalah perulangan ke-$i";
        echo "<br/>";
    }
    */

    // pengulangan while
    /*
    $i = 0;
    while($i <= 20) {
        echo "ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    }
    */

    //pengulangan do while
    /*
    $i = 0;

    do {
        echo "ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    } while($i < 11);
    */

    
    // pengulangan foreach + built-in function
    /*
    $nama = array("ega" => 25000000, 
                 "riyan" => 30000000, 
                 "syah" => 35000000, 
                 "maulana" => 40000000, 
                 "abdul" => 4500000, 
                 "fay" => 50000000, 
                 "irfan" => 6000000);
    foreach ($nama as $sebutan => $nilai) {
        echo "nama saya adalah $sebutan nilai buruan saya adalah Rp".number_format($nilai, 2, ".", ",");
        echo "<br/>";
    }
    */

    // user-definded function
    /*
    function sebut_nama($nama){
        $sebut = "halo, nama saya $nama";
        return $sebut;
    }

    echo sebut_nama($nama);
    */

    // built-in function 

    echo strlen("halo, nama saya $nama");
?>
