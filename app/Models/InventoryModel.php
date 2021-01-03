<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class InventoryModel extends Model
{
    // your table
    protected $table = 'invdata';
    // primary key
    protected $allowedFields = ['name','pic','email','manufacturer','description','unitPrice','stock', 'availability'];

}
