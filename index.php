<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/functions.php';

$products = require __DIR__ . '/data/products.php';

$allowedThemes = ['light', 'dark'];

$theme = $_COOKIE['theme'] ?? 'light';

if (!in_array($theme, $allowedThemes, true)) {
    $theme = 'light';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['theme'])) {
    $candidate = $_POST['theme'];

    if (in_array($candidate, $allowedThemes, true)) {
        setcookie('theme', $candidate, [
            'expires' => time() + 60 * 60 * 24 * 30,
            'path' => '/',
            'httponly' => true,
            'samesite' => 'Lax',
        ]);

        header('Location: index.php');
        exit;
    }
}

$theme = $_COOKIE['theme'] ?? 'light';

if (!in_array($theme, $allowedThemes, true)) {
    $theme = 'light';
}

$flash = pullFlash();

$judul = 'Katalog Produk';
$cartCount = cartCount($_SESSION['cart']);

require __DIR__ . '/components/header.php';
?>

<?php if ($flash !== null): ?>
    <div class="flash">
        <?= e($flash) ?>
    </div>
<?php endif; ?>

<p>
    Isi keranjang:
    <strong><?= $cartCount ?></strong>
</p>

<h2>Daftar Produk</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($products as $id => $product): ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= e($product['nama']) ?></td>
                <td>Rp <?= number_format($product['harga'], 0, ',', '.') ?></td>
                <td>
                    <form action="actions.php" method="post">
                        <input type="hidden" name="action" value="add">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <button type="submit">Tambah</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h2>Preferensi Tema</h2>

<form action="index.php" method="post">
    <select name="theme">
        <option value="light" <?= $theme === 'light' ? 'selected' : '' ?>>
            Terang
        </option>

        <option value="dark" <?= $theme === 'dark' ? 'selected' : '' ?>>
            Gelap
        </option>
    </select>

    <button type="submit">Simpan Tema</button>
</form>

<?php require __DIR__ . '/components/footer.php'; ?>