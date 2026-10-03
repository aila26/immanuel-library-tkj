<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "Author dengan ID $id berhasil dihapus.";
} else {
    echo "ID author tidak ditemukan.";
}
