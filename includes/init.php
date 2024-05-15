<?php

session_start();
include __DIR__ . '/../classes/db.php';
include __DIR__ . '/../classes/user.php';

global $pdo;

$db = new Database('localhost', 'ifoa_u5_w2_d5', 'root', '');

$pdo = $db->getPdo();

$userManager = new User($pdo);