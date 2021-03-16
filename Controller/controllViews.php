<?php




class controllVistas{

    public $viewPath = 'C:\xampp\htdocs\Emi\Views';
    public $layout;

    public function __construct(){
        $this->layout = $this->viewPath.'\Layout\layout.php';

    }



    public function index(){
        $pageTitle = 'Login';
        $body = $this->viewPath.'\login.php';

        include_once $this->layout;
    }


}




?>