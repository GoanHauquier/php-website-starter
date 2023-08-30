<?php namespace App\Modules\Error\View;
      
use App\Lib\View;

class ErrorView extends View
{
    function __construct($data = []) 
    {
        $view = 'Src/Templates/Modules/Error/error.php';
        // in case of an error we want to set the response code to 404
        http_response_code(404);
        $this->createPage($view, $data, '404', 'Pagina niet gevonden!');
    }
}
?>