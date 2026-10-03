<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "Kategori dengan ID $id berhasil dihapus.";
} else {
    echo "ID kategori tidak ditemukan.";
}