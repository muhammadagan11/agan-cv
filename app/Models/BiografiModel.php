<?php 
namespace App\Models;

use CodeIgniter\Model;

class BiografiModel extends Model
{
    protected $table = 'content';
    protected $primaryKey = 'id';
    protected $allowedFields = ['birthday', 'phone', 'city', 'age', 'email', 'status'];
}