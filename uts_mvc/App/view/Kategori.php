<?php require 'home/header.view.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Halaman Kategori</h1>
            <p>Selamat Datang di Website saya</p>

            <h2>Kategori Produk</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="path_to_category_image" alt="Nama Kategori 1">
                        <div class="card-body">
                            <h5 class="card-title">Nama Kategori 1</h5>
                            <p class="card-text">Deskripsi singkat tentang Kategori 1.</p>
                            <a href="/produk" class="btn btn-primary">Lihat Produk</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="path_to_category_image" alt="Nama Kategori 2">
                        <div class="card-body">
                            <h5 class="card-title">Nama Kategori 2</h5>
                            <p class="card-text">Deskripsi singkat tentang Kategori 2.</p>
                            <a href="/produk" class="btn btn-primary">Lihat Produk</a>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan card lainnya sesuai dengan jumlah kategori -->

            </div>
        </div>
    </div>
</div>

<?php require 'home/footer.view.php'; ?>