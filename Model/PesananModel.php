<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
 
class PesananModel extends Database
{
    public function getPesanan($limit)
    {
        return $this->select("SELECT * FROM pesanan ORDER BY id_pesanan ASC LIMIT ?", ["i", $limit]);
    }
}