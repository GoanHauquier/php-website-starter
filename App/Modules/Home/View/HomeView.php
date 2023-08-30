<?php namespace App\Modules\Home\View;
      
use App\Lib\View;

class HomeView extends View
{
    function __construct($data = []) 
    {
        $view = 'Src/Templates/Modules/Home/home.php';
        $this->createPage($view, $data);
    }
}
?>