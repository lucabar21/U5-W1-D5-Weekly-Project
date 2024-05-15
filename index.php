<?php
include_once __DIR__ . "/includes/initial.php";
?>
<div class="col-8">
    <h1 class="title">BIBLIOTECA DIGITALE</h1>
    <div class="hero mt-3 mb-4"><img src="https://cdn.pixabay.com/photo/2024/03/12/18/01/library-8629279_1280.png"
            alt="libreria">
    </div>
    <div class="d-flex justify-content-center gap-5">
        <div class="d-flex justify-content-center">
            <a href="register.php">
                <button type="button" class="btn btn-primary">Registrati</button>
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="login.php">
                <button type="button" class="btn btn-success">Accedi</button>
            </a>
        </div>
    </div>
</div>
<?php include_once __DIR__ . "/includes/end.php";