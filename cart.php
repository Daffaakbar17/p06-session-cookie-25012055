<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/functions.php';

$products = require __DIR__ . '/data/products.php';

$flash = pullFlash();

$judul = 'Keranjang Belanja';

$cart = $_SESSION['cart'];

$total = 0;

require __DIR__ . '/components/header.php';
?>

<?php if ($flash !== null): ?>
    <div class="flash">
        <?= e($flash) ?>
    </div>
<?php endif; ?>

<?php if ($cart === []): ?>

    <p>Keranjang masih kosong.</p>

<?php else: ?>

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($cart as $id => $quantity): ?>

                <?php if (!isset($products[$id])) {
                    continue;
                } ?>

                <?php
                $product = $products[$id];
                $subtotal = $product['harga'] * $quantity;
                $total += $subtotal;
                ?>

                <tr>
                    <td><?= e($product['nama']) ?></td>

                    <td>
                        Rp <?= number_format(
                            $product['harga'],
                            0,
                            ',',
                            '.'
                        ) ?>
                    </td>

                    <td><?= $quantity ?></td>

                    <td>
                        Rp <?= number_format(
                            $subtotal,
                            0,
                            ',',
                            '.'
                        ) ?>
                    </td>

                    <td>
                        <form action="actions.php" method="post">
                            <input
                                type="hidden"
                                name="action"
                                value="remove"
                            >

                            <input
                                type="hidden"
                                name="id"
                                value="<?= $id ?>"
                            >

                            <button type="submit">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

    <h3>
        Total:
        Rp <?= number_format($total, 0, ',', '.') ?>
    </h3>

    <form action="actions.php" method="post">
        <input
            type="hidden"
            name="action"
            value="clear"
        >

        <button type="submit">
            Kosongkan Keranjang
        </button>
    </form>

<?php endif; ?>

<?php require __DIR__ . '/components/footer.php'; ?>