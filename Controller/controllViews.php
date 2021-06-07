<?php




class controllVistas{

    public $viewPath = 'C:\xampp\htdocs\Emi\Views';
    public $layout;
    public $layoutBl;
    public $layoutSub;



    public function __construct(){

        $this->usuario = new usuario();
        $this->proveedor = new proveedor();
        $this->insumo = new insumo();
        $this->productof = new productofinal();

        $this->layout = $this->viewPath.'\Layout\layout.php';
        $this->layoutBl = $this->viewPath.'\Layout\layoutBl.php';
        $this->layoutSub = $this->viewPath.'\Layout\layoutSub.php';
    }

    


    /* ------------- INICIO --------------- */

    public function index(){
        $pageTitle = 'Login';
        $body = $this->viewPath.'\login.php';

        include_once $this->layoutBl;
    }

    /* ------------- ADMIN --------------- */

    

    public function inicioA(){
        $pageTitle = 'Inicio';
        $body = $this->viewPath.'\Admin\index.php';
        

        include_once $this->layout;
    }

    /* --- Usuarios --- */

    public function listar(){
        $pageTitle = 'Usuarios';
        $body = $this->viewPath.'\Admin\usuarios\listar.php';
        

        include_once $this->layout;
    }

    public function crear(){
        $pageTitle = 'Crear usuario';
        $body = $this->viewPath.'\Admin\usuarios\crear.php';
        

        include_once $this->layout;
    }

    public function editar(){
        $alm = new usuario();
        if(isset($_REQUEST['id'])){
            $alm = $this->usuario->cargarID($_REQUEST['id']);
        }
        $pageTitle = 'Editar usuario';
        $body = $this->viewPath.'\Admin\usuarios\editar.php';
        

        include_once $this->layout;
    }


    /* --- proveedores --- */

    public function listarP(){
        $pageTitle = 'Proveedores';
        $body = $this->viewPath.'\Admin\proveedores\listar.php';
        

        include_once $this->layout;
    }

    public function crearP(){
        $pageTitle = 'Crear proveedor';
        $body = $this->viewPath.'\Admin\proveedores\crear.php';
        

        include_once $this->layout;
    }

    public function editarP(){
        $alm = new usuario();
        if(isset($_REQUEST['id'])){
            $alm = $this->proveedor->cargarID($_REQUEST['id']);
        }
        $pageTitle = 'Editar proveedor';
        $body = $this->viewPath.'\Admin\proveedores\editar.php';
        

        include_once $this->layout;
    }

    /* --- Insumos --- */

    public function listarI(){
        $pageTitle = 'Insumos';
        $body = $this->viewPath.'\Admin\insumos\listar.php';
        

        include_once $this->layout;
    }

    public function crearI(){
        $pageTitle = 'Nuevo insumo';
        $body = $this->viewPath.'\Admin\insumos\crear.php';
        

        include_once $this->layout;
    }

    public function editarI(){
        $alm = new insumo();
        if(isset($_REQUEST['id'])){
            $alm = $this->insumo->cargarID($_REQUEST['id']);
        }
        $pageTitle = 'Editar Insumo';
        $body = $this->viewPath.'\Admin\insumos\editar.php';
        

        include_once $this->layout;
    }

    /* --- Producto Final --- */

    public function listarPr(){
        $pageTitle = 'Producto final';
        $body = $this->viewPath.'\Admin\productoF\listar.php';
        

        include_once $this->layout;
    }

    public function crearPr(){
        $pageTitle = 'Nuevo Producrto';
        $body = $this->viewPath.'\Admin\productoF\crear.php';
        

        include_once $this->layout;
    }

    public function editarPr(){
        $alm = new productofinal();
        if(isset($_REQUEST['id'])){
            $alm = $this->productof->cargarID($_REQUEST['id']);
        }
        $pageTitle = 'Editar Producto';
        $body = $this->viewPath.'\Admin\productoF\editar.php';
        

        include_once $this->layout;
    }

    /* ------------- Sub-Admin --------------- */

    public function inicioS(){
        $pageTitle = 'Inicio';
        $body = $this->viewPath.'\SubAdmin\index.php';
        

        include_once $this->layoutSub;
    }

    /* --- proveedores --- */

    public function listarPS(){
        $pageTitle = 'Proveedores';
        $body = $this->viewPath.'\SubAdmin\proveedores\listar.php';
        

        include_once $this->layoutSub;
    }

    /* --- Insumos --- */

    public function listarIS(){
        $pageTitle = 'Insumos';
        $body = $this->viewPath.'\SubAdmin\insumos\listar.php';
        

        include_once $this->layoutSub;
    }

    public function crearIS(){
        $pageTitle = 'Nuevo insumo';
        $body = $this->viewPath.'\SubAdmin\insumos\crear.php';
        

        include_once $this->layoutSub;
    }

    public function editarIS(){
        $alm = new insumo();
        if(isset($_REQUEST['id'])){
            $alm = $this->insumo->cargarID($_REQUEST['id']);
        }
        $pageTitle = 'Editar Insumo';
        $body = $this->viewPath.'\SubAdmin\insumos\editar.php';
        

        include_once $this->layoutSub;
    }

    /* --- Producto Final --- */

    public function listarPrS(){
        $pageTitle = 'Producto final';
        $body = $this->viewPath.'\SubAdmin\productoF\listar.php';
        

        include_once $this->layoutSub;
    }

    public function crearPrS(){
        $pageTitle = 'Nuevo Producrto';
        $body = $this->viewPath.'\SubAdmin\productoF\crear.php';
        

        include_once $this->layoutSub;
    }

    public function editarPrS(){
        $alm = new productofinal();
        if(isset($_REQUEST['id'])){
            $alm = $this->productof->cargarID($_REQUEST['id']);
        }
        $pageTitle = 'Editar Producto';
        $body = $this->viewPath.'\SubAdmin\productoF\editar.php';
        

        include_once $this->layoutSub;
    }


    public function enviarCorreo(){
        $pageTitle = 'Cambiar contraseña';
        $body = $this->viewPath.'\enviarCorreo.php';
        

        include_once $this->layout;
    }

    public function enviarCorreoSub(){
        $pageTitle = 'Cambiar contraseña';
        $body = $this->viewPath.'\enviarCorreo.php';
        

        include_once $this->layoutSub;
    }

    public function cambiarPass(){
        $pageTitle = 'Cambiar contraseña';
        $body = $this->viewPath.'\cambiarPass.php';
        

        include_once $this->layoutBl;
    }


    // Detalles

    public function detalles(){
        session_start();

        $alm = new productofinal();
        if(isset($_REQUEST['id'])){
            $alm = $this->productof->cargarID($_REQUEST['id']);
        }
        $pageTitle = 'Editar Producto';
        $body = $this->viewPath.'\detalles.php';
        
        if($_SESSION['idRol'] == 1){
            include_once $this->layout;
        }else{
            include_once $this->layoutSub;
        }
    }
}




?>