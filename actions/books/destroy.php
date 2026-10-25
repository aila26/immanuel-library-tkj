<?php
require_once __DIR__ . "/../../config/database.php";

if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] === "GET") {
    try {
        $pdo->beginTransaction();
        $id = $_GET['id'];

        //Delete relation data (Book Author)
        $query = "delete from book_author where book_id = :book_id";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            "book_id" => $id
        ]);

        //Delete Book Data
         $query = "delete from books where id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            "id" => $id
        ]);

        $pdo->commit();

        header("Location: ../../pages/books/index.php");
        exit;
    } catch (PDOException $e) {
        $PDO->rollBack();
        throw $e;
    }

}

?>
