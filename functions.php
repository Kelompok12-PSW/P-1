<?php

    // Menghubungkan ke database
    $conn = mysqli_connect("localhost", "root", "", "universitas_x");

    // menerima parameter dari fungsi query()
    function query($query) {
        global $conn;
        // query data kemudian simpan dalam sebuah variable
        $result = mysqli_query($conn, $query); //result = array
        // var_dump($result);
        // die;
        $values = [];
        while( $value = mysqli_fetch_assoc($result) ) {
            $values[] = $value;
        }
        return $values;
    }



?>