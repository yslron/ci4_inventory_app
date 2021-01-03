<?php

namespace App\Models;

use CodeIgniter\Model;

class YourModel extends Model
{
    // your table
    protected $table = 'fullname';
    // primary key
    protected $primaryKey = 'id';
    // table fields
    protected $allowedFields = ['name', 'email','password'];

    public function createNew()
    {
    $this->insert($_POST);
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
    $this->update($_POST['id'], $_POST);
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