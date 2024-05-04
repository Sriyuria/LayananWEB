<?php require 'home/header.view.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Halaman Produk</h1>
            <p>Selamat Datang di Website saya</p>

            <h2>Daftar Produk</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="path_to_product_image" alt="Nama Produk 1">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk 1</h5>
                            <p class="card-text">Deskripsi singkat tentang Produk 1.</p>
                            <a href="/transaction" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="path_to_product_image" alt="Nama Produk 2">
                        <div class="card-body">
                            <h5 class="card-title">Nama Produk 2</h5>
                            <p class="card-text">Deskripsi singkat tentang Produk 2.</p>
                            <a href="/transaction" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan card lainnya sesuai dengan jumlah produk -->

            </div>
        </div>
    </div>
</div>

<?php require 'home/footer.view.php'; ?>