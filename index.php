<?php

    include "connection.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    
        $judulnya = $_POST['judulnya'];
        echo $judulnya;
    } else
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){ 
        $query = "select * from buku";
        $ko = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_array($ko)) {
            $databukunya[] = array(
                'judul' => $data['judul'],
                'pengarang' => $data['pengarang'],
                'rak_simpan' => $data['rak_simpan']
            );
        }
            echo "===========================================================================I R E N A  K D  -  1 8 7 0 0 6 0 0 2=======================================================================";
        $respon[] = array(
            'status' => 'OK',
            'kode' => '999',
            'data' => $databukunya
        );


        header("Content-type: application/json");
        echo json_encode($respon);

        echo "========================================================================================================================================================";

    }

?>