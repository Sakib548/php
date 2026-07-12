<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$routes = [
    '/websites/demo/2.dynamic_web_app/2.5.MySql/' => 'controllers/index.php',
    '/websites/demo/2.dynamic_web_app/2.5.MySql/about' => 'controllers/about.php',
    '/websites/demo/2.dynamic_web_app/2.5.MySql/contact' => 'controllers/contact.php'
];


function abort(){
    http_response_code(404);
 
    require "views/error.view.php";
    die();
}



function routeToController($uri,$routes){
   // Check if the current URI exists in our routes
   if (array_key_exists($uri, $routes)) {
      require $routes[$uri];
   } else {
      // Optional: Simple 404 handling if route isn't found
      abort();
   }
}

routeToController($uri,$routes);

?>