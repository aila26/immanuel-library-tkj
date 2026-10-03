<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "User dengan ID $id berhasil dihapus.";
} else {
    echo "ID user tidak ditemukan.";
}