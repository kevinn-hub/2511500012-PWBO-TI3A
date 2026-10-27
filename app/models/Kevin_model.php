<?php

    class Kevin_model {
        private $table = 'kevin';
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function getAllKevin(){
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getKevinById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' where id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
        public function tambahDataLivia($data) {
            $query = "INSERT INTO $this->table (nama_istri, nama_orang, nama_teman) VALUES (:nama_istri, :nama_orang, :nama_teman)";
            $this->db->query($query);
            $this->db->bind('nama_istri', $data['nama_istri']);
            $this->db->bind('nama_orang', $data['nama_orang']);
            $this->db->bind('nama_teman', $data['nama_teman']);

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