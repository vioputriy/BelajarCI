<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    private $_table = "Supplier";

    public $Supplier_id;
    public $Supplier_name;
    public $Supplier_address;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    
}
?>