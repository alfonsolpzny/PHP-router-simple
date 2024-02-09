<?php

require_once __DIR__ . '/router.php';

//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//%%%%%%%%%%%%%%%%%%%%%%%% Rutas GET %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// Static GET
// In the URL -> http://localhost
//Page to sign in
get('/', 'views/index.php');
get('/index', 'views/index.php');

//Page to authenticate
post('/authenticate', 'views/autheticate.php');

//Page to register as new user
get('/signup', 'views/signup.php');
post('/signup', 'views/signup.php');

//Page to go home principal page
get('/home', 'views/home.php');

//page to close session
get('/logout', 'views/logout.php');

//Page template (for test)
get('/template', 'views/template.php');



// //Pagina Home
// // http://localhost/home
// get('/home', 'views/home.php');

// //Pagina Home
// // http://localhost/profile
// get('/profile', 'views/profile.php');

// //Pagina para cambiar la contraseña
// // http://localhost/contrasena
// get('/contrasena', 'views/contrasena.php');


// //#############################################################
// //rutas de pruebas GET
// //#############################################################

// //Pagina de pruebas
// // http://localhost/test
// get('/test', 'views/test.php');

// //Pagina para ver las plantillas del HTML
// // http://localhost/userlist
// get('/template', 'views/template.php');
// get('/templatepool', 'views/template_pool.php');




// //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// //%%%%%%%%%%%%%%%%%%%%%%%% Rutas POST %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


// //#############################################################
// //Rutas estandar para todos los usuarios
// //#############################################################
// //Metodo que envia el formulatio para autenticarse
// post('/index', 'views/index.php');
// post('/', 'views/index.php');

// //Pagina para cambiar la contraseña
// post('/contrasena', 'views/contrasena.php');

// //Pagina para autenticar a un inicio de session
// post('/authenticate', 'views/authenticate.php');

//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//%%%%%%%%%%%%%%%%%%%%%%%%% Ruta 404 %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'views/404.php');

//##########################################################
