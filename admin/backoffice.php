<?php
include_once __DIR__ . "/../includes/initial.php";
include_once __DIR__ . "/../includes/init.php";
include_once __DIR__ . "/../classes/book.php";

$bookManager = new Book($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_book'])) {
    $title = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $description = $_POST['description'] ?? '';

    $bookManager->addBook($title, $author, $description);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_book'])) {
    $id = $_POST['id'] ?? '';
    $title = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $description = $_POST['description'] ?? '';

    $bookManager->updateBook($id, $title, $author, $description);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_book'])) {
    $id = $_POST['id'] ?? '';
    $bookManager->deleteBook($id);
}

$books = $bookManager->getAllBooks();

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: U5-W1-D5%20Weekly%20Project/../../login.php');
    exit;
}

?>

<div class="col-8 d-flex flex-column justify-content-center">
    <h1 class="title mb-4">BENVENUTO ADMIN</h1>

    <div class=" d-flex flex-column gap-2">
        <?php foreach ($books as $book): ?>
            <div class="book d-flex gap-3 justify-content-between align-items-center">
                <h4><?= $book['title']; ?> - <?= $book['author']; ?></h4>
                <div class="d-flex gap-2">
                    <form action="\U5-W1-D5 Weekly Project\admin\update.php" method="post">
                        <input type="hidden" name="id" value="<?= $book['id']; ?>">
                        <button type="submit" class="btn btn-primary" name="update_book">Modifica</button>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $book['id']; ?>">
                        <button type="submit" class="btn btn-danger" name="delete_book">Elimina</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <form action="" method="post">
        <h3 class="text-center mt-4">CARICA UN NUOVO LIBRO</h3>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" placeholder="Titolo del libro"
                id="exampleFormControlInput1">
        </div>

        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Autore</label>
            <input type="text" class="form-control" name="author" placeholder="Nome dell'autore"
                id="exampleFormControlInput1">

        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" placeholder="Descrizione del libro"
                id="exampleFormControlInput1"></textarea>
        </div>
        <button type="submit" name="add_book" class="btn btn-primary">Add Book</button>
    </form>

</div>

<div class="col-8 d-flex justify-content-center mt-3">
    <form action="" method="post">
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>
</div>

<?php include_once __DIR__ . "/../includes/end.php";