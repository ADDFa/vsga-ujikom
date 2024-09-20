<?php

// koneksi ke database
function query(string $query)
{
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_error) die("Koneksi Gagal" . $conn->connect_error);
        $result = mysqli_query($conn, $query);
        $conn->close();

        return $result;
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

function getResult($result)
{
    if ($result->num_rows <= 0) return;

    $data = [];
    while ($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }

    return $data;
}
