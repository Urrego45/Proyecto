<?php




class controllVistas{

    public $viewPath = 'C:\xampp\htdocs\Emi\Views';
    public $layout;
    public $layoutBl;
    public $layoutEmp;
    public $layoutSub;



    public function __construct(){

        $this->usuario = new usuario();

        $this->layout = $this->viewPath.'\Layout\layout.php';
        $this->layoutBl = $this->viewPath.'\Layout\layoutBl.php';
        $this->layoutEmp = $this->viewPath.'\Layout\layoutEmp.php';
        $this->layoutSub = $this->viewPath.'\Layout\layoutSub.php';
    }

    


    /* ------------- INICIO --------------- */

    public function index(){
        $pageTitle = 'Login';
        $body = $this->viewPath.'\login.php';

        include_once $this->layoutBl;
    }

    /* ------------- ADMIN --------------- */

    public function admin(){
        $pageTitle = 'Inicio';
        $body = $this->viewPath.'\Admin\index.php';
        

        include_once $this->layout;
    }

    public function listar(){
        $pageTitle = 'Inicio';
        $body = $this->viewPath.'\Admin\listar.php';
        

        include_once $this->layout;
    }

    public function crear(){
        $pageTitle = 'Crear';
        $body = $this->viewPath.'\Admin\crear.php';
        

        include_once $this->layout;
    }


}




?>