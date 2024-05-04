<?php 
require 'home/header.view.php'; 
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Halaman Transaksi</h1>
            <p>Daftar Barang yang Dibeli:</p>
            <div class="card mb-3">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php 
                        // Periksa apakah ada produk dalam sesi
                        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            // Loop untuk menampilkan setiap produk dalam sesi
                            foreach($_SESSION['cart'] as $product) {
                                echo '<li class="list-group-item">';
                                echo '<h5 class="card-title">' . $product['nama'] . '</h5>';
                                echo '<p class="card-text">Deskripsi: ' . $product['deskripsi'] . '</p>';
                                echo '<p class="card-text">Harga: Rp ' . number_format($product['harga'], 0, ',', '.') . '</p>';
                                echo '</li>';
                            }
                        } else {
                            echo "<li class='list-group-item'>Tidak ada barang dalam keranjang.</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <a href="/checkout" class="btn btn-primary">Checkout</a>
        </div>
    </div>
</div>

<?php require 'home/footer.view.php'; ?>