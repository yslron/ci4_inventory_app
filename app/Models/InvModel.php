<?php

namespace App\Models;

use CodeIgniter\Model;

class InvModel extends Model
{
    // your table
    protected $table = 'invdata';
    // primary key
    protected $primaryKey = 'UID';
    // table fields
    protected $allowedFields = ['name', 'manufacturer', 'description','unitPrice','stock','availability'];

    public function saveInv($data){
        $query = $this->db->table('invdata')->insert($data);
        return $query;
    }

    public function getList()
    {
    return $this->orderBy('name', 'ASC')->findAll();
    }

    public function getForEdit($id)
    {
    return $this->find($id);
    }

    public function updateData()
    {
    $this->update($_POST['UID'], $_POST);
    }

}



/*class ArticleModel extends Model
{
    // your table
    protected $table = 'invdata';
    // primary key
    protected $primaryKey = 'UID';
    // table fields
    protected $allowedFields = ['pic', 'name', 'manufacturer', 'description', 'unitPrice', 'stock', 'availability'];
}*/