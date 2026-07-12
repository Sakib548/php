<?php 

$basic_url = "/websites/demo/2.dynamic_web_app/2.4.PHP_Router/" ;

function dd($value){
    echo "<pre>";

      var_dump($value) ;
   echo "</pre>"  ;       

die();
}


function base_path($path) {
    return __DIR__ . '/' . $path;
}

?>