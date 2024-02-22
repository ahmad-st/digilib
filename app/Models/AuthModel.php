<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class AuthModel extends Model{
    protected $table = 'users';
    
    protected $allowedFields = [
        'id',
        'user_id',
        'fullname',
        'userlevel',
        'password',
        'created'
    ];
}