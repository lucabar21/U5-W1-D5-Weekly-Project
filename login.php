<?php
include_once __DIR__ . "/includes/init.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = $userManager->validateUser($username, $password);

    if ($user) {
        if ($user['role'] == 'admin') {
            $_SESSION['user'] = $user;
            header('Location: /U5-W1-D5%20Weekly%20Project/admin/backoffice.php');
        } else {
            header("Location: /U5-W1-D5%20Weekly%20Project/user/view.php");
        }
        exit;
    } else {
        $errors['credentials'] = 'Invalid credentials';
    }
}
?>

<?php
include_once __DIR__ . "/includes/initial.php";
?>

<div class="col-6">
    <h1 class="title">ACCEDI</h1>
    <form action="" method="post">
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username"
                value="<?php echo isset($username) ? $username : ''; ?>" id="exampleFormControlInput1">
        </div>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="" id="exampleFormControlInput1">
        </div>
        <?= isset($errors['credentials']) ? "<div class='alert alert-danger text-center' role='alert'>
        Invalid credentials
    </div>" : "" ?>
        <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary">Login</button></div>
    </form>
</div>

<?php include_once __DIR__ . "/includes/end.php";