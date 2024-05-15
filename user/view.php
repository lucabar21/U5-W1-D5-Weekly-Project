<?php
include_once __DIR__ . "/../includes/initial.php";
include_once __DIR__ . "/../includes/init.php";
include_once __DIR__ . "/../classes/book.php";


$bookManager = new Book($pdo);

$books = $bookManager->getAllBooks();

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: U5-W1-D5%20Weekly%20Project/../../login.php');
    exit;
}

$userName = isset($_SESSION['user']) ? strtoupper($_SESSION['user']['username']) : 'UTENTE';

?>
<div class="col-8 d-flex flex-column gap-3 justify-content-center">
    <h1 class="title mb-4">BENVENUTO <?= $userName ?></h1>
    <?php foreach ($books as $book): ?>
        <div class="book d-flex gap-3 justify-content-center align-items-center">
            <h4><?= $book['title']; ?> - <?= $book['author']; ?></h4>
        </div>
    <?php endforeach; ?>

</div>
<div class="col-8 d-flex justify-content-center mt-3">
    <form action="" method="post">
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>
</div>
<?php include_once __DIR__ . "/../includes/end.php";