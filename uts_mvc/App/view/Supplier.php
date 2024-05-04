<?php require 'home/header.view.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Halaman Supplier</h1>
            <p>Selamat Datang di Halaman Supplier</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Daftar Supplier</h2>
            <ul class="list-group">
                <li class="list-group-item">Supplier 1</li>
                <li class="list-group-item">Supplier 2</li>
                <li class="list-group-item">Supplier 3</li>
                <!-- Tambahkan daftar supplier sesuai kebutuhan -->
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Informasi Supplier</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Supplier 1</h5>
                    <p class="card-text">Alamat: Jalan ABC No. 123</p>
                    <p class="card-text">Kontak: 08123456789</p>
                    <!-- Tambahkan informasi tambahan sesuai kebutuhan -->
                    <a href="#" class="btn btn-primary">Edit Informasi</a>
                    <a href="#" class="btn btn-danger">Hapus Supplier</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'home/footer.view.php'; ?>