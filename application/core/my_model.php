<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Controller {
    const DB_TABLE = 'abstract';
    const DB_TABLE_PK = 'abstract';



    /*
     * create record
     * */
    private function insert(){
        $this->db->insert($this::DB_TABLE, $this);
        $this->{$this::DB_TABLE_PK} = $this->db->insert_id();
    }

    private function update(){
        $this->db-update($this::DB_TABLE, $this, $this::DB_TABLE_PK);
    }

    public function populate($row)
}