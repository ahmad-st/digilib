<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class Home extends Controller
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }
}
