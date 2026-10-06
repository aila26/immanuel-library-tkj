<?php

if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] == "GET") {
    $id = $_GET['id'];

    echo "Kategori dengan ID $id berhasil dihapus.";
} else {
    echo "ID kategori tidak ditemukan.";
}