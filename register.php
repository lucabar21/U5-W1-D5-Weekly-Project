<?php
include_once __DIR__ . "/includes/init.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $userId = $userManager->addUser($username, $email, $password);

    header("Location: /U5-W1-D5%20Weekly%20Project/user/view.php?id=$userId");
    exit;
}
include_once __DIR__ . "/includes/initial.php";
?>

<div class="col-6">
    <h1 class="title">REGISTRATI</h1>
    <form action="" method="post">
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="
                exampleFormControlInput1">
        </div>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id=" exampleFormControlInput1">
        </div>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleFormControlInput1">
        </div>
        <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary">Send</button></div>
    </form>
</div>

<?php include_once __DIR__ . "/includes/end.php";