<?php

    class Livia_model {
        private $table = 'livia';
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function getAllLivia(){
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getLiviaById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' where id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function tambahDataLivia($data) {
            $query = "INSERT INTO $this->table (negara, kota, tempat_wisata) VALUES (:negara, :kota, :tempat_wisata)";
            $this->db->query($query);
            $this->db->bind('negara', $data['negara']);
            $this->db->bind('kota', $data['kota']);
            $this->db->bind('tempat_wisata', $data['tempat_wisata']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataLivia($id) {
            $query = "DELETE FROM $this->table WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);

            $this->db->execute();

            return $this->db->rowCount();
        }

  }
?>