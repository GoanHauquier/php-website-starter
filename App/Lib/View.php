<?php namespace App\Lib;


abstract class View
{
    protected function createPage($view, $data, string $title = 'Page title', string $desc = 'Page description')
    {
        $wrapper = 'Src/Templates/pageWrap.php';
        $data['view'] = $view;
        $data['pageTitle'] = $title;
        $data['pageDescription'] = $desc;
        
        // Extract the variables to a local namespace
        extract($data);

        // Start output buffering
        ob_start();

        // Include the template file
        include $wrapper;

        // End buffering and return its contents
        $output = ob_get_clean();
       
        echo $output;
    }
}
?>