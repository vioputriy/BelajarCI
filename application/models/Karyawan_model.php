<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    private $_table = "Karyawan";

    public $karywan_id;
    public $name;
    public $address;
    public $telepon;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["karyawan_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->karyawan_id = uniqid();
        $this->name = $post["name"];
        $this->address = $post["address"];
        $this->telepon = $post["no.telepon"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->karyawan_id = $post["id"];
        $this->name = $post["name"];
        $this->address = $post["price"];
        $this->telepon = $post["no.telepon"];
        $this->db->update($this->_table, $this, array('karyawan_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("karyawan_id" => $id));
    }
}
?>