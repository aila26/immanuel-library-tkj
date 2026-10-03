<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "Buku dengan ID $id berhasil dihapus.";
} else {
    echo "ID buku tidak ditemukan.";
}
