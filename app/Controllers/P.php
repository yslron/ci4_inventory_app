<?php   namespace App\Controllers;

use App\Models\InvModel;

class P extends BaseController
{
      //load helper
    public function __construct()
    {
    helper(['form']);
    }

    public function index()
    {
        $data['pageTitle'] = 'Inventory';
        echo view('templates/header');
        echo view('pages/home');
        echo view('templates/footer');
    }

    function i($page = 'inventory'){

        $model = new InvModel();

        // load table
        $data['table'] = $model->getList();

    

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

    public function save()
    {
        $file_name = $_FILES['test']['name'];
        $data['pic'] = $file_name;      
        $model = new InvModel();
        $data = array(
            'name'=> $this->request->getPost('name'),
            'pic' =>$this->request->getPost('pic'),
            'manufacturer' => $this->request->getPost('manufacturer'),
            'description' => $this->request->getPost('description'),
            'unitPrice' => $this->request->getPost('unitPrice'),
            'stock' => $this->request->getPost('stock'),
            'availablity' => $this->request->getPost('availablity'),
        );
        $model->saveProduct($data);
        return redirect()->to('/p/i');
    }
    
    public function edit($id)
    {
    //load model
    $model = new InvModel();

    $data['forEdit'] = $model->getForEdit($id);

    $data['pageTitle'] = 'Edit Page';

    // load view
    return view('form-folder/form-edit', $data);
    }

    public function update()
    {
    $model = new InvModel();

    $model->updateData();

    return $this->response->redirect(site_url('home'));
    }

}

    /*
        $model = new YourModel();

        $data['pageTitle'] = 'Home Index Page';

        // load table
        $data['table'] = $model->getList();

        // load view
        return view('index-page', $data);
    
        function i($page = 'inventory'){

        if( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {

            //page error no page found
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);

        }
        echo view('templates/header');
        echo view('templates/sidenav.php');
        echo view('pages/'.$page);
        echo view('templates/footer');

    }*/


?>