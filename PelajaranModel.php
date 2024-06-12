<?php

class PelajaranModel {
    private $table = 'pelajaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPelajaran()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}