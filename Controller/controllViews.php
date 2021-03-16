<?php




class controllVistas{

    public $viewPath = 'C:\xampp\htdocs\Emi\Views';
    public $layout;
    public $layoutBl;
    public $layoutEmp;
    public $layoutSub;

    public function __construct(){
        $this->layout = $this->viewPath.'\Layout\layout.php';
        $this->layoutBl = $this->viewPath.'\Layout\layoutBl.php';
        $this->layoutEmp = $this->viewPath.'\Layout\layoutEmp.php';
        $this->layoutSub = $this->viewPath.'\Layout\layoutSub.php';


    }



    public function index(){
        $pageTitle = 'Login';
        $body = $this->viewPath.'\login.php';

        include_once $this->layoutBl;
    }


}




?>