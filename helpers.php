<?php

/**
 *  Get the base path
 * @param  string $path
 * @return string
 */

 function base_path($path = '') {
    return __DIR__ . '/'. $path;
}



/**
 * Load a view
 * 
 * @param  string $name
 * @return void
 * 
 */

 function loadView($name) { 


    $viewPath= base_path('views/'. $name. '.view.php');

    if(file_exists($viewPath) ) {
        require $viewPath;
    } else {
        die('View not found');
    }

 }




 /**
 * Load a partial
 * 
 * @param  string $name
 * @return void
 * 
 */

 function loadPartial($name) { 
    
    $partialPath= base_path('views/partials/'. $name. '.php');

    if(file_exists($partialPath) ) {   
      require $partialPath;
    } else {
        die('Partial not found');
    }

 }



 /**
  * 
  * @param  mixed $value
  * @return void
  */

   function inspect($value) {
       echo '<pre>';
       var_dump($value);
       echo '</pre>';
      
   }




 /**
  * 
  * Inspect and die
  * @return void
  */

  function inspectAndDie($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
   
}