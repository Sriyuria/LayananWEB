<?php
class Model {
    protected $db;

    public function __construct() {
        // Ubah dengan detail koneksi database Anda
        $this->db = new PDO("mysql:host=localhost;dbname=uts_web_db", "username", "password");
    }
}
