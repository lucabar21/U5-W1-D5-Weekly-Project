<?php

class Book
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllBooks()
    {
        $stmt = $this->pdo->query("SELECT * FROM books");
        return $stmt->fetchAll();
    }

    public function getBookById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM books WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function addBook($title, $author, $description)
    {
        $stmt = $this->pdo->prepare("INSERT INTO books (title, author, description) VALUES (:title, :author, :description)");
        $stmt->execute(['title' => $title, 'author' => $author, 'description' => $description]);
        return $this->pdo->lastInsertId();
    }

    public function updateBook($id, $title, $author, $description)
    {
        $stmt = $this->pdo->prepare("UPDATE books SET title = :title, author = :author, description = :description WHERE id = :id");
        $stmt->execute(['id' => $id, 'title' => $title, 'author' => $author, 'description' => $description]);
    }

    public function deleteBook($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM books WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}