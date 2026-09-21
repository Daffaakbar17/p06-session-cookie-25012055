<?php
$judul = $judul ?? 'Keranjang Belanja';
$theme = $theme ?? 'light';
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= e($judul) ?></title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 32px;
            background: <?= $theme === 'dark' ? '#222' : '#fff' ?>;
            color: <?= $theme === 'dark' ? '#fff' : '#222' ?>;
        }

        a {
            color: inherit;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #888;
            padding: 8px;
        }

        th {
            background: <?= $theme === 'dark' ? '#444' : '#e8eef8' ?>;
        }

        .flash {
            padding: 10px;
            margin: 15px 0;
            border: 1px solid #888;
        }

        form {
            display: inline;
        }

        button {
            padding: 6px 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<header>
    <h1><?= e($judul) ?></h1>

    <nav>
        <a href="index.php">Katalog</a> |
        <a href="cart.php">Keranjang</a>
    </nav>
</header>

<main>