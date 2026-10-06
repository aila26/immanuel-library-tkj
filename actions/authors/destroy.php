<?php

if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] == "GET") {
    $id = $_GET['id'];

    echo "Author dengan ID $id berhasil dihapus.";
} else {
    echo "ID author tidak ditemukan.";
}
