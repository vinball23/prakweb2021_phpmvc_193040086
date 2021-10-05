<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Sandhika Galih",
    //         "nrp" => "043040023",
    //         "email" => "sandhikagalih@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Eric Doank",
    //         "nrp" => "163030123",
    //         "email" => "erik@unpas.ac.id",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "Kevin Anggara Putra",
    //         "nrp" => "193040086",
    //         "email" => "193040086@unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    //     ];
        private $dbh; // database handler
        private $stmt; 

        public function __construct() {
            // data source name
            $dsn = 'mysql:host=localhost;dbname=phpmvc';

            try {
                $this->dbh = new PDO($dsn, 'root', '');
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }


        public function getAllMahasiswa() {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}