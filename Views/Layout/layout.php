<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Emi/assets/css/main.css">
    <title> Dashboard Emi - <?=$pageTitle?> </title>
</head>
<body>
        
    <div class="overflow-hidden">

        <nav class="navbar fixed-top navbar-dark bg-dark">

            <a class="navbar-brand" href="?v=inicioA">Dashboard - EMI</a>

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link  px-2 rounded linkDark2Hover" href="?l=cerrarSesion"> LogOut </a>

                </li>

            </ul>

        </nav>

        <br/>

        <br/>

        <br/>
            
        <div class="w-20 p-5 sideBar-left bg-dark2">

            <h3 class="text-white">Links</h3>

            <hr class="border border-white">

            <ul class="navbar-nav" id="leftNav">


                <li class="nav-item">
                    <a href="?v=inicioA" class="nav-link px-2 linkDark3Hover rounded bg-darck2 text-white" onclick="link(this)"> &xrarr;  Home</a>
                </li>
                
                <li class="nav-item">
                    <a href="?v=listar" class="nav-link px-2 linkDark3Hover rounded bg-darck2 text-white" onclick="link(this)">  Usuarios</a>
                </li>

                <li class="nav-item">
                    <a href="?v=listarP" class="nav-link px-2 linkDark3Hover rounded bg-darck2 text-white" onclick="link(this)">  Proveedores</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link px-2 linkDark3Hover rounded bg-darck2 text-white" onclick="link(this)">  Informacion</a>
                </li>

            </ul>

        </div>

        <div class="w-80 float-right">

            <?php include $body; /* &xrarr; */  ?>

        </div>


    </div>

    <div class="w-80 float-right">

        <div class="w-75 mx-auto rounded-top navbar bg-dark">

            <h6 class="w-100 mt-2 text-center text-light"> &copy; <?php echo date('Y'); ?> Santiago Urrego Uribe</h6>
        
        </div>

    </div>


    <script>

        const link = _ => {
            
            const links = document.getElementById('leftNav').querySelectorAll('a'),
            len = links.length
            
            for (let i = 0; i < len; i++) links[i].innerHTML = links[i].innerHTML.replace(/\⟶ /, '')
            _.innerHTML = '&xrarr; ' + _.innerHTML
        }

    </script>

</body>
</html>