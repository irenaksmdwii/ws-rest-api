<?php

function getKey() {
    return ["2741", "ikdrahasia", "ikd"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getBuku() {
    $buku = [
        ["judul" => "1", "konten" => "Habis Gelap Terbitlah Terang Buku Ke-1"],
        ["judul" => "2", "konten" => "Anak Singkong Buku Ke-2"],
        ["judul" => "3", "konten" => "Cinta Beda Server Buku Ke-3"]
    ];
    return $buku;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getBuku());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>