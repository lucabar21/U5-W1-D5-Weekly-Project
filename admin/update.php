<?php
include_once __DIR__ . "/../includes/initial.php";
include_once __DIR__ . "/../includes/init.php";
include_once __DIR__ . "/../classes/book.php";

$bookManager = new Book($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_book'])) {

    $id = $_POST['id'] ?? '';

    if (!empty($id)) {
        $book = $bookManager->getBookById($id);
        if ($book) {

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_book'])) {
                $title = $_POST['title'] ?? '';
                $author = $_POST['author'] ?? '';
                $description = $_POST['description'] ?? '';

                $bookManager->updateBook($id, $title, $author, $description);
            }
        }
    }
}
?>
<div class="col-8">
    <form action="\U5-W1-D5 Weekly Project\admin\backoffice.php" method="post">
        <h3 class="text-center my-2">Aggiorna le informazioni di questo libro</h3>
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" value="<?php echo $book['title']; ?>"
                id="exampleFormControlInput1">
        </div>

        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Autore</label>
            <input type="text" class="form-control" name="author" value="<?php echo $book['author']; ?>"
                id="exampleFormControlInput1">

        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="exampleFormControlInput1"
                rows="4"><?php echo $book['description']; ?></textarea>
        </div>
        <button type="submit" name="update_book" class="btn btn-primary">Aggiorna</button>
    </form>
</div>
<?php include_once __DIR__ . "/../includes/end.php";