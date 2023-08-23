<?php

include_once("helpers/url.php")


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Blog</title>
</head>

<body>
    <header>
        <a href="<= $BASE_URL ?>" id="logo">
            <img src="<= $BASE_URL ?>" alt="Blog">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<= $BASE_URL ?>">Home</a></li>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="<= $BASE_URL ?>contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>