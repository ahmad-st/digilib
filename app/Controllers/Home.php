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

    public function layout()
    {
        $data['page_title'] = 'Sample Layout';
        return view('template/layout', $data);
    }

    public function samplepage()
    {
        $data['page_title'] = 'Sample Pgae';
        return view('template/samplepage',$data);
    }

    public function sampletable()
    {
        $data['page_title'] = 'Datatable Sample';
        return view('template/sampletable',$data);
    }

    public function samplecrm()
    {
        $data['page_title'] = 'CRM Sample';
        return view('template/samplecrm',$data);
    }
}
