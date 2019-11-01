<?php
    $nama ="joko";
    if($nama != "joko"){
        echo "Anda bukan joko";
    } else{
        echo"Selamat Datang $nama<br>";
    }
    switch ($nama) {
        case 'joko':
            echo 'Cocok!';
            break;
        
        default:
            echo'Tidak Cocok';
            break;
    }
?>