<?php namespace App\Modules\Info\View;
      
use App\Lib\View;

class InfoView extends View
{
    function __construct($data = []) 
    {
        $view = 'Src/Templates/Modules/Info/info.php';
        $this->createPage($view, $data);
    }
}
?>