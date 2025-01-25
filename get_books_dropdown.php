<?php

include 'connection.php';

$query = "SELECT id, book_name FROM books";

$result = $database->query($query);

$books = [];
while ($row = $result->fetch_assoc()) {
    $books[] = $row;
}

echo json_encode($books);

$database->close();
?>