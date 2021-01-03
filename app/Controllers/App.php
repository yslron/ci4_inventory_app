<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\InventoryModel;
 
class App extends Controller
{
    public function index()
    {    
        echo view('templates/header');
        return view('pages/home');
        echo view('templates/footer');
    }   

    function i($page = 'inventory'){

        $model = new InventoryModel();
 
        $data['invdata'] = $model->orderBy('UID', 'DESC')->findAll();
        if( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {

            //page error no page found
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);

        }
        // load view
        echo view('templates/header');
        echo view('templates/sidenav.php');
        echo view('pages/'.$page,$data);
        echo view('templates/footer');

    }

    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new InventoryModel();
		
        $data = [
            'name' => $this->request->getVar('dname'),
            'manufacturer'  => $this->request->getVar('dmanufacturer'),
            'description'  => $this->request->getVar('ddescription'),
            'unitPrice'  => $this->request->getVar('dunitPrice'),
            'stock'  => $this->request->getVar('dstock'),
            'availability'  => $this->request->getVar('davailability'),
            ];
        $save = $model->insert($data);
		return redirect()->to( base_url('app/i') );
    }


}